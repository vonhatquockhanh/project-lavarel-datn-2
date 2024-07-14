<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HinhAnhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hinh_anh')->truncate();

        DB::table('hinh_anh')->insert(
          [
            [
              "url" => "bac-ho-song-mai-nhung-truyen-hay-ve-bac-tap-5-24_5_c6de129574dd4ca6b5b278f295e77d7b_86ee542be75a4ac1928753393c93a7d5_master.jpg"
            ],
            [
              "url" => "nhung-anh-hung-tre-tuoi-tran-van-on_nhung-anh-hung-tre-tuoi_tran-van-on_bia_tb-2024_e7bcc2807b05476ea9c46a63510f218e_master.jpg"
            ],
            [
              "url" => "thay-giao-nguyen-tat-thanh-o-truong-duc-thanh-24_o_nguyen_tat_thanh_o_truong_duc_thanh_374e2e51fe64445e86faec0962250040_76895c459c124b53b82a9c91498b02a1_master.jpg"
            ],
            [
              "url" => "tu-lang-sen-24_tu-lang-sen_bia_tb2019_67daefdf95dd48edb82b25c86f1f4c69_43794698df024f3787a226177604653e_master.jpg"
            ],
            [
              "url" => "ke-chuyen-bac-ho-24_ke-chuyen-bac-ho---tb-2022_96ad2ee90af749138c6017dc4be1a4a7_76e76e042503464ca43f610ace84e190_master.jpg"
            ],
            [
              "url" => "bac-ho-song-mai-nhung-truyen-hay-ve-bac-tap-2-24_2_9d986fd29d3340a98008830703554b10_4a0563e1e94b4317a3b632cdff8bdbfc_master.jpg"
            ],
            [
              "url" => "bac-ho-song-mai-nhung-truyen-hay-ve-bac-tap-1-24_1_0ccdb0775d8b43f389bed1ba6036d90c_045247bddd574df18b41f9f097f72421_master.jpg"
            ],
            [
              "url" => "nhung-anh-hung-tre-tuoi-chuyen-ke-ve-nguoi-tong-phu-trach-doi-dau-tien_h-hung-tre-tuoi_chuyen-ke-ve-nguoi-tong-phu-trach-doi-dau-tien_tb-2024_dc039bb57a864044a1e81ed2b50de3a1_master.jpg"
            ],
            [
              "url" => "ki-hoa-trong-chien-hao_ki-hoa-trong-chien-hao_14x22_bia-ao_d88cf8489c95468cb5d9a94077c9d721_master.jpg"
            ],
            [
              "url" => "tranh-truyen-lich-su-viet-nam-tran-thai-tong-3_tran-thai-tong_df72a1ec3e97439993a8b83f66a6911c_39c386c3df3b48bba3829bec148d1c17_master.jpg"
            ],
            [
              "url" => "ca-nha-ta-xong-pha-nguyen-thuy-tap-1-bo-lac-da_1_e5ef3e8cfd754ea3bb0247028486ce18_master.jpg"
            ],
            [
              "url" => "vet-cu-ngay-mua_vet-cu-ngay-mua_bia_c543ec099886424fa57251a118f93bb5_master.jpg"
            ],
            [
              "url" => "chiec-xe-buyt-bay_chiec-xe-buyt-bay_bia_cac3947d4b2c4f23b7ca9b2ae58c3080_master.jpg"
            ],
            [
              "url" => "nhac-si-van-cao-la-phi-lao-goi-mat-troi_nhac-si-van-cao_la-phi-lao-goi-mat-troi_ecc5c7bfb24a48ed839120bec64f93d2_master.jpg"
            ],
            [
              "url" => "tu-sach-tuoi-than-tien-ong-beo-va-ong-gay-1_ong-beo-ong-gay_68bcbb3b9cbf486ea9935d5461c8ffdf_9392d07d25b345a58ee57da55d29ab98_master.jpg"
            ],
            [
              "url" => "nha-chinh-phuc-ti-hon-10-muc-tieu-cho-cuoc-song-vui-khoe_nha-chinh-phuc-ti-hon_10-muc-tieu-cho-cuoc-song-vui-khoe_9c5258cc69f54c33b6cfed00ab3b90c2_master.jpg"
            ],
            [
              "url" => "tu-dien-cam-xuc-the-gioi-tap-2_tu-dien-cam-xuc-tap-2_d01a89a7f7054bd1ba698371a4c2b1fd_1__e1649fc92cb94849bfed7bdae52d1fa4_master.jpg"
            ],
            [
              "url" => "who-chuyen-ke-ve-danh-nhan-the-gioi-immanuel-kant_who_chuyen-ke-danh-nhan-the-gioi_immanuel-kant_bia_7a0a2129f04f4da59465dba72469ac67_master.jpg"
            ],
            [
              "url" => "danh-nhan-khoa-hoc-viet-nam-ta-quang-buu_danh-nhan-khoa-hoc-viet-nam_ta-quang-buu_2e01458dacb140fcaaa015b42c4a34cb_master.jpg"
            ],
            [
              "url" => "quiz-khoa-hoc-ki-thu-phat-minh-phat-kien-24_phat-minh-phat-kien_bb566b3dd0fc4bcea05540c0f9970c0f_40a5545c29af4649a3a2c118afa4d495_master.jpg"
            ],
            [
              "url" => "kamishibai-ke-chuyen-bang-tranh-keo-manh-len-nao_kamishibai_keo-manh-len-nao_9841295523bd4c21a248b753450d196f_master.jpg"
            ],
            [
              "url" => "nhung-chiec-xe-hiep-si-xin-chao-xe-lu-3_xin-chao-xe-lu_e8eb9aec63e74855aa73f74e011c4b87_4e457b3f53df4627a347d9606d02815e_master.jpg"
            ],
            [
              "url" => "danh-tac-muon-thuo-vong-quanh-the-gioi-trong-80-ngay-hay-trai-nghiem-chinh-la-gia-tai_danh-tac-muon-thuo_vong-quanh-the-gioi-trong-80-ngay_d5e5a99c5c474823a73abc974eb34258_master.jpg"
            ],
            [
              "url" => "truyen-gau-bon-phuong-nhung-truyen-co-ki-thu-ve-loai-gau_truyen-gau-bon-phuong_bia_1b8c7bb1d4bd44afa92d8e6177fa923e_master.jpg"
            ],
            [
              "url" => "tho-cho-be-hoc-noi-2024_tho-cho-be-hoc-noi_f4408e9db7474c96bbb507fffcdae1a9_f209ecbb8eba47808f702bd3a170792c_master.jpg"
            ],
            [
              "url" => "vang-danh-nghe-co-nuoc-mam-phu-quoc-vi-ngon-dao-ngoc_vang-danh-nghe-co_nuoc-mam-phu-quoc_bia_755bb7731bae4af5b00259d628f9a2c6_master.jpg"
            ],
            [
              "url" => "dinh-huong-su-nghiep-theo-chiem-tinh-hoc-cung-moc-nhan-ma_nhan-ma_c6cfd5157dff4fda833ac6233cfb9254_master.jpg"
            ],
            [
              "url" => "365-ngay-hoang-dao-song-tu_song-tu_1_c10cfb0d60a84f429ab397adf820b028_master.jpg"
            ],
            [
              "url" => "365-ngay-hoang-dao-nhan-ma_nhan-ma_0_d20ebf768fd84d838aac433ced19946b_master.jpg"
            ],
            [
              "url" => "dinh-huong-su-nghiep-theo-chiem-tinh-hoc-cung-moc-kim-nguu_kim-nguu_0_8bc9c5e398004a64b21bb953369bf20f_master.jpg"
            ],
            [
              "url" => "365-ngay-hoang-dao-kim-nguu_kim-nguu_1_164e5e9c436f48a7bce7c298301382ed_master.jpg"
            ],
            [
              "url" => "combo-cam-nang-me-bau-va-thai-nhi-phan-2-3-quyen_cam_nang_cho_me_bau_va_thai_nhi_phan_2__3_cuon__ddb1cba6a70b436fa156df86c350b98b_master.jpg"
            ],
            [
              "url" => "combo-cam-nang-danh-cho-me-bau-va-thai-nhi-2-quyen_cam_nang_danh_cho_me_bau_va_thai_nh_-_2_cuon_957d8cd3867748a58befb73eba5c358f_master.jpg"
            ],
            [
              "url" => "combo-gau-bon-3-quyen_cb_204c41830ca842e98e3667ebbbe7b425_master.jpg"
            ],
            [
              "url" => "combo-kheo-tay-tinh-mat-sach-boc-dan-thong-minh-4-quyen-1_cb_f11b812aa65f47c2851334d647eead20_master.jpg"
            ],
            [
              "url" => "combo-vun-dap-tam-hon-khi-con-va-cac-ban-vui-nhon-4-quyen_cb_6db67883081c43d6bfef2d8d42ab8544_master.jpg"
            ],
            [
              "url" => "combo-nha-chinh-phuc-ti-hon-6-quyen_cb_8a1db51df2004b7aa147022bbc1ed791_master.jpg"
            ],
            [
              "url" => "combo-asari-co-be-tinh-nghich-tap-11-20_cb11-20_9af18c1faf6c45fd81d65ef9a416eb3d_master.jpg"
            ],
            [
              "url" => "combo-ca-nha-ta-xong-pha-nguyen-thuy-3-tap_cb_4284168add9d4588a137d075bc11095c_master.jpg"
            ],
            [
              "url" => "combo-tuyen-tap-akira-toriyama-8-quyen_cb_d618d949a15e4244a5d0690bbd515965_master.jpg"
            ],
            [
              "url" => "combo-dong-nghiep-cho-toi-hut-mat-qua-troi-3-tap_z5484251055856_c4a216784748d53605750f64a7cb3e88_559cd79c49a24aec813efc3717a1247b_master.jpg"
            ],
            [
              "url" => "combo-con-trai-toi-hinh-nhu-la-gay-5-tap_z5484251041795_d69a0babe42c30ef7b5cb627d8bcbf3b_58a355934c964aadacd18d8141fdbc7f_master.jpg"
            ],
            [
              "url" => "combo-thi-tran-meo-8-tap_combo_fa9399c56228448aa96f0ea2183423e6_master.jpg"
            ],
            [
              "url" => "than-thu-dien-vo-tap-4-tang-kem-bookmark_4_b97f678722414758acbb53566b02e6e2_master.jpg"
            ],
            [
              "url" => "shin-cau-be-but-chi-truyen-dai-tap-13-24_13_cb972407fcdc4056a8ddcd13cc0324d6_master.jpg"
            ],
            [
              "url" => "one-punch-man-tap-27_27_c7eb279de1ca494cb8dca7d8f254f36e_master.jpg"
            ],
            [
              "url" => "one-piece-tap-5-bia-roi-3_5_63eeb49049524b5e96a50d23028a9db3_ec3aa911a4644e7aa16b9012ea0b27ed_master.jpg"
            ],
            [
              "url" => "doraemon-truyen-ngan-tap-12-24_12_0cb5f1a2e9624a1f9490d8acc4caebaf_389a725001ed45ff873ab5a5ddbd79e7_72faca89566e4933a24302a36ba8c7d0_master.jpg"
            ],
            [
              "url" => "world-trigger-tap-14_14_e4053386cd9c4b88974c82f39128a4b7_master.jpg"
            ],
            [
              "url" => "solo-leveling-toi-thang-cap-mot-minh-tap-13-tang-kem-obi-bo-doi-pvc-card_13---obi_06ede47458ff42e490457714297c5ef7_master.jpg"
            ]
          ]
        );
    }

}
