<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temoignage extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_temoignage',
        'nom_temoignage',
        'profession_temoignage',
        'detail_temoignage',
    ];
}
