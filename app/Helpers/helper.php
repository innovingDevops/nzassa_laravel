<?php

use App\Models\Departement;
use App\Models\Fonctionnalite_formule;
use App\Models\Formule;
use App\Models\Galerie;
use App\Models\Team;

function getFonctionnalite($id_formule){
   $fonctionnalites =  Fonctionnalite_formule::where('id_formule','=',$id_formule)->get();
   return $fonctionnalites;
}

function getFormule($id){
    // Me permet de recuperer un seul element 
    $formule =  Formule::find($id);
    // $logo_formule = Formule::where('id', '=', $id)->get();
    return $formule;
}

function getTeam($id){
    
    $team = Team::where('id', '=', $id)->get();
    return $team;
}

function getGalerie($id){
    
    $galerie = Galerie::where('id', '=', $id)->get();
    return $galerie;
}

function getDepartement($id){
    // Lorsqu'on veut recuperer un seul element 
    $departement = Departement::find($id);
    return $departement;
}

?>