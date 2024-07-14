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
              "url" => "combo-giu-an-toan-cho-be-2-quyen-1_oc_an_toan_cho_be_-_bia_ca_bo_tb_2019_dfb239e90ed44b82b32c4cbc78c13764_f2f12065ecf845268a0489a03c5ed5f1_master.jpg"
            ],
            [
              "url" => "combo-nong-trai-vui-ve-9-quyen_cb_429a9ec344a04351a226a6f96d472830_master.jpg"
            ],
            [
              "url" => "combo-danh-tac-muon-thuo-10-quyen_cb_07a77eaed1174d03ac67615260c31d2d_master.jpg"
            ],
            [
              "url" => "giai-ma-12-chom-sao-kham-pha-tat-tan-tat-cung-xu-nu-1_xu-nu_5c42bf2221be43d0bfeab9cf9cda62fa_master.jpg"
            ],
            [
              "url" => "giai-ma-12-chom-sao-kham-pha-tat-tan-tat-cung-thien-yet-1_thien-yet_f50d417372224400aad288760ed4c4bc_master.jpg"
            ],
            [
              "url" => "giai-ma-12-chom-sao-kham-pha-tat-tan-tat-cung-thien-binh-1_thien-binh_ef5d1d66e6a74f40a7decd8dca8115c9_master.jpg"
            ],
            [
              "url" => "giai-ma-12-chom-sao-kham-pha-tat-tan-tat-cung-su-tu-1_su-tu_27ebe0cb2d364e5c986a168e897dd00d_master.jpg"
            ],
            [
              "url" => "giai-ma-12-chom-sao-kham-pha-tat-tan-tat-cung-song-tu-1_song-tu_c7f51c903a4f4cd5adc6fe889577f736_master.jpg"
            ],
            [
              "url" => "giai-ma-12-chom-sao-kham-pha-tat-tan-tat-cung-kim-nguu-1_kim-nguu_5cdeebe35467449e83e490cb5323dcb3_master.jpg"
            ],
            [
              "url" => "12-cung-hanh-dong-2018_12-cung-hanh-dong-bia_c0f82bd1cbdc493aa0ffaa331d28bf79_4c5288fe878846d0bda3f08318635cab_master.jpg"
            ],
            [
              "url" => "hanh-trinh-trai-tim-nhom-cung-dat-kim-nguu-xu-nu-ma-ket_cung_dat_0_b7bbb0365c254d25b82c4e290e1abdf5_master.jpg"
            ],
            [
              "url" => "12-cung-yeu-mat-troi-soi-duong-kim-tinh-dan-loi_12-cung-yeu-cover-15x22cm_ee5c6d19814d4d5fb0df7e7ce62e82f5_master.jpg"
            ],
            [
              "url" => "dinh-huong-su-nghiep-theo-chiem-tinh-hoc-cung-moc-xu-nu_xu-nu_0_820762f3ebca427c900e5ebc2394237a_master.jpg"
            ],
            [
              "url" => "dinh-huong-su-nghiep-theo-chiem-tinh-hoc-cung-moc-song-tu_song-tu_0_6e4980e675584e7cb37d6b6c934985c6_master.jpg"
            ],
            [
              "url" => "dinh-huong-su-nghiep-theo-chiem-tinh-hoc-cung-moc-cu-giai_cu-giai_0_dd176c6df5a6497abd17db9345fd28b2_master.jpg"
            ],
            [
              "url" => "dinh-huong-su-nghiep-theo-chiem-tinh-hoc-cung-moc-bach-duong_bach-duong_0_dada64b653d04e859f819658994dddd6_master.jpg"
            ],
            [
              "url" => "12-cung-hanh-dong_12-cung-hanh-dong-bia_c0f82bd1cbdc493aa0ffaa331d28bf79_master.jpg"
            ],
            [
              "url" => "365-ngay-hoang-dao-cu-giai_cu-giai_e5cdca862d2948129165a842f1e35146_master.jpg"
            ],
            [
              "url" => "nha-chinh-phuc-ti-hon-10-muc-tieu-quan-li-tien-bac_nha-chinh-phuc-ti-hon_10-muc-tieu-quan-li-tien-bac_399f3ad88eb4408594fa96bd509be19c_master.jpg"
            ],
            [
              "url" => "nha-chinh-phuc-ti-hon-10-muc-tieu-khoi-nguon-sang-tao_nha-chinh-phuc-ti-hon_10-muc-tieu-khoi-nguon-sang-tao_7ed9a3ec582449e7a6030e73c6930e9d_master.jpg"
            ],
            [
              "url" => "nha-chinh-phuc-ti-hon-10-muc-tieu-giup-hoc-tap-hieu-qua_nha-chinh-phuc-ti-hon_10-muc-tieu-giup-hoc-tap-hieu-qua_263407165d3b4318bae4146b71276046_master.jpg"
            ],
            [
              "url" => "nha-chinh-phuc-ti-hon-10-muc-tieu-ren-luyen-long-quan-tam_nha-chinh-phuc-ti-hon_10-muc-tieu-ren-luyen-long-quan-tam_d8cf4168667549b3a74e6ed79e7e9841_master.jpg"
            ],
            [
              "url" => "nha-chinh-phuc-ti-hon-10-muc-tieu-song-xanh_nha-chinh-phuc-ti-hon_10-muc-tieu-song-xanh_4084ec034cee49a8b4ba18d7104ed35c_master.jpg"
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
              "url" => "who-chuyen-ke-ve-danh-nhan-the-gioi-nikola-tesla_who_chuyen-ke-danh-nhan-the-gioi_nikola-tesla_bia_b045fabd696547bc97accc7f0291023c_master.jpg"
            ],
            [
              "url" => "who-chuyen-ke-ve-danh-nhan-the-gioi-james-watt_who_chuyen-ke-danh-nhan-the-gioi_james-watt_bia_0f6be6d462ed4a999e234068fcb2f85c_master.jpg"
            ],
            [
              "url" => "who-chuyen-ke-ve-danh-nhan-the-gioi-angela-merkel_who_chuyen-ke-danh-nhan-the-gioi_angela-merkel_bia_82a31e67699f4776a63e5053875789cd_master.jpg"
            ],
            [
              "url" => "who-chuyen-ke-ve-danh-nhan-the-gioi-joseph-pulitzer_who_chuyen-ke-danh-nhan-the-gioi_joseph-pulitzer_fbaf2379b20b427f94e18dd7f1e1d431_master.jpg"
            ],
            [
              "url" => "danh-nhan-khoa-hoc-viet-nam-ta-quang-buu_danh-nhan-khoa-hoc-viet-nam_ta-quang-buu_2e01458dacb140fcaaa015b42c4a34cb_master.jpg"
            ],
            [
              "url" => "danh-nhan-khoa-hoc-viet-nam-tran-dai-nghia_danh-nhan-khoa-hoc-viet-nam_tran-dai-nghia_df785f65363140c7bb9b23c11abfe4d3_master.jpg"
            ],
            [
              "url" => "danh-nhan-khoa-hoc-viet-nam-dang-van-ngu_danh-nhan-khoa-hoc-viet-nam_dang-van-ngu_4074967b5fde4c0b9d4276a7376ff72b_master.jpg"
            ],
            [
              "url" => "tranh-truyen-lich-su-viet-nam-quang-trung-3_quang-trung_3039e9159e2e4dddbff24e8aef7e8c10_10dca3edfe1e4d258806c1c89ef0b4ec_master.jpg"
            ],
            [
              "url" => "tranh-truyen-lich-su-viet-nam-huyen-tran-cong-chua-3_huyen-tran-cong-chua_35b056035c764428a1e55a643d7634be_f34813111f5a478296be9c4482b0de07_master.jpg"
            ],
            [
              "url" => "tranh-truyen-lich-su-viet-nam-le-loi-3_le-loi_4c93741f0ec147a5862985c5c710d0fb_7c2b6096e5d24018a35bb8e0a2159b41_master.jpg"
            ],
            [
              "url" => "tranh-truyen-lich-su-viet-nam-mac-dinh-chi-3_mac-dinh-chi_77503c3d756740da8618297cd791ca4b_4946137882374457a347c46b7b059ec3_master.jpg"
            ],
            [
              "url" => "tranh-truyen-lich-su-viet-nam-tran-nhan-tong-3_tran-nhan-tong_db13015d550049de9c575552e2d94a27_156623fbe348415892b0eae3c63f202a_master.jpg"
            ],
            [
              "url" => "nhung-anh-hung-tre-tuoi-ly-tu-trong_nhung-anh-hung-tre-tuoi_ly-tu-trong_bia_tb-2024_649b7115deac461297c8116e1ea8f732_master.jpg"
            ],
            [
              "url" => "nhung-anh-hung-tre-tuoi-mac-thi-buoi_nhung-anh-hung-tre-tuoi_mac-thi-buoi_tb-2024_c42048a7b8f1434eaa85425927f9933d_master.jpg"
            ],
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
              "url" => "bup-sen-xanh-4_bup-sen-xanh---tb-2022_a6e962d1ceec452d8efaed8162fa0928_e40c26cb340a439185360675cff58ffa_master.jpg"
            ],
            [
              "url" => "nhung-anh-hung-tre-tuoi-vu-a-dinh_nhung-anh-hung-tre-tuoi_vu-a-dinh_bia_tb-2024_4fc22c4bed6b416a99f9258cf28732f4_master.jpg"
            ],
            [
              "url" => "bac-ho-viet-di-chuc-va-di-chuc-cua-bac-ho-24_bac-ho-viet-di-chuc_bia_6435ee05518849a7a3398508ea0da11a_095d9af1d21b4ad0895d1c7c78c5dcc0_master.jpg"
            ],
            [
              "url" => "tu-lang-sen-24_tu-lang-sen_bia_tb2019_67daefdf95dd48edb82b25c86f1f4c69_43794698df024f3787a226177604653e_master.jpg"
            ],
            [
              "url" => "ke-chuyen-bac-ho-24_ke-chuyen-bac-ho---tb-2022_96ad2ee90af749138c6017dc4be1a4a7_76e76e042503464ca43f610ace84e190_master.jpg"
            ],
            [
              "url" => "thanh-thach-rave-tap-35-tang-kem-bia-ao-dac-biet-bookmark-plue_35_5db95110b3424945ab6dbdae1f1c50f3_master.jpg"
            ],
            [
              "url" => "ninja-rantaro-tap-30_30_d4b8e05fd76e4b4ca6fe009f823e12d9_master.jpg"
            ],
            [
              "url" => "bocchi-the-rock-tap-4-tang-kem-standee-ivory_4_83054000af984221922da3cdd727cfba_master.jpg"
            ],
            [
              "url" => "tan-ninja-hattori-tap-1_1_6787fd43e9ca426e8d939bfba29bd24e_master.jpg"
            ],
            [
              "url" => "frieren-phap-su-tien-tang-tap-10-tang-kem-postcard-hop-bien-hinh_frieren-phap-su-tien-tang_tap-10_qua-tang-kem_6cc1539e00ce4a089e477a9f464f08b0_master.jpg"
            ],
            [
              "url" => "frieren-phap-su-tien-tang-tap-10-tang-kem-postcard_10_154d21184972478894c063facf837f56_master.jpg"
            ],
            [
              "url" => "card-captor-sakura-the-bai-pha-le-tap-11_11_4373edbc23384fb19ab1412334d769fe_master.jpg"
            ],
            [
              "url" => "than-thu-dien-vo-tap-5-tang-kem-bookmark_5_e93edc98460243e1addedfbab35b1d92_master.jpg"
            ],
            [
              "url" => "slam-dunk-deluxe-edition-tap-21-tang-kem-bia-ao-limited-ngau-nhien_21---obi_df62573f91804ecf9547c55a63a78395_master.jpg"
            ],
            [
              "url" => "cau-lac-bo-nhung-ke-mat-ngu-tap-3-tang-kem-postcard_3_599e1106320049e49f2d1e3cc66b7528_master.jpg"
            ],
            [
              "url" => "dragon-ball-sd-7-vien-ngoc-rong-nhi-tap-5-tang-kem-postcard_5_595c3652699a4c5fa6b12e129438266a_master.jpg"
            ],
            [
              "url" => "neko-majin-chu-meo-vo-si_nekomajin---chu-meo-dung-si_tb-2024_7e2571a1cd1447e88f38b2c236900ea9_master.jpg"
            ],
            [
              "url" => "jaco-tuan-tra-vien-ngan-ha_jaco---tuan-tra-vien-ngan-ha_tb-2024_767f9155ec4e4ad6a4010c3251de18bf_master.jpg"
            ],
            [
              "url" => "phim-truong-akira-toriyama-tap-3_phim-truong-akira-toriyama_tap-3_tb-2024_87a928ab4710418bb0ce32f3d99099bf_master.jpg"
            ],
            [
              "url" => "phim-truong-akira-toriyama-tap-2_phim-truong-akira-toriyama_tap-2_tb-2024_4b4ce7ebd29f4422bb68cea22b11f939_master.jpg"
            ],
            [
              "url" => "kamishibai-ke-chuyen-bang-tranh-keo-manh-len-nao_kamishibai_keo-manh-len-nao_9841295523bd4c21a248b753450d196f_master.jpg"
            ],
            [
              "url" => "kamishibai-ke-chuyen-bang-tranh-trai-bi-va-con-chuot_kamishibai_trai-bi-va-con-chuot_4edd8ffdf2ab40c9b7fad9798f447bbe_master.jpg"
            ],
            [
              "url" => "nhung-chiec-xe-hiep-si-xin-chao-xe-lu-3_xin-chao-xe-lu_e8eb9aec63e74855aa73f74e011c4b87_4e457b3f53df4627a347d9606d02815e_master.jpg"
            ],
            [
              "url" => "danh-tac-muon-thuo-vong-quanh-the-gioi-trong-80-ngay-hay-trai-nghiem-chinh-la-gia-tai_danh-tac-muon-thuo_vong-quanh-the-gioi-trong-80-ngay_d5e5a99c5c474823a73abc974eb34258_master.jpg"
            ],
            [
              "url" => "danh-tac-muon-thuo-tom-sawyer-hay-san-choi-lon-nhat-tren-doi_danh-tac-muon-thuo_tom-sawyer_eadeef4d7eab4250bc502059ba02f1b3_master.jpg"
            ],
            [
              "url" => "danh-tac-muon-thuo-nhung-nguoi-phu-nu-be-nho-hay-truyen-ke-doi-that-ve-bon-chi-em_danh-tac-muon-thuo_nhung-nguoi-phu-nu-be-nho_190c61cc7b6447ca91b512a0bf116e5b_master.jpg"
            ],
            [
              "url" => "danh-tac-muon-thuo-ngua-o-yeu-dau-hay-quyen-sach-viet-bang-ngon-ngu-loai-ngua_danh-tac-muon-thuo_ngua-o-yeu-dau_f1f5590b80334ac39bc8eac324b2d064_master.jpg"
            ],
            [
              "url" => "danh-tac-muon-thuo-2-van-dam-duoi-bien-hay-thuyen-truong-nemo-tau-nautilus-va-nhung-bi-an-khac-trong-long-dai-duong_danh-tac-muon-thuo_2-van-dam-duoi-bien_98999c4ad92348b48568265400bb967a_master.jpg"
            ],
            [
              "url" => "danh-tac-muon-thuo-don-quixote-hay-chang-hiep-si-phi-ra-khoi-trang-sach_danh-tac-muon-thuo_don-quixote_f962e126841d4a7da2f0c24cd069886b_master.jpg"
            ],
            [
              "url" => "danh-tac-muon-thuo-dao-giau-vang-hay-truyen-cuop-bien-li-ki-nhat_danh-tac-muon-thuo_dao-giau-vang_cf01bc089d0f43dabd71c51d567f8f1c_master.jpg"
            ],
            [
              "url" => "danh-tac-muon-thuo-cau-be-rung-xanh-hay-nhoc-con-loai-nguoi_danh-tac-muon-thuo_cau-be-rung-xanh_7a418cd5f66d44b9a9917bfc8c5a4d85_master.jpg"
            ],
            [
              "url" => "danh-tac-muon-thuo-bac-si-dolittle-hay-nguoi-thong-thao-tieng-muon-loai_danh-tac-muon-thuo_bac-si-dolittle_88df05a3b60f48f083d3c34d0ca5e463_master.jpg"
            ],
            [
              "url" => "danh-tac-muon-thuo-alice-o-xu-so-than-tien-hay-truyen-cang-ke-cang-la-ki_danh-tac-muon-thuo_alice-o-xu-so-than-tien_e15983d008644463804a7bec65fe2734_master.jpg"
            ],
            [
              "url" => "tranh-truyen-lich-su-viet-nam-thien-su-van-hanh_tranh-truyen-lich-su-viet-nam_thien-su-van-hanh_4689e923ae274c109954903e15a56f6d_master.jpg"
            ],
            [
              "url" => "tranh-truyen-lich-su-viet-nam-ngoc-han-cong-chua_tranh-truyen-lich-su-viet-nam_ngoc-han-cong-chua_d3d29b70a1c448ba8e1cb21d94434c2f_master.jpg"
            ],
            [
              "url" => "ca-nha-ta-xong-pha-nguyen-thuy-tap-3-nguoc-chieu-gio-thoi_3_2cfc3c9640ac41b6be60d5c101d91cf0_master.jpg"
            ],
            [
              "url" => "ca-nha-ta-xong-pha-nguyen-thuy-tap-2-thien-duong-tran-gian_2_2568f0e9262d4dd88e5701b2c2cfc512_master.jpg"
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
              "url" => "tu-sach-tuoi-than-tien-vua-ngan-xom-ho_vua-ngan-xom-ho_bia_81e64540630c4a28b7d89ca81cfaac22_master.jpg"
            ],
            [
              "url" => "so-tay-viet-van-1_so-tay-viet-van_6a28ab059dba43beb8a8e7cbf7376636_b76826c51a9443188c32ae7103c6ef7e_master.jpg"
            ],
            [
              "url" => "tuoi-nho-chi-cao-2_tuoi-nho-chi-cao---tb-2022_40cfa7732a384eb6b8e89a624518da74_16a9da5cff3d403f81cf643ca3b60200_master.jpg"
            ],
            [
              "url" => "nhung-truyen-hay-viet-cho-thieu-nhi-vo-quang-3_vo-quang_c538fe8c584d4cab8732143cf1e40c32_aaa9d4f9578a49e1bedfbafeadcd1b68_master.jpg"
            ],
            [
              "url" => "nhung-truyen-hay-viet-cho-thieu-nhi-to-hoai-3_to-hoai_f87afc4df4534acaa12ae8505518b6ed_e4ca4ef12f88493b8e90b17f0365809c_master.jpg"
            ],
            [
              "url" => "mua-tieu-hoc-cuoi-cung-2_mua-tieu-hoc-cuoi-cung_tb-2023_2b37d29200984ed48fde6a7909431f81_23bfe04ab6da4fbd9cf280a2ee93af7b_master.jpg"
            ],
            [
              "url" => "nhung-truyen-hay-viet-cho-thieu-nhi-phong-thu-2_phong-thu_bia_tb2019-1_32bda8df87db41229840dbe1f9bbe38d_17307c4861b84f2687e2fde7a289cf88_master.jpg"
            ],
            [
              "url" => "tu-sach-tuoi-than-tien-goc-nho-yeu-thuong-1_goc-nho-yeu-thuong_bia_tb-2024_90105ce8d2094bc9b6b54306c2c6143b_master.jpg"
            ]
          ]
        );
    }

}
