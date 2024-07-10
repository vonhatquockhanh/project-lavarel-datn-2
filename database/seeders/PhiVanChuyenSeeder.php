<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class PhiVanChuyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phi_van_chuyen')->truncate();

        DB::table('phi_van_chuyen')->insert([
            [
                'id' => '1',
                'khu_vuc_van_chuyen_id' => '1',
                'phi_van_chuyen' => 30000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'khu_vuc_van_chuyen_id' => '2',
                'phi_van_chuyen' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3',
                'khu_vuc_van_chuyen_id' => '3',
                'phi_van_chuyen' => 40000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '4',
                'khu_vuc_van_chuyen_id' => '4',
                'phi_van_chuyen' => 45000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
