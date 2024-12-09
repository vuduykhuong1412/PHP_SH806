<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SachSeeder extends Seeder
{
    public function run()
    {
        DB::table('Sach')->insert([
            ['TenSach' => 'Rồng không trung - Tập 6', 'IDTheLoai' => 2, 'IDTacGia' => 1, 'Gia' => 40000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 34, 'MaPhieuNhap' => 1, 'AnhBia' => 'rong_khong_trung_bia_tap_6.jpg'],
            ['TenSach' => 'Thần thú diễn võ(Hiromu Arakawa) - Tập 2', 'IDTheLoai' => 2, 'IDTacGia' => 2, 'Gia' => 35000, 'IDNhaXuatBan' => 1, 'SoLuongKho' => 45, 'MaPhieuNhap' => 1, 'AnhBia' => 'than_thu_dien_vo_bia_tap_2.jpg'],
            ['TenSach' => 'Thánh thạch Rave - Tập 32', 'IDTheLoai' => 2, 'IDTacGia' => 3, 'Gia' => 30000, 'IDNhaXuatBan' => 3, 'SoLuongKho' => 56, 'MaPhieuNhap' => 2, 'AnhBia' => 'thanh_thach_rave_bia_tap_32.jpg'],
            ['TenSach' => 'Ninja Hattori(Fujiko Fujiko A) - Tập 3', 'IDTheLoai' => 2, 'IDTacGia' => 4, 'Gia' => 25000, 'IDNhaXuatBan' => 2, 'SoLuongKho' => 123, 'MaPhieuNhap' => 2, 'AnhBia' => 'ninja_hattori_bia_tap_3.jpg'],
            ['TenSach' => 'Nhóc Maruko - Tập 8', 'IDTheLoai' => 2, 'IDTacGia' => 5, 'Gia' => 40000, 'IDNhaXuatBan' => 4, 'SoLuongKho' => 43, 'MaPhieuNhap' => 3, 'AnhBia' => 'nhoc_maruko_bia_tap_8.jpg'],
            ['TenSach' => 'World Trigger - Tập 12', 'IDTheLoai' => 3, 'IDTacGia' => 6, 'Gia' => 35000, 'IDNhaXuatBan' => 3, 'SoLuongKho' => 57, 'MaPhieuNhap' => 3, 'AnhBia' => 'world_trigger_bia_tap_12.jpg'],
            ['TenSach' => 'Bạch tuyết tóc đỏ - Tập 11', 'IDTheLoai' => 1, 'IDTacGia' => 7, 'Gia' => 30000, 'IDNhaXuatBan' => 2, 'SoLuongKho' => 67, 'MaPhieuNhap' => 4, 'AnhBia' => 'bach_tuyet_toc_do_bia_tap_11.jpg'],
            ['TenSach' => 'Có chó có mèo,ngày nào cũng vui - Tập 7', 'IDTheLoai' => 8, 'IDTacGia' => 8, 'Gia' => 35000, 'IDNhaXuatBan' => 1, 'SoLuongKho' => 83, 'MaPhieuNhap' => 4, 'AnhBia' => 'co_cho_co_meo_ngay_nao_cung_vui_bia_tap_7_1.jpg'],
            ['TenSach' => 'Học viện Siêu Anh hùng - Tập 38', 'IDTheLoai' => 10, 'IDTacGia' => 9, 'Gia' => 25000, 'IDNhaXuatBan' => 4, 'SoLuongKho' => 143, 'MaPhieuNhap' => 5, 'AnhBia' => 'hoc_vien_sieu_anh_hung_my_hero_academy_38.jpg'],
            ['TenSach' => 'Câu lạc bộ những kẻ mất ngủ - Tập 2', 'IDTheLoai' => 8, 'IDTacGia' => 10, 'Gia' => 40000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 31, 'MaPhieuNhap' => 5, 'AnhBia' => 'cau_lac_bo_nhung_ke_mat_ngu_bia_tap_2.jpg'],
            ['TenSach' => 'Bocchi The Rock! - Tập 3', 'IDTheLoai' => 8, 'IDTacGia' => 11, 'Gia' => 40000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 21, 'MaPhieuNhap' => 6, 'AnhBia' => 'bocchi_the_rock_bia_tap_3.jpg'],
            ['TenSach' => 'Frieren - Pháp sư tiễn táng - Tập 6', 'IDTheLoai' => 6, 'IDTacGia' => 12, 'Gia' => 45000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 21, 'MaPhieuNhap' => 6, 'AnhBia' => 'frieren_phap_su_tien_tang_bia_tap_6.jpg'],
            ['TenSach' => 'Nina ở thị trấn cao nguyên - Tập 10', 'IDTheLoai' => 8, 'IDTacGia' => 13, 'Gia' => 38000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 69, 'MaPhieuNhap' => 7, 'AnhBia' => 'nina_o_thi_tran_cao_nguyen_10.jpg'],
            ['TenSach' => 'Ngôn ngữ yêu thương - Tập 8', 'IDTheLoai' => 12, 'IDTacGia' => 14, 'Gia' => 30000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 82, 'MaPhieuNhap' => 7, 'AnhBia' => 'ngon_ngu_yeu_thuong_8.jpg'],
            ['TenSach' => 'Shadows House - Tập 2', 'IDTheLoai' => 6, 'IDTacGia' => 15, 'Gia' => 45000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 156, 'MaPhieuNhap' => 8, 'AnhBia' => 'shadow_house_bia_tap_2.jpg'],
            ['TenSach' => 'Dragon Quest:Dấu ấn Roto - Những người kế thừa - Tập 23', 'IDTheLoai' => 3, 'IDTacGia' => 16, 'Gia' => 40000, 'IDNhaXuatBan' => 4, 'SoLuongKho' => 23, 'MaPhieuNhap' => 8, 'AnhBia' => 'dragon_quest_dau_an_roto_bia_tap_1.jpg'],
            ['TenSach' => 'One-Punch Man - Tập 27', 'IDTheLoai' => 10, 'IDTacGia' => 17, 'Gia' => 25000, 'IDNhaXuatBan' => 2, 'SoLuongKho' => 47, 'MaPhieuNhap' => 9, 'AnhBia' => 'one_punch_man.jpg'],
            ['TenSach' => 'Shin cậu bé bút chì - Truyện dài - Tập 13', 'IDTheLoai' => 2, 'IDTacGia' => 18, 'Gia' => 25000, 'IDNhaXuatBan' => 1, 'SoLuongKho' => 61, 'MaPhieuNhap' => 9, 'AnhBia' => 'shin_cau_be_but_chi_truyen_dai_tap_13.jpg'],
            ['TenSach' => 'Ninja Rantaro - Tập 29', 'IDTheLoai' => 2, 'IDTacGia' => 19, 'Gia' => 40000, 'IDNhaXuatBan' => 3, 'SoLuongKho' => 37, 'MaPhieuNhap' => 10, 'AnhBia' => 'ninja_rantaro_bia_tap_29.jpg'],
            ['TenSach' => 'Thám Tử Lừng Danh Conan - Hanzawa - Chàng hung thủ số nhọ - Tập 7', 'IDTheLoai' => 2, 'IDTacGia' => 20, 'Gia' => 25000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 112, 'MaPhieuNhap' => 10, 'AnhBia' => 'hanh_zawa_chang_hung_thu_so_nho.jpg'],
            ['TenSach' => 'Solo Leveling - Tôi thăng cấp một mình - Tập 13', 'IDTheLoai' => 5, 'IDTacGia' => 21, 'Gia' => 30000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 231, 'MaPhieuNhap' => 11, 'AnhBia' => 'solo-leveling_bia_pvc-card_tap-13.jpg'],
            ['TenSach' => 'World Trigger - Tập 14', 'IDTheLoai' => 26, 'IDTacGia' => 6, 'Gia' => 35000, 'IDNhaXuatBan' => 1, 'SoLuongKho' => 6, 'MaPhieuNhap' => 11, 'AnhBia' => 'world_trigger_bia_tap_14.jpg'],
            ['TenSach' => 'Bạch tuyết tóc đỏ - Tập 13', 'IDTheLoai' => 1, 'IDTacGia' => 7, 'Gia' => 30000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 29, 'MaPhieuNhap' => 12, 'AnhBia' => 'bach_tuyet_toc_do_13.jpg'],
            ['TenSach' => 'Rồng săn tìm nhà - Tập 2', 'IDTheLoai' => 4, 'IDTacGia' => 22, 'Gia' => 40000, 'IDNhaXuatBan' => 3, 'SoLuongKho' => 39, 'MaPhieuNhap' => 12, 'AnhBia' => 'Dragon_goes_house_hunnting.jpg'],
            ['TenSach' => 'Slam Dunk Deluxe Edition - Tập 21', 'IDTheLoai' => 2, 'IDTacGia' => 23, 'Gia' => 60000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 57, 'MaPhieuNhap' => 13, 'AnhBia' => 'slam_drunk_21.jpg'],
            ['TenSach' => 'Chị Chion ở đền mèo - Tập 2', 'IDTheLoai' => 23, 'IDTacGia' => 24, 'Gia' => 50000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 71, 'MaPhieuNhap' => 13, 'AnhBia' => 'neko-no-otera-no-chion-san-jp-2.jpg'],
            ['TenSach' => 'Tân Ninja Hattori(Fujiko Fujiko A) - Tập 1', 'IDTheLoai' => 2, 'IDTacGia' => 4, 'Gia' => 25000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 98, 'MaPhieuNhap' => 14, 'AnhBia' => 'Tan_ninja_hatori_vol1.jpg'],
            ['TenSach' => 'Bocchi The Rock! - Tập 4', 'IDTheLoai' => 8, 'IDTacGia' => 11, 'Gia' => 40000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 63, 'MaPhieuNhap' => 14, 'AnhBia' => 'bocchi_the_rock_4.jpg'],
            ['TenSach' => 'Học viện Siêu anh hùng - Tập 39', 'IDTheLoai' => 10, 'IDTacGia' => 9, 'Gia' => 25000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 46, 'MaPhieuNhap' => 15, 'AnhBia' => 'Hoc_vien_sieu_anh_hung_39.jpg'],
            ['TenSach' => 'Phong Thần Diễn Nghĩa(Deluxe Edition) - Tập 3', 'IDTheLoai' => 14, 'IDTacGia' => 25, 'Gia' => 70000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 94, 'MaPhieuNhap' => 15, 'AnhBia' => 'Phong_than_dien_nghia_3.jpg'],
            ['TenSach' => 'Dragon Quest:Cuộc phiêu lưu của Dũng sĩ Dai(Deluxe Edition) - Tập 1', 'IDTheLoai' => 14, 'IDTacGia' => 4, 'Gia' => 69000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 66, 'MaPhieuNhap' => 16, 'AnhBia' => 'Dragon_Quest_Cuoc_phieu_luu_cua_Dung_si_Dai.jpeg'],
            ['TenSach' => 'Sứ giả bốn mùa - Vũ điệu mùa xuân - Tập 2', 'IDTheLoai' => 1, 'IDTacGia' => 15, 'Gia' => 140000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 43, 'MaPhieuNhap' => 16, 'AnhBia' => 'su_gia_4_mua_vu_dieu_mua_xuan_2.jpg'],
            ['TenSach' => 'Chú thuật hồi chiến - Tập 23', 'IDTheLoai' => 2, 'IDTacGia' => 21, 'Gia' => 30000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 26, 'MaPhieuNhap' => 17, 'AnhBia' => 'Jujutsu_Kaisen_vol23.jpg'],
            ['TenSach' => 'Chúa tể Bóng tối - Tập 3', 'IDTheLoai' => 6, 'IDTacGia' => 23, 'Gia' => 40000, 'IDNhaXuatBan' => 5, 'SoLuongKho' => 9, 'MaPhieuNhap' => 17, 'AnhBia' => 'Chua_te_bong_toi_vol3.jpg'],
        ]);
    }
}
