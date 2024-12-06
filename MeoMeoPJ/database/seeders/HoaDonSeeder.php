<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('HoaDon')->insert([
            ['IDKhachhang' => 1, 'MaPTTT' => 1, 'MaPTVC' => 2, 'TongTien' => 235000, 'NgayBan' => '2023-01-15', 'TrangThai' => 1],
            ['IDKhachhang' => 2, 'MaPTTT' => 2, 'MaPTVC' => 1, 'TongTien' => 180000, 'NgayBan' => '2023-02-10', 'TrangThai' => 1],
            ['IDKhachhang' => 3, 'MaPTTT' => 1, 'MaPTVC' => 2, 'TongTien' => 150000, 'NgayBan' => '2023-03-05', 'TrangThai' => 2],
            ['IDKhachhang' => 1, 'MaPTTT' => 2, 'MaPTVC' => 1, 'TongTien' => 210000, 'NgayBan' => '2023-04-20', 'TrangThai' => 1],
            ['IDKhachhang' => 2, 'MaPTTT' => 1, 'MaPTVC' => 2, 'TongTien' => 190000, 'NgayBan' => '2023-05-22', 'TrangThai' => 2],
            ['IDKhachhang' => 2, 'MaPTTT' => 2, 'MaPTVC' => 1, 'TongTien' => 1060000, 'NgayBan' => '2023-06-18', 'TrangThai' => 1],
            ['IDKhachhang' => 3, 'MaPTTT' => 1, 'MaPTVC' => 2, 'TongTien' => 810000, 'NgayBan' => '2023-07-02', 'TrangThai' => 2],
            ['IDKhachhang' => 1, 'MaPTTT' => 2, 'MaPTVC' => 1, 'TongTien' => 255000, 'NgayBan' => '2023-08-25', 'TrangThai' => 1],
            ['IDKhachhang' => 2, 'MaPTTT' => 1, 'MaPTVC' => 2, 'TongTien' => 80000, 'NgayBan' => '2023-09-10', 'TrangThai' => 2],
            ['IDKhachhang' => 2, 'MaPTTT' => 2, 'MaPTVC' => 1, 'TongTien' => 270000, 'NgayBan' => '2023-10-05', 'TrangThai' => 1],
            ['IDKhachhang' => 3, 'MaPTTT' => 1, 'MaPTVC' => 2, 'TongTien' => 270000, 'NgayBan' => '2023-11-15', 'TrangThai' => 2],
            ['IDKhachhang' => 1, 'MaPTTT' => 2, 'MaPTVC' => 1, 'TongTien' => 280000, 'NgayBan' => '2023-12-28', 'TrangThai' => 1],
            ['IDKhachhang' => 1, 'MaPTTT' => 1, 'MaPTVC' => 2, 'TongTien' => 820000, 'NgayBan' => '2024-01-28', 'TrangThai' => 1],
            ['IDKhachhang' => 2, 'MaPTTT' => 2, 'MaPTVC' => 1, 'TongTien' => 225000, 'NgayBan' => '2024-02-20', 'TrangThai' => 1],
            ['IDKhachhang' => 3, 'MaPTTT' => 1, 'MaPTVC' => 2, 'TongTien' => 175000, 'NgayBan' => '2024-03-12', 'TrangThai' => 2],
            ['IDKhachhang' => 1, 'MaPTTT' => 2, 'MaPTVC' => 1, 'TongTien' => 270000, 'NgayBan' => '2024-04-18', 'TrangThai' => 1],
            ['IDKhachhang' => 2, 'MaPTTT' => 1, 'MaPTVC' => 2, 'TongTien' => 285000, 'NgayBan' => '2024-05-26', 'TrangThai' => 2],
            ['IDKhachhang' => 2, 'MaPTTT' => 2, 'MaPTVC' => 1, 'TongTien' => 1335000, 'NgayBan' => '2024-06-11', 'TrangThai' => 1],
            ['IDKhachhang' => 3, 'MaPTTT' => 1, 'MaPTVC' => 2, 'TongTien' => 920000, 'NgayBan' => '2024-07-02', 'TrangThai' => 2],
        ]);
    }
}

