<?php

use App\Models\Departement;
use App\Models\Fonctionnalite_formule;
use App\Models\Formule;
use App\Models\Galerie;
use App\Models\Team;
use App\Models\Setting;

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
function getMemberByDep($id_dep){
    // Lorsqu'on veut recuperer un seul element 
    $teams = Team::where('id_departement', '=',$id_dep)->get();
    return $teams;
}

function getSetting(){
    $facebook = Setting::find(9);
    $youtube = Setting::find(12);
    $instagram = Setting::find(11);
    $twitter = Setting::find(10);
    $telephone = Setting::find(13);
    $email = Setting::find(14);
    $localisation = Setting::find(15);
    return [$facebook, $youtube, $instagram, $twitter, $telephone, $email, $localisation];
}   

function getArticleByCat(){
   
}
?>