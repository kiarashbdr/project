<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sliders extends Model
{
    use HasFactory;
    protected $fillable = [
        'media_id',
        'photo_name',
        'photo_alt',
        'photo_descript',
        // 'photo_name',
    ];
}
