<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    use HasFactory;
    protected $table='gio_hang';
    protected $primaryKey = 'id';
    public $incrementing = true; 

    protected $fillable = [
        'id',
        'sach_id',
        'user_id',
        'combo_id',
        'so_luong_ton',
        'gia',
        'so_luong'
    ];
  
    protected $guarded = [];

    public function sach()
    {
        return $this->belongsTo(Sach::class, 'sach_id', 'id');
    }
    public function combo()
    {
        return $this->belongsTo(Combo::class, 'combo_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
