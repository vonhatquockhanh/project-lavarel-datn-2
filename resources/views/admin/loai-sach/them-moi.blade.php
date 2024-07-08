@extends('layouts.admin-master')

@section('content')
    <div class="container-fluid">

        <!-- Tiêu đề trang -->
        <h1 class="h3 mb-2 text-gray-800">THÊM MỚI LOẠI SÁCH</h1>

        <!-- Form thêm mới -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thêm Loại Sách</h6>
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

                <form action="{{ route('admin.loai-sach.xu-ly-them-moi') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" id="id" name="id" value="{{ old('id') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="ten_loai_sach">Tên loại sách</label>
                            <input type="text" class="form-control" id="ten_loai_sach" name="ten_loai_sach" value="{{ old('ten_loai_sach') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                    <button type="reset" class="btn btn-danger">Làm lại</button>
                </form>
            </div>
        </div>

    </div>
@endsection