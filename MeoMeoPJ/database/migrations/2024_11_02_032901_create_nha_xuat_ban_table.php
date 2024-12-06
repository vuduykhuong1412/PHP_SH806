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
        Schema::create('NhaXuatBan', function (Blueprint $table) {
            $table->id("IDNhaXuatBan");
            $table->string("TenNXB",255)->nullable(false)->unique();
            $table->string("DiaChi",255)->nullable(false);
            $table->string("SDT",255)->nullable(false)->unique();
            $table->string("Email",255)->nullable(false);
            $table->string("GiamDoc",255)->nullable(false);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NhaXuatBan');
    }
};
