<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intervenant;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $intervenants = Intervenant::where('categorie', 'Ambassadeur')->get();
        return view('pages.home', compact('intervenants'));
    }
}
