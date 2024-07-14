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

        DB::table('tac_gia')->insert(
          [
              [
                "id" => 1,
                "ten_tac_gia" => "Công ty Phan Thị",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 2,
                "ten_tac_gia" => "Đoàn Giỏi",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 3,
                "ten_tac_gia" => "Sơn Tùng",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 4,
                "ten_tac_gia" => "Hoàng Nguyên Cát",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 5,
                "ten_tac_gia" => "Lê Minh Hải",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 6,
                "ten_tac_gia" => "Phạm Thanh Tâm",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 7,
                "ten_tac_gia" => "Nguyễn Việt Hà",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 8,
                "ten_tac_gia" => "Sen Trắng",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 9,
                "ten_tac_gia" => "Đoàn Hạo Lương",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 10,
                "ten_tac_gia" => "Mai Chi",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 11,
                "ten_tac_gia" => "Tô Chiêm",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 12,
                "ten_tac_gia" => "Uông Triều",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 13,
                "ten_tac_gia" => "Laura Baker",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 14,
                "ten_tac_gia" => "Nhóm của Chuyện",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 15,
                "ten_tac_gia" => "Lee Jong-Won",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 16,
                "ten_tac_gia" => "Nguyễn Như Mai",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 17,
                "ten_tac_gia" => "Do Ki-sung",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 18,
                "ten_tac_gia" => "Hoàng Tường",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 19,
                "ten_tac_gia" => "Mijika",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 20,
                "ten_tac_gia" => "Jules Verne",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 21,
                "ten_tac_gia" => "Caroline",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 22,
                "ten_tac_gia" => "Nhiều tác giả",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 23,
                "ten_tac_gia" => "Bùi Xuân Quỳnh",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 24,
                "ten_tac_gia" => "Lý Lợi",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 25,
                "ten_tac_gia" => "Delphine Perret",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 26,
                "ten_tac_gia" => "Nguyễn Thắm",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 27,
                "ten_tac_gia" => "Mayumi MUROYAMA",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 28,
                "ten_tac_gia" => "Akira Toriyama",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 29,
                "ten_tac_gia" => "ma2",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 30,
                "ten_tac_gia" => "Okura",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 31,
                "ten_tac_gia" => "Nekomaki (ms-work)",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 32,
                "ten_tac_gia" => "Hiromu Arakawa",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 33,
                "ten_tac_gia" => "Yoshito Usui",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 34,
                "ten_tac_gia" => "Yusuke Murata",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 35,
                "ten_tac_gia" => "Eiichiro Oda",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 36,
                "ten_tac_gia" => "Fujiko F Fujio",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 37,
                "ten_tac_gia" => "Daisuke Ashihara",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                "id" => 38,
                "ten_tac_gia" => "Dubu (Redice Studio)",
                "ngay_sinh" => null,
                "quoc_tich" => "Việt Nam",
                "dia_chi" => null,
                "created_at" => Carbon::now()->format('Y-m-d H:i:s')
              ]
          ]
        );
    }
}
