<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Storage;

class DocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $documentations = Documentation::latest()->paginate(3);
        return view('pages.documentation', compact('documentations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $documentations = Documentation::all();
       
        return view('dashboard.pages.ajout_documentation', compact('documentations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            // 1. Validation
        $request->validate([
            'nom_document' => 'required',
            'annee_parution' => 'nullable',
            'image_couverture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2Mo
            'fichier' => 'required|mimes:pdf,doc,docx,txt|max:51200', // Max 5Mo
        ]);

            // 2. Gestion de l'upload
        if ($request->hasFile('image_couverture')) {
            // Enregistre dans storage/app/public/programmes
            $path1 = $request->file('image_couverture')->store('documentations', 'public');
        }
        if ($request->hasFile('fichier')) {
            // Enregistre dans storage/app/public/programmes
            $path2 = $request->file('fichier')->store('documentations', 'public');
        }


        Documentation::create([
            'nom_document' => $request->input('nom_document'),
            'annee_parution' => $request->input('annee_parution'),
            'image_couverture' => $path1,
            'fichier' => $path2,
        ]);
        return redirect()->route('ajout_documentations.index')->with('success', 'Documentation ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Documentation $documentation)
    {
        return view('dashboard.pages.edit_documentation', compact('documentation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Documentation $documentation)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Documentation $documentation)
    {
        // Validation
        $request->validate([
            'nom_document' => 'required',
            'annee_parution' => 'nullable',
            'image_couverture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fichier' => 'nullable|mimes:pdf,doc,docx,txt|max:51200',
        ]);

        // Gestion de l'upload
        if ($request->hasFile('image_couverture')) {
            storage::delete('public/'.$documentation->image_couverture);
            $path1 = $request->file('image_couverture')->store('documentations', 'public');
        }
        if ($request->hasFile('fichier')) {
            storage::delete('public/'.$documentation->fichier);
            $path2 = $request->file('fichier')->store('documentations', 'public');
        }

        // Mise à jour
        $documentation->update([
            'nom_document' => $request->input('nom_document'),
            'annee_parution' => $request->input('annee_parution'),
            'image_couverture' => $path1 ?? $documentation->image_couverture,
            'fichier' => $path2 ?? $documentation->fichier,
        ]);

        return redirect()->route('ajout_documentations.index')->with('success', 'Documentation mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Documentation $documentation)
    {
        storage::delete('public/'.$documentation->image_couverture);
        storage::delete('public/'.$documentation->fichier);
        $documentation->delete();
        return redirect()->route('ajout_documentations.index')->with('success', 'Documentation supprimée avec succès.');
    }
}
