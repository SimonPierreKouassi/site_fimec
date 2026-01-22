<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Intervenant extends Model
{
    protected $table = 'intervenants';
    use HasFactory;

    protected $fillable = [
        'nom_intervenant',
        'fonction',
        'facebook',
        'linkedin',
        'twitter',
        'publie',
        'categorie',
        'photo',
    ];
}
