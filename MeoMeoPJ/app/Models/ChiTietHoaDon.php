<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    use HasFactory;
    protected $table = 'ChiTietHoaDon';
    protected $primaryKey = 'MaChiTietHoaDon';
    public $timestamps = false;
    protected $fillable = ['MaHoaDon', 'MaSP', 'SoLuongBan'];
    public function hoaDon()
    {
        return $this->belongsTo(HoaDon::class, 'MaHoaDon');
    }

    public function sach()
    {
        return $this->belongsTo(Sach::class, 'MaSP');
    }
}
