<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class navs extends Model
{
    use HasFactory;
    protected $fillable = [
        'media_id',
        'text',
    ];
    public function media()
        {
            return $this->hasMany(navs::class);
        }
}
