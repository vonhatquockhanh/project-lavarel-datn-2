<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhiVanChuyen extends Model
{
    use HasFactory;
    protected $table='phi_van_chuyen';
    protected $fillable = [
        'id',
        'khu_vuc_van_chuyen_id',
        'phi_van_chuyen',
    ];

    public function khuVucVanChuyen()
    {
        return $this->belongsTo(KhuVucVanChuyen::class, 'khu_vuc_van_chuyen_id', 'id');
    }

    public function sach()
    {
        return $this->hasMany(Sach::class);
    }
}
