<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;
    protected $table = 'HoaDon';
    protected $primaryKey = 'MaHoaDon';
    public $timestamps = false;
    protected $fillable = ['IDKhachhang', 'MaPTTT', 'MaPTVC', 'TongTien', 'TrangThai'];
    public function khachhang()
    {
        return $this->belongsTo(Khachhang::class, 'IDKhachhang');
    }

    public function phuongThucThanhToan()
    {
        return $this->belongsTo(PhuongThucThanhToan::class, 'MaPTTT');
    }

    public function phuongThucVanChuyen()
    {
        return $this->belongsTo(PhuongThucVanChuyen::class, 'MaPTVC');
    }

    public function chiTietHoaDon()
    {
        return $this->hasMany(ChiTietHoaDon::class, 'MaHoaDon');
    }
}
