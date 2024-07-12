<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\HinhAnh;
use App\Models\DanhGiaSach;
use App\Models\DonHang;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'address', 'password', 'role_id', 'image_id', 'is_active'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }
    public function hinhAnh()
    {
        // return $this->belongsTo('App\Image');
        return $this->belongsTo(HinhAnh::class);
    }
    public function donHang()
    {
        // return $this->hasMany('App\Order');
        return $this->hasMany(DonHang::class);
    }
    public function danhGiaSach()
    {
        // return $this->hasMany('App\Review');
        return $this->hasMany(DanhGiaSach::class);
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
        return asset('/').'assets/img/'.'user-placeholder 3.png';
    }


    /*
     * Admin Authentication
     */
    public function isAdmin()
    {
        if($this->role->name == 'Admin'  && $this->is_active == 1)
        {
            return true;
        }
        return false;
    }

    /*
     * Users Authentication
     */
    public function isUser()
    {
        if ($this->role->name == 'User')
        {
            return true;
        }
        return false;
    }
    public function phieuNhapHang()
    {
        return $this->belongsTo(PhieuNhapHang::class, 'phieu_nhap_hang_id');
    }
}
