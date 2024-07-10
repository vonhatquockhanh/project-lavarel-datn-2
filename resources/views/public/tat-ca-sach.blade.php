@extends('layouts.master')
@section('title')
    Tất cả sách
@endsection
@php
    use Illuminate\Support\Str;
@endphp

@section('content')
    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
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
                                            <div class="col-lg-3 col-6">
                                                <div class="book-wrap">
                                                    <div class="book-image mb-2">
                                                        <a href="{{route('chi-tiet-sach', $sach->id)}}"><img src="{{$sach->image_url}}" alt=""></a>
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
                                                   

                                                    <div class="pbook-price mb-3">                                                         
                                                        <div class="book-price mb-2">
                                                            <span class="mr-1">Giá gốc: </span>
                                                            @if($sach->gia_goc - $sach->gia > 0)
                                                                <span></span><strong class="line-through">{{number_format($sach->gia_goc, 0, ',', '.')}} VNĐ</strong>
                                                            @endif
                                                                <br><span>Giá: </span><strong class="text-danger"> {{number_format($sach->gia, 0, ',', '.')}} VNĐ</strong>
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
                @include('layouts.includes.side-bar')
                <!-- Sidebar end -->
                </div>
        </div>
    </section>
@endsection
