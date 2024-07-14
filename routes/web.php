<?php
use App\Http\Controllers\Admin\TacGiaController;
use App\Http\Controllers\Admin\LoaiSachController;
use App\Http\Controllers\Admin\KhachHangController;
use App\Http\Controllers\Admin\NhaXuatBanController;
use App\Http\Controllers\Admin\ComboController;
use App\Http\Controllers\Admin\PhieuNhapHangController;
use App\Http\Controllers\Admin\DanhGiaController;
use App\Http\Controllers\Admin\DonHangController;
use App\Http\Controllers\Admin\SachController;


Route::get('/', 'TrangChuController@index')->name('trang-chu-sach');
Route::get('/tatCaSach', 'TrangChuController@tatCaSach')->name('tatCaSach');
Route::get('/loaiSach/{loaiSach}', 'TrangChuController@loaiSach')->name('loaiSach');
Route::get('/tacGia/{tacGia}', 'TrangChuController@tacGia')->name('tacGia');
Route::get('/sach/{sach}', 'TrangChuController@chiTietSach')->name('chi-tiet-sach');

Route::post('/sach/{book}/danhGia', 'DanhGiaSachController@store')->name('book.review');

Route::post('/gioHang/them', 'GioHangController@them')->name('gioHang.them');
Route::get('/gioHang/gioHang', 'GioHangController@gioHang')->name('gioHang');

// Route::get('/gioHang/xoa/{id}', 'GioHangController@xoa')->name('gioHang.xoa');
// Route::get('/gioHang/tangDan/{id}/{qty}/{sach_id}', 'GioHangController@tangDan')->name('gioHang.tangDan');
// Route::get('/gioHang/giamDan/{id}/{qty}', 'GioHangController@giamDan')->name('gioHang.giamDan');

Route::post('/gio-hang/giam-dan', 'GioHangController@giamDan')->name('gioHang.giamDan');
Route::post('/gio-hang/tang-dan', 'GioHangController@tangDan')->name('gioHang.tangDan');
Route::post('/gio-hang/xoa', 'GioHangController@xoa')->name('gioHang.xoa');


Route::post('/gioHang/thucThi', 'XacNhanThanhToanController@store')->name('gioHang.thucThi');
Route::get('/gioHang/xacNhanThanhToan', 'XacNhanThanhToanController@index')->name('gioHang.xacNhanThanhToan');

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/

