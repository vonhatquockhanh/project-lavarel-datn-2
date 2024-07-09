<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'role_id', 'image_id', 'is_active'];

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
    public function image()
    {
        return $this->belongsTo('App\Image');
    }
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    /*
    * Image Accessor
    */
    public function getImageUrlAttribute($value)
    {
        return asset('/').'assets/img/'.$this->image->file;
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
    public function danhGiaSachs()
    {
        return $this->hasMany(DanhGiaSach::class, 'user_id');
    }
}
