@extends('layouts.admin-master')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">DANH SÁCH KHÁCH HÀNG</h1>
    <div class="my-2 px-1">
        <div class="row">
            <div class="col-6">
                <div>
                    <a href="{{ route('admin.khach-hang.them-moi') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus-circle mr-1"></i>
                        Thêm mới khách hàng
                    </a>
                </div>
            </div>
            <div class="col-6 text-right">
                <form action="{{ route('admin.khach-hang.tim-kiem') }}" method="GET" class="form-inline">
                    <div class="input-group">
                        <input type="text" name="search_name" class="form-control" placeholder="Tìm kiếm..." value="{{ request('search_name') }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" style="padding: 0.375rem 0.5rem;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if (session('thong_bao'))
        <div class="alert alert-success">{{ session('thong_bao') }}</div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <span class="m-0 font-weight-bold text-primary">Danh sách khách hàng</span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tên đăng nhập</th>
                            <th>Tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Ảnh đại diện</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dskhachHang as $khachHang)
                            <tr>
                                <td>{{ $khachHang->ten_dang_nhap }}</td>
                                <td>{{ $khachHang->ten_khach_hang }}</td>
                                <td>{{ $khachHang->so_dien_thoai }}</td>
                                <td>{{ $khachHang->email }}</td>
                                <td>{{ $khachHang->dia_chi }}</td>
                                <td><img src="{{ asset('storage/' . $khachHang->anh_dai_dien) }}" alt="Avatar" style="width: 100px;"></td>
                                <td>{{ $khachHang->trang_thai ? 'Hoạt động' : 'Không hoạt động' }}</td>
                                <td>
                                    <a href="{{ route('admin.khach-hang.cap-nhat', ['ten_dang_nhap' => $khachHang->ten_dang_nhap]) }}" class="btn btn-primary btn-sm">Cập nhật</a>
                                    <form action="{{ route('admin.khach-hang.xoa', ['ten_dang_nhap' => $khachHang->ten_dang_nhap]) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa khách hàng này không?')">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Không có kết quả tìm kiếm</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<style>
    .input-group .form-control {
        width: 200px;
    }

    .input-group-append .btn {
        padding: 0.375rem 0.5rem;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .input-group-append .btn i {
        font-size: 1rem;
        color: #6c757d;
    }

    .input-group-append .btn:hover i {
        color: #6c757d;
    }
</style>

@endsection