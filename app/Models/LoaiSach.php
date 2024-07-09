<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiSach extends Model
{
    use HasFactory;
    protected $table='loai_sach';
    protected $fillable = [
        'id',
        'ten_loai_sach',
        'slug'
    ];

    protected $keyType = 'string';
    protected $guarded = [];
    public $incrementing = false;

    protected $dates = ['deleted_at'];
    public function sachs()
    {
        return $this->hasMany(Sach::class);
    }

    public function sach()
    {
        return $this->hasMany(Sach::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /*
     * Image Accessor
     */
    public function getImageUrlAttribute($value)
    {
        return asset('/').'assets/img/'.$this->hinhAnh->url;
    }
    public function getDefaultImgAttribute($value)
    {
        return asset('/').'assets/img/'.'user-placeholder.png';
    }
}
