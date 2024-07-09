@extends('layouts.admin-master')

@section('content')
<div class="container-fluid">
    <!-- Tiêu đề trang -->
    <h1 class="h3 mb-2 text-gray-800">DANH SÁCH ĐÁNH GIÁ SÁCH</h1>

    @if (session('thong_bao'))
        <div class="alert alert-success">{{ session('thong_bao') }}</div>
    @endif

    @if (isset($errorMessage))
        <div class="alert alert-danger">{{ $errorMessage }}</div>
    @endif
    
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <span class="m-0 font-weight-bold text-primary">Danh sách đánh giá sách</span>
        </div>
        <div class="card-body">
            @if($danhGiaSachs->count())
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Người đánh giá</th>
                                <th>Tên sách</th>
                                <th>Nội dung</th>
                                <th>Ngày tạo</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($danhGiaSachs as $danhGiaSach)
                                <tr>
                                    <td>{{ $danhGiaSach->user ? $danhGiaSach->user->name : 'Không xác định' }}</td>
                                    <td>{{ $danhGiaSach->sach ? $danhGiaSach->sach->ten_sach : 'Sách không tồn tại' }}</td>
                                    <td>{{ $danhGiaSach->noi_dung }}</td>
                                    <td>{{ $danhGiaSach->created_at }}</td>
                                    <td>
                                        <form action="{{ route('admin.danh-gia-sach.xoa', $danhGiaSach->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa đánh giá này không?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i> Xóa
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p>Không có đánh giá sách nào.</p>
            @endif
        </div>
    </div>

    {{ $danhGiaSachs->links() }}
</div>
@endsection