<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formule extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'logo_formule',
        'nom_formule',
        'titre_formule',
        'image_formule',
        'description_formule',
        'priority'
    ];

}
