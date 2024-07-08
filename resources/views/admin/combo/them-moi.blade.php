@extends('layouts.admin-master')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">THÊM MỚI COMBO</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thêm Combo</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.combo.xu-ly-them-moi') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="inputTenCombo" class="form-label">Tên combo</label>
                                <input type="text" class="form-control @error('ten_combo') is-invalid @enderror" id="inputTenCombo" name="ten_combo" value="{{ old('ten_combo') }}">
                                @error('ten_combo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nha_xuat_ban_id" class="form-label">Nhà Xuất Bản</label>
                                <select class="form-select @error('nha_xuat_ban_id') is-invalid @enderror" id="nha_xuat_ban_id" name="nha_xuat_ban_id">
                                    <option value="">Chọn nhà xuất bản</option>
                                    @foreach($nhaXuatBans as $nhaXuatBan)
                                        <option value="{{ $nhaXuatBan->id }}">{{ $nhaXuatBan->ten_nha_xuat_ban }}</option>
                                    @endforeach
                                </select>
                                @error('nha_xuat_ban_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="inputGia" class="form-label">Giá</label>
                                <input type="text" class="form-control @error('gia') is-invalid @enderror" id="inputGia" name="gia" value="{{ old('gia') }}">
                                @error('gia')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="inputSoLuong" class="form-label">Số lượng</label>
                                <input type="text" class="form-control @error('so_luong') is-invalid @enderror" id="inputSoLuong" name="so_luong" value="{{ old('so_luong') }}">
                                @error('so_luong')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="inputHinhAnh" class="form-label">Hình ảnh</label>
                                <input type="file" class="form-control @error('hinh_anh') is-invalid @enderror" id="inputHinhAnh" name="hinh_anh">
                                @error('hinh_anh')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="inputMoTa" class="form-label">Mô tả</label>
                                <input type="text" class="form-control @error('mo_ta') is-invalid @enderror" id="inputMoTa" name="mo_ta" value="{{ old('mo_ta') }}">
                                @error('mo_ta')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" required>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection