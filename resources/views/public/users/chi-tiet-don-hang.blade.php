@extends('layouts.user-master')

@section('content')
<div class="container">
    <div class="card my-4">
        <div class="card-header custom-bg">
            <h4>Thông tin nhận hàng</h4>
        </div>
        <div class="card-body">
            <p><i class="fas fa-user"></i> <span class="mx-2">{{$donHang->khach_hang_ten_dang_nhap}}</span></p>
            <p><i class="fas fa-phone"></i><span class="mx-2">{{$donHang->so_dien_thoai}}</span></p>
            <p><i class="fas fa-map-marked"></i> <span class="mx-2">{{$donHang->dia_chi}}</span></p>
        </div>
    </div>
    <div class="order-product mb-4">
        <h4 class="my-4 p-4 custom-bg">Thông tin đặt hàng</h4>
        <table class="table">
        <thead>
        <tr>
            <th scope="col">Tên sách</th>
            <th scope="col" width="150">Giá</th>
            <th scope="col" width="100">Số lượng</th>
            <th scope="col" width="150">Tổng cộng</th>
        </tr>
        </thead>
        <tbody>
        @php
            $tongTienSanPham = 0;
        @endphp
        @foreach($chiTietDonHang as $ctDonHang)
        @php
            $tongTienSanPham += $ctDonHang->gia * $ctDonHang->so_luong;
        @endphp
        <tr>
          <td>{{$ctDonHang->sach->ten_sach}}</td>
          <td>{{number_format($ctDonHang->gia, 0, ',', '.')}} VNĐ</td>
          <td>{{$ctDonHang->so_luong}}</td>
          <td>{{number_format($ctDonHang->gia * $ctDonHang->so_luong, 0, ',', '.')}} VNĐ</td>
        </tr>
        @endforeach
        @php
            $chiPhiVanChuyen = $donHang->tong_tien_thanh_toan - $tongTienSanPham;
        @endphp
        <tr>
            <td colspan="3" class="text-right"><strong>Chi phí vận chuyển</strong></td>
            <td class="nowrap"><span style="font-weight: bold; font-size: 1em; color: red; background-color: yellow;">{{number_format($chiPhiVanChuyen, 0, ',', '.')}} VNĐ</span></td>
        </tr>
        <tr>
            <td colspan="3" class="text-right"><strong>Thành tiền</strong></td>
            <td class="nowrap"><span style="font-weight: bold; font-size: 1.2em; color: red; background-color: yellow;">{{number_format($donHang->tong_tien_thanh_toan, 0, ',', '.')}} VNĐ</span></td>
        </tr>
        </tbody>
        </table>
    </div>
</div>

<style>
    .nowrap {
        white-space: nowrap;
    }
</style>
@endsection
