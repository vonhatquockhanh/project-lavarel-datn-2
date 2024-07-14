@extends('layouts.admin-master')

@section('content')
<div class="card mt-4">
    <div class="card-body">
    <h3 class="card-title">Thông tin đơn hàng</h3>
        <form id="updateOrderForm" method="POST" action="{{ url('/don-hang/cap-nhat') }}">   
            @csrf         
            <!-- Master Data -->
            <div class="form-group">
                <label for="id">Mã đơn hàng</label>
                <input type="text" class="form-control" id="id" name="id_display" value="{{ $donHang->id }}" disabled>
                <input type="hidden" name="id" value="{{ $donHang->id }}">
            </div>

            <div class="form-group">
                <label for="khach_hang_ten_dang_nhap">Tên khách hàng<span class="text-danger"> *</span></label>
                <input type="text" class="form-control" id="khach_hang_ten_dang_nhap" name="khach_hang_ten_dang_nhap" value="{{ $donHang->khach_hang_ten_dang_nhap }}" required>
            </div>

            <div class="form-group">
                <label for="so_dien_thoai">Số điện thoại <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="so_dien_thoai" name="so_dien_thoai" value="{{ $donHang->so_dien_thoai }}" required>
            </div>

            <div class="form-group">
                <label for="dia_chi">Địa chỉ <span class="text-danger">*</span></label>
                <textarea type="text" class="form-control" id="dia_chi" name="dia_chi" cols="30" rows="3">{{ $donHang->dia_chi }}</textarea>
            </div>

            <div class="form-group">
                <label for="ghi_chu">Ghi chú<span class="text-danger"></span></label>
                <textarea type="text" class="form-control" id="ghi_chu" name="ghi_chu" cols="30" rows="3" disabled>{{ $donHang->ghi_chu }}</textarea>
            </div>
            
            <div class="form-group">
                <label for="phuong_thuc_thanh_toan" class="label-inline">Phương thức thanh toán <span class="text-danger">*</span></label>
                <select id="phuong_thuc_thanh_toan" name="phuong_thuc_thanh_toan" class="form-control inline-select" required>
                    <option value="1" {{ $donHang->phuong_thuc_thanh_toan == 1 ? 'selected' : '' }}>Tiền mặt</option>
                    <option value="2" {{ $donHang->phuong_thuc_thanh_toan == 2 ? 'selected' : '' }}>Chuyển khoản</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="tong_tien_thanh_toan">Tổng tiền thanh toán</label> 
                <input type="text" class="form-control" id="tong_tien_thanh_toan" name="tong_tien_thanh_toan" value="{{number_format($donHang->tong_tien_thanh_toan, 0, ',', '.') }} VNĐ" required disabled>
            </div>
            
            <div class="form-group">
                <label for="trang_thai">Trạng thái đơn hàng <span class="text-danger">*</span></label>
                <select id="trang_thai" name="trang_thai" class="form-control" required>
                    <option value="1" {{ $donHang->trang_thai == 1 ? 'selected' : '' }}>Đang chờ xử lý</option>
                    <option value="2" {{ $donHang->trang_thai == 2 ? 'selected' : '' }}>Đang giao hàng</option>
                    <option value="3" {{ $donHang->trang_thai == 3 ? 'selected' : '' }}>Hoàn thành</option>
                    <option value="4" {{ $donHang->trang_thai == 4 ? 'selected' : '' }}>Đã hủy</option>
                </select>
            </div>

            <div class="form-group">
                <label for="trang_thai">Trạng thái giao hàng: </label>
                 @if($donHang->trang_thai_thanh_toan == 1)
                                        <b><span style="font-weight: bold; font-size: 1.2em; color: #28a745; background-color: #d4edda;">Đã nhận hàng</span></b>
                                    @else
                                        <b><span style="font-weight: bold; font-size: 1.2em; color: red; background-color: yellow;">Chưa nhận hàng</span></b>
                                    @endif
            </div>
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmModal">Cập nhật đơn hàng</button>
        </form>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmModalLabel">Xác nhận cập nhật đơn hàng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Bạn có chắc chắn muốn cập nhật đơn hàng này không?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-primary" id="confirmUpdate">OK</button>
      </div>
    </div>
  </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <h3 class="card-title">Chi tiết đơn hàng</h3>

        <div class="table-responsive">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">Tên sách</th>
                        <th scope="col" width="150">Giá</th>
                        <th scope="col" width="100">Số lượng</th>
                        <th scope="col" width="150">Tổng cộng</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $tongTienSanPham = 0;
                    @endphp
                    @foreach($donHang->chiTietDonHang as $ctDonHang)
                    @php
                        $tongTienSanPham += $ctDonHang->gia * $ctDonHang->so_luong;
                    @endphp
                    <tr>
                        <td>{{$ctDonHang->sach->ten_sach}}</td>
                        <td>{{number_format($ctDonHang->gia, 0, ',', '.')}} VNĐ</td>
                        <td>{{$ctDonHang->so_luong}}</td>
                        <td>{{number_format($ctDonHang->gia * $ctDonHang->so_luong, 0, ',', '.')}} VNĐ</td>
                    </tr>
                    @endforeach
                    @php
                        $chiPhiVanChuyen = $donHang->tong_tien_thanh_toan - $tongTienSanPham;
                    @endphp
                    <tr>
                        <td colspan="3" class="text-right"><strong>Chi phí vận chuyển</strong></td>
                        <td class="nowrap"><span style="font-weight: bold; font-size: 1em; color: red; background-color: yellow;">{{number_format($chiPhiVanChuyen, 0, ',', '.')}} VNĐ</span></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right"><strong>Thành tiền</strong></td>
                        <td class="nowrap"><span style="font-weight: bold; font-size: 1.2em; color: red; background-color: yellow;">{{number_format($donHang->tong_tien_thanh_toan, 0, ',', '.')}} VNĐ</span></td>
                    </tr>
                </tbody>
            </table>
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
    document.getElementById('confirmUpdate').addEventListener('click', function() {
        document.getElementById('updateOrderForm').submit();
    });
</script>

@endsection
