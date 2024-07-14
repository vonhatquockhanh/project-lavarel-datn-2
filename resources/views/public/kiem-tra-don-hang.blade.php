@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="my-4 p-3 custom-bg"><h4 class="m-0">Kiểm tra đơn hàng</h4></div>
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-product">
                    <h4><a href="{{route('gioHang')}}" title="Back to cart" class=""><i class="fas fa-shopping-basket" ></i></a> Đơn hàng của bạn</h4>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Tên sách</th>
                            <th scope="col" width="90" class="text-center">Số lượng</th>
                            <!-- <th scope="col" width="110" class="text-center">Khối lượng</th> -->
                            <th scope="col" width="150" class="text-center">Giá</th>
                            <th scope="col" width="150" class="text-center">Tổng tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(Cart::content() as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td class="text-center">{{$item->qty}}</td>
                            <!-- <td class="text-center">{{$item->weight}}</td> -->
                            <td class="text-center">{{number_format($item->price, 0, ',', '.')}} VNĐ</td>
                            <td class="text-center">{{number_format($item->subtotal(), 0, ',', '.')}} VNĐ</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="billing-address my-4">
                    <div class="p-3 bg-light my-4 custom-bg"><h4 class="m-0">Thông tin nhận hàng và thanh toán</h4></div>

                    <form id="checkoutForm" action="{{route('gioHang.thucThi')}}" method="post">
                        @csrf
                        <div id="alert-container"></div>
                        <div class="form-group">
                            <label for="khach_hang_ten_dang_nhap">Tên người nhận <span class="text-danger">*</span></label>
                            <input type="text" name="khach_hang_ten_dang_nhap" class="form-control {{$errors->has('khach_hang_ten_dang_nhap')? 'is-invalid' : ''}}" value="{{Auth::user()? Auth::user()->name : ''}}" >

                            @if($errors->has('khach_hang_ten_dang_nhap'))
                                <span class="invalid-feedback"><strong>{{$errors->first('khach_hang_ten_dang_nhap')}}</strong></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="so_dien_thoai">Số điện thoại <span class="text-danger">*</span></label>
                            <input type="text" name="so_dien_thoai" class="form-control {{$errors->has('so_dien_thoai') ? 'is-invalid': ''}}" >

                            @if($errors->has('so_dien_thoai'))
                                <span class="invalid-feedback">
                                    <strong>{{$errors->first('so_dien_thoai')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="khu_vuc_van_chuyen" class="label-inline">Khu vực vận chuyển <span class="text-danger">*</span></label>
                            <select id="khu_vuc_van_chuyen" name="khu_vuc_van_chuyen" class="form-control inline-select">
                                <option value="">Chọn khu vực</option>
                                @foreach($khuVucVanChuyensWithPhi as $khuVuc)
                                    <option value="{{$khuVuc->id}}" data-phi="{{$khuVuc->phiVanChuyen->first()->phi_van_chuyen}}">{{$khuVuc->ten_khu_vuc}}</option>
                                @endforeach
                            </select>
                            <label for="phuong_thuc_thanh_toan" class="label-inline">Phương thức thanh toán <span class="text-danger">*</span></label>
                            <select id="phuong_thuc_thanh_toan" name="phuong_thuc_thanh_toan" class="form-control inline-select">
                                <option value="">Chọn phương thức</option>
                                <option value="Tiền mặt">Tiền mặt</option>
                                <option value="Chuyển khoản">Chuyển khoản</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dia_chi">Địa chỉ giao hàng <span class="text-danger">*</span></label>
                            <textarea name="dia_chi" class="form-control {{$errors->has('dia_chi')? 'is-invalid' : ''}}" cols="30" rows="5">{{Auth::user()? Auth::user()->address : ''}}</textarea>
                            @if($errors->has('dia_chi'))
                                <span class="invalid-feedback">
                                    <strong>{{$errors->first('dia_chi')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="ghi_chu">Ghi chú</label>
                            <textarea name="ghi_chu" class="form-control {{$errors->has('ghi_chu')? 'is-invalid' : ''}}" cols="30" rows="5"></textarea>
                            @if($errors->has('ghi_chu'))
                                <span class="invalid-feedback">
                                    <strong>{{$errors->first('ghi_chu')}}</strong>
                                </span>
                            @endif
                        </div>

                        <input type="button" value="Xác nhận thanh toán" class="btn btn-danger btn-sm" onclick="validateForm()">
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart-summary my-3">
                    <div class="card">
                        <div class="card-header custom-bg">
                            <h4>Thành tiền</h4>
                        </div>
                        <div class="card-body">
                            <p>Tổng số sản phẩm = <strong>{{Cart::content()->sum('qty')}}</strong></p>
                            <p>Tổng tiền = <strong><span id="chi_phi_san_pham">{{number_format(Cart::total(), 0, ',', '.')}} VNĐ</span></strong></p>
                            <p>Phí vận chuyển = <span id="phi_van_chuyen" style="font-weight: bold; font-size: 1em; color: red; background-color: yellow;">0.00 VNĐ</span></p>
                            <p><strong>Thành tiền =  <span style="font-weight: bold; font-size: 1.2em; color: red; background-color: yellow;" id="tong_chi_phi">{{number_format(Cart::total(), 0, ',', '.')}} VNĐ
                            </span></strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Xác nhận thanh toán</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Bạn đã kiểm tra đầy đủ thông tin và xác nhận thanh toán?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                    <button type="button" class="btn btn-success" onclick="submitForm()">Đồng ý</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var tenDangNhap = document.getElementsByName('khach_hang_ten_dang_nhap')[0].value;
            var soDienThoai = document.getElementsByName('so_dien_thoai')[0].value;
            var diaChi = document.getElementsByName('dia_chi')[0].value;
            var khuVucVanChuyen = document.getElementById('khu_vuc_van_chuyen').selectedIndex;
            var phuongThucThanhToan = document.getElementById('phuong_thuc_thanh_toan').selectedIndex;

            if (tenDangNhap === "" || soDienThoai === "" || diaChi === "" || khuVucVanChuyen <= 0 || phuongThucThanhToan <= 0) {
                var alertContainer = document.getElementById('alert-container');
                alertContainer.innerHTML = '<div class="alert alert-danger" role="alert">Vui lòng điền đầy đủ thông tin.</div>';
                return false;
            } else {
                $('#confirmModal').modal('show');
            }
        }

        function submitForm() {
            document.getElementById('checkoutForm').submit();
        }

        document.getElementById('khu_vuc_van_chuyen').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var phiVanChuyen = parseFloat(selectedOption.getAttribute('data-phi')) || 0;
            var chiPhiSanPham = {{ Cart::total() }};

            var formatter = new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND'
            });

            document.getElementById('phi_van_chuyen').innerHTML = '<span style="font-weight: bold; font-size: 1em; color: red; background-color: yellow;">' + formatter.format(phiVanChuyen) + '</span>';
            document.getElementById('tong_chi_phi').innerHTML = '<span style="font-weight: bold; font-size: 1.2em; color: red; background-color: yellow;">' + formatter.format(chiPhiSanPham + phiVanChuyen) + '</span>';
        });
    </script>
@endsection
