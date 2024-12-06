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
        Schema::create('TacGia', function (Blueprint $table) {
            $table->id("IDTacGia");
            $table->string("TenTacGia",255)->nullable(false)->unique();
            $table->string("QueQuan",255)->nullable(false);
            $table->tinyInteger("TrangThai")->default(0);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TacGia');
    }
};
