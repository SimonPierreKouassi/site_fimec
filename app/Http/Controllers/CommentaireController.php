<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Storage;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // On récupère les commentaires les plus récents, paginés
        $commentaires = Commentaire::with('actualite')->latest()->paginate(10);
        return view('dashboard.pages.commentaire', compact('commentaires'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Actualite $actualite)
    {
        $validatedData = $request->validate([
            'actualite_id' => 'required|exists:actualites,id',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'captcha_answer' => 'required|numeric'
        ]);
        
        // 2. Vérification de la réponse au captcha
        // Le captcha est généré côté client, donc nous acceptons juste la soumission
        // Vous pouvez ajouter une vérification côté serveur si nécessaire
        
        // 3. Créer le commentaire
        Commentaire::create([
            'actualite_id' => $actualite->id,
            'nom' => $request->nom,
            'email' => $request->email,
            'message' => $request->message,
            'is_approved' => false // Attente de modération
        ]);

        return back()->with('success', 'Merci ! Votre commentaire est en attente de validation.');
    }

    /**
     * Approuver un commentaire
     */
    public function approve(Commentaire $commentaire)
    {
        $commentaire->update(['is_approved' => true]);
        return back()->with('success', 'Commentaire approuvé avec succès !');
    }
    /**
     * Désapprouver un commentaire
     */
    public function unapprove(Commentaire $commentaire)
    {
        $commentaire->update(['is_approved' => false]);
        return back()->with('success', 'Commentaire désapprouvé avec succès.');
    }
    /**
     * Rejeter un commentaire
     */
    public function reject(Commentaire $commentaire)
    {
        $commentaire->delete();
        return back()->with('success', 'Commentaire rejeté et supprimé.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Commentaire $commentaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commentaire $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commentaire $commentaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commentaire $commentaire)
    {
        $commentaire->delete();
        return back()->with('success', 'Commentaire supprimé.');
    }
}
