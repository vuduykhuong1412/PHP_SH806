<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhuongThucThanhToanSeeder extends Seeder
{
    public function run()
    {
        DB::table('PhuongThucThanhToan')->insert([
            ['TenPTTT' => 'Thanh toán tiền mặt'],
            ['TenPTTT' => 'Thanh toán online'],
        ]);
    }
}

