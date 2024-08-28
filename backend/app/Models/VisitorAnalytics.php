<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VisitorAnalytics extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'city',
        'country',
        'device',
        'visit_count',
        'last_visit',
    ];
}
