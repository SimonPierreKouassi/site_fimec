<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     
    public function index()
    {
        $photos = Photo::all();
        $videos = Video::all();
        return view('pages.mediatheque', compact('photos', 'videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.ajout_media');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:photo,video',
            'nom' => 'required_if:type,photo|string|max:255',
            'photo' => 'required_if:type,photo|image|mimes:jpeg,png,jpg,gif|max:2048',
            'titre' => 'required_if:type,video|string|max:255',
            'categorie' => 'required_if:type,video|string|max:255',
            'url' => 'required_if:type,video|url|max:255',
            'is_published' => 'required|boolean',
        ]);
        if ($request->input('type') === 'photo') {
            $photoPath = null;
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('photos', 'public');
            }
            Photo::create([
                'nom' => $request->input('nom'),
                'photo' => $photoPath,
                'type' => $request->input('type'),
                'is_published' => $request->input('is_published'),
            ]);
        } elseif ($request->input('type') === 'video') {
            Video::create([
                'titre' => $request->input('titre'),
                'url' => $request->input('url'),
                'categorie' => $request->input('categorie'),
                'type' => $request->input('type'),
                'is_published' => $request->input('is_published'),
            ]);
        }
        return redirect()->route('ajout_medias.index')->with('success', 'Média ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        $photos = Photo::all();
        $videos = Video::all();
        return view('dashboard.pages.list_media', compact('photos', 'videos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('list_medias.index')->with('success', 'Vidéo supprimée avec succès.');
    }
}
