<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\RequestVendeur;

use App\ModelVendeur;

use App\Http\Controllers;

use Ressources\Views\Vues;

class ControllerVendeur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
		$allVendeur = ModelVendeur::all(); 
        return View('Vues/list', compact('allVendeur'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('Vues.ajouter');

	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store(RequestVendeur $request)
    {
        $vendeur = new ModelVendeur;

        $vendeur->nom = $request['nom'];
        $vendeur->genre = $request['genre'];
        $vendeur->prix = $request['prix'];
        $vendeur->contact = $request['contact'];
        $vendeur->save();


        return redirect()->route('acceuil.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $acceuil = ModelVendeur::find($id);
        return view('Vues.show')->with('acceuil',$acceuil);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acceuil = ModelVendeur::find($id);
        return view('Vues/editer')->with('acceuil',$acceuil);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestVendeur $request, $id)
    {
        $acceuil = ModelVendeur::find($id);

        $acceuil->nom = $request['nom'];
        $acceuil->genre = $request['genre'];
        $acceuil->prix = $request['prix'];
        $acceuil->contact = $request['contact'];
        $acceuil->save();
        

        return redirect()->route('acceuil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelVendeur::find($id)->delete();
        return redirect()->route('acceuil.index');

    }

}
