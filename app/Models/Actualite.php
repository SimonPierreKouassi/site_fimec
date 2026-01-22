<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Actualite extends Model
{
    protected $table = 'actualites';
    use HasFactory;

    protected $fillable = [
        'titre',
        'contenu',
        'categorie',
        'tags',
        'image',
        'is_published',
    ];
    public function commentaires(): HasMany
    {
        return $this->hasMany(Commentaire::class);
    }
}
