<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exposant extends Model
{
    protected $table = 'exposants';
    use HasFactory;

    protected $fillable = [
        'nom_prenoms',
        'email',
        'telephone',
        'nom_entreprise',
        'type_structure',
        'secteur_activite',
        'url_site_web',
    ];
}
