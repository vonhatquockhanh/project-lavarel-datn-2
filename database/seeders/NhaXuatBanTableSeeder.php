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

        for ($i = 1; $i <= 10; $i++) // Tạo 10 nhà xuất bản
        {
            $nhaXuatBan[] = [
                'id'                 => $i,
                'ten_nha_xuat_ban'   => $faker->unique()->company,
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
