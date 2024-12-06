<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhieuNhapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Chèn dữ liệu vào bảng PhieuNhap
        DB::table('PhieuNhap')->insert([
            ['NgayNhap' => '2024-05-03'],
            ['NgayNhap' => '2024-05-06'],
            ['NgayNhap' => '2022-05-10'],
            ['NgayNhap' => '2022-05-13'],
            ['NgayNhap' => '2022-05-17'],
            ['NgayNhap' => '2022-05-20'],
            ['NgayNhap' => '2022-05-24'],
            ['NgayNhap' => '2022-05-27'],
            ['NgayNhap' => '2022-05-31'],
            ['NgayNhap' => '2022-06-03'],
            ['NgayNhap' => '2022-06-07'],
            ['NgayNhap' => '2022-06-10'],
            ['NgayNhap' => '2022-06-14'],
            ['NgayNhap' => '2022-06-17'],
            ['NgayNhap' => '2022-06-21'],
            ['NgayNhap' => '2022-06-24'],
            ['NgayNhap' => '2022-06-28'],
        ]);
    }
}
