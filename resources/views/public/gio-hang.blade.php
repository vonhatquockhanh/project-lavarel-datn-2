@extends('layouts.master')
@section('title')
    Giỏ hàng
@endsection

@section('content')
<div class="container">
    <div class="card my-4">
        <div class="card-header custom-card-bg text-white">
            <h4><i class="fas fa-shopping-cart"></i> Giỏ hàng</h4>
        </div>
        <div class="card-body">
            @include('layouts.includes.flash-message')
            @if(count($gioHang))
            <div id="cart-content">

                <table class="table table-borderless">
                <thead class="bg-light">
                <tr>
                <th></th>
                <th scope="col" width="100">Hình ảnh</th>
                <th scope="col">Tên sách</th>
                <th scope="col" width="120">Số lượng tồn</th>
                <th scope="col" width="140">Giá</th>
                <th scope="col" width="100">Số lượng mua</th>
                <th scope="col" width="170">Tổng cộng</th>
                </tr>
                </thead>
                    @foreach($gioHang as $item)
                    <tbody>
                    <tr class="border-bottom">
                    <td><a href="javascript:void(0);" class="text-danger remove-cart-item" data-id="{{ $item['id'] }}" title="Remove cart item"><i class="fas fa-times"></i></a></td>

                    <td><img src="{{ asset('assets/img/'.$item['options']['image']) }}" alt="" width="50"></td>

                    <td>{{ $item['name'] }}</td>

                    <td class="so-luong-ton">{{ $item['options']['so_luong_ton'] }}</td>

                    <td>{{ number_format($item['price'], 0, ',', '.') }} VNĐ</td>

                    <td>
                    <span class="quantity-input mr-2 mb-2 d-flex flex-row">
                        <a href="javascript:void(0);" class="cart-minus" data-id="{{ $item['id'] }}" data-qty="{{ $item['qty'] }}">-</a>
                        <input title="QTY" name="quantity" type="text" value="{{ $item['qty'] }}" class="qty-text" readonly>
                        <a href="javascript:void(0);" class="cart-plus" data-id="{{ $item['id'] }}" data-qty="{{ $item['qty'] }}" data-stock="{{ $item['options']['so_luong_ton'] }}">+</a>
                    </span>
                    </td>

                    <td>{{ number_format($item['price'] * $item['qty'], 0, ',', '.') }} VNĐ</td>
                    </tr>
                    </tbody>
                    @endforeach
                <tbody>
                    <tr>
                        <td colspan="5"><a href="{{ route('tatCaSach') }}" class="text-primary">Tiếp tục mua sắm</a></td>
                        <td><strong>Tổng cộng</strong></td>
                        <td colspan="5">
                            <span class="total-amount-display" style="font-weight: bold; font-size: 1.2em; color: red; background-color: yellow;">
                                {{ number_format(collect($gioHang)->sum(function($item) {
                                        return $item['price'] * $item['qty'];
                                    }), 0, ',', '.') }} VNĐ
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td colspan="2">
                        <a href="{{ route('gioHang.xacNhanThanhToan') }}" class="btn btn-outline-danger btn-sm">Thủ tục thanh toán <i class="fas fa-long-arrow-alt-right"></i></a>
                        </td>
                    </tr>
                </tbody>
                </table>

            </div>
            @else
                <div class="alert alert-warning">Không tìm thấy mặt hàng nào trong giỏ hàng. <a href="{{ route('tatCaSach') }}"> Tiếp tục mua sắm</a></div>
            @endif
            <div id="empty-cart-alert" class="alert alert-warning">Không tìm thấy mặt hàng nào trong giỏ hàng. <a href="{{ route('tatCaSach') }}"> Tiếp tục mua sắm</a></div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="warningModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="warningModalLabel">Cảnh báo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Số lượng mua vượt quá số lượng tồn kho.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
