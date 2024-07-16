@extends('layouts.master')
@section('title')
    Trang chủ
@endsection

@php
    use Illuminate\Support\Str;
@endphp

@section('content')
    <section class="welcome-area">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slider-img">
                        <img src="{{ asset('assets/img/slider-image-3.jpg') }}" class="img-fluid" alt="Slider Image 1">
                    </div>
                    <div class="carousel-caption">
                        <!-- Your caption here -->
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-img">
                        <img src="{{ asset('assets/img/slider-image-2.jpg') }}" class="img-fluid" alt="Slider Image 2">
                    </div>
                    <div class="carousel-caption">
                        <!-- Your caption here -->
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-img">
                        <img src="{{ asset('assets/img/slider-image-1.jpg') }}" class="img-fluid" alt="Slider Image 3">
                    </div>
                    <div class="carousel-caption">
                        <!-- Your caption here -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container-fluid d-flex justify-content-center">
            <div class="row flex-grow-1 w-100">
                <!-- <div class="col-md-3 sidebar"> -->
                    @include('layouts.includes.side-bar')
                <!-- </div> -->
                <div class="col-md-8 content-area">
                    @foreach ($sach_theo_loai as $slug => $sach)
                        <div class="card my-4">
                            <div class="card-header bg-dark">
                                <h4><a href="{{route('loaiSach', $slug)}}" class="text-white">{{$loai_sach->where('slug', $slug)->first()->ten_loai_sach}}</a></h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @if(! $sach->count())
                                        <div class="alert alert-warning">Không tìm thấy sách trong danh mục được chọn</div>
                                    @else
                                        @foreach($sach as $sach_item)
                                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 d-flex">
                                                <div class="book-wrap flex-grow-1 d-flex flex-column">
                                                    <div class="book-image mb-2">
                                                        <a href="{{route('chi-tiet-sach', $sach_item->id)}}">
                                                            <img src="{{$sach_item->image_url}}" alt="" class="img-fluid book-img">
                                                        </a>
                                                    </div>
                                                    <div class="book-title mb-2">
                                                        <a href="{{route('chi-tiet-sach', $sach_item->id)}}">{{Str::limit($sach_item->ten_sach, 30)}}</a>
                                                    </div>
                                                    <div class="book-author mb-2">
                                                        <span>Tác giả <a href="{{route('tacGia', $sach_item->tacGia->id)}}">{{$sach_item->tacGia->ten_tac_gia}}</a></span>
                                                    </div>
                                                    <div class="pbook-price mt-auto mb-3">
                                                        <div class="book-price mb-2">
                                                            @if($sach_item->gia_goc - $sach_item->gia != 0)
                                                            <span class="mr-1">Giá gốc: </span>
                                                            @endif
                                                            @if($sach_item->gia_goc - $sach_item->gia > 0)
                                                                <span class="line-through">{{number_format($sach_item->gia_goc, 0, ',', '.')}} VNĐ</span>
                                                            @endif
                                                            <br><span>Giá: </span><span class="text-danger">{{number_format($sach_item->gia, 0, ',', '.')}} VNĐ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="show-more pt-2 text-right">
                                    <a href="{{route('loaiSach', $slug)}}" class="text-secondary">Xem thêm <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
