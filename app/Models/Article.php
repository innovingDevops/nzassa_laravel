<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = 
        [
            'titre_article',
            'courte_description',
            'categorie',
            'sous_categorie',
            'detail_article',
            'image_article'
        ];

        public function sous_categories()
        {
            return $this->belongsTo(sous_categories::class);
        }

        public function categorie()
        {
            return $this->belongsTo(Categorie::class);
        }
        public function Commentaire()
        {
            return $this->hasMany(Commentaire::class);
        }
        
}
