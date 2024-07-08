@extends('layouts.admin-master')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">CẬP NHẬT NHÀ XUẤT BẢN</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <span class="mr-3"><a href="{{ route('admin.nha-xuat-ban.danh-sach') }}"><i class="fas fa-long-arrow-alt-left"></i> Quay lại</a></span>
            <span class="m-0 font-weight-bold text-primary">Cập Nhật Nhà Xuất Bản</span>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.nha-xuat-ban.cap-nhat', $nhaXuatBan->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="ten_nha_xuat_ban" class="form-label">Tên nhà xuất bản</label>
                    <input type="text" class="form-control {{ $errors->has('ten_nha_xuat_ban') ? 'is-invalid' : '' }}" id="ten_nha_xuat_ban" name="ten_nha_xuat_ban" value="{{ $nhaXuatBan->ten_nha_xuat_ban }}">
                    @if($errors->has('ten_nha_xuat_ban'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('ten_nha_xuat_ban') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="so_dien_thoai" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control {{ $errors->has('so_dien_thoai') ? 'is-invalid' : '' }}" id="so_dien_thoai" name="so_dien_thoai" value="{{ $nhaXuatBan->so_dien_thoai }}">
                    @if($errors->has('so_dien_thoai'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('so_dien_thoai') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" value="{{ $nhaXuatBan->email }}">
                    @if($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="dia_chi" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control {{ $errors->has('dia_chi') ? 'is-invalid' : '' }}" id="dia_chi" name="dia_chi" value="{{ $nhaXuatBan->dia_chi }}">
                    @if($errors->has('dia_chi'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('dia_chi') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="mo_ta" class="form-label">Mô tả</label>
                    <textarea class="form-control {{ $errors->has('mo_ta') ? 'is-invalid' : '' }}" id="mo_ta" name="mo_ta" rows="3">{{ $nhaXuatBan->mo_ta }}</textarea>
                    @if($errors->has('mo_ta'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('mo_ta') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <button type="reset" class="btn btn-danger">Làm lại</button>
            </form>
        </div>
    </div>

</div>
@endsection