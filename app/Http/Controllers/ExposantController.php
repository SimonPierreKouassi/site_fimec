<?php

namespace App\Http\Controllers;

use App\Models\Exposant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExposantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.forms.exposants');
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
        Exposant::create($request->all());
        return redirect()->route('exposants.index')->with('success', 'Exposant ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Exposant $exposant)
    {
        $exposants = Exposant::all();
        return view('dashboard.pages.list_exposant', compact('exposants'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exposant $exposant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exposant $exposant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exposant $exposant)
    {
        $exposant->delete();
        return redirect()->route('list_exposants.index')->with('success', 'Exposant supprimé avec succès.');
    }
}
