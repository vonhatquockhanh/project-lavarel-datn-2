<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();

        DB::table('roles')->insert([
            ['name' => 'Admin'],
            ['name' => 'User']
        ]);
    }
}
