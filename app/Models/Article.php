<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Article extends Model
{
   
    use HasFactory;
    protected $fillable = 
        [
            'titre_article',
            'courte_description',
            'id_categorie',
            'id_sous_categorie',
            'detail_article',
            'image_article'
        ];

        public function sous_categories()
        {
            return $this->belongsTo(sous_categories::class);
        }

        public function categories()
        {
            return $this->belongsTo(categories::class);
        }
        public function Commentaire()
        {
            return $this->hasMany(Commentaire::class);
        }
}
