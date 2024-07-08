@extends('layouts.admin-master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">THÊM MỚI NHÀ XUẤT BẢN</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thêm Nhà Xuất Bản</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.nha-xuat-ban.xu-ly-them-moi') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="id">ID</label>
                            <input type="text" class="form-control {{ $errors->has('id') ? 'is-invalid' : '' }}" id="id" name="id" value="{{ old('id') }}" required>
                            @if($errors->has('id'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('id') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="ten_nha_xuat_ban">Tên nhà xuất bản</label>
                            <input type="text" class="form-control {{ $errors->has('ten_nha_xuat_ban') ? 'is-invalid' : '' }}" id="ten_nha_xuat_ban" name="ten_nha_xuat_ban" value="{{ old('ten_nha_xuat_ban') }}" required>
                            @if($errors->has('ten_nha_xuat_ban'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('ten_nha_xuat_ban') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="so_dien_thoai">Số điện thoại</label>
                            <input type="text" class="form-control {{ $errors->has('so_dien_thoai') ? 'is-invalid' : '' }}" id="so_dien_thoai" name="so_dien_thoai" value="{{ old('so_dien_thoai') }}" required>
                            @if($errors->has('so_dien_thoai'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('so_dien_thoai') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" required>
                            @if($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="dia_chi">Địa chỉ</label>
                            <input type="text" class="form-control {{ $errors->has('dia_chi') ? 'is-invalid' : '' }}" id="dia_chi" name="dia_chi" value="{{ old('dia_chi') }}" required>
                            @if($errors->has('dia_chi'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('dia_chi') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="mo_ta">Mô tả</label>
                            <textarea class="form-control {{ $errors->has('mo_ta') ? 'is-invalid' : '' }}" id="mo_ta" name="mo_ta" rows="3" required>{{ old('mo_ta') }}</textarea>
                            @if($errors->has('mo_ta'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('mo_ta') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button type="reset" class="btn btn-danger">Làm lại</button>
                </form>
            </div>
        </div>

    </div>
@endsection