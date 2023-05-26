<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'libelle_departement',
    ];

    public function teams()
    {
        return $this->hasMany(Team::class,'id_departement');
    }
}
