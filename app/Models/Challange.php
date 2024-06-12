<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Challange extends Model
{
    protected $fillable = [
        'name',
        'description',
        'distance_km',
        'distance_ml',
        'virtual_postcards',
        'has_street_view',
        'wallpaper',
        'image'
    ];

//    public function bundles()
//    {
//        return $this->hasMany(Bundle::class, 'challange_id');
//    }
}
