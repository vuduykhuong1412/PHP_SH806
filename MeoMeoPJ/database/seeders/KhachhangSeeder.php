<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KhachhangSeeder extends Seeder
{
    public function run()
    {
        DB::table('KhachHang')->insert([
            ['TenKH' => 'Anh Tuấn', 'TaiKhoan' => 'tuandeptrai@gmail.com', 'MatKhau' => Hash::make('Tuan1234@'), 'DiaChi' => 'Hà Nội', 'SDT' => '0123456789', 'Ngaysinh' => '2003-03-26', 'Gender' => 1],
            ['TenKH' => 'Lan Anh', 'TaiKhoan' => 'lananh@gmail.com', 'MatKhau' => Hash::make('Anh1234@'), 'DiaChi' => 'Hải Phòng', 'SDT' => '0934544226', 'Ngaysinh' => '2003-06-11', 'Gender' => 0],
            ['TenKH' => 'Hải Anh', 'TaiKhoan' => 'haianh@yahoo.com', 'MatKhau' => Hash::make('haibeo2k@'), 'DiaChi' => 'Hưng Yên', 'SDT' => '0988266476', 'Ngaysinh' => '2000-01-06', 'Gender' => 1],
        ]);
    }
}
