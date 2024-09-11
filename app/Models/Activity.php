<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
        'pic',
        'location',
        'price',
        'available_slots',
        'start_date',
        '',
    ];
}
