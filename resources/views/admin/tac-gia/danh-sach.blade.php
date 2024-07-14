@extends('layouts.admin-master')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">DANH SÁCH TÁC GIẢ SÁCH</h1>
    <div class="my-2 px-1">
        <div class="row">
            <div class="col-6">
                <div>
                    <a href="{{ route('admin.tac-gia.them-moi') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus-circle mr-1"></i>
                        Thêm Tác Giả Sách
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
            <span class="m-0 font-weight-bold text-primary">Danh sách tác giả sách</span>
        </div>
        <div class="card-body">
            @if($DStacGia->count())
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <!-- <th>Tên sách</th> -->
                                <th>Tên tác giả</th>
                                <th>Ngày sinh</th>
                                <th>Quốc tịch</th>
                                <th>Địa chỉ</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($DStacGia as $tacgia)
                                <tr>
                                    <td>{{ $tacgia->id }}</td>
                                    <!-- <td>{{ $tacgia->sach ? $tacgia->sach->ten_sach : 'Chưa có sách' }}</td> -->
                                    <td>{{ $tacgia->ten_tac_gia }}</td>

                                    <td>{{ $tacgia->sach ? $tacgia->sach->ngay_sinh : 'Dữ liệu đang cập nhật' }}</td>
                                    <td>{{ $tacgia->sach ? $tacgia->sach->quoc_tich : 'Dữ liệu đang cập nhật' }}</td>
                                    <td>{{ $tacgia->sach ? $tacgia->sach->dia_chi : 'Dữ liệu đang cập nhật' }}</td>
                                    
                                    <td>
                                        <a href="{{ route('admin.tac-gia.cap-nhat', ['id' => $tacgia->id]) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('admin.tac-gia.xoa', ['id' => $tacgia->id]) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa tác giả này không?')"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p>Không có tác giả nào.</p>
            @endif
        </div>
    </div>

    {{ $DStacGia->links() }}
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

    .form-inline {
        flex: 1;
        justify-content: flex-end;
    }

    .d-flex.justify-content-between {
        gap: 10px;
    }

    .mt-2 {
        margin-top: 0.5rem !important;
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }
</style>

<script>
        $(document).ready(function() {
        $('#dataTable').DataTable({
            "paging": false, // Tắt phân trang của DataTables
            "searching": true, // Bật tìm kiếm nếu bạn muốn giữ chức năng tìm kiếm của DataTables
            "info": false // Tắt thông tin tổng quan (hiển thị số dòng)
        });
    });
    </script>

@endsection