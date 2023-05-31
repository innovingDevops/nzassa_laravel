<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'nom_prenom',
        'nom_societe',
        'nombre_employe',
        'secteur_activite',
        'email',
        'contact',
        'formule',
        'commentaire',
        'status'
    ];

}
