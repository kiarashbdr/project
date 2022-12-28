<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo_name',
        'photo_alt',
        'photo_descript',
        'photo_path',
        'media_id',
        
    ];
    public function media()
        {
            return $this->hasMany(media::class);
        }
}
