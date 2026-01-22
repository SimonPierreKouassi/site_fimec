<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Database\Eloquent\Relations\BelongsTo;

class Commentaire extends Model
{
    protected $table = 'commentaires';
    use HasFactory;

    protected $fillable = [
        'actualite_id',
        'nom',
        'email',
        'message',
        'is_approved',
    ];  
    public function actualite(): BelongsTo
    {
        return $this->belongsTo(Actualite::class);
    }
}
