<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TacGia extends Model
{
    use HasFactory;
    protected $table = 'TacGia';
    protected $primaryKey = 'IDTacGia';
    public $timestamps = false;
    protected $fillable = ['TenTacGia', 'QueQuan', 'TrangThai'];
    public function sach()
    {
        return $this->hasMany(Sach::class, 'IDTacGia');
    }
}
