@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="my-4 p-3 custom-bg"><h4 class="m-0">Xác nhận thanh toán</h4></div>
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-product">
                    <h4><a href="{{route('gioHang')}}" title="Back to cart" class=""><i class="fas fa-shopping-basket" ></i></a> Đơn hàng của bạn</h4>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Tên sách</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Khối lượng</th>
                            <th scope="col">Price</th>
                            <th scope="col">Tổng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(Cart::content() as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->qty}}</td>
                            <td>{{$item->weight}}</td>
                            <td>{{$item->price}} VNĐ</td>
                            <td>{{$item->subtotal()}} VNĐ</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="billing-address my-4">
                    <div class="p-3 bg-light my-4 custom-bg"><h4 class="m-0">Địa chỉ thanh toán</h4></div>

                    <form action="{{route('cart.proceed')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="shipping_name" class="form-control {{$errors->has('shipping_name')? 'is-invalid' : ''}}" value="{{Auth::user()? Auth::user()->name : ''}}" placeholder="Tên người nhận">

                            @if($errors->has('shipping_name'))
                                <span class="invalid-feedback"><strong>{{$errors->first('shipping_name')}}</strong></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="mobile_no" class="form-control {{$errors->has('mobile_no') ? 'is-invalid': ''}}" placeholder="Số điện thoại">

                            @if($errors->has('mobile_no'))
                                <span class="invalid-feedback">
                                    <strong>{{$errors->first('mobile_no')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <textarea name="address" class="form-control {{$errors->has('address')? 'is-invalid' : ''}}" placeholder="Địa chỉ giao hàng" cols="30" rows="5"></textarea>
                            @if($errors->has('address'))
                                <span class="invalid-feedback">
                                    <strong>{{$errors->first('address')}}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="payment-area my-4 py-5 px-3 bg-light">
                            <input type="submit" value="Thanh toán" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart-summary my-3">
                    <div class="card">
                        <div class="card-header custom-bg">
                            <h4>Tóm tắt đơn hàng</h4>
                        </div>
                        <div class="card-body">
                            <p>Tổng số sản phẩm = {{Cart::content()->count()}}</p>
                            <p>Chi phí sản phẩm = {{Cart::total()}} VNĐ</p>
                            <p>Chi phí vận chuyển = 0 VNĐ</p>
                            <p><strong>Tổng chi phí = {{Cart::total()}} VNĐ</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
