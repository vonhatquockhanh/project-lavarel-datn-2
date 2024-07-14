@extends('layouts.admin-master')

@section('content')
<section class="main-content">
    <div class="container-fluid"> <!-- Sử dụng container-fluid để chiếm toàn bộ chiều ngang màn hình -->
        <div class="row">
            <div class="col-12"> <!-- Thay đổi col-md-8 thành col-12 để chiếm toàn bộ chiều ngang -->
                <div class="content-area">
                    <div class="card my-4">
                        <div class="card-header bg-dark">
                            <h4 class="text-white">Chi tiết sách</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="book-img-details">
                                        <img src="{{$sach->image_url}}" alt="Hình ảnh sách" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="book-info">
                                        <h5 class="book-title larger-text">{{$sach->ten_sach}}</h5> <!-- Thêm lớp larger-text -->
                                        <p><strong>Tác giả:</strong> {{$sach->tacGia->ten_tac_gia}}</p>
                                        <p><strong>Nhà xuất bản:</strong> {{$sach->nhaXuatBan->ten_nha_xuat_ban}}</p>
                                        <p><strong>Thể loại:</strong> {{$sach->loaiSach->ten_loai_sach}}</p>
                                        <p><strong>Kích cỡ:</strong> {{$sach->kich_co}}</p>
                                        <p><strong>Cân nặng:</strong> {{$sach->can_nang}}</p>
                                        <p><strong>Số trang:</strong> {{$sach->so_trang}}</p>
                                        <p><strong>Ngôn ngữ:</strong> {{$sach->ngon_ngu}}</p>
                                        <p><strong>Ngày phát hành:</strong> {{$sach->ngay_phat_hanh}}</p>
                                        <p><strong>Số lượng còn:</strong> <span class="text-danger">{{$sach->so_luong}}</span></p>
                                        <p><strong>Giá gốc:</strong> <span class="line-through">{{number_format($sach->gia_goc, 0, ',', '.')}} VNĐ</span></p>
                                        <p><strong>Giá bán:</strong> {{number_format($sach->gia, 0, ',', '.')}} VNĐ</p>
                                        @if($sach->gia_goc - $sach->gia > 0)
                                        <p><strong class="text-danger">Tiết kiệm:</strong> {{number_format($sach->gia_goc - $sach->gia, 0, ',', '.')}} VNĐ</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <h5><strong>Mô tả sách</strong></h5>
                                    <p>{!! Markdown::convertToHtml(e($sach->mo_ta)) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-body my-4">
                        <div class="author-description d-flex flex-row">
                            <div class="des">
                                <h5>Tác giả: {{$sach->tacGia->ten_tac_gia}}</h5>
                                <small>
                                    <i class="fas fa-book"></i>
                                    {{$sach->tacGia->sachs()->count()}} sách
                                </small>
                                <!-- <p>{!! Markdown::convertToHtml(e($sach->tacGia->bio)) !!}</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- @include('layouts.includes.side-bar') -->
        </div>
    </div>
</section>

<style>
    .badge-large {
        font-size: 1em;
        padding: 0.5em 1em;
    }
    .line-through {
        text-decoration: line-through;
    }
    .larger-text {
        font-size: 1.75em; /* Điều chỉnh kích thước font theo ý bạn */
    }
</style>
@endsection