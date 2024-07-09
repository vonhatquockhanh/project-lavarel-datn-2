@extends('layouts.admin-master')

@section('content')
<div class="container-fluid">

    <!-- Tiêu đề trang -->
    <h1 class="h3 mb-2 text-gray-800">DANH SÁCH NHÀ XUẤT BẢN</h1>
    <div class="my-2 px-1">
        <div class="row">
            <div class="col-6">
                <div>
                    <a href="{{ route('admin.nha-xuat-ban.them-moi') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus-circle mr-1"></i>
                        Thêm Nhà Xuất Bản
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.includes.flash-message')
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
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('admin.nha-xuat-ban.cap-nhat', ['id' => $nhaXuatBan->id]) }}" class="btn btn-sm btn-primary mr-2"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('admin.nha-xuat-ban.xoa', ['id' => $nhaXuatBan->id]) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p>Không có dữ liệu nhà xuất bản.</p>
            @endif
        </div>
    </div>

</div>
@endsection