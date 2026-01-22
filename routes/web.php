<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\IntervenantController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ExposantController;
use App\Http\Controllers\PresseController;
use App\Http\Controllers\VisiteurController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\NewsletterController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/forum', function () {
    return view('pages.forum');
});

Route::get('/programme', [ProgrammeController::class, 'index']);

Route::get('/documentation', [DocumentationController::class, 'index']);

Route::get('/intervenants', [IntervenantController::class, 'index']);

Route::get('/actualites', [ActualiteController::class, 'index']);

Route::get('/mediatheque', [MediaController::class, 'index'])->name('mediatheque.index');


Route::get('/actualite_detail', function () {
    return view('pages.detail_actualite');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/mediatheque', [MediaController::class, 'index'])->name('mediatheque.index');

Route::get('/exposants', [ExposantController::class, 'index'])->name('exposants.index');
Route::post('/exposants', [ExposantController::class, 'store'])->name('exposants.store');

Route::get('/presse', [PresseController::class, 'index'])->name('presse.index');
Route::post('/presse', [PresseController::class, 'store'])->name('presse.store');

Route::get('/visiteurs', [VisiteurController::class, 'index'])->name('visiteurs.index');
Route::post('/visiteurs', [VisiteurController::class, 'store'])->name('visiteurs.store');

Route::get('/sponsors', [SponsorController::class, 'index'])->name('sponsors.index');
Route::post('/sponsors', [SponsorController::class, 'store'])->name('sponsors.store');



// Les routes pour le dashbord admin   

//Ajout de programme par le lien fliphtml 5 
Route::get('/ajout_programme', [ProgrammeController::class, 'create'])->name('ajout_programmes.index');
Route::get('/ajout_programme/{programme}', [ProgrammeController::class, 'show'])->name('ajout_programmes.show');
Route::post('/ajout_programme/create', [ProgrammeController::class, 'store'])->name('ajout_programmes.store');
Route::delete('/ajout_programme/{programme}', [ProgrammeController::class, 'destroy'])->name('ajout_programmes.destroy');


//Ajout de documentation
Route::get('/ajout_documentation', [DocumentationController::class, 'create'])->name('ajout_documentations.index');
Route::post('/ajout_documentation/create', [DocumentationController::class, 'store'])->name('ajout_documentations.store');
Route::delete('/ajout_documentation/{documentation}', [DocumentationController::class, 'destroy'])->name('ajout_documentations.destroy');



//Ajout d'intervenant
Route::get('/list_intervenants', [IntervenantController::class, 'show'])->name('list_intervenants.show');
Route::get('/ajout_intervenants', [IntervenantController::class, 'create'])->name('ajout_intervenants.index');
Route::post('/ajout_intervenant/create', [IntervenantController::class, 'store'])->name('ajout_intervenants.store');
Route::delete('/list_intervenants/{intervenant}', [IntervenantController::class, 'destroy'])->name('list_intervenants.destroy');

//Ajout d'actualité

Route::get('/list_actualites', [ActualiteController::class, 'index'])->name('ajout_actualites.index');
Route::get('/ajout_actualites', [ActualiteController::class, 'create'])->name('ajout_actualites.create');
Route::post('/ajout_actualite/create', [ActualiteController::class, 'store'])->name('ajout_actualites.store');
Route::get('/list_actualites', [ActualiteController::class, 'show'])->name('list_actualites.show');
Route::get('/detail_actualites/{actualite}', [ActualiteController::class, 'actualite_detail'])->name('detail_actualites.show');
Route::delete('/list_actualites/{actualite}', [ActualiteController::class, 'destroy'])->name('list_actualites.destroy');


//Ajout des commentaires
Route::get('/list_commentaires', [CommentaireController::class, 'index'])->name('commentaires.index');
Route::post('/actualites/{actualite}/commentaires', [CommentaireController::class, 'store'])->name('commentaires.store');
Route::patch('/commentaires/{commentaire}/approuver', [CommentaireController::class, 'approve'])->name('commentaires.approve');
// Route pour désapprouver un commentaire
Route::patch('/commentaires/{commentaire}/unapprove', [CommentaireController::class, 'unapprove'])->name('commentaires.unapprove');
Route::delete('/commentaires/{commentaire}', [CommentaireController::class, 'destroy'])->name('commentaires.destroy');


// Routes d'administration des commentaires
Route::get('/list_commentaires', [CommentaireController::class, 'index'])->name('commentaires.index');
Route::patch('/commentaires/{commentaire}/approve', [CommentaireController::class, 'approve'])->name('commentaires.approve');
Route::delete('/commentaires/{commentaire}/reject', [CommentaireController::class, 'reject'])->name('commentaires.reject');
Route::delete('/commentaires/{commentaire}', [CommentaireController::class, 'destroy'])->name('commentaires.destroy');

//Route d'ajout média (photos et vidéos)
Route::get('/list_medias', [MediaController::class, 'show'])->name('list_medias.index');
Route::get('/ajout_medias', [MediaController::class, 'create'])->name('ajout_medias.index');
Route::post('/ajout_media/create', [MediaController::class, 'store'])->name('ajout_medias.store');

// Route pour la newsletter
Route::post('/newsletter/subscribe', [NewsletterController::class, 'store'])->name('newsletter.store');

//Route pour les visiteurs
Route::get('/list_visiteurs', [VisiteurController::class, 'show'])->name('list_visiteurs.index');
Route::delete('/list_visiteurs/{visiteur}', [VisiteurController::class, 'destroy'])->name('list_visiteurs.destroy');

