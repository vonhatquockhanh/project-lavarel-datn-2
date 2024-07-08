@extends('layouts.admin-master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">CẬP NHẬT COMBO</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <span class="mr-3"><a href="{{ route('admin.combo.danh-sach') }}"><i class="fas fa-long-arrow-alt-left"></i> Quay lại</a></span>
                <span class="m-0 font-weight-bold text-primary">Cập Nhật Combo</span>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.combo.xu-ly-cap-nhat', ['id' => $combo->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="ten_combo" class="form-label">Tên combo</label>
                        <input type="text" class="form-control" id="ten_combo" name="ten_combo" value="{{ $combo->ten_combo }}">
                    </div>
                    <div class="form-group">
                        <label for="nha_xuat_ban_id">Nhà Xuất Bản</label>
                        <select class="form-control @error('nha_xuat_ban_id') is-invalid @enderror" id="nha_xuat_ban_id" name="nha_xuat_ban_id" required>
                            @foreach($nhaXuatBans as $nhaXuatBan)
                                <option value="{{ $nhaXuatBan->id }}" {{ $combo->nha_xuat_ban_id == $nhaXuatBan->id ? 'selected' : '' }}>{{ $nhaXuatBan->ten_nha_xuat_ban }}</option>
                            @endforeach
                        </select>
                        @error('nha_xuat_ban_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="gia" class="form-label">Giá</label>
                        <input type="text" class="form-control" id="gia" name="gia" value="{{ $combo->gia }}">
                    </div>
                    <div class="mb-3">
                        <label for="so_luong" class="form-label">Số lượng</label>
                        <input type="text" class="form-control" id="so_luong" name="so_luong" value="{{ $combo->so_luong }}">
                    </div>
                    <div class="mb-3">
                        <label for="hinh_anh" class="form-label">Hình ảnh</label>
                        <input type="file" class="form-control" id="hinh_anh" name="hinh_anh">
                        @if ($combo->hinh_anh)
                            <img src="{{ asset('storage/' . $combo->hinh_anh) }}" alt="Hình ảnh combo" style="max-width: 200px; margin-top: 10px;">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="mo_ta" class="form-label">Mô tả</label>
                        <input type="text" class="form-control" id="mo_ta" name="mo_ta" value="{{ $combo->mo_ta }}">
                    </div>
                    <div class="mb-6">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ $combo->slug }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <button type="reset" class="btn btn-danger">Làm lại</button>
                </form>
            </div>
        </div>

    </div>
@endsection