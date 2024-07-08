@extends('layouts.admin-master')

@section('content')
<div class="container-fluid">

    <!-- Tiêu đề trang -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách Nhà Xuất Bản</h1>
    <div class="my-2 px-1">
        <div class="row">
            <div class="col-6">
                <div>
                    <a href="{{ route('admin.nha-xuat-ban.them-moi') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus-circle mr-1"></i>
                        Thêm mới
                    </a>
                </div>
            </div>
            <div class="col-6 text-right">
            </div>
        </div>
    </div>

    <!-- Flash Message -->
    @include('layouts.includes.flash-message')

    <!-- Bảng dữ liệu -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <span class="m-0 font-weight-bold text-primary">Danh sách Nhà Xuất Bản</span>
        </div>
        <div class="card-body">
            @if($nhaXuatBans->count())
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên nhà xuất bản</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Mô tả</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nhaXuatBans as $nhaXuatBan)
                                <tr>
                                    <td>{{ $nhaXuatBan->id }}</td>
                                    <td>{{ $nhaXuatBan->ten_nha_xuat_ban }}</td>
                                    <td>{{ $nhaXuatBan->so_dien_thoai }}</td>
                                    <td>{{ $nhaXuatBan->email }}</td>
                                    <td>{{ $nhaXuatBan->dia_chi }}</td>
                                    <td>{{ $nhaXuatBan->mo_ta }}</td>
                                    <td>
                                        <a href="{{ route('admin.nha-xuat-ban.cap-nhat', ['id' => $nhaXuatBan->id]) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('admin.nha-xuat-ban.xoa', ['id' => $nhaXuatBan->id]) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

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
</style>

@endsection