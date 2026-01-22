<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Utilisez ce chemin exact :
use Spatie\Newsletter\Facades\Newsletter; 

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

        // Syntaxe simplifiée
        Newsletter::subscribe($validated['email']);

        return back()->with('success', 'Email envoyé à la liste Mailchimp !');
    }
}
