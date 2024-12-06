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
        Schema::create('PhuongThucVanChuyen', function (Blueprint $table) {
            $table->id('MaPTVC');
            $table->string('TenPTVC', 50)->nullable(false);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PhuongThucVanChuyen');
    }
};
