@extends('layouts.admin-master')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">THÊM MỚI TÁC GIẢ SÁCH</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm Tác Giả Sách</h6>
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

            <form method="POST" action="{{ route('admin.tac-gia.xu-ly-them-moi') }}">
                @csrf
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{ old('id') }}" required>
                </div>
                <div class="form-group">
                    <label for="sach_id">Chọn sách</label>
                    <select class="form-control" id="sach_id" name="sach_id" required>
                        <option value="">Chọn sách</option>
                        @foreach($list_of_books as $book)
                            <option value="{{ $book->id }}">{{ $book->ten_sach }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="ten_tac_gia">Tên tác giả</label>
                    <input type="text" class="form-control" id="ten_tac_gia" name="ten_tac_gia" value="{{ old('ten_tac_gia') }}" required>
                </div>
                <div class="form-group">
                    <label for="ngay_sinh">Ngày sinh</label>
                    <input type="date" class="form-control" id="ngay_sinh" name="ngay_sinh" value="{{ old('ngay_sinh') }}" required>
                </div>
                <div class="form-group">
                    <label for="quoc_tich">Quốc tịch</label>
                    <input type="text" class="form-control" id="quoc_tich" name="quoc_tich" value="{{ old('quoc_tich') }}" required>
                </div>
                <div class="form-group">
                    <label for="dia_chi">Địa chỉ</label>
                    <input type="text" class="form-control" id="dia_chi" name="dia_chi" value="{{ old('dia_chi') }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>
@endsection