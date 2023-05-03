<?php

use App\Models\Fonctionnalite_formule;
use App\Models\Formule;

function getFonctionnalite($id_formule){
   $fonctionnalites =  Fonctionnalite_formule::where('id_formule','=',$id_formule)->get();
   return $fonctionnalites;
}

function getFormule($id){
    // Me permet de recuperer un seul element 
    $formule =  Formule::find($id);
    return $formule;
}

?>