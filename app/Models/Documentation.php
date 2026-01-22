<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentation extends Model
{
    protected $table = 'documentations';
    use Hasfactory;
    
    protected $fillable = [
        // Ajoutez ici les noms des colonnes que vous voulez remplir
        // ex: 'title', 'description', etc.
        'nom_document',
        'annee_parution',
        'image_couverture',
        'fichier',
        
    ];
}
