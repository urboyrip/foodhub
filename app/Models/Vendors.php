<?php

namespace App\Models;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Vendors as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Vendors extends Authenticatable
{
    use HasFactory;
    use Sluggable;

    // protected $fillable =['name','slug','founder','description','star'];
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // public function menus(){
    //     return $this->hasMany(Menu::class);
    // }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'vendor'
            ]
        ];
    }
}



