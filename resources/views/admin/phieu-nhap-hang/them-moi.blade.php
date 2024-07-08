@extends('layouts.admin-master')

@section('content')
<div class="container-fluid">

    <!-- Tiêu đề trang -->
    <h1 class="h3 mb-2 text-gray-800">THÊM MỚI PHIẾU NHẬP HÀNG</h1>

    <!-- Form thêm mới -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm Mới Phiếu Nhập Hàng</h6>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.phieu-nhap-hang.xu-ly-them-moi') }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="mb-3">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ old('id') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nha_xuat_ban_id">Nhà Xuất Bản</label>
                        <select class="form-control" id="nha_xuat_ban_id" name="nha_xuat_ban_id" required>
                            <option value="">Chọn nhà xuất bản</option>
                            @foreach($nhaXuatBans as $nhaXuatBan)
                            <option value="{{ $nhaXuatBan->id }}">{{ $nhaXuatBan->ten_nha_xuat_ban }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tong_tien">Tổng tiền</label>
                        <input type="number" class="form-control" id="tong_tien" name="tong_tien" value="{{ old('tong_tien') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="ghi_chu">Ghi chú</label>
                        <textarea class="form-control" id="ghi_chu" name="ghi_chu" rows="3">{{ old('ghi_chu') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="trang_thai">Trạng thái</label>
                        <select class="form-control" id="trang_thai" name="trang_thai">
                            <option value="0" {{ old('trang_thai') == '0' ? 'selected' : '' }}>Chưa xử lý</option>
                            <option value="1" {{ old('trang_thai') == '1' ? 'selected' : '' }}>Đã xử lý</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button type="reset" class="btn btn-danger">Làm lại</button>
            </form>
        </div>
    </div>

</div>
@endsection