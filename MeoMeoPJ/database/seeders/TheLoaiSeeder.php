<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TheLoaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Chèn dữ liệu vào bảng TheLoai
        DB::table('TheLoai')->insert([
            ['TenTheLoai' => 'Comedy'],
            ['TenTheLoai' => 'Shounen'],
            ['TenTheLoai' => 'Adventure'],
            ['TenTheLoai' => 'Drama'],
            ['TenTheLoai' => 'Action'],
            ['TenTheLoai' => 'Fantasy'],
            ['TenTheLoai' => 'Sci Fi'],
            ['TenTheLoai' => 'Slice Of Life'],
            ['TenTheLoai' => 'School Life'],
            ['TenTheLoai' => 'Supernatural'],
            ['TenTheLoai' => 'Seinen'],
            ['TenTheLoai' => 'Romance'],
            ['TenTheLoai' => 'Mystery'],
            ['TenTheLoai' => 'Historical'],
            ['TenTheLoai' => 'Non-Human Protagonists'],
            ['TenTheLoai' => 'Mature'],
            ['TenTheLoai' => 'Elemental Powers'],
            ['TenTheLoai' => 'Family Friendly'],
            ['TenTheLoai' => 'Tragedy'],
            ['TenTheLoai' => 'Gender Bender'],
            ['TenTheLoai' => 'Psychological'],
            ['TenTheLoai' => 'Sport'],
            ['TenTheLoai' => 'Shoujo'],
            ['TenTheLoai' => 'Ecchi'],
            ['TenTheLoai' => 'Monsters'],
            ['TenTheLoai' => 'Josei'],
            ['TenTheLoai' => 'Shounen-Ai'],
        ]);
    }
}
