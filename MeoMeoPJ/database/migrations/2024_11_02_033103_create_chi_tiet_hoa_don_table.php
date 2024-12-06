<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ChiTietHoaDon', function (Blueprint $table) {
            $table->id('MaChiTietHoaDon');
            $table->unsignedBigInteger('MaHoaDon')->nullable(false);
            $table->unsignedBigInteger('MaSP')->nullable(false);
            $table->float('SoLuongBan')->nullable();
            $table->timestamps(); // Tạo các cột created_at và updated_at
        });
        DB::statement('ALTER TABLE ChiTietHoaDon ADD CONSTRAINT fk_chitiethoadon_hoadon FOREIGN KEY (MaHoaDon) REFERENCES HoaDon(MaHoaDon)');
        DB::statement('ALTER TABLE ChiTietHoaDon ADD CONSTRAINT fk_chitiethoadon_sach FOREIGN KEY (MaSP) REFERENCES Sach(IDSach)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE ChiTietHoaDon DROP FOREIGN KEY fk_chitiethoadon_hoadon');
        DB::statement('ALTER TABLE ChiTietHoaDon DROP FOREIGN KEY fk_chitiethoadon_sach');
        Schema::dropIfExists('ChiTietHoaDon');
    }
};
