<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class SachTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('sach')->truncate();

        $faker = Faker::create();
        $books = [];

        for ($i = 1; $i <= 50; $i++) {
            $init_price = rand(25000, 40000);
            $discount_rate = rand(0, 5);
            $count_discount = (($init_price * $discount_rate) / 100);
            $final_price = $init_price - $count_discount;

            $books[] = [
                'id'             => $i,
                'loai_sach_id'       => rand(1, 6),
                'tac_gia_id'         => rand(1, 2),
                'nha_xuat_ban_id'    => rand(1, 10),
                'hinh_anh_id'        => '1',
                'ten_sach'           => $faker->sentence(rand(8, 12)),
                'kich_co'            => $faker->randomElement(['13x19 cm', '14x20 cm', '15x21 cm']),
                'can_nang'           => $faker->randomFloat(2, 0.2, 1.5),
                'so_trang'           => rand(100, 500),
                'ngon_ngu'           => $faker->randomElement(['Tiếng Việt', 'Tiếng Anh']),
                'ngay_phat_hanh'     => $faker->date(),
                'gia'                => $final_price,
                'gia_goc'            => $init_price,
                'gia_sach_dien_tu'   => rand(10000, 20000),
                'so_luong'           => rand(10, 40),
                'mo_ta' => $faker->optional()->text(100),
                'danh_gia'           => $faker->randomFloat(1, 0, 5),
                'slug'               => $faker->slug(rand(2, 4)),
                'created_at'         => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'         => Carbon::now()->format('Y-m-d H:i:s')
            ];
        }

        try {
            DB::table('sach')->insert($books);
        } catch (QueryException $e) {
            echo "Error inserting data: " . $e->getMessage();
        }
    }
}
