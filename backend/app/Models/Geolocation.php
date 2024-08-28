<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Geolocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_name',
        'iso_code',
    ];

    public function brands()
    {
        return $this->belongsToMany(Brand::class, 'brand_geolocation')
            ->withPivot('position');
    }
}
