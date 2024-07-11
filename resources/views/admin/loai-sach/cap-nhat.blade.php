@extends('layouts.admin-master')

@section('content')
<div class="container-fluid">

    <!-- Tiêu đề trang -->
    <h1 class="h3 mb-2 text-gray-800">CẬP NHẬT LOẠI SÁCH</h1>

    <!-- Bảng dữ liệu -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <span class="mr-3"><a href="{{ route('admin.loai-sach.danh-sach') }}"><i class="fas fa-long-arrow-alt-left"></i> Quay lại</a></span>
            <span class="m-0 font-weight-bold text-primary">Cập Nhật Loại Sách</span>
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

            <form action="{{ route('admin.loai-sach.xu-ly-cap-nhat', ['id' => $loaiSach->id]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="mb-3">
                        <label for="ten_loai_sach">Tên loại sách</label>
                        <input type="text" class="form-control" id="ten_loai_sach" name="ten_loai_sach" value="{{ old('ten_loai_sach', $loaiSach->ten_loai_sach) }}" required>
                        @if ($errors->has('ten_loai_sach'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('ten_loai_sach') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $loaiSach->slug) }}" required>
                        @if ($errors->has('slug'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('slug') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <button type="reset" class="btn btn-danger">Làm lại</button>
            </form>
        </div>
    </div>
</div>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            const tenLoaiSach = document.getElementById('ten_loai_sach');
            const slug = document.getElementById('slug');

            tenLoaiSach.addEventListener('input', function () {
                slug.value = slugify(tenLoaiSach.value);
            });

            function slugify(text) {
                // Chuyển đổi các ký tự tiếng Việt có dấu thành không dấu
                const from = "áàảãạăắằẳẵặâấầẩẫậéèẻẽẹêếềểễệíìỉĩịóòỏõọôốồổỗộơớờởỡợúùủũụưứừửữựýỳỷỹỵđ";
                const to   = "aaaaaaaaaaaaaaaaaeeeeeeeeeeeiiiiiooooooooooooooooouuuuuuuuuuuyyyyyd";
                const regex = new RegExp(from.split('').join('|'), 'g');

                text = text.replace(regex, function (c) {
                    return to.charAt(from.indexOf(c));
                });

                return text.toString().toLowerCase()
                    .replace(/\s+/g, '-')           // Thay thế khoảng trắng bằng dấu gạch ngang
                    .replace(/[^\w\-]+/g, '')       // Loại bỏ tất cả các ký tự không phải từ hoặc dấu gạch ngang
                    .replace(/\-\-+/g, '-')         // Thay thế nhiều dấu gạch ngang liên tiếp bằng một dấu gạch ngang
                    .replace(/^-+/, '')             // Xóa các dấu gạch ngang ở đầu chuỗi
                    .replace(/-+$/, '');            // Xóa các dấu gạch ngang ở cuối chuỗi
            }
        });
    </script>

@endsection
