@extends('layouts.admin-master')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">THÊM MỚI KHÁCH HÀNG</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm Khách Hàng</h6>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.khach-hang.xu-ly-them-moi') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="mb-3">
                        <label for="ten_dang_nhap">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" value="{{ old('ten_dang_nhap') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="mat_khau">Mật khẩu</label>
                        <input type="password" class="form-control" id="mat_khau" name="mat_khau" required>
                    </div>
                    <div class="mb-3">
                        <label for="ten_khach_hang">Tên khách hàng</label>
                        <input type="text" class="form-control" id="ten_khach_hang" name="ten_khach_hang" value="{{ old('ten_khach_hang') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="so_dien_thoai">Số điện thoại</label>
                        <input type="text" class="form-control" id="so_dien_thoai" name="so_dien_thoai" value="{{ old('so_dien_thoai') }}">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="dia_chi">Địa chỉ</label>
                        <input type="text" class="form-control" id="dia_chi" name="dia_chi" value="{{ old('dia_chi') }}">
                    </div>
                    <div class="mb-3">
                        <label for="anh_dai_dien">Ảnh đại diện</label>
                        <input type="file" class="form-control-file" id="anh_dai_dien" name="anh_dai_dien">
                    </div>
                    <div class="mb-3">
                        <label for="trang_thai">Trạng thái</label>
                        <select class="form-control" id="trang_thai" name="trang_thai">
                            <option value="1" {{ old('trang_thai') == 1 ? 'selected' : '' }}>Hoạt động</option>
                            <option value="0" {{ old('trang_thai') == 0 ? 'selected' : '' }}>Không hoạt động</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button type="reset" class="btn btn-danger">Làm lại</button>
            </form>
        </div>
    </div>
</div>

@endsection