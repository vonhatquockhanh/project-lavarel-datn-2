<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class KhuVucVanChuyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('khu_vuc_van_chuyen')->truncate();

        DB::table('khu_vuc_van_chuyen')->insert([
            [
                'id' => '1',
                'don_hang_id' => '1',
                'ten_khu_vuc' => 'Hà Nội',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'don_hang_id' => '2',
                'ten_khu_vuc' => 'Hồ Chí Minh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3',
                'don_hang_id' => '3',
                'ten_khu_vuc' => 'Đà Nẵng',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '4',
                'don_hang_id' => '4',
                'ten_khu_vuc' => 'Cần Thơ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}