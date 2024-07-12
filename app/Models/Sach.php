<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sach extends Model
{
    use HasFactory;
    protected $table='sach';
    public $incrementing = false;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    // public function loaiSach()
    // {
    //     return $this->belongsTo(LoaiSach::class, 'loai_sach_id');
    // }

    // public function nhaXuatBan()
    // {
    //     return $this->belongsTo(NhaXuatBan::class, 'nha_xuat_ban_id');
    // }
    // public function chiTietDonHang()
    // {
    //     return $this->hasMany(CTDonHang::class, 'sach_id');
    // }

    protected $guarded = [];
    /*
     * RELATIONS
     */
    public function tacGia()
    {
        return $this->belongsTo(TacGia::class);
    }
    public function loaiSach()
    {
        return $this->belongsTo(LoaiSach::class);
    }
    public function hinhAnh()
    {
        // return $this->belongsTo('App\Image');
        return $this->belongsTo(HinhAnh::class);
    }
    public function danhGia()
    {
        // return $this->hasMany('App\Review');
        return $this->hasMany(DanhGiaSach::class);
    }
    public function nhaXuatBan()
    {
        return $this->belongsTo(NhaXuatBan::class);
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('id', 'desc');
    }

    public function chiTietDonHang()
    {
        return $this->hasMany(CTDonHang::class, 'sach_id');
    }

    /*
     * Scope for search books
     */
    public function scopeSearch($query, $term)
    {
        if($term)
        {
            $query->where(function ($q) use ($term){
                $q->where('ten_sach', 'LIKE', "%{$term}%");

                $q->orwhereHas('tacGia', function ($qr) use ($term){
                    $qr->where('ten_tac_gia', 'LIKE', "%{$term}%");
                });
            });
        }
    }


    public function getRouteKeyName()
    {
        return 'id';
    }

    /*
     * Image Accessor
     */
    public function getImageUrlAttribute($value)
    {
        if (isset($this->hinhAnh) && !is_null($this->hinhAnh->url)) {
            return asset('/') . 'assets/img/' . $this->hinhAnh->url;
        } else {
            // Trả về một đường dẫn mặc định hoặc thông báo lỗi
            return asset('/') . 'assets/img/default.png'; // hoặc giá trị mặc định bạn muốn
        }
    }
    public function getDefaultImgAttribute($value)
    {
        return asset('/').'assets/img/'.'user-placeholder.png';
    }
}