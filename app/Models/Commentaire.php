<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    protected $fillable = 
        [
            'id_article',
            'commentaire',
            'email',
            'nom',
            'status',
        ];

        public function Article()
        {
            return $this->belongsTo(Article::class);
        }
}