<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BrandGeolocation extends Pivot
{
    use HasFactory;

    protected $table = 'brand_geolocation';

    protected $fillable = [
        'brand_id',
        'geolocation_id',
        'position',
    ];
}
