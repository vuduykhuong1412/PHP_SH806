php
Copy code
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
        Schema::create('Sach', function (Blueprint $table) {
            $table->id('IDSach');
            $table->string('TenSach', 70);
            $table->unsignedBigInteger('IDTheLoai');
            $table->unsignedBigInteger('IDTacGia');
            $table->float('Gia');
            $table->unsignedBigInteger('IDNhaXuatBan');
            $table->float('SoLuongKho');
            $table->unsignedBigInteger('MaPhieuNhap');
            $table->string('AnhBia', 60)->nullable();
            //$table->timestamps();
        });
        DB::statement('ALTER TABLE Sach ADD CONSTRAINT fk_theloai FOREIGN KEY (IDTheLoai) REFERENCES TheLoai(IDTheLoai)');
        DB::statement('ALTER TABLE Sach ADD CONSTRAINT fk_tacgia FOREIGN KEY (IDTacGia) REFERENCES TacGia(IDTacGia)');
        DB::statement('ALTER TABLE Sach ADD CONSTRAINT fk_nhaxuatban FOREIGN KEY (IDNhaXuatBan) REFERENCES NhaXuatBan(IDNhaXuatBan)');
        DB::statement('ALTER TABLE Sach ADD CONSTRAINT fk_phieunhap FOREIGN KEY (MaPhieuNhap) REFERENCES PhieuNhap(MaPhieuNhap)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE Sach DROP FOREIGN KEY fk_theloai');
        DB::statement('ALTER TABLE Sach DROP FOREIGN KEY fk_tacgia');
        DB::statement('ALTER TABLE Sach DROP FOREIGN KEY fk_nhaxuatban');
        DB::statement('ALTER TABLE Sach DROP FOREIGN KEY fk_phieunhap');
        Schema::dropIfExists('Sach');
    }
};
