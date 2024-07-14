<?php

namespace App\Http\Controllers;

use App\Models\Sach;
use App\Models\GioHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;

class GioHangController extends Controller
{
    public function them(Request $request)
    {
        $sach = Sach::findOrFail($request->sach_id);

        $soLuongTrongGioHang = 0;
        $tongSoLuongBanDau = $sach->so_luong;

        if (Auth::check()) {
            // Nếu người dùng đã đăng nhập, lấy số lượng từ giỏ hàng của người dùng
            $gioHang = GioHang::where('user_id', Auth::user()->id)
                            ->where('sach_id', $sach->id)
                            ->first();
            if ($gioHang) {
                $soLuongTrongGioHang = $gioHang->so_luong;
            }
        } else {
            // Nếu người dùng chưa đăng nhập, lấy số lượng từ session Cart
            $cartItems = Cart::content();
            foreach ($cartItems as $item) {
                if ($item->id == $sach->id) {
                    $soLuongTrongGioHang = $item->qty;
                    break;
                }
            }
        }

        // Tổng số lượng yêu cầu là số lượng trong giỏ hàng hiện tại cộng với số lượng mới yêu cầu
        $tongSoLuongYeuCau = $soLuongTrongGioHang + $request->so_luong;

        // Kiểm tra nếu tổng số lượng yêu cầu không vượt quá tổng số lượng ban đầu
        if ($tongSoLuongBanDau >= $tongSoLuongYeuCau) {
            if ($request->so_luong >= 1) {
                if (Auth::check()) {
                    // Nếu người dùng đã đăng nhập
                    $gioHang = GioHang::updateOrCreate(
                        [
                            'user_id' => Auth::user()->id,
                            'sach_id' => $sach->id
                        ],
                        [
                            'so_luong' => $tongSoLuongYeuCau,
                            'gia' => $sach->gia,
                            'so_luong_ton' => $tongSoLuongBanDau - $tongSoLuongYeuCau,
                            'user_id' => Auth::user()->id,
                        ]
                    );

                    $this->capNhatGioHangVaoDatabase();
                } else {
                    // Nếu người dùng chưa đăng nhập, kiểm tra xem sản phẩm đã tồn tại trong session Cart hay chưa
                    $cartItem = Cart::search(function ($cartItem, $rowId) use ($sach) {
                        return $cartItem->id === $sach->id;
                    })->first();

                    if ($cartItem) {
                        // Sản phẩm đã tồn tại, cập nhật số lượng
                        Cart::update($cartItem->rowId, ['qty' => $tongSoLuongYeuCau]);
                    } else {
                        // Sản phẩm chưa tồn tại, thêm mới
                        Cart::add($sach->id, $sach->ten_sach, $request->so_luong, $sach->gia, 0, [
                            'image' => $sach->hinhAnh->url,
                            'so_luong_ton' => $tongSoLuongBanDau - $tongSoLuongYeuCau
                        ]);
                    }
                }

                // Cập nhật lại số lượng tồn kho của sản phẩm
                $sach->so_luong = $tongSoLuongBanDau - $tongSoLuongYeuCau;
                $sach->save();

                return redirect()->back();
            } else {
                return redirect()->back()
                    ->with('giohang_alert', "Số lượng phải lớn hơn 0");
            }
        } else {
            $message = "Số lượng mua vượt quá số lượng tồn kho.";
            return redirect()->back()
                ->with('giohang_alert', $message);
        }
    }


    public function gioHang()
    {
        if (Auth::check()) {
            $this->capNhatGioHangVaoDatabase();

            $gioHang = Cart::content()->map(function($item) {
                return [
                    'id' => $item->rowId, // rowId của CartItem để làm id
                    'name' => $item->name,
                    'price' => $item->price,
                    'qty' => $item->qty,
                    'weight' => $item->weight,
                    'options' => $item->options->toArray()
                ];
            })->values()->toArray(); // Chuyển đổi sang mảng
        } else {
            $gioHang = Cart::content()->map(function($item) {
                return [
                    'id' => $item->rowId, // rowId của CartItem để làm id
                    'name' => $item->name,
                    'price' => $item->price,
                    'qty' => $item->qty,
                    'weight' => $item->weight,
                    'options' => $item->options->toArray()
                ];
            })->values()->toArray(); // Chuyển đổi sang mảng
        }

        return view('public.gio-hang', compact('gioHang'));
    }

    public function capNhatGioHangVaoDatabase()
    {
        $gioHangItems = GioHang::with('sach.hinhAnh')->where('user_id', Auth::user()->id)->get();

        Cart::destroy(); // Xóa giỏ hàng hiện tại trong session

        foreach ($gioHangItems as $item) {
            $sach = $item->sach;
            Cart::add([
                'id' => $sach->id,
                'name' => $sach->ten_sach,
                'price' => $sach->gia,
                'qty' => $item->so_luong,
                'weight' => $sach->can_nang,
                'options' => [
                    'image' => $sach->hinhAnh->url,
                    'so_luong_ton' => $sach->so_luong
                ]
            ]);
        }
    }

