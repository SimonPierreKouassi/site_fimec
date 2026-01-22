<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Programme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programmes = Programme::orderByDesc('annee')->first();
        return view('pages.programme', compact('programmes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programmes = Programme::all();
       
        return view('dashboard.pages.ajout_programme', compact('programmes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Programme::create([
            'annee' => $request->input('annee'),
            'lien_flip' => $request->input('lien_flip'),
        ]);
        return redirect()->route('ajout_programmes.index')->with('success', 'Programme ajouté avec succès.');
    //    $programme = new Programme();
    //    $programme->annee = $request->input('annee');
    //    $programme->lien_flip = $request->input('lien_flip');
    //    $programme->save();
       
    //    return redirect()->route('ajout_programmes.index')->with('success', 'Programme ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Programme $programme)
    {
        return view('dashboard.pages.ajout_programme_detail', compact('programme'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Programme $programme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Programme $programme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Programme $programme)
    {
        // 1. Suppression de l'enregistrement en base de données
        $programme->delete(); 
        
        // ⚠️ Si vous gérez des fichiers/images :
        // Vous devez ajouter ici la logique pour supprimer aussi le fichier physique du disque.
        /*
        if ($programme->image_couverture) {
            Storage::disk('public')->delete($programme->image_couverture);
        }
        */
        // 2. Redirection
        return redirect()->route('ajout_programmes.index') // Rediriger vers la liste
                         ->with('success', 'Le programme a été supprimé avec succès.');
    }
}
