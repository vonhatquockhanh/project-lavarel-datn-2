@extends('layouts.admin-master')

@section('content')
    <div class="container-fluid">

        <!-- Tiêu đề trang -->
        <h1 class="h3 mb-2 text-gray-800">DANH SÁCH KHÁCH HÀNG</h1>
        <div class="my-2 px-1">
            <div class="row">
                <div class="col-6">
                    <div>
                        <a href="{{ route('admin.khach-hang.them-moi') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus-circle mr-1"></i>
                            Thêm Khách Hàng
                        </a>
                    </div>
                </div>
                <div class="col-6 text-right">
                </div>
            </div>
        </div>

        @if (session('thong_bao'))
            <div class="alert alert-success">{{ session('thong_bao') }}</div>
        @endif

        @if (isset($errorMessage))
            <div class="alert alert-danger">{{ $errorMessage }}</div>
        @endif
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <span class="m-0 font-weight-bold text-primary">Danh sách khách hàng</span>
            </div>
            <div class="card-body">
                @if($dskhachHang->count())
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
                                            @if ($khachHang->ten_dang_nhap)
                                                <a href="{{ route('admin.khach-hang.cap-nhat', ['ten_dang_nhap' => $khachHang->ten_dang_nhap]) }}" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-edit"></i> Cập nhật
                                                </a>
                                                <form action="{{ route('admin.khach-hang.xoa', ['ten_dang_nhap' => $khachHang->ten_dang_nhap]) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa khách hàng này không?')">
                                                        <i class="fas fa-trash"></i> Xóa
                                                    </button>
                                                </form>
                                            @else
                                                <span class="text-danger">Lỗi: Không tìm thấy ID</span>
                                            @endif
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
                @else
                    <p>Không có khách hàng nào.</p>
                @endif
            </div>
        </div>

        {{ $dskhachHang->links() }}
    </div>

    <style>
        .input-group .form-control {
            width: 200px;
        }

        .input-group-append .btn {
            padding: 0.375rem 0.75rem;
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