@extends('layouts.admin-master')

@section('content')
    <div class="container-fluid">
        <!-- Tiêu đề trang -->
        <h1 class="h3 mb-2 text-gray-800">DANH SÁCH SÁCH</h1>
        <div class="my-2 px-1">
            <div class="row">
                <div class="col-6">
                    <div>
                        <a href="{{ route('admin.sach.them-moi') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus-circle mr-1"></i>Thêm Sách</a>
                    </div>
                </div>
                <div class="col-6 text-right">
                </div>
            </div>
        </div>

        
        @if (session('thong_bao'))
            <div class="alert alert-success">{{ session('thong_bao') }}</div>
        @endif
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (isset($errorMessage))
            <div class="alert alert-danger">{{ $errorMessage }}</div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <span class="m-0 font-weight-bold text-primary">Danh sách sách</span>
            </div>
            <div class="card-body">
                @if($sachs->count())
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Loại sách</th>
                                    <th>Nhà xuất bản</th>
                                    <th>Tác giả</th>
                                    <th>Tên sách</th>
                                    <!-- <th>Hình ảnh</th> -->
                                    <!-- <th>Ngày phát hành</th> -->
                                    <th>Giá gốc</th>
                                    <th>Giá</th>
                                    <!-- <th>Giá sách điện tử</th> -->
                                    <th>Số lượng</th>
                                    <th>Mô tả</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sachs as $sach)
                                    <tr>
                                        <td>{{ $sach->id }}</td>
                                        <td>{{ isset($sach->loaiSach) ? $sach->loaiSach->ten_loai_sach : 'N/A' }}</td>
                                        <td>{{ isset($sach->nhaXuatBan) ? $sach->nhaXuatBan->ten_nha_xuat_ban : 'N/A' }}</td>
                                        <td>{{ isset($sach->tacGia) ? $sach->tacGia->ten_tac_gia : 'N/A' }}</td>
                                        <td>{{ $sach->ten_sach }}</td>
                                        <!-- <td><img src="{{ $sach->image_url }}" width="60" alt=""></td> -->
                                        <!-- <td>{{ $sach->ngay_phat_hanh }}</td> -->
                                        <td>{{number_format($sach->gia_goc, 0, ',', '.')}}</td>
                                        <td>{{number_format($sach->gia, 0, ',', '.')}}</td>
                                        <!-- <td>{{ $sach->gia_sach_dien_tu }}</td> -->
                                        <td>{{ $sach->so_luong }}</td>
                                        <td>{{ Str::limit($sach->mo_ta, 100) }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('admin.sach.chi-tiet', ['id' => $sach->id]) }}" class="btn btn-sm btn-info mr-2">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                                <a href="{{ route('admin.sach.cap-nhat', ['id' => $sach->id]) }}" class="btn btn-sm btn-primary mr-2">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.sach.xoa', ['id' => $sach->id]) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa sách này không?')" class="mr-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p>Không có sách nào.</p>
                @endif
            </div>
        </div>

        {{ $sachs->links() }}
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
            display: inline-flex;
            width: auto;
        }

        .d-inline-block {
            display: inline-block;
        }

        .table td {
            vertical-align: middle;
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