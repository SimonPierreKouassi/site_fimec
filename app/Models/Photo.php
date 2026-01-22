<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    protected $table = 'photos';
    use HasFactory;

    protected $fillable = [
        'nom',
        'photo',
        'type',
        'is_published',
    ];  
}
