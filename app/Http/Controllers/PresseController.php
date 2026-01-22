<?php

namespace App\Http\Controllers;

use App\Models\Presse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PresseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.forms.presse'); 
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
        Presse::create($request->all());
        return redirect()->route('presse.index')->with('success', 'Presse ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Presse $presse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presse $presse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Presse $presse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presse $presse)
    {
        //
    }
}
