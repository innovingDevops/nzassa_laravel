<?php

use App\Models\Categorie;
use App\Models\Departement;
use App\Models\Fonctionnalite_formule;
use App\Models\Formule;
use App\Models\Galerie;
use App\Models\Team;
use App\Models\Setting;
use App\Models\Article;
use App\Models\Sous_categorie;
use Illuminate\Support\Facades\DB;

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

function getSetting($cle){
   $setting = Setting::where('cle','=',$cle)->first();
    return $setting->valeur;
}   

function getSouscategorie($id_categorie){
    // Lorsqu'on veut recuperer un seul element
    $souscategories = DB::table('categories')
                        ->join('sous_categories', 'categories.id', '=', 'sous_categories.id_categorie')
                        ->select('*')
                        ->where('categories.id', '=', $id_categorie)
                        ->get();
    return $souscategories;
}

function getArticleByCat($id_categorie){
    $articlebycat = Article::where("id_categorie" , "=", $id_categorie) ;
    return $articlebycat;
}

function getcateoriebyid($id_categorie){
    $cateoriebyid = Categorie::find($id_categorie);
    return $cateoriebyid;
}

function getsous_categorie($id_sous_categorie){
    $sous_categorie = Sous_categorie::find($id_sous_categorie);
    return $sous_categorie;
}
    
function getCategorie($id_categorie){
    $categorie = Categorie::find($id_categorie);
    return $categorie;
}


// function getSetting($cle){
//     $setting = Setting::find($cle);
//     return $setting;
// }
?>