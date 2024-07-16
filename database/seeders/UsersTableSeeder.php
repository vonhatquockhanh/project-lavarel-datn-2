<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset users table
        DB::table('users')->truncate();

        // insert 3 users
        DB::table('users')->insert([
            [
                'name' => 'Quốc Khang',
                'email' => 'quockhangad@gmail.com',
                'address' => 'Sóc Trăng',
                'password'=> bcrypt('secret'),
                'role_id'=> 1,
                'is_active'=> 1
            ],
            [
                'name'=> 'Mai Liên',
                'email'=> 'mailien@gmail.com',
                'address' => 'TP HCM',
                'password'=> bcrypt('secret'),
                'role_id'=> 2,
                'is_active'=> 1
            ],
        ]);
    }
}
