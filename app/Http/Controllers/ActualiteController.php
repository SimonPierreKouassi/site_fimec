<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Storage;


class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
       $actualites = Actualite::latest()->paginate(6);
        return view('pages.actualites', compact('actualites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.ajout_actualite');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'categorie' => 'nullable|string|max:100',
            'tags' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'required|boolean',
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('actualites', 'public');
        }
        Actualite::create([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'categorie' => $request->categorie,
            'tags' => $request->tags,
            'image' => $imagePath,
            'is_published' => (bool) $request->is_published,
        ]); 
        return redirect()->route('list_actualites.show')->with('success', 'Actualité ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Actualite $actualite)
    {

        $actualites = Actualite::paginate(6);
        return view('dashboard.pages.list_actualite', compact('actualites'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function actualite_detail(Actualite $actualite)
    {
        // Générer deux chiffres au hasard
        $n1 = rand(1, 9);
        $n2 = rand(1, 9);
        
        // Stocker la réponse attendue dans la session du visiteur
        session(['captcha_result' => $n1 + $n2]);

        // Charger les commentaires non approuvés pour cette actualité
        $actualite->load(['commentaires' => function ($query) {
            $query->where('is_approved', true)->orderBy('created_at', 'desc');
        }]);

        // Récupérer toutes les catégories uniques avec le nombre d'articles
        $categories = [];
        $allActualites = Actualite::all();
        
        foreach ($allActualites as $act) {
            if (!empty($act->categorie)) {
                $cats = explode(', ', $act->categorie);
                foreach ($cats as $cat) {
                    $catTrimmed = trim($cat);
                    if (!isset($categories[$catTrimmed])) {
                        $categories[$catTrimmed] = 0;
                    }
                    $categories[$catTrimmed]++;
                }
            }
        }
        
        // Trier les catégories par ordre alphabétique
        ksort($categories);
        
        // Récupérer les 3 dernières actualités
        $actualitesRecentes = Actualite::orderBy('created_at', 'desc')->limit(3)->get();
        
        return view('pages.detail_actualite', compact('actualite', 'categories', 'actualitesRecentes', 'n1', 'n2'));
    }

    public function edit(Actualite $actualite)
    {
        $actualite = Actualite::findOrFail($actualite->id);
        return view('dashboard.pages.edit_actualite', compact('actualite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Actualite $actualite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actualite $actualite)
    {
        // 1. Suppression de l'enregistrement en base de données
        $actualite->delete(); 
        
        // ⚠️ Si vous gérez des fichiers/images :
        // Vous devez ajouter ici la logique pour supprimer aussi le fichier physique du disque.
        if ($actualite->image) {
            Storage::disk('public')->delete($actualite->image);
        }

        return redirect()->route('list_actualites.show')->with('success', 'Actualité supprimée avec succès.');  
    }
}
