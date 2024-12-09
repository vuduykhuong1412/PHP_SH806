<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // Danh sách các Seeder cần chạy
            PhieuNhapSeeder::class,
            TheLoaiSeeder::class,
            TacGiaSeeder::class,
            NhaXuatBanSeeder::class,
            SachSeeder::class,
            ChiTietPhieuNhapSeeder::class,
            UsersSeeder::class,
            KhachhangSeeder::class,
            PhuongThucThanhToanSeeder::class,
            PhuongThucVanChuyenSeeder::class,
            HoaDonSeeder::class,
            ChiTietHoaDonSeeder::class,
        ]);
    }
}

