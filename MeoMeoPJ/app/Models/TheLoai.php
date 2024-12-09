<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    use HasFactory;
    protected $table = 'TheLoai';
    protected $primaryKey = 'IDTheLoai';
    public $timestamps = false;
    protected $fillable = ['TenTheLoai'];
    public function sach()
    {
        return $this->hasMany(Sach::class, 'IDTheLoai');
    }
}
