<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;
    protected $table = 'Khachhang';
    protected $primaryKey = 'IDKhachhang';
    public $timestamps = false;
    protected $fillable = ['TenKH', 'TaiKhoan', 'MatKhau', 'DiaChi', 'SDT', 'Ngaysinh', 'Gender'];
    public function hoaDon()
    {
        return $this->hasMany(HoaDon::class, 'IDKhachhang');
    }
}
