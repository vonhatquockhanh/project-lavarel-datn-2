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

        DB::table('loai_sach')->insert([
            [
              "id" => 1,
              "ten_loai_sach" => "Lịch sử - truyền thống",
              "slug" => "lich-su-truyen-thong",
              "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
              "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 2,
              "ten_loai_sach" => "Văn học Việt Nam",
              "slug" => "van-hoc-viet-nam",
              "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
              "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 3,
              "ten_loai_sach" => "Văn học nước ngoài",
              "slug" => "van-hoc-nuoc-ngoai",
              "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
              "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 4,
              "ten_loai_sach" => "Kiến thức - khoa học",
              "slug" => "kien-thuc-khoa-hoc",
              "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
              "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 5,
              "ten_loai_sach" => "Truyện tranh",
              "slug" => "truyen-tranh",
              "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
              "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 6,
              "ten_loai_sach" => "Manga - comic - 2",
              "slug" => "manga-comic-2",
              "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
              "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 7,
              "ten_loai_sach" => "Wings Books",
              "slug" => "wings-books",
              "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
              "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 8,
              "ten_loai_sach" => "Giải mã bản thân",
              "slug" => "giai-ma-ban-than",
              "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
              "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 9,
              "ten_loai_sach" => "Combo",
              "slug" => "combo",
              "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
              "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 10,
              "ten_loai_sach" => "Manga - Comic",
              "slug" => "manga-comic",
              "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
              "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
            ]
          ]);
    }
}
