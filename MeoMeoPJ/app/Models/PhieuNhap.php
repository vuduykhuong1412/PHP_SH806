<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhieuNhap extends Model
{
    use HasFactory;
    protected $table = 'PhieuNhap';
    protected $primaryKey = 'MaPhieuNhap';
    public $timestamps = false;
    protected $fillable = ['NgayNhap'];
    public function chiTietPhieuNhap()
    {
        return $this->hasMany(ChiTietPhieuNhap::class, 'MaPhieuNhap');
    }

    public function sach()
    {
        return $this->hasMany(Sach::class, 'MaPhieuNhap');
    }
}
