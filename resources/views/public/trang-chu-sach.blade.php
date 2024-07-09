@extends('layouts.master')
@section('title')
    Trang chủ
@endsection

@php
    use Illuminate\Support\Str;
@endphp


@section('content')
    <!-- Slider Area -->
    <!-- <section class="welcome-area">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slider-img slider-bg-1"></div>
                    <div class="carousel-caption">
                       
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-img slider-bg-2"></div>
                    <div class="carousel-caption">
                       
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-img slider-bg-3"></div>
                    <div class="carousel-caption">
                       
                    </div>
                </div>
            </div>
        </div>
    </section> -->
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
    <div class="container">
        <div class="row">
            <!-- Sidebar Content -->
            @include('layouts.includes.side-bar')
            <!-- //Sidebar End -->
            <div class="col-md-8">
                <div class="content-area">
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
                                            <div class="col-lg-3 col-6">
                                                <div class="book-wrap">
                                                    <div class="book-image mb-2">
                                                        <a href="{{route('chi-tiet-sach', $sach_item->id)}}"><img src="{{$sach_item->image_url}}" alt=""></a>
                    
                                                    </div>
                                                    <div class="book-title mb-2">
                                                        <a href="{{route('chi-tiet-sach', $sach_item->id)}}">{{Str::limit($sach_item->ten_sach, 30)}}</a>
                                                    </div>
                                                    <div class="book-author mb-2">
                                                        <span>Tác giả <a href="{{route('tacGia', $sach_item->tacGia->id)}}">{{$sach_item->tacGia->ten_tac_gia}}</a></span>
                                                    </div>
                                                    <div class="pbook-price mb-3">
                                                         <div class="book-price mb-2">
                                                            @if($sach_item->gia_goc - $sach_item->gia != 0)
                                                            <span class="mr-1">Giá gốc: </span>
                                                            @endif
                                                            @if($sach_item->gia_goc - $sach_item->gia > 0)
                                                                <span></span><strong class="line-through">{{$sach_item->gia_goc}} VNĐ</strong>
                                                            @endif
                                                                <br><span>Giá: </span><strong class="text-danger"> {{$sach_item->gia}} VNĐ</strong>
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
    </div>
</section>
@endsection
