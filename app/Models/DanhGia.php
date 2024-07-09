<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        // return $this->belongsTo('App\User');
        return $this->belongsTo(User::class);
    }
    public function sach()
    {
        // return $this->belongsTo('App\Book');
        return $this->belongsTo(Sach::class);
    }

}
