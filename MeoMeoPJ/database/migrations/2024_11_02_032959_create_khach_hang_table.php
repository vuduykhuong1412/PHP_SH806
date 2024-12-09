<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('KhachHang', function (Blueprint $table) {
            $table->id('IDKhachHang');
            $table->string('TenKH', 255)->nullable(false);
            $table->string('TaiKhoan', 255)->unique()->nullable(false);
            $table->string('MatKhau', 255)->nullable(false);
            $table->string('DiaChi', 200)->nullable(false);
            $table->string('SDT', 50)->unique()->nullable(false);
            $table->date('Ngaysinh')->nullable(false);
            $table->boolean('Gender')->nullable(false);
            // $table->timestamps(); // Tạo các cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('KhachHang');
    }
};

