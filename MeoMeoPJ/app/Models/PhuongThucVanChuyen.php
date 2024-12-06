<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhuongThucVanChuyen extends Model
{
    use HasFactory;
    protected $table = 'PhuongThucVanChuyen';
    protected $primaryKey = 'MaPTVC';
    public $timestamps = false;
    protected $fillable = ['TenPTVC'];
    public function hoaDon()
    {
        return $this->hasMany(HoaDon::class, 'MaPTVC');
    }
}
