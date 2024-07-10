@extends('layouts.master')
@section('title')
    Giỏ hàng
@endsection

@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header custom-card-bg text-white">
                <h4><i class="fas fa-shopping-cart"></i> Giỏ hàng</h4>
            </div>
            <div class="card-body">
                @include('layouts.includes.flash-message')
                @if(Cart::content()->count())
                <table class="table table-borderless">
                <thead class="bg-light">
                <tr>
                  <th></th>
                  <th scope="col" width="100">Hình ảnh</th>
                  <th scope="col">Tên sách</th>
                  <th scope="col" width="150">Giá</th>
                  <th scope="col" width="100">Số lượng</th>
                  <th scope="col" width="150">Tổng cộng</th>
                </tr>
                </thead>
                    @foreach(Cart::content() as $item)
                    <tbody>
                    <tr class="border-bottom">
                    <td><a href="{{route('gioHang.xoa' ,['id' => $item->rowId])}}" class="text-danger" title="Remove cart item"><i class="fas fa-times"></i></a></td>

                    <td><img src="{{asset('assets/img/'.$item->options->image)}}" alt="" width="50"></td>

                    <td>{{$item->name}}</td>

                    <td>{{number_format($item->price, 0, ',', '.')}} VNĐ</td>

                    <td>
                    <span class="quantity-input mr-2 mb-2 d-flex flex-row">
                        <a href="{{route('gioHang.giamDan', ['id' => $item->rowId, 'qty' => $item->qty])}}" class="cart-minus">-</a>
                        <input title="QTY" name="quantity" type="text" value="{{$item->qty}}" class="qty-text">
                        <a href="{{route('gioHang.tangDan', ['id' => $item->rowId, 'qty' => $item->qty, 'sach_id'=> $item->id])}}" class="cart-plus">+</a>
                    </span>
                    </td>

                      <!-- <td>{{$item->weight}} gram</td> -->

                      <td>{{number_format($item->subtotal(), 0, ',', '.')}} VNĐ</td>
                    </tr>
                    </tbody>
                    @endforeach
                <tbody>
                    <tr>
                        <td colspan="4"><a href="{{route('tatCaSach')}}" class="text-primary">Tiếp tục mua sắm</a></td>
                        <td><strong>Tổng cộng</strong></td>
                        <td>
                            <span style="font-weight: bold; font-size: 1.2em; color: red; background-color: yellow;">
                                {{ number_format(Cart::total(), 0, ',', '.') }} VNĐ
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                        <td colspan="2">
                        <a href="{{route('gioHang.xacNhanThanhToan')}}" class="btn btn-outline-danger btn-sm">Thủ tục thanh toán <i class="fas fa-long-arrow-alt-right"></i></a>
                        </td>
                    </tr>
                </tbody>
                </table>
                @else
                    <div class="alert alert-warning">Không tìm thấy mặt hàng nào trong giỏ hàng. <a href="{{route('tatCaSach')}}"> Tiếp tục mua sắm</a></div>
                @endif
            </div>
        </div>
    </div>
@endsection
