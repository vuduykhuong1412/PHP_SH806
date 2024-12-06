<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['Fullname' => 'Tạ Văn Phúc', 'TaiKhoan' => 'phuc20230282P.hust', 'password' => Hash::make('Phuc1234@'),],
            ['Fullname' => 'Nguyễn Chiến Thắng', 'TaiKhoan' => 'thang20230291P.hust', 'password' => Hash::make('1234$'),],
            ['Fullname' => 'Kayuki', 'TaiKhoan' => 'Kayuki2910', 'password' => Hash::make('1234$'),],
        ]);
    }
}

