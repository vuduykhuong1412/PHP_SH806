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
        Schema::create('ChiTietPhieuNhap', function (Blueprint $table) {
            $table->id('MaChiTietPhieuNhap');
            $table->unsignedBigInteger('MaSP')->nullable(false);
            $table->unsignedBigInteger('MaPhieuNhap')->nullable(false);
            $table->integer('SoLuongNhap')->nullable(false);
            $table->date('NgayBan')->nullable(false);
            // $table->timestamps(); // Tạo các cột created_at và updated_at
        });
        DB::statement('ALTER TABLE ChiTietPhieuNhap ADD CONSTRAINT fk_chitietphieunhap_phieunhap FOREIGN KEY (MaPhieuNhap) REFERENCES PhieuNhap(MaPhieuNhap)');
        DB::statement('ALTER TABLE ChiTietPhieuNhap ADD CONSTRAINT fk_chitietphieunhap_sach FOREIGN KEY (MaSP) REFERENCES Sach(IDSach)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE ChiTietPhieuNhap DROP FOREIGN KEY fk_chitietphieunhap_phieunhap');
        DB::statement('ALTER TABLE ChiTietPhieuNhap DROP FOREIGN KEY fk_chitietphieunhap_sach');
        Schema::dropIfExists('ChiTietPhieuNhap');
    }
};


