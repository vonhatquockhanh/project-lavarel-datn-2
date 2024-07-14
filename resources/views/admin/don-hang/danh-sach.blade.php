@extends('layouts.admin-master')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">DANH SÁCH ĐƠN HÀNG</h1>
    <div class="my-2 px-1">
        <div class="row">
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
                            <th>Trạng thái</th>
                            <th>Trạng thái giao hàng</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dsDonHang as $donHang)
                            <tr>
                                <td>{{ $donHang->id }}</td>
                                <td>{{ $donHang->khach_hang_ten_dang_nhap }}</td>
                                <td>{{ $donHang->so_dien_thoai }}</td>
                                <td>{{ $donHang->dia_chi }}</td>
                                <td>
                                    @switch($donHang->trang_thai)
                                        @case(1)
                                            <b><span class="text-warning">Đang chờ xử lý</span></b>
                                            @break
                                        @case(2)
                                            <b><span class="text-info">Đang giao hàng</span></b>
                                            @break
                                        @case(3)
                                            <b><span class="text-success">Hoàn thành</span></b>
                                            @break
                                        @case(4)
                                            <b><span class="text-danger">Đã hủy</span></b>
                                            @break
                                        @default
                                            <b><span class="text-secondary">Không xác định</span></b>
                                    @endswitch
                                </td>
                                <td>
                                    @if($donHang->trang_thai_thanh_toan == 1)
                                        <b><span class="text-success">Đã nhận hàng</span></b>
                                    @else
                                        <b><span class="text-info">Chưa nhận hàng</span></b>
                                    @endif
                                </td>
                                <td>
                                    <!-- Nút "Chỉnh sửa" với lớp Bootstrap và tùy chỉnh CSS -->
                                    <button type="button" class="btn btn-primary btn-sm custom-edit-button editOrderButton" data-id="{{ $donHang->id }}">
                                        <i class="fas fa-edit"></i> Chỉnh sửa đơn hàng
                                    </button>
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
        font-size: 0.9em;
        padding: 0.5em 0.5em;
    }
</style>

<script>
    $(document).ready(function() {
        console.log('jQuery is ready');

        // Gán sự kiện click cho tất cả các nút có lớp 'editOrderButton'
        $('body').on('click', '.editOrderButton', function() {
            var orderId = $(this).data('id');
            var url = '{{ route("admin.don-hang.chi-tiet", ":id") }}';
            url = url.replace(':id', orderId);

            // Debug để kiểm tra xem sự kiện có được kích hoạt không
            console.log('Clicked edit button for order ID:', orderId);
            console.log('Redirecting to URL:', url);

            // Redirect đến URL của route GET
            window.location.href = url;
        });
    });
</script>
@endsection