    public function xoa(Request $request)
    {
        $rowId = $request->input('id');
        
        if (Auth::check()) {
            // Lấy sản phẩm khỏi thư viện Cart
            $item = Cart::get($rowId);

            if ($item) {
                // Tăng số lượng tồn kho của sản phẩm tương ứng
                $sach = Sach::findOrFail($item->id);
                $sach->so_luong += $item->qty;
                $sach->save();
                
                // Xóa sản phẩm khỏi giỏ hàng trong database
                $gioHang = GioHang::where('user_id', Auth::user()->id)
                                ->where('sach_id', $item->id)
                                ->first();
                if ($gioHang) {
                    $gioHang->delete();
                }

                // Xóa sản phẩm khỏi thư viện Cart
                Cart::remove($rowId);
            }

            $this->capNhatGioHangVaoDatabase();
        } else {
            // Xóa sản phẩm khỏi session Cart
            $item = Cart::get($rowId);
            if ($item) {
                // Tăng số lượng tồn kho của sản phẩm tương ứng
                $sach = Sach::findOrFail($item->id);
                $sach->so_luong += $item->qty;
                $sach->save();

                Cart::remove($rowId);
            }
        }

        return response()->json(['success' => true]);
    }
    public function tangDan(Request $request)
    {
        $rowId = $request->input('id');
        $qty = $request->input('qty');
        
        // Lấy tổng số lượng ban đầu của sản phẩm
        $item = Cart::get($rowId);
        $sach = Sach::findOrFail($item->id);
        $tongSoLuongBanDau = $sach->so_luong + $item->qty;

        if (Auth::check()) {
            $item = Cart::get($rowId);
            if ($item) {
                $sach = Sach::findOrFail($item->id);
                $gioHang = GioHang::where('user_id', Auth::user()->id)
                                ->where('sach_id', $item->id)
                                ->first();

                if ($gioHang) {
                    $tongSoLuongYeuCau = $gioHang->so_luong + 1;

                    if ($tongSoLuongBanDau >= $tongSoLuongYeuCau) {
                        $gioHang->so_luong += 1;
                        $gioHang->save();

                        $sach->so_luong -= 1;
                        $sach->save();

                        Cart::update($rowId, $item->qty + 1);

                        return response()->json(['success' => true]);
                    } else {
                        return response()->json(['success' => false, 'message' => 'Số lượng vượt quá số lượng tồn kho']);
                    }
                }
            }
        } else {
            // Tăng số lượng trong session Cart
            $item = Cart::get($rowId);
            if ($item) {
                $sach = Sach::findOrFail($item->id);
                $tongSoLuongYeuCau = $item->qty + 1;

                if ($tongSoLuongBanDau >= $tongSoLuongYeuCau) {
                    Cart::update($rowId, $item->qty + 1);
                    
                    // Cập nhật số lượng tồn kho của sản phẩm
                    $sach->so_luong -= 1;
                    $sach->save();

                    return response()->json(['success' => true, 'current_qty' => $item->qty, 'attempted_qty' => $tongSoLuongYeuCau, 'stock' => $sach->so_luong]);
                } else {
                    return response()->json(['success' => false, 'message' => 'Số lượng vượt quá số lượng tồn kho']);
                }
            } else {
                // Debug thông tin khi không có item trong giỏ hàng session
                return response()->json(['success' => false, 'message' => 'Item không tồn tại trong giỏ hàng session', 'rowId' => $rowId]);
            }
        }

        return response()->json(['success' => false]);
    }


    public function giamDan(Request $request)
    {
        $rowId = $request->input('id');
        $qty = $request->input('qty');
    
        if (Auth::check()) {
            $item = Cart::get($rowId);
            if ($item) {
                $sach = Sach::findOrFail($item->id);
                $gioHang = GioHang::where('user_id', Auth::user()->id)
                                ->where('sach_id', $item->id)
                                ->first();
                if ($gioHang) {
                    if ($gioHang->so_luong > 1) {
                        $gioHang->so_luong -= 1;
                        $gioHang->save();
                        Cart::update($rowId, $item->qty - 1);
    
                        // Tăng số lượng tồn kho của sản phẩm
                        $sach->so_luong += 1;
                        $sach->save();
    
                        return response()->json(['success' => true, 'current_qty' => $item->qty - 1, 'stock' => $sach->so_luong]);
                    } else if ($gioHang->so_luong == 1) {
                        $gioHang->delete();
                        Cart::remove($rowId);
    
                        // Tăng số lượng tồn kho của sản phẩm
                        $sach->so_luong += 1;
                        $sach->save();
    
                        return response()->json(['success' => true, 'current_qty' => 0, 'stock' => $sach->so_luong]);
                    }
                }
            }
        } else {
            // Giảm số lượng trong session Cart
            $item = Cart::get($rowId);
            if ($item) {
                $sach = Sach::findOrFail($item->id);
                if ($item->qty > 1) {
                    Cart::update($rowId, $item->qty - 1);
    
                    // Tăng số lượng tồn kho của sản phẩm
                    $sach->so_luong += 1;
                    $sach->save();
    
                    return response()->json(['success' => true, 'current_qty' => $item->qty - 1, 'stock' => $sach->so_luong]);
                } else {
                    Cart::remove($rowId);
    
                    // Tăng số lượng tồn kho của sản phẩm
                    $sach->so_luong += 1;
                    $sach->save();
    
                    return response()->json(['success' => true, 'current_qty' => 0, 'stock' => $sach->so_luong]);
                }
            }
        }
    
        return response()->json(['success' => false, 'message' => 'Item không tồn tại trong giỏ hàng']);
    }
    

        public function saveGioHangVaoDatabase()
        {
            if (Auth::check()) {
                $cartItems = Cart::content();
                foreach ($cartItems as $item) {
                    $result = GioHang::updateOrCreate(
                        [
                            'user_id' => Auth::user()->id,
                            'sach_id' => $item->id
                        ],
                        [
                            'user_id' => Auth::user()->id,
                            'so_luong' => $item->qty,
                            'gia' => $item->price,
                            'so_luong_ton' => $item->options->so_luong_ton
                        ]
                    );
                }
                Cart::destroy(); // Xóa giỏ hàng trong session sau khi chuyển
            }
        }
    }
