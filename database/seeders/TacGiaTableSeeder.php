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

        DB::table('tac_gia')->insert([
            [
              "id" => 1,
              "ten_tac_gia" => "Lê Phương Liên",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 2,
              "ten_tac_gia" => "Nguyễn Huy Thắng",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 3,
              "ten_tac_gia" => "Hiếu Minh",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 4,
              "ten_tac_gia" => "Lê Minh Hải",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 5,
              "ten_tac_gia" => "Bùi Việt Thanh",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 6,
              "ten_tac_gia" => "Vương Trọng",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 7,
              "ten_tac_gia" => "Công ty Phan Thị",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 8,
              "ten_tac_gia" => "Đoàn Giỏi",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 9,
              "ten_tac_gia" => "Sơn Tùng",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 10,
              "ten_tac_gia" => "Tô Hoài",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 11,
              "ten_tac_gia" => "Vũ Kỳ",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 12,
              "ten_tac_gia" => "Hoàng Nguyên Cát",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 13,
              "ten_tac_gia" => "Phạm Thanh Tâm",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 14,
              "ten_tac_gia" => "Nguyễn Việt Hà",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 15,
              "ten_tac_gia" => "Tạ Huy Long",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 16,
              "ten_tac_gia" => "Lê Lam",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 17,
              "ten_tac_gia" => "Sen Trắng",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 18,
              "ten_tac_gia" => "Đoàn Hạo Lương",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 19,
              "ten_tac_gia" => "Mai Chi",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 20,
              "ten_tac_gia" => "Tô Chiêm",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 21,
              "ten_tac_gia" => "Uông Triều",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 22,
              "ten_tac_gia" => "Võ Quảng",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 23,
              "ten_tac_gia" => "Lê Văn Nghĩa",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 24,
              "ten_tac_gia" => "Phong Thu",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 25,
              "ten_tac_gia" => "Võ Thu Hương",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 26,
              "ten_tac_gia" => "Nguyễn Hồng Chiến",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 27,
              "ten_tac_gia" => "Thiên Tâm",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 28,
              "ten_tac_gia" => "Hàn Mặc Tử",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 29,
              "ten_tac_gia" => "Nam Cao",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 30,
              "ten_tac_gia" => "Nguyễn Thánh Ngã",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 31,
              "ten_tac_gia" => "Nonchan",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 32,
              "ten_tac_gia" => "Mai Quyên",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 33,
              "ten_tac_gia" => "Nguyễn Thành Long",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 34,
              "ten_tac_gia" => "Thy Ngọc",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 35,
              "ten_tac_gia" => "Masashi Kishimoto",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 36,
              "ten_tac_gia" => "Fujiko F Fujio",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 37,
              "ten_tac_gia" => "Hà Thủy Nguyên",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 38,
              "ten_tac_gia" => "Toon Tellegen",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 39,
              "ten_tac_gia" => "Asia Citro",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 40,
              "ten_tac_gia" => "John Masefield",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 41,
              "ten_tac_gia" => "George MacDonald",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 42,
              "ten_tac_gia" => "Nhiều tác giả",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 43,
              "ten_tac_gia" => "Mira Lobe",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 44,
              "ten_tac_gia" => "Laura Baker",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 45,
              "ten_tac_gia" => "Nhóm của Chuyện",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 46,
              "ten_tac_gia" => "Lee Jong-Won",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 47,
              "ten_tac_gia" => "Kim Seung-Min",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 48,
              "ten_tac_gia" => "Kim Hyun-Gi",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 49,
              "ten_tac_gia" => "Toon-Jangee",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 50,
              "ten_tac_gia" => "Kim Jung-Wook",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 51,
              "ten_tac_gia" => "Nguyễn Như Mai",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 52,
              "ten_tac_gia" => "Dư Diệu Đông",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 53,
              "ten_tac_gia" => "Võ Thị Mai Chi",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 54,
              "ten_tac_gia" => "Ha Jong-joon",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 55,
              "ten_tac_gia" => "Park Kyung-eun",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 56,
              "ten_tac_gia" => "Cha Hyun Jin",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 57,
              "ten_tac_gia" => "Do Ki-sung",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 58,
              "ten_tac_gia" => "Hoàng Tường",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 59,
              "ten_tac_gia" => "Bùi Trung Tín",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 60,
              "ten_tac_gia" => "Mijika",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 61,
              "ten_tac_gia" => "Jules Verne",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 62,
              "ten_tac_gia" => "Mark Twain",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 63,
              "ten_tac_gia" => "Louisa May Alcott",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 64,
              "ten_tac_gia" => "Anna Sewell",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 65,
              "ten_tac_gia" => "Miguel de Carvantes",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 66,
              "ten_tac_gia" => "Robert Louis Stevenson",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 67,
              "ten_tac_gia" => "Rudyard Kipling",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 68,
              "ten_tac_gia" => "Hugh Lofting",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 69,
              "ten_tac_gia" => "Lewis Carroll",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 70,
              "ten_tac_gia" => "Helen Foster James",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 71,
              "ten_tac_gia" => "Daniel Howarth",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 72,
              "ten_tac_gia" => "Caroline",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 73,
              "ten_tac_gia" => "Bùi Xuân Quỳnh",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 74,
              "ten_tac_gia" => "NGART",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 75,
              "ten_tac_gia" => "Hiro Mashima",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 76,
              "ten_tac_gia" => "Soubee Amako",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 77,
              "ten_tac_gia" => "Aki Hamazi",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 78,
              "ten_tac_gia" => "Fujiko Fujio A",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 79,
              "ten_tac_gia" => "Kanehito Yamada",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 80,
              "ten_tac_gia" => "Clamp",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 81,
              "ten_tac_gia" => "Hiromu Arakawa",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 82,
              "ten_tac_gia" => "Takehiko Inoue",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 83,
              "ten_tac_gia" => "Makoto OJIRO0",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 84,
              "ten_tac_gia" => "Akira Toriyama",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 85,
              "ten_tac_gia" => "Kawo Tanuki",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 86,
              "ten_tac_gia" => "Sorata Akiduki",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 87,
              "ten_tac_gia" => "Phù Thủy Tarot",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 88,
              "ten_tac_gia" => "Nekomaki (ms-work)",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 89,
              "ten_tac_gia" => "Makoto Ojiro",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 90,
              "ten_tac_gia" => "Madeline Miller",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 91,
              "ten_tac_gia" => "Leigh Bardugo",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 92,
              "ten_tac_gia" => "Hazano Kazutake",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 93,
              "ten_tac_gia" => "Saekisan",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 94,
              "ten_tac_gia" => "Daisuke Aizawa",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 95,
              "ten_tac_gia" => "Hiromu",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 96,
              "ten_tac_gia" => "Yuki Yaku",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 97,
              "ten_tac_gia" => "Thùy Trang",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 98,
              "ten_tac_gia" => "Fuyumi Ono",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 99,
              "ten_tac_gia" => "Ao Jyumonji",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 100,
              "ten_tac_gia" => "ma2",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 101,
              "ten_tac_gia" => "Yama Wayama",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 102,
              "ten_tac_gia" => "H. P. Lovecraft",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 103,
              "ten_tac_gia" => "",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 104,
              "ten_tac_gia" => "Coline Pierré",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 105,
              "ten_tac_gia" => "Đạm Phương Nữ Sử",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 106,
              "ten_tac_gia" => "Arimoto Hidefumi",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 107,
              "ten_tac_gia" => "Sun Li",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 108,
              "ten_tac_gia" => "Evelien van Dort",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 109,
              "ten_tac_gia" => "Lê Minh Quốc",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 110,
              "ten_tac_gia" => "Nguyễn Thị Thu",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 111,
              "ten_tac_gia" => "Lý Lợi",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 112,
              "ten_tac_gia" => "Zhao Li Rong",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 113,
              "ten_tac_gia" => "Hirai Nobuyoshi",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 114,
              "ten_tac_gia" => "Cai Ning",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 115,
              "ten_tac_gia" => "Sun Yu Mei",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 116,
              "ten_tac_gia" => "Nguyễn Văn Thắng",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 117,
              "ten_tac_gia" => "Lin Ju",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 118,
              "ten_tac_gia" => "Luo Yijun",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 119,
              "ten_tac_gia" => "Lê Bích Thủy",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 120,
              "ten_tac_gia" => "Delphine Perret",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 121,
              "ten_tac_gia" => "Hội nghiên cứu khoa học đời sống trẻ em Nhật Bản",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 122,
              "ten_tac_gia" => "Ngọc Linh",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 123,
              "ten_tac_gia" => "Kim Ngọc",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 124,
              "ten_tac_gia" => "Nguyễn Thắm",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 125,
              "ten_tac_gia" => "Châu Phạm",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 126,
              "ten_tac_gia" => "Đào Trung Uyên",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 127,
              "ten_tac_gia" => "Mayumi MUROYAMA",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 128,
              "ten_tac_gia" => "Itokatsu",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 129,
              "ten_tac_gia" => "Gosho Aoyama",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 130,
              "ten_tac_gia" => "Kamui Fujiwara",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 131,
              "ten_tac_gia" => "Okura",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 132,
              "ten_tac_gia" => "Lasse Rouhiainen",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 133,
              "ten_tac_gia" => "Nguyễn Sỹ Công",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 134,
              "ten_tac_gia" => "Nguyễn Phú Kim",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 135,
              "ten_tac_gia" => "Đỗ Ca Sơn",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 136,
              "ten_tac_gia" => "Trung tướng Phạm Hồng Cư",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 137,
              "ten_tac_gia" => "Trần Dần",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 138,
              "ten_tac_gia" => "Hoài Lộc",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 139,
              "ten_tac_gia" => "Hữu Mai",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 140,
              "ten_tac_gia" => "Xuân Sách",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 141,
              "ten_tac_gia" => "Phan Đức Lộc",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 142,
              "ten_tac_gia" => "Hồ Quảng",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 143,
              "ten_tac_gia" => "Nguyễn Thị Thanh Thủy",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 144,
              "ten_tac_gia" => "An Cương",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 145,
              "ten_tac_gia" => "Hồ Phương",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 146,
              "ten_tac_gia" => "Nguyễn Tân",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 147,
              "ten_tac_gia" => "Lê Quang Vịnh",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 148,
              "ten_tac_gia" => "Lisa Thompson",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 149,
              "ten_tac_gia" => "Đ.T.Hoài Thư",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 150,
              "ten_tac_gia" => "Bôn Đông Huân",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 151,
              "ten_tac_gia" => "Yên Yên",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 152,
              "ten_tac_gia" => "Vũ Thị Huyền Trang",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 153,
              "ten_tac_gia" => "Lê Quang Trạng",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 154,
              "ten_tac_gia" => "Lê Đức Dương",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 155,
              "ten_tac_gia" => "Yên Khương",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 156,
              "ten_tac_gia" => "Lê Vũ Trường Giang",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 157,
              "ten_tac_gia" => "Thái Bá Tân",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 158,
              "ten_tac_gia" => "Nguyễn Huy Tưởng",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 159,
              "ten_tac_gia" => "Nguyễn Đình Thi",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 160,
              "ten_tac_gia" => "Lương Thùy Diệu",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 161,
              "ten_tac_gia" => "Vũ Tú Nam",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 162,
              "ten_tac_gia" => "Trần Thu Hằng",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 163,
              "ten_tac_gia" => "Phi Tân",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 164,
              "ten_tac_gia" => "Nguyễn Bính",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 165,
              "ten_tac_gia" => "Hồ Xuân Hương",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 166,
              "ten_tac_gia" => "SIBÉAL POUNDER",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 167,
              "ten_tac_gia" => "Roald Dahl",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 168,
              "ten_tac_gia" => "Margaretha van Andel",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 169,
              "ten_tac_gia" => "Eiichiro Oda",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 170,
              "ten_tac_gia" => "Céline Person",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 171,
              "ten_tac_gia" => "Nicolas Digard",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 172,
              "ten_tac_gia" => "Deborah Install",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 173,
              "ten_tac_gia" => "Maurice Leblanc",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 174,
              "ten_tac_gia" => "Edmondo De Amicis",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 175,
              "ten_tac_gia" => "Nikolay Nosov",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 176,
              "ten_tac_gia" => "Aleksandr Grin",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 177,
              "ten_tac_gia" => "Katarzyna Ryrych",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 178,
              "ten_tac_gia" => "L. Frank Baum",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 179,
              "ten_tac_gia" => "Koyoharu Gotouge",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 180,
              "ten_tac_gia" => "Bettina Göschl",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 181,
              "ten_tac_gia" => "ChungBe Studios",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 182,
              "ten_tac_gia" => "Tuấn Huỳnh",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 183,
              "ten_tac_gia" => "Nguyễn Hào",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 184,
              "ten_tac_gia" => "Luke O'Neill",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 185,
              "ten_tac_gia" => "David Stabler",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 186,
              "ten_tac_gia" => "Lee Soojung",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 187,
              "ten_tac_gia" => "You Jia Hui",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 188,
              "ten_tac_gia" => "Yang Li Rong",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 189,
              "ten_tac_gia" => "Xie Qi Jun",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 190,
              "ten_tac_gia" => "Ruốc Đặng",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 191,
              "ten_tac_gia" => "Mr. Tan",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 192,
              "ten_tac_gia" => "Neung In Publishing Company",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 193,
              "ten_tac_gia" => "Janneke Schotveld",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 194,
              "ten_tac_gia" => "Asa Gilland",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 195,
              "ten_tac_gia" => "Taku Kuwabara",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 196,
              "ten_tac_gia" => "Daisuke Ashihara",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 197,
              "ten_tac_gia" => "Dubu (Redice Studio)",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 198,
              "ten_tac_gia" => "Hajime Komoto",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 199,
              "ten_tac_gia" => "Kagami Yagami",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 200,
              "ten_tac_gia" => "Sunsunsun",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 201,
              "ten_tac_gia" => "Natsu Hyuuga",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 202,
              "ten_tac_gia" => "Yosbook",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 203,
              "ten_tac_gia" => "Hoàng Hoành",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 204,
              "ten_tac_gia" => "Phương Linh",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 205,
              "ten_tac_gia" => "Thanh Anh",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 206,
              "ten_tac_gia" => "Natalie Quintart",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 207,
              "ten_tac_gia" => "Buke Buke",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 208,
              "ten_tac_gia" => "Mayuko Kanba",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 209,
              "ten_tac_gia" => "Satoshi Tajiri",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 210,
              "ten_tac_gia" => "Norihiro Yagi",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 211,
              "ten_tac_gia" => "Erin Meyer",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 212,
              "ten_tac_gia" => "Minh Hiếu",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 213,
              "ten_tac_gia" => "Nguyễn Bích",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 214,
              "ten_tac_gia" => "Kiều Mai Sơn",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 215,
              "ten_tac_gia" => "Sương Nguyệt Minh",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 216,
              "ten_tac_gia" => "Nguyễn Công Huy",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 217,
              "ten_tac_gia" => "Văn Tùng",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 218,
              "ten_tac_gia" => "Phạm Thắng",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 219,
              "ten_tac_gia" => "Nguyễn Xuân Thủy",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 220,
              "ten_tac_gia" => "Trần Tế Xương",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 221,
              "ten_tac_gia" => "Nguyễn Thị Thuỷ",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 222,
              "ten_tac_gia" => "Phong Điệp",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 223,
              "ten_tac_gia" => "Christos",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 224,
              "ten_tac_gia" => "Trần Mạnh Hảo",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 225,
              "ten_tac_gia" => "Đặng Hấn",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 226,
              "ten_tac_gia" => "Mộc An",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 227,
              "ten_tac_gia" => "Nguyễn Minh Châu",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 228,
              "ten_tac_gia" => "Nguyễn Đình Chiểu",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 229,
              "ten_tac_gia" => "Xuân Quỳnh",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 230,
              "ten_tac_gia" => "Bùi Tiểu Quyên",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 231,
              "ten_tac_gia" => "Phùng Quán",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 232,
              "ten_tac_gia" => "Molière",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 233,
              "ten_tac_gia" => "Nguyễn Du",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 234,
              "ten_tac_gia" => "Nie Thanh Mai",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 235,
              "ten_tac_gia" => "Quyên Gavoye",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 236,
              "ten_tac_gia" => "Nguyễn Nhật Ánh",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 237,
              "ten_tac_gia" => "Thích Nhất Hạnh",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 238,
              "ten_tac_gia" => "Michael Morpurgo",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 239,
              "ten_tac_gia" => "Jane Ray",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 240,
              "ten_tac_gia" => "Dinah Maria",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 241,
              "ten_tac_gia" => "Honda Ariake",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 242,
              "ten_tac_gia" => "Maurice Maeterlinck",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 243,
              "ten_tac_gia" => "Mitch Albom",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 244,
              "ten_tac_gia" => "Laura Ingalls Wilder",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 245,
              "ten_tac_gia" => "Kang Soon-ye",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 246,
              "ten_tac_gia" => "Kim Gwangil",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 247,
              "ten_tac_gia" => "Choi Eunyoung",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 248,
              "ten_tac_gia" => "Oh Youngseok",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 249,
              "ten_tac_gia" => "Ahn Hyungmo",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 250,
              "ten_tac_gia" => "Lee Heejung",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 251,
              "ten_tac_gia" => "Robin Stevenson",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 252,
              "ten_tac_gia" => "Urška Stropnik Šonc",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 253,
              "ten_tac_gia" => "Steven J. Simmons",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 254,
              "ten_tac_gia" => "Ngô Anh Thi",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 255,
              "ten_tac_gia" => "Tạ Thúc Bình",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 256,
              "ten_tac_gia" => "Huỳnh Ly",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 257,
              "ten_tac_gia" => "May",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 258,
              "ten_tac_gia" => "Gerelchimeg Blackcrane",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 259,
              "ten_tac_gia" => "Yoshito Usui",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              "id" => 260,
              "ten_tac_gia" => "Yusuke Murata",
              "ngay_sinh" => $faker->date(),
              "quoc_tich" => "Việt Nam",
              "dia_chi" => $faker->address,
              "created_at" => Carbon::now()->format('Y-m-d H:i:s')
            ]
          ]);
    }
}
