<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $table = 'programmes';
    use HasFactory;

    protected $fillable = [
        // Ajoutez ici les noms des colonnes que vous voulez remplir
        // ex: 'title', 'description', etc.
        'annee',
        'lien_flip',
        
    ];
}
