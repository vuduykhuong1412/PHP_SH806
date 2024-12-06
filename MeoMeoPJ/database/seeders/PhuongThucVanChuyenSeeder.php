<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhuongThucVanChuyenSeeder extends Seeder
{
    public function run()
    {
        DB::table('PhuongThucVanChuyen')->insert([
            ['TenPTVC' => 'Vận chuyển nhanh'],
            ['TenPTVC' => 'Vận chuyển thường'],
        ]);
    }
}
