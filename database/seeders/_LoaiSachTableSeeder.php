<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class LoaiSachTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loai_sach')->truncate();

        $faker = Faker::create();

        $loaiSach = [];

        for ($i = 1; $i <= 7; $i++) // Tạo 7 loại sách
        {
            $tenLoaiSach = $faker->unique()->word;
            $loaiSach[] = [
                'id'             => $i,
                'ten_loai_sach'  => ucfirst($tenLoaiSach),
                'slug'           => $faker->slug,
                'created_at'     => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'     => Carbon::now()->format('Y-m-d H:i:s'),
            ];
        }

        DB::table('loai_sach')->insert($loaiSach);
    }
}
