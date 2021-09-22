<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeCarouselItem extends Model
{
    protected $fillable = [
        'name',
        'background',
        'logo',
        'thumbnail',
        'url',
        'description',
        'active',
    ];
}
