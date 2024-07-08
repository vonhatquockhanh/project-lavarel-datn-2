@extends('layouts.admin-master')

@section('content')
    <div class="container-fluid">

        <!-- Tiêu đề trang -->
        <h1 class="h3 mb-2 text-gray-800">DANH SÁCH LOẠI SÁCH</h1>
        <div class="my-2 px-1">
            <div class="row">
                <div class="col-6">
                    <div>
                        <a href="{{ route('admin.loai-sach.them-moi') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus-circle mr-1"></i>
                            Thêm Loại Sách
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
                <span class="m-0 font-weight-bold text-primary">Danh sách loại sách</span>
            </div>
            <div class="card-body">
                @if($dsLoaiSach->count())
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên loại sách</th>
                                    <th>Slug</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dsLoaiSach as $loaiSach)
                                    <tr>
                                        <td>{{ $loaiSach->id }}</td>
                                        <td>{{ $loaiSach->ten_loai_sach }}</td>
                                        <td>{{ $loaiSach->slug }}</td>
                                        <td>
                                            <a href="{{ route('admin.loai-sach.cap-nhat', ['id' => $loaiSach->id]) }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-edit"></i> Cập nhật
                                            </a>
                                            <a href="{{ route('admin.loai-sach.xoa', ['id' => $loaiSach->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa loại sách này không?')">
                                                <i class="fas fa-trash"></i> Xóa
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p>Không có loại sách nào.</p>
                @endif
            </div>
        </div>

        {{ $dsLoaiSach->links() }}
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