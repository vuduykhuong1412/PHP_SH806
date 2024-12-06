<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TacGiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Chèn dữ liệu vào bảng TacGia
        DB::table('TacGia')->insert([
            ['TenTacGia' => 'Taku Kuwabara', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Hiromu Arakawa, Huang Jin Zhou, Ryo Yashiro, Kusanagi', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Hiro Mashima', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Fujiko Fujio', 'QueQuan' => 'Toyama', 'TrangThai' => 1],
            ['TenTacGia' => 'Momoko Sakura', 'QueQuan' => 'Japan', 'TrangThai' => 1],
            ['TenTacGia' => 'Daisuke Ashihara', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Sorata Akiduki', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Hidekichi Matsumoto', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Kohei Horikoshi', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Aki Hamazi', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Kanehito Yamada, Tsukasa Abe', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Itokatsu', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'suu Morishita', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'so-ma-to', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Kamui Fujiwara, Takashi Umemura, Yuji Horii', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Yusuke Murata, One', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Yoshito Usui, Kazuki Nakajima, Kenta Aiba', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Soubee Amako', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Gosho Aoyama, Mayuko Kanba', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Dubu (Redice Studio), Chugong', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Kawo Tanuki, Choco Aya', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Takehiko Inoue', 'QueQuan' => 'Okuchi, Kagoshima', 'TrangThai' => 0],
            ['TenTacGia' => 'Makoto Ojiro', 'QueQuan' => 'Saitama', 'TrangThai' => 0],
            ['TenTacGia' => 'Hứa Trọng Lâm', 'QueQuan' => 'Nam Kinh', 'TrangThai' => 1],
            ['TenTacGia' => 'Kamui Fujiwara, Chiaki Kawamata', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Kana Akatsuki, Suoh', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Gege Akutami', 'QueQuan' => 'Japan', 'TrangThai' => 0],
            ['TenTacGia' => 'Daisuke Aizawa, Touzai', 'QueQuan' => 'Japan', 'TrangThai' => 0],
        ]);
    }
}

