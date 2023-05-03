<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fonctionnalite_formule extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'id_formule',
        'libelle_fonctionnalite',
        'image_fonctionnalite',
        'ordre_fonctionnalite',
    ];
}
