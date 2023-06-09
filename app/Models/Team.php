<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = 
        [
            'image',
            'nom',
            'fonction',
            'id_departement'
        ];

    public function departements()
    {
        return $this->belongsTo(Departement::class);
    }
}
