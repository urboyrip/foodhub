<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $guarded = ['id'];

    public function vendors(){
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
