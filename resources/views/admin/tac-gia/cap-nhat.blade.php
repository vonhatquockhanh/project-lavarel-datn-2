@extends('layouts.admin-master')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">CẬP NHẬT TÁC GIẢ</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <span class="mr-3"><a href="{{ route('admin.tac-gia.danh-sach') }}"><i class="fas fa-long-arrow-alt-left"></i> Quay lại</a></span>
            <span class="m-0 font-weight-bold text-primary">Cập Nhật Tác Giả</span>
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

            <form action="{{ route('admin.tac-gia.xu-ly-cap-nhat', ['id' => $tacgia->id]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <!-- <div class="mb-3">
                        <label for="sach_id">Sách ID</label>
                        <input type="text" class="form-control" id="sach_id" name="sach_id" value="{{ $tacgia->sach_id }}">
                    </div> -->
                    <div class="mb-3">
                        <label for="ten_tac_gia">Tên tác giả</label>
                        <input type="text" class="form-control" id="ten_tac_gia" name="ten_tac_gia" value="{{ $tacgia->ten_tac_gia }}">
                    </div>
                    <div class="mb-3">
                        <label for="ngay_sinh">Ngày sinh</label>
                        <input type="date" class="form-control" id="ngay_sinh" name="ngay_sinh" value="{{ $tacgia->ngay_sinh }}">
                    </div>
                    <div class="mb-3">
                        <label for="quoc_tich">Quốc tịch</label>
                        <input type="text" class="form-control" id="quoc_tich" name="quoc_tich" value="{{ $tacgia->quoc_tich }}">
                    </div>
                    <div class="mb-3">
                        <label for="dia_chi">Địa chỉ</label>
                        <input type="text" class="form-control" id="dia_chi" name="dia_chi" value="{{ $tacgia->dia_chi }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="{{ route('admin.tac-gia.danh-sach') }}" class="btn btn-danger">Hủy bỏ</a>
            </form>
        </div>
    </div>
</div>

@endsection