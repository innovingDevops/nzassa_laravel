<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Modèle SousCategorie
class Sous_categorie extends Model
{
    protected $fillable = [
        'categorie_id',
        'nom_souscategorie',
        'description_souscategorie'
    ];

    public function categorie()
        {
            return $this->belongsTo(Categorie::class);
        }

    public function Article()
        {
            return $this->hasMany(Article::class);
        }
}


