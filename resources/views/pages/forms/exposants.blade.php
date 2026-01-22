@extends('layouts.app')

@section('title', 'Actualités')

@section('content')
    
        <div class="site-breadcrumb" style="background: url({{ Vite::asset('resources/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Exposants</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Accueil</a></li>
                    <li class="active">exposants</li>
                </ul>
            </div>
        </div>

       <div class="login-area py-120 form-exposants">
            <div class="container">
                <div class="col-md-7 mx-auto">
                    <div class="login-form">
                        <div class="login-header">
                            <img src="{{ Vite::asset('resources/img/logo/fimec.png') }}" alt>
                            <p>Venez exposer votre activité : Formulaire de demande</p>
                        </div>
                        <form action="{{ route('exposants.store') }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" name="nom_prenoms" class="form-control" placeholder="Votre nom & prénoms">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="Adresse email">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                <input type="tel" name="telephone" class="form-control" placeholder="numéro de Téléphone">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-input-text"></i></span>
                                <input type="tel" name="nom_entreprise" class="form-control" placeholder="nom de la structure">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-light fa-table-tree"></i></span>
                                <select class="form-control" name="type_structure" id="pet-select">
                                <option value="">Choisissez le type de la structure</option>
                                <option value="Publique">Publique</option>
                                <option value="Privé">Privé</option>
                                <option value="Semi-privé">Semi-privé</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-light fa-table-tree"></i></span>
                                <select class="form-control" name="secteur_activite" id="pet-select">
                                <option value="">Choisissez le type d'activité</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Industrie">Industrie</option>
                                <option value="Services">Services</option>
                                <option value="Commerce">Commerce</option>
                                <option value="Autre">Autre</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-regular fa-brackets-curly"></i></span>
                                <input type="tel" class="form-control" name="url_site_web" placeholder="Entrer le site web de votre structure">
                            </div>
                            <!--<div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value id="agree">
                                <label class="form-check-label" for="agree">
                                    I agree with the <a href="#">Terms Of Service.</a>
                                </label>
                            </div>-->
                            <div class="d-flex align-items-center">
                                <button type="submit" class="theme-btn"><span class="far fa-paper-plane"></span>
                                    Je veux exposer</button>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
@endsection