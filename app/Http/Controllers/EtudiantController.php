<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

/**
 * Etudiant 
 */
class EtudiantController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // data 
        $etudiants = Etudiant::select(
                'etudiants.id', 
                'etudiants.nom', 
                'etudiants.naissance', 
                'etudiants.email', 
                'etudiants.phone', 
                'etudiants.adresse', 
                'etudiants.ville_id', 
                'villes.nom AS ville_nom'
            )
            ->rightJoin("villes", "villes.id", "ville_id")
            ->orderBy('etudiants.nom', 'asc')
            ->paginate(10)
        ;
        
        // pages pour la navigation 
        $last_page = $etudiants->lastPage();
        
        // afficher 
        return view(
            'etudiant.index', [
                'etudiants' => $etudiants, 
                'last_page' => $last_page, 
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        // data 
        $villes = Ville::all();
        
        // afficher 
        return view(
            'etudiant.create', [
                'villes' => $villes, 
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // valider 
        $request->validate( [
            'nom' => 'required|min:2|max:50', 
            'naissance' => 'required', 
            'email' => 'required|email|max:60|unique:etudiants',
            'phone' => 'required|min:6|max:20|unique:etudiants', 
            'adresse' => 'required|max:70', 
            'ville_id' => 'required', 
        ] );
        
        // formatter 
        $etudiant = new Etudiant;
        $etudiant->fill($request->all());
        
        // sauvegarder 
        $etudiant->save();
        
        // rediriger 
        return redirect(
            route('etudiant.show', $etudiant->id)
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant) {
        // data 
        $etu = Etudiant::select(
                'etudiants.id', 
                'etudiants.nom', 
                'etudiants.naissance', 
                'etudiants.email', 
                'etudiants.phone', 
                'etudiants.adresse', 
                'etudiants.ville_id', 
                'villes.nom AS ville_nom'
            )
            ->where('etudiants.id', $etudiant['id'])
            ->rightJoin("villes", "villes.id", "ville_id")
            ->get()
        ;
        
        // afficher 
        return view(
            'etudiant.show', [
                'etu' => $etu[0], 
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant) {
        // data 
        $etu = Etudiant::select(
                'etudiants.id', 
                'etudiants.nom', 
                'etudiants.naissance', 
                'etudiants.email', 
                'etudiants.phone', 
                'etudiants.adresse', 
                'etudiants.ville_id', 
                'villes.nom AS ville_nom'
            )
            ->where('etudiants.id', $etudiant['id'])
            ->rightJoin("villes", "villes.id", "ville_id")
            ->get()
        ;
        
        // data 
        $villes = Ville::all();
        
        // afficher 
        return view(
            'etudiant.edit', [
                'etu' => $etu[0], 
                'villes' => $villes, 
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant) {
        // valider 
        $request->validate( [
            Rule::unique('etudiants')->ignore($request->id, 'id'), 
            'nom' => 'required|min:2|max:50', 
            'naissance' => 'required', 
            'email' => 'required|email|max:60', 
            'phone' => 'required|min:6|max:20', 
            'adresse' => 'required|max:70', 
            'ville_id' => 'required', 
        ] );
        
        // formatter 
        $etudiant->fill($request->all());
        
        // sauvegarder 
        $etudiant->save();
        
        // rediriger 
        return redirect(
            route('etudiant.show', $etudiant->id)
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant) {
        $etudiant->delete();
        
        return redirect(
            route('etudiant')
        );
    }

}