// Admin Route group
Route::group(['middleware' => 'admin'], function (){
    Route::get('/admin-home', 'Admin\AdminBaseController@index')->name('admin.home');

    Route::put('/admin/books/restore/{id}', 'Admin\AdminBooksController@restore')
        ->name('book.restore');
    Route::delete('admin/books/forceDelete/{id}', 'Admin\AdminBooksController@forceDelete')
        ->name('book.forceDelete');
    Route::get('/trash-books', 'Admin\AdminBooksController@trashBooks')
        ->name('admin.trash-books');
    Route::get('admin/discount-books', 'Admin\AdminBooksController@discountBooks')->name('admin.discountBooks');

    Route::resource('/admin/books', 'Admin\AdminBooksController');
    Route::resource('/admin/categories', 'Admin\AdminCategoriesController');
    Route::resource('/admin/authors', 'Admin\AdminAuthorsController');
    Route::resource('/admin/users', 'Admin\AdminUsersController');
    Route::resource('/admin/orders', 'Admin\AdminOrdersController');
    Route::resource('/admin/reviews', 'Admin\AdminReviewsController');

    Route::get('/tac-gia/danh-sach', [TacGiaController::class, 'danhSach'])->name('admin.tac-gia.danh-sach');
Route::get('/tac-gia/them-moi', [TacGiaController::class, 'themMoi'])->name('admin.tac-gia.them-moi');
Route::post('/tac-gia/xu-ly-them-moi', [TacGiaController::class, 'xuLyThemMoi'])->name('admin.tac-gia.xu-ly-them-moi');
Route::get('/tac-gia/cap-nhat/{id}', [TacGiaController::class, 'capNhat'])->name('admin.tac-gia.cap-nhat');
Route::post('/tac-gia/cap-nhat/{id}', [TacGiaController::class, 'xuLyCapNhat'])->name('admin.tac-gia.xu-ly-cap-nhat');
Route::delete('/tac-gia/xoa/{id}', [TacGiaController::class, 'xoa'])->name('admin.tac-gia.xoa');
Route::get('/tac-gia/tim-kiem', [TacGiaController::class, 'timKiem'])->name('admin.tac-gia.tim-kiem');
//Combo
Route::get('/combo/danh-sach', [ComboController::class, 'DanhSach'])->name('admin.combo.danh-sach');
Route::get('/combo/them-moi', [ComboController::class, 'ThemMoi'])->name('admin.combo.them-moi');
Route::post('/combo/them-moi', [ComboController::class, 'XuLyThemMoi'])->name('admin.combo.xu-ly-them-moi');
Route::get('/combo/cap-nhat/{id}', [ComboController::class, 'CapNhat'])->name('admin.combo.cap-nhat');
Route::post('/combo/cap-nhat/{id}', [ComboController::class, 'XuLyCapNhat'])->name('admin.combo.xu-ly-cap-nhat');
Route::delete('/combo/xoa/{id}', [ComboController::class, 'Xoa'])->name('admin.combo.xoa');
Route::get('/combo/tim-kiem',[ComboController::class,'timKiem'])->name('admin.combo.tim-kiem');
//Khách hàng
Route::get('/khach-hang/them-moi', [KhachHangController::class, 'themMoi'])->name('admin.khach-hang.them-moi');
Route::post('/khach-hang/them-moi', [KhachHangController::class, 'xuLyThemMoi'])->name('admin.khach-hang.xu-ly-them-moi');
Route::get('/khach-hang/danh-sach', [KhachHangController::class, 'danhSach'])->name('admin.khach-hang.danh-sach');
Route::get('/khach-hang/cap-nhat/{ten_dang_nhap}', [KhachHangController::class, 'capNhat'])->name('admin.khach-hang.cap-nhat');
Route::put('/khach-hang/cap-nhat/{ten_dang_nhap}', [KhachHangController::class, 'xuLyCapNhat'])->name('admin.khach-hang.xu-ly-cap-nhat');
Route::delete('/khach-hang/xoa/{ten_dang_nhap}', [KhachHangController::class, 'xoa'])->name('admin.khach-hang.xoa');
Route::get('/khach-hang/tim-kiem', [KhachHangController::class, 'timKiem'])->name('admin.khach-hang.tim-kiem');
// Loại sách
Route::get('/loai-sach/them-moi', [LoaiSachController::class, 'themMoi'])->name('admin.loai-sach.them-moi');
Route::post('/loai-sach/xu-ly-them-moi', [LoaiSachController::class, 'xuLyThemMoi'])->name('admin.loai-sach.xu-ly-them-moi');
Route::get('/loai-sach', [LoaiSachController::class, 'danhSach'])->name('admin.loai-sach.danh-sach');
Route::get('/loai-sach/cap-nhat/{id}', [LoaiSachController::class, 'capNhat'])->name('admin.loai-sach.cap-nhat');
Route::post('/loai-sach/xu-ly-cap-nhat/{id}', [LoaiSachController::class, 'xuLyCapNhat'])->name('admin.loai-sach.xu-ly-cap-nhat');
Route::get('/loai-sach/xoa/{id}', [LoaiSachController::class, 'xoa'])->name('admin.loai-sach.xoa');
Route::get('/loai-sach/thung-rac', [LoaiSachController::class, 'thungRac'])->name('admin.loai-sach.thung-rac');
Route::get('/loai-sach/khoi-phuc/{id}', [LoaiSachController::class, 'khoiPhuc'])->name('admin.loai-sach.khoi-phuc');
Route::get('/loai-sach/xoa-vinh-vien/{id}', [LoaiSachController::class, 'xoaVinhVien'])->name('admin.loai-sach.xoa-vinh-vien');
Route::get('/loai-sach/tim-kiem', [LoaiSachController::class, 'timKiem'])->name('admin.loai-sach.tim-kiem');
// Nhà Xuất Bản
Route::get('/nha-xuat-ban', [NhaXuatBanController::class, 'danhSach'])->name('admin.nha-xuat-ban.danh-sach');
Route::get('/nha-xuat-ban/them-moi', [NhaXuatBanController::class, 'themMoi'])->name('admin.nha-xuat-ban.them-moi');
Route::post('/nha-xuat-ban/xu-ly-them-moi', [NhaXuatBanController::class, 'xuLyThemMoi'])->name('admin.nha-xuat-ban.xu-ly-them-moi');
Route::get('/nha-xuat-ban/cap-nhat/{id}', [NhaXuatBanController::class, 'capNhat'])->name('admin.nha-xuat-ban.cap-nhat');
Route::post('/nha-xuat-ban/cap-nhat/{id}', [NhaXuatBanController::class, 'xuLyCapNhat'])->name('admin.nha-xuat-ban.cap-nhat');
Route::delete('/nha-xuat-ban/xoa/{id}', [NhaXuatBanController::class, 'xoa'])->name('admin.nha-xuat-ban.xoa');
Route::get('/nha-xuat-ban/tim-kiem', [NhaXuatBanController::class, 'timKiem'])->name('admin.nha-xuat-ban.tim-kiem');
//Phiếu nhập hàng
Route::prefix('phieu-nhap-hang')->group(function () {
    Route::get('/', [PhieuNhapHangController::class, 'danhSach'])->name('admin.phieu-nhap-hang.danh-sach');
    Route::get('/them-moi', [PhieuNhapHangController::class, 'themMoi'])->name('admin.phieu-nhap-hang.them-moi');
    Route::post('/xu-ly-them-moi', [PhieuNhapHangController::class, 'xuLyThemMoi'])->name('admin.phieu-nhap-hang.xu-ly-them-moi');
    Route::get('/chi-tiet/{id}', [PhieuNhapHangController::class, 'chiTiet'])->name('admin.phieu-nhap-hang.chi-tiet');
    Route::post('/chi-tiet-phieu-nhap/store', [PhieuNhapHangController::class, 'storeChiTiet'])->name('admin.phieu-nhap-hang.chi-tiet.store');
    Route::get('/xoa/{id}', [PhieuNhapHangController::class, 'xoa'])->name('admin.phieu-nhap-hang.xoa');
    Route::delete('/phieu-nhap-hang/chi-tiet/{id}', [PhieuNhapHangController::class, 'xoaChiTiet'])->name('admin.phieu-nhap-hang.chi-tiet.xoa');
});
//đánh Giá Combo
Route::prefix('danh-gia-combo')->group(function () {
    Route::get('/', [DanhGiaController::class, 'danhSachDanhGiaCombo'])->name('admin.danh-gia-combo.danh-sach');
    Route::delete('/xoa/{id}', [DanhGiaController::class, 'xoaDanhGiaCombo'])->name('admin.danh-gia-combo.xoa');
});
//Đánh Giá Sách
Route::prefix('danh-gia-sach')->group(function () {
    Route::get('/', [DanhGiaController::class, 'danhSachDanhGiaSach'])->name('admin.danh-gia-sach.danh-sach');
    Route::delete('/xoa/{id}', [DanhGiaController::class, 'xoaDanhGiaSach'])->name('admin.danh-gia-sach.xoa');
});
Route::prefix('don-hang')->group(function(){
    // Route::get('/don-hang/danh-sach',[DonHangController::class,'danhSach'])->name('admin.don-hang.danh-sach');
    Route::get('/danh-sach',[DonHangController::class,'danhSach'])->name('admin.don-hang.danh-sach');
    Route::get('/them-moi', [DonHangController::class, 'themMoi'])->name('admin.don-hang.them-moi');
    Route::post('/them-moi', [DonHangController::class, 'xuLyThemMoi'])->name('admin.don-hang.xu-ly-them-moi');
    Route::get('/chi-tiet-don-hang/{id}', [DonHangController::class, 'chiTiet'])->name('admin.don-hang.chi-tiet');
    Route::get('/xoa/{id}', [DonHangController::class, 'xoa'])->name('admin.don-hang.xoa');
    Route::post('chi-tiet/store', [DonHangController::class, 'store'])->name('admin.don-hang.chi-tiet.store');
    // Route::delete('/don-hang/chi-tiet/{id}', [DonHangController::class, 'xoaChiTiet'])->name('admin.don-hang.chi-tiet.xoa');
    Route::delete('/chi-tiet/{id}', [DonHangController::class, 'xoaChiTiet'])->name('admin.don-hang.chi-tiet.xoa');
    // Route::get('/don-hang/tim-kiem', [DonHangController::class, 'timKiem'])->name('admin.don-hang.tim-kiem');
    Route::get('/tim-kiem', [DonHangController::class, 'timKiem'])->name('admin.don-hang.tim-kiem');
    Route::post('/cap-nhat', [DonHangController::class, 'updateThongTinDonHang'])->name('admin.don-hang.update');
});
Route::prefix('sach')->group(function () {
    Route::get('/', [SachController::class, 'danhSach'])->name('admin.sach.danh-sach');
    Route::get('/admin/sach/them-moi', [SachController::class, 'themMoi'])->name('admin.sach.them-moi');
    Route::post('/xu-ly-them-moi', [SachController::class, 'xuLyThemMoi'])->name('admin.sach.xu-ly-them-moi');
    Route::get('/cap-nhat/{id}', [SachController::class, 'capNhat'])->name('admin.sach.cap-nhat');
    Route::post('/cap-nhat/{id}', [SachController::class, 'xuLyCapNhat'])->name('admin.sach.xu-ly-cap-nhat');
    Route::delete('/xoa/{id}', [SachController::class, 'xoa'])->name('admin.sach.xoa');
    Route::get('/tim-kiem',[SachController::class,'timKiem'])->name('admin.sach.tim-kiem');
    Route::get('/sach/{id}', [SachController::class, 'chiTiet'])->name('admin.sach.chi-tiet');
});
});
// End of admin route

// Users route group
Route::group(['middleware' => 'user'], function (){
    Route::get('/user-trang-chu', 'Users\UsersBaseController@index')->name('user.trang-chu');

    Route::get('/don-hang-cua-toi', 'Users\DonHangKhachHangController@donHangCuaToi')->name('user.don-hang');
    Route::get('/don-hang/chi-tiet/{id}', 'Users\DonHangKhachHangController@chiTietDonHang')->name('user.chi-tiet-don-hang');

    Route::get('/danh-gia-cua-toi', 'Users\DanhGiaKhachHangController@danhGiaCuaToi')->name('user.danh-gia-cua-toi');
    Route::delete('/danh-gia/{id}', 'Users\DanhGiaKhachHangController@xoaDanhGia')->name('danhGia.xoa');
});
// End of users route

Route::get('/don-hang/cap-nhat-trang-thai-don-hang/{id}', 'Users\DonHangKhachHangController@daNhanHang')->name('user.cap-nhat-trang-thai-don-hang');

Route::get('/logout', 'CustomLogoutController@logout')->name('custom.logout');
//Tác giả
