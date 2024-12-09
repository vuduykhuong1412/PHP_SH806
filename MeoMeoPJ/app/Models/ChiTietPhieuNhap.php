<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietPhieuNhap extends Model
{
    use HasFactory;
    protected $table = 'ChiTietPhieuNhap';
    protected $primaryKey = 'MaChiTietPhieuNhap';
    public $timestamps = false;
    protected $fillable = ['MaSP', 'MaPhieuNhap', 'SoLuongNhap', 'NgayBan'];
    public function phieuNhap()
    {
        return $this->belongsTo(PhieuNhap::class, 'MaPhieuNhap', 'MaPhieuNhap');
    }

    public function sach()
    {
        return $this->belongsTo(Sach::class, 'MaSP', 'IDSach');
    }
}
