<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class TacGiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tac_gia')->truncate();

        $faker = Faker::create();

        $tacGia = [];

        for ($i = 1; $i <= 7; $i++) 
        {
            $tacGia[] = [
                'id'             => $i,
                'ten_tac_gia'    => $faker->name,
                'ngay_sinh'      => $faker->date(),
                'quoc_tich'      => $faker->randomElement(['Việt Nam', 'Hoa Kỳ', 'Anh', 'Pháp', 'Đức']),
                'dia_chi'        => $faker->address,
                'created_at'     => Carbon::now()->format('Y-m-d H:i:s')
            ];
        }

        DB::table('tac_gia')->insert($tacGia);
    }
}
