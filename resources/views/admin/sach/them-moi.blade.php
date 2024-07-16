@extends('layouts.admin-master')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">THÊM MỚI SÁCH</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm Sách</h6>
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

            <form method="POST" action="{{ route('admin.sach.xu-ly-them-moi') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" name="id" required>
                    </div>
                    <div class="col-md-6">
                    <label for="tac_gia_id" class="form-label">Tác Giả</label>
                    <select class="form-control" id="tac_gia_id" name="tac_gia_id" required>
                        <option value="">Chọn tác giả</option>
                        @foreach($tacGias as $tacGia)
                        <option value="{{ $tacGia->id }}">{{ $tacGia->ten_tac_gia}}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="loai_sach_id" class="form-label">Loại sách</label>
                        <select class="form-control" id="loai_sach_id" name="loai_sach_id" required>
                            <option value="">Chọn loại sách</option>
                            @foreach($loaiSachs as $loaiSach)
                            <option value="{{ $loaiSach->id }}">{{ $loaiSach->ten_loai_sach }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="nha_xuat_ban_id" class="form-label">Nhà Xuất Bản</label>
                        <select class="form-control" id="nha_xuat_ban_id" name="nha_xuat_ban_id" required>
                            <option value="">Chọn nhà xuất bản</option>
                            @foreach($nhaXuatBans as $nhaXuatBan)
                            <option value="{{ $nhaXuatBan->id }}">{{ $nhaXuatBan->ten_nha_xuat_ban }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="ten_sach" class="form-label">Tên sách</label>
                        <input type="text" class="form-control" id="ten_sach" name="ten_sach" required>
                    </div>
                    <div class="col-md-6">
                        <label for="hinh_anh_id" class="form-label">Hình ảnh</label>
                        <input type="file" class="form-control" id="hinh_anh_id" name="hinh_anh_id">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="kich_co" class="form-label">Kích cỡ</label>
                        <input type="text" class="form-control" id="kich_co" name="kich_co">
                    </div>
                    <div class="col-md-3">
                        <label for="can_nang" class="form-label">Cân nặng</label>
                        <input type="text" class="form-control" id="can_nang" name="can_nang">
                    </div>
                    <div class="col-md-3">
                        <label for="so_trang" class="form-label">Số trang</label>
                        <input type="text" class="form-control" id="so_trang" name="so_trang">
                    </div>
                    <div class="col-md-3">
                        <label for="ngon_ngu" class="form-label">Ngôn ngữ</label>
                        <input type="text" class="form-control" id="ngon_ngu" name="ngon_ngu">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="ngay_phat_hanh" class="form-label">Ngày phát hành</label>
                        <input type="date" class="form-control" id="ngay_phat_hanh" name="ngay_phat_hanh" required>
                    </div>
                    <div class="col-md-3">
                        <label for="gia" class="form-label">Giá</label>
                        <input type="text" class="form-control" id="gia" name="gia" required>
                    </div>
                    <div class="col-md-3">
                        <label for="gia_goc" class="form-label">Giá gốc</label>
                        <input type="text" class="form-control" id="gia_goc" name="gia_goc" required>
                    </div>
                    <div class="col-md-3">
                        <label for="gia_sach_dien_tu" class="form-label">Giá sách điện tử</label>
                        <input type="text" class="form-control" id="gia_sach_dien_tu" name="gia_sach_dien_tu">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="so_luong" class="form-label">Số lượng</label>
                        <input type="text" class="form-control" id="so_luong" name="so_luong" required>
                    </div>
                    <div class="col-md-9">
                        <label for="mo_ta" class="form-label">Mô tả</label>
                        <textarea class="form-control" id="mo_ta" name="mo_ta" rows="3"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="danh_gia" class="form-label">Đánh giá</label>
                        <input type="text" class="form-control" id="danh_gia" name="danh_gia">
                    </div>
                    <div class="col-md-6">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        // Tạo slug khi blur khỏi trường tên sách
        $('#ten_sach').on('blur', function() {
            var title = this.value.trim();
            if (title === '') {
                $('#slug').val('');
            } else {
                var slug = slugify(title);
                $('#slug').val(slug);
            }
        });

        // Hàm tạo slug từ tiêu đề
        function slugify(text) {
            text = text.toLowerCase();
            text = text.normalize('NFD').replace(/[\u0300-\u036f]/g, '');
            text = text.replace(/đ/g, 'd');
            text = text.replace(/[^a-z0-9]+/g, '-');
            text = text.replace(/^-|-$/g, '');
            return text;
        }
    });
</script>
@endsection
