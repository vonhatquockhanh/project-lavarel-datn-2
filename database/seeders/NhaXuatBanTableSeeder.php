<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class NhaXuatBanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    DB::table('nha_xuat_ban')->truncate();

    $nhaXuatBan = [
        [
            'id' => 1,
            'ten_nha_xuat_ban' => 'Nhà xuất bản Trẻ',
            'so_dien_thoai' => '02839306938',
            'email' => 'info@nxbtre.com.vn',
            'dia_chi' => '161B Lý Chính Thắng, P.7, Q.3, TP.HCM',
            'mo_ta' => 'Trang web: [Nhà xuất bản Trẻ](https://www.nxbtre.com.vn/)',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'id' => 2,
            'ten_nha_xuat_ban' => 'Nhà xuất bản Kim Đồng',
            'so_dien_thoai' => '(024) 39428633',
            'email' => 'info@nxbkimdong.com.vn',
            'dia_chi' => '55 Quang Trung, Nguyễn Du, Hai Bà Trưng, Hà Nội',
            'mo_ta' => 'Trang web: [Nhà xuất bản Kim Đồng](https://www.nxbkimdong.com.vn/)',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'id' => 3,
            'ten_nha_xuat_ban' => 'Nhà xuất bản Giáo dục Việt Nam',
            'so_dien_thoai' => '(024) 38220801',
            'email' => 'nxb@nxbgd.vn',
            'dia_chi' => '81 Trần Hưng Đạo, Hoàn Kiếm, Hà Nội',
            'mo_ta' => 'Trang web: [Nhà xuất bản Giáo dục Việt Nam](https://www.nxbgd.vn/)',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'id' => 4,
            'ten_nha_xuat_ban' => 'Nhà xuất bản Lao động',
            'so_dien_thoai' => '02439360791',
            'email' => 'nxblaodong@nxblaodong.vn',
            'dia_chi' => '175 Giảng Võ, Đống Đa, Hà Nội',
            'mo_ta' => 'Trang web: [Nhà xuất bản Lao động](http://nxblaodong.vn/)',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'id' => 5,
            'ten_nha_xuat_ban' => 'Nhà xuất bản Phụ nữ Việt Nam',
            'so_dien_thoai' => '02439433764',
            'email' => 'info@nxbphunu.vn',
            'dia_chi' => '39 Hàng Chuối, Hai Bà Trưng, Hà Nội',
            'mo_ta' => 'Trang web: [Nhà xuất bản Phụ nữ Việt Nam](http://nxbphunu.vn/)',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'id' => 6,
            'ten_nha_xuat_ban' => 'Nhà xuất bản Tổng hợp Thành phố Hồ Chí Minh',
            'so_dien_thoai' => '02838298900',
            'email' => 'info@nxbtphcm.gov.vn',
            'dia_chi' => '62 Nguyễn Thị Minh Khai, Quận 1, TP.HCM',
            'mo_ta' => 'Trang web: [Nhà xuất bản Tổng hợp Thành phố Hồ Chí Minh](http://www.nxbhcm.com.vn/)',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'id' => 7,
            'ten_nha_xuat_ban' => 'Nhà xuất bản Văn hóa - Văn nghệ',
            'so_dien_thoai' => '02838229883',
            'email' => 'nxbvhvn@gmail.com',
            'dia_chi' => '88-90 Ký Con, Quận 1, TP.HCM',
            'mo_ta' => 'Trang web: [Nhà xuất bản Văn hóa - Văn nghệ](http://nxbvietnam.vn/)',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'id' => 8,
            'ten_nha_xuat_ban' => 'Nhà xuất bản Hội Nhà Văn',
            'so_dien_thoai' => '02439346372',
            'email' => 'hoinhanvan@nxbhvn.vn',
            'dia_chi' => '65 Nguyễn Du, Hai Bà Trưng, Hà Nội',
            'mo_ta' => 'Trang web: [Nhà xuất bản Hội Nhà Văn](http://nxbhvn.vn/)',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'id' => 9,
            'ten_nha_xuat_ban' => 'Nhà xuất bản Thông tin và Truyền thông',
            'so_dien_thoai' => '02438266968',
            'email' => 'info@nxbtnmt.vn',
            'dia_chi' => '115 Trần Duy Hưng, Cầu Giấy, Hà Nội',
            'mo_ta' => 'Trang web: [Nhà xuất bản Thông tin và Truyền thông](http://nxbtnmt.vn/)',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'id' => 10,
            'ten_nha_xuat_ban' => 'Nhà xuất bản Thanh niên',
            'so_dien_thoai' => '02439433765',
            'email' => 'info@nxbthanhnien.vn',
            'dia_chi' => '92A Trần Hưng Đạo, Hoàn Kiếm, Hà Nội',
            'mo_ta' => 'Trang web: [Nhà xuất bản Thanh niên](http://nxbthanhnien.vn/)',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
    ];

    DB::table('nha_xuat_ban')->insert($nhaXuatBan);
}

}
