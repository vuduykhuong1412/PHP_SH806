<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhuongThucThanhToan extends Model
{
    use HasFactory;
    protected $table = 'PhuongThucThanhToan';
    protected $primaryKey = 'MaPTTT';
    public $timestamps = false;
    protected $fillable = ['TenPTTT'];
    public function hoaDon()
    {
        return $this->hasMany(HoaDon::class, 'MaPTTT');
    }
}
