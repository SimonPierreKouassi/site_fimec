<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sponsor extends Model
{
    protected $table = 'sponsors';
    use HasFactory;

    protected $fillable = [
        'nom_prenoms',
        'denomination_sociale',
        'poste',
        'email',
        'telephone',
        'pays',
    ];
}
