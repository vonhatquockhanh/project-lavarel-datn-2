@extends('layouts.master')
@php
    use Illuminate\Support\Str;
@endphp

@section('title')
Chi tiết sách
@endsection

@section('content')
    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="content-area">
                        <div class="card my-4">
                            <div class="card-header bg-dark">
                                <h4 class="text-white">Chi tiết</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-4">
                                        <div class="book-img-details">
                                            <img src="{{$sach->image_url}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="book-title">
                                            <h5>{{$sach->ten_sach}}</h5>
                                        </div>
                                        <div class="author mb-2">
                                            Tác giả: <a href="{{route('tacGia', $sach->tacGia->id)}}">{{$sach->tacGia->ten_tac_gia}}</a>
                                        </div>
                                        <div class="author mb-2">
                                            Nhà xuất bản: {{$sach->nhaXuatBan->ten_nha_xuat_ban}}
                                        </div>
                                        <div class="author mb-2">
                                            Thể loại: {{$sach->loaiSach->ten_loai_sach}}
                                        </div>
                                        <div class="author mb-2">
                                            Kích cỡ: {{$sach->kich_co}}
                                        </div>
                                        <div class="author mb-2">
                                            Cân nặng: {{$sach->can_nang}}
                                        </div>

                                        <div class="author mb-2">
                                            Số trang: {{$sach->so_trang}}
                                        </div>

                                        <div class="author mb-2">
                                            Ngôn ngữ: {{$sach->ngon_ngu}}
                                        </div>

                                        <div class="author mb-2">
                                            Số lượng hàng còn: <strong class="text-danger" id="so_luong_ton">{{$sach->so_luong}}</strong>
                                        </div>

                                        @if(($sach->so_luong) > 0)
                                            <div class="badge badge-success mb-2 badge-large">Còn hàng</div>
                                        @else
                                            <div class="badge badge-danger mb-2 badge-large">Hết hàng</div>
                                        @endif
                                      
                                        <div class="book-price mb-2">
                                        <div class="author mb-2">
                                            Giá gốc: <strong class="line-through">{{number_format($sach->gia_goc, 0, ',', '.')}} VNĐ</strong>
                                        </div>
                                        <div class="author mb-2">
                                            Giá: <strong> {{number_format($sach->gia, 0, ',', '.') }} VNĐ</strong>
                                        </div>

                                        @if($sach->gia_goc - $sach->gia > 0)
                                        <div class="author mb-2">
                                                <strong class="text-danger">Tiết kiệm được {{number_format($sach->gia_goc - $sach->gia, 0, ',', '.')}} VNĐ</strong>
                                                </div>
                                            @endif                                            
                                        </div>
                                        @if(Auth::check() == true && Auth::user()->role->name == "Admin")
                                        @else
                                        <form action="{{route('gioHang.them')}}" method="post">
                                            @csrf
                                            <div class="cart">
                                            <span class="quantity-input mr-2 mb-2">
                                                <a href="#" class="cart-minus" id="cart-minus">-</a>
                                                <input title="Số lượng" name="so_luong" type="text" value="1" class="qty-text" id="quantity-input">
                                                <a href="#" class="cart-plus" id="cart-plus">+</a>
                                            </span>
                                                <input type="hidden" name="sach_id" value="{{$sach->id}}">

                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                                            </div>
                                        </form>
                                        @endif
                                        @include('layouts.includes.flash-message')
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="book-description p-3">
                                        <p>{!! Markdown::convertToHtml(e($sach->mo_ta)) !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-body my-4">
                            <div class="author-description d-flex flex-row">
                                <div class="des"> 
                                    <h5>Tác giả: <a href="{{route('tacGia', $sach->tacGia->id)}}">{{$sach->tacGia->ten_tac_gia}}</a></h5>
                                    <small>
                                        <a href="{{route('tacGia', $sach->tacGia->id)}}">
                                            <i class="fas fa-book"></i>
                                            {{$sach->tacGia->sachs()->count()}}
                                            {{'Sách', $sach->tacGia->sachs()->count()}}
                                        </a>
                                    </small>
                                    <!-- <p>{!! Markdown::convertToHtml(e($sach->tacGia->bio)) !!}</p> -->
                                </div>
                            </div>
                        </div>
                        <!-- COMMENTS HERE -->
                        @include('layouts.includes.danhGia')
                    </div>
                </div>
                <!-- Sidebar -->
                    @include('layouts.includes.side-bar')
                <!-- Sidebar end -->
            </div>
        </div>
    </section>

    <style>
       .badge-large {
           font-size: 1em;
           padding: 0.5em 1em;
       }
    </style>

    <!-- Modal -->
    <div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="warningModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="warningModalLabel">Cảnh báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Số lượng mua vượt quá số lượng tồn kho.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const cartPlus = document.getElementById('cart-plus');
            const cartMinus = document.getElementById('cart-minus');
            const quantityInput = document.getElementById('quantity-input');
            const warningModal = new bootstrap.Modal(document.getElementById('warningModal'), {});
            const soLuongTonElement = document.getElementById('so_luong_ton');
            const soLuongTonGoc = parseInt(soLuongTonElement.innerText); // Lưu giá trị gốc của soLuongTon
            let soLuongTon = soLuongTonGoc;

            if (soLuongTonGoc != 0) {
                soLuongTon -= 1;
                soLuongTonElement.innerText = soLuongTon;

                cartPlus.addEventListener('click', (e) => {
                    e.preventDefault();
                    let currentQuantity = parseInt(quantityInput.value);

                    if (soLuongTon == 0) {
                        warningModal.show();
                        quantityInput.value = soLuongTonGoc;
                        currentQuantity--;
                    } else {
                        soLuongTon--;
                        soLuongTonElement.innerText = soLuongTon;
                    }
                });

                cartMinus.addEventListener('click', (e) => {
                    e.preventDefault();

                    if (soLuongTonGoc == soLuongTon + 1) {
                        quantityInput.value = 1;
                        soLuongTonElement.innerText = soLuongTon;
                    } else {
                        let currentQuantity = parseInt(quantityInput.value);
                        if (currentQuantity >= 1) {
                            soLuongTon++;
                            soLuongTonElement.innerText = soLuongTon;
                        } else {
                            quantityInput.value = 1;
                        }
                    }
                });

                quantityInput.addEventListener('input', (e) => {
                    let currentQuantity = parseInt(quantityInput.value);
                    if (currentQuantity > soLuongTonGoc) {
                        warningModal.show();
                        quantityInput.value = soLuongTon;
                    }
                });
            } else {
                quantityInput.value = soLuongTonGoc;

                cartPlus.addEventListener('click', (e) => {
                    e.preventDefault();
                    warningModal.show();
                    quantityInput.value = soLuongTonGoc;
                });

                cartMinus.addEventListener('click', (e) => {
                    e.preventDefault();
                    warningModal.show();
                    quantityInput.value = soLuongTonGoc;
                });
            }
        });
    </script>
@endsection