// Giảm số lượng
$(document).on('click', '.cart-minus', function(event) {
    event.preventDefault();
    var $this = $(this);
    var id = $this.data('id');
    var qty = parseInt($this.data('qty'));

    if (qty > 1) {
        $.ajax({
            url: '{{ route("gioHang.giamDan") }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                id: id,
                qty: qty - 1
            },
            success: function(response) {
                if (response.success) {
                    $this.data('qty', qty - 1);
                    $this.siblings('.qty-text').val(qty - 1);
                    $this.siblings('.cart-plus').data('qty', qty - 1);
                    
                    // Cập nhật tổng cộng cho row
                    var rowTotal = (qty - 1) * parseInt($this.closest('tr').find('td:eq(4)').text().replace(/\D/g, ''));
                    $this.closest('tr').find('td:eq(6)').text(rowTotal.toLocaleString('vi-VN') + ' VNĐ');

                    // Cập nhật số lượng tồn
                    var row = $this.closest('tr');
                    var soLuongTon = parseInt(row.find('.so-luong-ton').text());
                    row.find('.so-luong-ton').text(soLuongTon + 1);

                    updateTotal();
                } else {
                    console.error('Error:', response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    }
});

// Tăng số lượng
$(document).on('click', '.cart-plus', function(event) {
    event.preventDefault();
    var $this = $(this);
    var id = $this.data('id');
    var qty = parseInt($this.data('qty'));

    var rowMain = $this.closest('tr');
    // var soLuongTon = parseInt(row.find('.so-luong-ton').text());
    var stock = parseInt(rowMain.find('.so-luong-ton').text());

    var newQty = qty + 1;

    if (stock > -1) {
        $.ajax({
            url: '{{ route("gioHang.tangDan") }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                id: id,
                qty: newQty
            },
            success: function(response) {
                if (response.success) {
                    $this.data('qty', newQty);
                    $this.siblings('.qty-text').val(newQty);
                    $this.siblings('.cart-minus').data('qty', newQty);

                     // Cập nhật tổng cộng cho row
                    var rowTotal = newQty * parseInt($this.closest('tr').find('td:eq(4)').text().replace(/\D/g, ''));
                    $this.closest('tr').find('td:eq(6)').text(rowTotal.toLocaleString('vi-VN') + ' VNĐ');

                    // Cập nhật số lượng tồn
                    var row = $this.closest('tr');
                    var soLuongTon = parseInt(row.find('.so-luong-ton').text());
                    row.find('.so-luong-ton').text(soLuongTon - 1);

                    updateTotal();
                } else {
                    $('#warningModal').modal('show');
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    } else {
        $('#warningModal').modal('show');
    }
});

// Xóa sản phẩm
$(document).on('click', '.remove-cart-item', function(event) {
    event.preventDefault();
    var $this = $(this);
    var id = $this.data('id');

    $.ajax({
        url: '{{ route("gioHang.xoa") }}',
        method: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
            id: id
        },
        success: function(response) {
            $this.closest('tr').remove();
             // Cập nhật tổng cộng
             updateTotal();

            // Kiểm tra nếu không còn sản phẩm nào trong giỏ hàng
            if ($('#cart-content tbody tr.border-bottom').length === 0) {
                $('#cart-content').hide();
                $('#empty-cart-alert').show();
            }
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', status, error);
        }
    });
});

// Hàm cập nhật tổng cộng
function updateTotal() {
    var total = 0;
    $('tbody tr').each(function() {
        var qty = parseInt($(this).find('.qty-text').val());
        var price = parseInt($(this).find('td:eq(4)').text().replace(/\D/g, ''));
        if (qty && price) {
            total += qty * price;
        }
    });
    $('.total-amount').text(total.toLocaleString('vi-VN') + ' VNĐ');
    // Update tổng cộng ở phần thanh toán
    $('.total-amount-display').text(total.toLocaleString('vi-VN') + ' VNĐ');
}

</script>

@endsection
