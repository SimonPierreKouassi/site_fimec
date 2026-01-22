<?php

namespace App\Http\Controllers;

use App\Models\Visiteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisiteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.forms.visiteurs');
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
    public function store(Request $request)
    {
        Visiteur::create($request->all());
        return redirect()->route('visiteurs.index')->with('success', 'Visiteur ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Visiteur $visiteur)
    {
        $visiteurs = Visiteur::all();
        return view('dashboard.pages.list_visiteur', compact('visiteurs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visiteur $visiteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visiteur $visiteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visiteur $visiteur)
    {
        //
    }
}
