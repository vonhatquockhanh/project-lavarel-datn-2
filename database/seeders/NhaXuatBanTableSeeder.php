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

        $faker = Faker::create();

        $nhaXuatBan = [];
        $nhaXuatBanNames = [
            'Nhà xuất bản Trẻ',
            'Nhà xuất bản Kim Đồng',
            'Nhà xuất bản Giáo dục Việt Nam',
            'Nhà xuất bản Lao động',
            'Nhà xuất bản Phụ nữ Việt Nam',
            'Nhà xuất bản Tổng hợp Thành phố Hồ Chí Minh',
            'Nhà xuất bản Văn hóa - Văn nghệ',
            'Nhà xuất bản Hội Nhà Văn',
            'Nhà xuất bản Thông tin và Truyền thông',
            'Nhà xuất bản Thanh niên',
        ];

        for ($i = 1; $i <= 10; $i++) // Tạo 10 nhà xuất bản
        {
            $nhaXuatBan[] = [
                'id'                 => $i,
                'ten_nha_xuat_ban'   => $nhaXuatBanNames[$i - 1],
                'so_dien_thoai'      => $faker->unique()->phoneNumber,
                'email'              => $faker->unique()->safeEmail,
                'dia_chi'            => $faker->address,
                'mo_ta' => $faker->optional()->text(100),
                'created_at'         => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'         => Carbon::now()->format('Y-m-d H:i:s'),
            ];
        }

        DB::table('nha_xuat_ban')->insert($nhaXuatBan);
    }
}
