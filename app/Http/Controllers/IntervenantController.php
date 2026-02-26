<?php

namespace App\Http\Controllers;

use App\Models\Intervenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IntervenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $intervenants=Intervenant::all();
        return view('pages.intervenant',compact('intervenants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $intervenants=Intervenant::all();
        return view('dashboard.pages.ajout_intervenants',compact('intervenants'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_intervenant' => 'required',
            'fonction' => 'nullable',
            'facebook' => 'nullable',
            'linkedin' => 'nullable',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
            'tiktok' => 'nullable',
            'publie' => 'required|boolean',
            'categorie' => 'nullable',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2Mo
        ]);
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('intervenants', 'public');
        }
        Intervenant::create([
            'nom_intervenant' => $request->input('nom_intervenant'),
            'fonction' => $request->input('fonction'),
            'facebook' => $request->input('facebook'),
            'linkedin' => $request->input('linkedin'),
            'twitter' => $request->input('twitter'),
            'instagram' => $request->input('instagram'),
            'tiktok' => $request->input('tiktok'),
            'publie' => $request->input('publie'),
            'categorie' => $request->input('categorie'),
            'photo' => $photoPath,
        ]);
        return redirect()->route('list_intervenants.show')->with('success', 'Intervenant ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Intervenant $intervenant)
    {
        $intervenants=Intervenant::all();
        return view('dashboard.pages.list_intervenant',compact('intervenants'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Intervenant $intervenant)
    {
        return view('dashboard.pages.edit_intervenants', compact('intervenant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Intervenant $intervenant)
    {
        $intervenant->update([
            'nom_intervenant' => $request->input('nom_intervenant'),
            'fonction' => $request->input('fonction'),
            'facebook' => $request->input('facebook'),
            'linkedin' => $request->input('linkedin'),
            'twitter' => $request->input('twitter'),
            'instagram' => $request->input('instagram'),
            'tiktok' => $request->input('tiktok'),
            'publie' => $request->input('publie'),
            'categorie' => $request->input('categorie'),
        ]);
        return redirect()->route('list_intervenants.show')->with('success', 'Intervenant mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Intervenant $intervenant)
    {

        // 1. On vérifie si l'image existe et on la supprime du disque
        if ($intervenant->photo && Storage::disk('public')->exists($intervenant->photo)) {
            Storage::disk('public')->delete($intervenant->photo);
        }
        // 2. On supprime l'enregistrement en base de données
        $intervenant->delete();
        return redirect()->route('list_intervenants.show')->with('success', 'Intervenant supprimé avec succès.');
    }
}
