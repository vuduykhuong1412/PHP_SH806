<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    use HasFactory;
    protected $table = 'Sach';
    protected $primaryKey = 'IDSach';
    public $timestamps = false;
    protected $fillable = ['TenSach', 'IDTheLoai', 'IDTacGia', 'Gia', 'IDNhaXuatBan', 'SoLuongKho', 'MaPhieuNhap', 'AnhBia'];
    public function phieuNhap()
    {
        return $this->belongsTo(PhieuNhap::class, 'MaPhieuNhap');
    }

    public function theLoai()
    {
        return $this->belongsTo(TheLoai::class, 'IDTheLoai');
    }

    public function tacGia()
    {
        return $this->belongsTo(TacGia::class, 'IDTacGia');
    }

    public function nhaXuatBan()
    {
        return $this->belongsTo(NhaXuatBan::class, 'IDNhaXuatBan');
    }

    public function chiTietPhieuNhap()
    {
        return $this->hasMany(ChiTietPhieuNhap::class, 'MaSP');
    }

    public function chiTietHoaDon()
    {
        return $this->hasMany(ChiTietHoaDon::class, 'MaSP');
    }
}
