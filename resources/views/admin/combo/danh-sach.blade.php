@extends('layouts.admin-master')

@section('content')
    <div class="container-fluid">
        <!-- Tiêu đề trang -->
        <h1 class="h3 mb-2 text-gray-800">DANH SÁCH COMBO</h1>
        <div class="my-2 px-1">
            <div class="row">
                <div class="col-6">
                    <div>
                        <a href="{{ route('admin.combo.them-moi') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus-circle mr-1"></i>
                            Thêm Combo
                        </a>
                    </div>
                </div>
                <div class="col-6 text-right">
                </div>
            </div>
        </div>

        @if (session('thong_bao'))
            <div class="alert alert-success">{{ session('thong_bao') }}</div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách Combo</h6>
            </div>
            <div class="card-body">
                @if ($DSCombo->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên combo</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Hình ảnh</th>
                                    <th>Mô tả</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($DSCombo as $combo)
                                    <tr>
                                        <td>{{ $combo->id }}</td>
                                        <td>{{ $combo->ten_combo }}</td>
                                        <td>{{ $combo->gia }}</td>
                                        <td>{{ $combo->so_luong }}</td>
                                        <td><img src="{{ asset('storage/' . $combo->hinh_anh) }}" alt="Hình ảnh combo" style="width: 100px;"></td>
                                        <td>{{ $combo->mo_ta }}</td>
                                        <td>
                                            <a href="{{ route('admin.combo.cap-nhat', ['id' => $combo->id]) }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-edit"></i> Cập nhật
                                            </a>
                                            <form action="{{ route('admin.combo.xoa', ['id' => $combo->id]) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa combo này không?')">
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
                    <p>Không có combo nào.</p>
                @endif
            </div>
        </div>
    </div>
@endsection