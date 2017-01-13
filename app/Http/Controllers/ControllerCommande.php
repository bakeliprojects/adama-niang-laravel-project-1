<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\RequestCommande;

use App\ModelCommande;

use App\Http\Controllers;

use Ressources\Views\Vues;


class ControllerCommande extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
		$allCommandes = ModelCommande::all(); 
        return View('Vues/listcommande', compact('allCommandes'));
       
    }

    public function create()
    {
		return view('Vues.commande');
	}

	public function commander(RequestCommande $requete)
    {
        $commande = new ModelVendeur;
        $commande->commandeur = $requete['commandeur'];
        $commande->nombre = $requete['nombre'];
        $commande->contact = $requete['contact'];
        $commande->save();

        return redirect()->route('acceuil.index');
    }
}