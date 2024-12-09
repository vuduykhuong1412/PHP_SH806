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
        Schema::create('HoaDon', function (Blueprint $table) {
            $table->id('MaHoaDon');
            $table->unsignedBigInteger('IDKhachHang')->nullable(false);
            $table->unsignedBigInteger('MaPTTT')->nullable();
            $table->unsignedBigInteger('MaPTVC')->nullable();
            $table->decimal('TongTien', 10, 2)->nullable(false);
            $table->dateTime('NgayBan')->default(now());
            $table->smallInteger('TrangThai')->nullable(false);
            // $table->timestamps(); // Tạo các cột created_at và updated_at
        });
        DB::statement('ALTER TABLE HoaDon ADD CONSTRAINT fk_hoadon_khachhang FOREIGN KEY (IDKhachHang) REFERENCES KhachHang(IDKhachHang)');
        DB::statement('ALTER TABLE HoaDon ADD CONSTRAINT fk_hoadon_phuongthucthanhtoan FOREIGN KEY (MaPTTT) REFERENCES PhuongThucThanhToan(MaPTTT)');
        DB::statement(' ALTER TABLE HoaDon ADD CONSTRAINT fk_hoadon_phuongthucvanchuyen FOREIGN KEY (MaPTVC) REFERENCES PhuongThucVanChuyen(MaPTVC)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE HoaDon DROP FOREIGN KEY fk_hoadon_khachhang');
        DB::statement('ALTER TABLE HoaDon DROP FOREIGN KEY fk_hoadon_phuongthucthanhtoan');
        DB::statement('ALTER TABLE HoaDon DROP FOREIGN KEY fk_hoadon_phuongthucvanchuyen');
        Schema::dropIfExists('HoaDon');
    }
};

