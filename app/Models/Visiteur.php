<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visiteur extends Model
{
    protected $table = 'visiteurs';
    use HasFactory;

    protected $fillable = [
        'nom_prenoms',
        'email',
        'telephone',
        'categorie_visiteur',
    ];
}
