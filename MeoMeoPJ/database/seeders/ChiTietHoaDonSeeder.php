<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietHoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ChiTietHoaDon')->insert([
            ['MaHoaDon' => 1, 'MaSP' => 6, 'SoLuongBan' => 3],
            ['MaHoaDon' => 1, 'MaSP' => 8, 'SoLuongBan' => 2],
            ['MaHoaDon' => 1, 'MaSP' => 25, 'SoLuongBan' => 1],
            ['MaHoaDon' => 2, 'MaSP' => 12, 'SoLuongBan' => 4],
            ['MaHoaDon' => 3, 'MaSP' => 17, 'SoLuongBan' => 6],
            ['MaHoaDon' => 4, 'MaSP' => 21, 'SoLuongBan' => 7],
            ['MaHoaDon' => 5, 'MaSP' => 18, 'SoLuongBan' => 2],
            ['MaHoaDon' => 5, 'MaSP' => 2, 'SoLuongBan' => 4],
            ['MaHoaDon' => 6, 'MaSP' => 9, 'SoLuongBan' => 8],
            ['MaHoaDon' => 6, 'MaSP' => 2, 'SoLuongBan' => 1],
            ['MaHoaDon' => 6, 'MaSP' => 30, 'SoLuongBan' => 10],
            ['MaHoaDon' => 6, 'MaSP' => 27, 'SoLuongBan' => 5],
            ['MaHoaDon' => 7, 'MaSP' => 29, 'SoLuongBan' => 12],
            ['MaHoaDon' => 7, 'MaSP' => 33, 'SoLuongBan' => 17],
            ['MaHoaDon' => 8, 'MaSP' => 12, 'SoLuongBan' => 3],
            ['MaHoaDon' => 8, 'MaSP' => 14, 'SoLuongBan' => 4],
            ['MaHoaDon' => 9, 'MaSP' => 19, 'SoLuongBan' => 2],
            ['MaHoaDon' => 10, 'MaSP' => 15, 'SoLuongBan' => 6],
            ['MaHoaDon' => 11, 'MaSP' => 23, 'SoLuongBan' => 9],
            ['MaHoaDon' => 12, 'MaSP' => 24, 'SoLuongBan' => 7],
            ['MaHoaDon' => 13, 'MaSP' => 6, 'SoLuongBan' => 12],
            ['MaHoaDon' => 13, 'MaSP' => 8, 'SoLuongBan' => 8],
            ['MaHoaDon' => 13, 'MaSP' => 25, 'SoLuongBan' => 2],
            ['MaHoaDon' => 14, 'MaSP' => 12, 'SoLuongBan' => 5],
            ['MaHoaDon' => 14, 'MaSP' => 17, 'SoLuongBan' => 7],
            ['MaHoaDon' => 15, 'MaSP' => 21, 'SoLuongBan' => 9],
            ['MaHoaDon' => 16, 'MaSP' => 18, 'SoLuongBan' => 3],
            ['MaHoaDon' => 16, 'MaSP' => 2, 'SoLuongBan' => 6],
            ['MaHoaDon' => 17, 'MaSP' => 9, 'SoLuongBan' => 10],
            ['MaHoaDon' => 17, 'MaSP' => 2, 'SoLuongBan' => 2],
            ['MaHoaDon' => 17, 'MaSP' => 30, 'SoLuongBan' => 12],
            ['MaHoaDon' => 17, 'MaSP' => 27, 'SoLuongBan' => 7],
            ['MaHoaDon' => 18, 'MaSP' => 29, 'SoLuongBan' => 14],
            ['MaHoaDon' => 18, 'MaSP' => 33, 'SoLuongBan' => 19]
        ]);
    }
}

