<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietPhieuNhapSeeder extends Seeder
{
    public function run()
    {
        DB::table('ChiTietPhieuNhap')->insert([
            ['MaPhieuNhap' => 1, 'MaSP' => 5, 'SoLuongNhap' => 2, 'NgayBan' => '2024-05-03'],
            ['MaPhieuNhap' => 2, 'MaSP' => 6, 'SoLuongNhap' => 2, 'NgayBan' => '2024-05-06'],
            ['MaPhieuNhap' => 3, 'MaSP' => 7, 'SoLuongNhap' => 2, 'NgayBan' => '2022-05-10'],
            ['MaPhieuNhap' => 4, 'MaSP' => 5, 'SoLuongNhap' => 2, 'NgayBan' => '2022-05-13'],
            ['MaPhieuNhap' => 5, 'MaSP' => 6, 'SoLuongNhap' => 2, 'NgayBan' => '2022-05-17'],
            ['MaPhieuNhap' => 6, 'MaSP' => 14, 'SoLuongNhap' => 2, 'NgayBan' => '2022-05-20'],
            ['MaPhieuNhap' => 7, 'MaSP' => 8, 'SoLuongNhap' => 2, 'NgayBan' => '2022-05-24'],
            ['MaPhieuNhap' => 8, 'MaSP' => 17, 'SoLuongNhap' => 2, 'NgayBan' => '2022-05-27'],
            ['MaPhieuNhap' => 9, 'MaSP' => 21, 'SoLuongNhap' => 2, 'NgayBan' => '2022-05-31'],
            ['MaPhieuNhap' => 10, 'MaSP' => 24, 'SoLuongNhap' => 2, 'NgayBan' => '2022-06-03'],
            ['MaPhieuNhap' => 11, 'MaSP' => 26, 'SoLuongNhap' => 2, 'NgayBan' => '2022-06-07'],
            ['MaPhieuNhap' => 12, 'MaSP' => 15, 'SoLuongNhap' => 2, 'NgayBan' => '2022-06-10'],
            ['MaPhieuNhap' => 13, 'MaSP' => 18, 'SoLuongNhap' => 2, 'NgayBan' => '2022-06-14'],
            ['MaPhieuNhap' => 14, 'MaSP' => 29, 'SoLuongNhap' => 2, 'NgayBan' => '2022-06-17'],
            ['MaPhieuNhap' => 15, 'MaSP' => 31, 'SoLuongNhap' => 2, 'NgayBan' => '2022-06-21'],
            ['MaPhieuNhap' => 16, 'MaSP' => 1, 'SoLuongNhap' => 2, 'NgayBan' => '2022-06-24'],
            ['MaPhieuNhap' => 17, 'MaSP' => 33, 'SoLuongNhap' => 2, 'NgayBan' => '2022-06-28'],
        ]);
    }
}
