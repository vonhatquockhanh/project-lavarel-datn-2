@extends('layouts.user-master')

@section('content')
   <div class="container">
       @include('layouts.includes.flash-message')
       <h4 class="my-4 p-4 custom-bg">Danh sách đơn hàng của bạn</h4>

       @if($donHangCuaToi->count())
       <table class="table table-bordered table-striped mb-4">
       <thead>
       <tr class="text-center">
         <th>ID Đơn hàng</th>
         <th scope="col">Phương thức thanh toán</th>
         <th scope="col">Tổng tiền thanh toán</th>
         <th scope="col">Trạng thái đơn hàng</th>
         <th scope="col">Đã nhận được hàng</th>
         <th scope="col">Hành động</th>
       </tr>
       </thead>
        <tbody>
        @foreach($donHangCuaToi as $donHang)
           <tr class="text-center">
               <td>{{$donHang->id}}</td>
               <td>
                   @if($donHang->phuong_thuc_thanh_toan == 1)
                        Tiền mặt
                   @else
                        Chuyển khoản
                   @endif
               </td>
               <td><span style="font-weight: bold; font-size: 1.2em; color: red; background-color: yellow;" id="tong_chi_phi">{{number_format($donHang->tong_tien_thanh_toan, 0, ',', '.')}} VNĐ</span></td>
               <td>
                   @switch($donHang->trang_thai)
                       @case(1)
                           <span class="badge badge-warning badge-large">Đang chờ xử lý</span>
                           @break
                       @case(2)
                           <span class="badge badge-info badge-large">Đang giao hàng</span>
                           @break
                       @case(3)
                           <span class="badge badge-success badge-large">Hoàn thành</span>
                           @break
                       @case(4)
                           <span class="badge badge-danger badge-large">Đã hủy</span>
                           @break
                   @endswitch
               </td>
               <td>
               @if($donHang->trang_thai == 2)
                    <button class="btn btn-success da-nhan-hang-button" data-id="{{ $donHang->id }}" 
                        @if($donHang->trang_thai_thanh_toan == 1) 
                            disabled 
                        @endif
                    >Đã nhận hàng</button>
                @else
                    <button class="btn btn-success da-nhan-hang-button" disabled>Đã nhận hàng</button>
                @endif
               </td>
               <td><a href="{{route('user.chi-tiet-don-hang', $donHang->id)}}" class="btn btn-primary btn-sm">Xem Chi tiết</a></td>
           </tr>
        @endforeach
        </tbody>
       </table>
       @else
           <div class="alert alert-warning">Bạn không có đơn đặt hàng.</div>
       @endif
   </div>

   <style>
       .badge-large {
           font-size: 1.2em;
           padding: 0.5em 1em;
       }
       .da-nhan-hang-button {
           font-size: 1em;
           padding: 0.5em 1em;
       }
       .text-center {
           text-align: center;
       }
   </style>

   <script>
       document.addEventListener('DOMContentLoaded', function () {
           var buttons = document.querySelectorAll('.da-nhan-hang-button');
           buttons.forEach(function (button) {
               button.addEventListener('click', function () {
                   var orderId = this.getAttribute('data-id');
                   window.location.href = `don-hang/cap-nhat-trang-thai-don-hang/${orderId}`; // Chuyển trạng thái thành 3 (Đã nhận hàng)
               });
           });
       });
   </script>
@endsection
