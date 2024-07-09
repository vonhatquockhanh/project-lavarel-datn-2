<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\User;

class DanhGiaSach extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    use HasFactory;
    protected $table = 'danh_gia_sach';
    protected $fillable = [
        'id', 'user_id', 'sach_id', 'noi_dung', 'trang_thai'
    ];
    public function sach()
    {
        return $this->belongsTo(Sach::class, 'sach_id');
    }

    public function khachHang()
    {
        return $this->belongsTo(KhachHang::class, 'khach_hang_id');
    }

    public function user()
    {
        // return $this->belongsTo('App\User');
        return $this->belongsTo(User::class);
    }

    // public function sach()
    // {
    //     // return $this->belongsTo('App\Book');
    //     return $this->belongsTo(Sach::class);
    // }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
    
}
