<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhaXuatBanSeeder extends Seeder
{
    public function run()
    {
        DB::table('NhaXuatBan')->insert([
            ['TenNXB' => 'NXB Shueisha', 'DiaChi' => 'Chiyoda, Tokyo, Nhật Bản', 'SDT' => '0854183458', 'Email' => 'shueisha@yahoo.com', 'GiamDoc' => 'Shinichi Hirono'],
            ['TenNXB' => 'NXB Mỹ Thuật', 'DiaChi' => '44B, Hàm Long, Hoàn Kiếm, Hanoi, Vietnam', 'SDT' => '0912350326', 'Email' => 'mythuat@hust.con', 'GiamDoc' => 'Không có'],
            ['TenNXB' => 'NXB Houbunsha', 'DiaChi' => '1-2-12 Koraku, Bunkyo-ku, Tokyo 112-8580', 'SDT' => '0954773527', 'Email' => 'Houbunsha@gmail.com', 'GiamDoc' => 'Takashi Takashi'],
            ['TenNXB' => 'NXB Hải Phòng', 'DiaChi' => 'Số 5 phố Nguyễn Khuyến - Phường Cầu Đất - Quận Ngô Quyền - Hải Phòng', 'SDT' => '0766376851', 'Email' => 'sunghoacai@gmail.com', 'GiamDoc' => 'Hà Mạnh Cường'],
            ['TenNXB' => 'NXB Kim Đồng', 'DiaChi' => 'Số 55 Quang Trung, Nguyễn Du, Hai Bà Trưng, Hà Nội', 'SDT' => '1900571595', 'Email' => 'cskh_online@nxbkimdong.com.vn', 'GiamDoc' => 'Bùi Tuấn Nghĩa'],
        ]);
    }
}
