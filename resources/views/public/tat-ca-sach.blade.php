@extends('layouts.master')
@section('title')
    Tất cả sách
@endsection
@php
    use Illuminate\Support\Str;
@endphp

@section('content')
    <section class="main-content">
        <div class="container-fluid d-flex justify-content-center">
            <div class="row flex-grow-1 d-flex justify-content-center">
                <div class="col-md-6 content-area">
                    <div class="content-area">
                        @if($term = request('term'))
                            <div class="alert alert-info my-3">
                                Tìm kiếm với từ khoá <strong>{{$term}}</strong>
                            </div>
                        @endif
                        @if(! $sachs->count())
                            <div class="alert alert-warning my-4">Không có sách nào được tìm thấy</div>
                        @else
                            <div class="card my-4">
                                <div class="card-header bg-dark">
                                    <h4 class="text-white">Tất cả sách</h4>
                                </div>
                                @if(isset($tenLoaiSach))
                                    <div class="alert alert-info m-3">
                                        Sách thuộc danh mục <strong>{{$tenLoaiSach}}</strong>
                                    </div>
                                @endif
                                @if(isset($tenTacGia))
                                    <div class="alert alert-info m-3">
                                        Tác giả <strong>{{$tenTacGia}}</strong>
                                    </div>
                                @endif
                                <!-- @if(isset($discountTitle))
                                    <div class="alert alert-info m-3">
                                        <strong>{{$discountTitle}}</strong>
                                    </div>
                                @endif -->
                                <div class="card-body">
                                    <div class="row">
                                        @foreach($sachs as $sach)
                                            <div class="col-lg-3 col-6 mb-4 d-flex">
                                                <div class="book-wrap flex-grow-1 d-flex flex-column">
                                                    <div class="book-image mb-2">
                                                        <a href="{{route('chi-tiet-sach', $sach->id)}}">
                                                            <img src="{{$sach->image_url}}" alt="" class="img-fluid book-img">
                                                        </a>
                                                        <!-- @if($sach->discount_rate)
                                                            <h6><span class="badge badge-warning discount-tag">Discount {{$sach->discount_rate}}%</span></h6>
                                                        @endif -->
                                                    </div>
                                                    <div class="book-title mb-2">
                                                        <a href="{{route('chi-tiet-sach', $sach->id)}}">{{Str::limit($sach->ten_sach, 30)}}</a>
                                                    </div>
                                                    <div class="book-author mb-2">
                                                        <small>Tác giả: <a href="{{route('tacGia', $sach->tacGia->id)}}">{{$sach->tacGia->ten_tac_gia}}</a></small>
                                                    </div>
                                                    <div class="pbook-price mt-auto mb-3">
                                                        <div class="book-price mb-2">
                                                            <span class="mr-1">Giá gốc: </span>
                                                            @if($sach->gia_goc - $sach->gia > 0)
                                                                <span class="line-through">{{number_format($sach->gia_goc, 0, ',', '.')}} VNĐ</span>
                                                            @endif
                                                            <br><span>Giá: </span><span class="text-danger">{{number_format($sach->gia, 0, ',', '.')}} VNĐ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="show-more pt-2 text-right">
                                        <nav class="pagination">
                                            {{$sachs->appends(request()->only(['term']))->render()}}
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <!-- Sidebar -->
                <!-- <div class="col-md-3"> -->
                    @include('layouts.includes.side-bar')
                <!-- </div> -->
                <!-- Sidebar end -->
            </div>
        </div>
    </section>
    <style>
        .book-wrap {
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 20px;
    transition: transform 0.3s, box-shadow 0.3s;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.book-wrap:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.book-image {
    height: 200px; /* Chiều cao cố định cho khung chứa hình ảnh */
    width: 100%; /* Chiều rộng 100% */
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden; /* Đảm bảo rằng hình ảnh không vượt quá khung */
    margin-bottom: 10px;
}

.book-image img {
    height: 100%; /* Chiều cao 100% để hình ảnh fit khung */
    width: auto; /* Đảm bảo hình ảnh không bị méo */
    object-fit: cover; /* Canh đều hình ảnh */
}

.book-title {
    flex-grow: 1;
}

.book-price {
    white-space: nowrap; /* Không xuống dòng cho phần giá tiền */
}

.line-through {
    text-decoration: line-through;
}

.text-danger {
    color: red;
}

.book-wrap .book-title a {
    font-size: 14px;
    color: #333;
    text-decoration: none;
}

.book-wrap .book-title a:hover {
    color: #007bff;
}

.book-wrap .book-author a {
    font-size: 12px;
    color: #007bff;
    text-decoration: none;
}

.book-wrap .book-author a:hover {
    text-decoration: underline;
}

.book-wrap .book-price {
    font-size: 16px;
    font-weight: bold;
}
    </style>
@endsection
