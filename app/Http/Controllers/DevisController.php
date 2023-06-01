<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Departement;
use App\Models\Sous_categorie;
use Illuminate\Http\Request;
use App\Models\Devis;
use App\Models\Formule;
use App\Models\Galerie;
use App\Models\Team;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class DevisController extends Controller
{
    public function admin0 (){
        $categories = Categorie::all()->count();
        $sous_categories = Sous_categorie::all()->count();
        $articles = Article::all()->count();
        $formules = Galerie::all()->count();
        $teams = Team::all()->count();
        $departements = Departement::all()->count();
        $devis = Devis::all()->count();
        $galeries = Galerie::all()->count();
        
        return view("page/admin0/index", 
            [
                'categories' => $categories,
                'sous_categories' => $sous_categories,
                'articles' => $articles,
                'formules' => $formules,
                'teams' => $teams,
                'departements' => $departements,
                'galeries' => $galeries,
            ]);
    }
    public function liste_devis_valide(){
        $devis = DB::table('devis')->where('status','1')->get();
        return view("page/admin0/liste_devis_valide", ['devis' => $devis]);
    }

    public function contact(){
        $formules = DB::table('formules')->get();
        return view("page/client/contact", ['formules' => $formules]);
    }
 
    public function save_devis(Request $request){
        // dd($request->nom_categorie);
        $donnee = [
            "nom_prenom" => $request->nom_prenom,
            "nom_societe" => $request->nom_societe,
            "nombre_employe" => $request->nombre_employe,
            "secteur_activite" => $request->secteur_activite,
            "email" => $request->email,
            "contact" => $request->contact,
            "formule" => $request->formule,
            "commentaire" => $request->commentaire,
            "status" => '0',
        ];
        Devis::create($donnee);

        $request->validate([
            'nom_prenom' => 'required',
            'nom_societe' => 'required',
            'nombre_employe' => 'required',
            'secteur_activite' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'formule' => 'required',
            'commentaire' => 'required',
        ]);
        $mail_data = [
            'recipient' => 'hello.innoving@gmail.com',
            'fromEmail' => $request->email,
            'fromName' => $request->nom_prenom,
            'subject' => $request->subject,
            'body' => $request->commentaire,
            'formule' => $request->formule,
            'nom_societe' => $request->nom_societe,
            'contact' => $request->contact,
            'secteur_activite' => $request->secteur_activite
        ];
        Mail::send('page/client/email-template',$mail_data, function($message) use ($mail_data){
            $message->to($mail_data['recipient'])
                    ->from($mail_data['fromEmail'],$mail_data['fromName'])
                    ->replyTo($mail_data['fromEmail'])
                    ->subject($mail_data['subject']);
                });
                Session::flash('success', 'Votre mail à bien été envoyé');
                return redirect()->route('contact')->with('success', 'Votre mail à bien été envoyé');
    }

    public function liste_devis_brouillon():View{
        $devis = DB::table('devis')->where('status','0')->get();
        return view("page/admin0/liste_devis_brouillon", ['devis' => $devis]);
    }

    public function supprime_devis($id){
        $devis = Devis::find($id);
        $devis->delete();
        return redirect()->route('liste_devis_valide');
    }

    public function approuver_devis($id){
        $devis = Devis::find($id);
        $donnee['status'] = 1;
        DB::table('devis')->where('id',$id)->update($donnee);
        return redirect()->route('liste_devis_valide');
    }
}