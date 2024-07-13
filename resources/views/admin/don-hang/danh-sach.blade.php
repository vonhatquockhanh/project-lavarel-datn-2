@extends('layouts.admin-master')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">DANH SÁCH ĐƠN HÀNG</h1>
    <div class="my-2 px-1">
        <div class="row">
            <!-- <div class="col-6">
                <div>
                    <a href="{{ route('admin.khach-hang.them-moi') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus-circle mr-1"></i>
                        Thêm mới khách hàng
                    </a>
                </div>
            </div> -->
            <!-- <div class="col-6 text-right">
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
            </div> -->
        </div>
    </div>

    @if (session('thong_bao'))
        <div class="alert alert-success">{{ session('thong_bao') }}</div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <span class="m-0 font-weight-bold text-primary">Danh sách đơn hàng</span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã Đơn hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <!-- <th>Ảnh đại diện</th> -->
                            <th>Trạng thái</th>
                            <th>Trạng thái giao hàng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dsDonHang as $donHang)
                            <tr>
                                <td>{{ $donHang->id }}</td>
                                <td>{{ $donHang->khach_hang_ten_dang_nhap }}</td>
                                <td>{{ $donHang->so_dien_thoai }}</td>
                                <td>{{ $donHang->dia_chi }}</td>
                                <!-- <td>
                                    <img src="{{$donHang->user->hinhAnh ? $donHang->user->image_url : Auth::user()->default_img}}" alt="" width="60">
                                
                                </td> -->
                                <td>
                                @switch($donHang->trang_thai)
                                    @case(1)
                                        <span class="badge badge-warning badge-large">Đang chờ xử lý</span>
                                        @break
                                    @case(2)
                                        <span class="badge badge-info badge-large">Đang giao hàng</span>
                                        @break
                                    @case(3)
                                        <span class="badge badge-success badge-large">Đã nhận hàng</span>
                                        @break
                                    @case(4)
                                        <span class="badge badge-success badge-large">Hoàn thành</span>
                                        @break
                                    @case(5)
                                        <span class="badge badge-danger badge-large">Đã hủy</span>
                                        @break
                                    @default
                                        <span class="badge badge-secondary badge-large">Không xác định</span>
                                @endswitch
                                </td>
                                <td>
                                    @if($donHang->trang_thai_thanh_toan == 1)
                                        <span class="badge badge-success badge-large">Đã nhận hàng</span>
                                    @else
                                        <span class="badge badge-info badge-large">Chưa nhận hàng</span>
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

    .badge-large {
           font-size: 1.2em;
           padding: 0.5em 1em;
       }
</style>

@endsection