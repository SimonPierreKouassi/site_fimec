<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    protected $table = 'videos';
    use HasFactory;

    protected $fillable = [
        'titre',
        'url',
        'categorie',
        'type',
        'is_published',
    ];
}
