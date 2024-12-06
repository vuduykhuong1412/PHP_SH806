<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaXuatBan extends Model
{
    use HasFactory;
    protected $table = 'NhaXuatBan';
    protected $primaryKey = 'IDNhaXuatBan';
    public $timestamps = false;
    protected $fillable = ['TenNXB', 'DiaChi', 'SDT', 'Email', 'GiamDoc'];
    public function sach()
    {
        return $this->hasMany(Sach::class, 'IDNhaXuatBan');
    }
}
