<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietGioHang extends Model
{
    use HasFactory;
    protected $table = "chi_tiet_gio_hangs";
    protected $fillable = [
        'gio_hang_id',
        'san_pham_id',
        'so_luong',
    ];

    public function gioHang()
    {
        return $this->belongsTo(GioHang::class);
    }

    public function san_pham()
    {
        return $this->belongsTo(SanPham::class);
    }
}
