<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'rating',
    ];

    public function geolocations()
    {
        return $this->belongsToMany(Geolocation::class, 'brand_geolocation')
            ->withPivot('position');
    }
}
