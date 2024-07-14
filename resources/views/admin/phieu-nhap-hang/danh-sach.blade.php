@extends('layouts.admin-master')

@section('content')
<div class="container-fluid">

    <!-- Tiêu đề trang -->
    <h1 class="h3 mb-2 text-gray-800">DANH SÁCH PHIẾU NHẬP HÀNG</h1>
    <div class="my-2 px-1">
        <div class="row">
            <div class="col-6">
                <div>
                    <a href="{{ route('admin.phieu-nhap-hang.them-moi') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus-circle mr-1"></i>
                        Thêm Mới Phiếu Nhập Hàng
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
            <span class="m-0 font-weight-bold text-primary">Danh sách Phiếu Nhập Hàng</span>
        </div>
        <div class="card-body">
            @if($DSPhieuNhapHang->count())
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nhà xuất bản</th>
                                <th>Tên người nhập hàng</th>
                                <th>Tổng tiền</th>
                                <th>Ghi chú</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($DSPhieuNhapHang as $phieuNhapHang)
                                <tr>
                                    <td>{{ $phieuNhapHang->id }}</td>
                                    <td>{{ $phieuNhapHang->nha_xuat_ban_id }}</td>
                                    <td>{{ $phieuNhapHang->admin_ten_dang_nhap }}</td>
                                    <td>{{ $phieuNhapHang->tong_tien }}</td>
                                    <td>{{ $phieuNhapHang->ghi_chu }}</td>
                                    <td>{{ $phieuNhapHang->trang_thai ? 'Đã xử lý' : 'Chưa xử lý' }}</td>
                                    <td>
                                        <a href="{{ route('admin.phieu-nhap-hang.chi-tiet', ['id' => $phieuNhapHang->id]) }}" class="btn btn-outline-info">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                        <a href="{{ route('admin.phieu-nhap-hang.xoa', ['id' => $phieuNhapHang->id]) }}" class="btn btn-outline-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa phiếu nhập hàng này không?')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p>Không có phiếu nhập hàng nào.</p>
            @endif
        </div>
    </div>

    {{ $DSPhieuNhapHang->links() }}
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