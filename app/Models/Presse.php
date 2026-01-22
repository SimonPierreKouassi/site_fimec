<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Presse extends Model
{
    protected $table = 'presses';
    use HasFactory;

    protected $fillable = [
        'nom_prenoms',
        'email',
        'telephone',
        'nom_media',
        'type_media',
        'url_media',
    ];
}
