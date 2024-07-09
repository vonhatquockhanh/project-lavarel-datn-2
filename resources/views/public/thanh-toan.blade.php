@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="payment-area">
            <h4 class="my-4 p-3 custom-bg">Thực hiện thanh toán của bạn</h4>

            <div class="cart-summary my-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Tóm tắt đơn hàng</h4>
                    </div>
                    <div class="card-body">
                        <p>Tổng số sản phẩm = {{Cart::content()->count()}}</p>
                        <p>Chi phí sản phẩm  = {{Cart::total()}} TK</p>
                        <p>Chi phí vận chuyển = 0.00 TK</p>
                        <p><strong>Tổng chi phí = {{Cart::total()}} TK</strong></p>
                    </div>
                </div>
            </div>

            <!-- <div class="bg-light p-3 my-4">
                <form action="{{route('cart.checkout.pay')}}" method="post">
                    @csrf
                    <input type="hidden" name="cart_total" value="{{Cart::total()}}">
                    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="pk_test_7xVvmxzKaoeFzuBZZ18WdwKy00bmfx80CA"
                            data-amount=""
                            data-name="Bookshop"
                            data-description="Bookshop payment"
                            data-locale="auto">
                    </script>
                </form>
            </div> -->
            <div class="bg-light p-3 my-4">
                <button class="btn btn-success btn-sm"><strong>Thanh toán khi giao hàng</strong></button>
            </div>
        </div>
    </div>
@endsection
