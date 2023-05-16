<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = 
        [
            'nom_categorie',
            'description_categorie'
        ];

        public function sous_categories()
        {
            
            return $this->hasMany(SousCategorie::class);
        }

        public function articles()
        {
            return $this->hasMany(Article::class, 'id_categorie');
        }

}
