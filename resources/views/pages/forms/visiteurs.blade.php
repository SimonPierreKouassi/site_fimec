@extends('layouts.app')

@section('title', 'Actualités')

@section('content')
        <div class="site-breadcrumb" style="background: url({{ Vite::asset('resources/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Visiteur</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Accueil</a></li>
                    <li class="active">visiteur</li>
                </ul>
            </div>
        </div>


        <div class="login-area py-120">
            <div class="container">
                <div class="col-md-7 mx-auto">
                    <div class="login-form">
                        <div class="login-header">
                            <img src="{{ Vite::asset('resources/img/logo/fimec.png') }}" alt>
                            <p>Visiter le FIMEC</p>
                        </div>
                        <form action="{{ route('visiteurs.store') }}" method="POST">
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
                                <span class="input-group-text"><i class="fa-light fa-table-tree"></i></span>
                                <select class="form-control" name="categorie_visiteur" id="pet-select">
                                <option value="">Choisissez votre catégorie</option>
                                <option value="Etudiant">Etudiant</option>
                                <option value="Professionnelle">Professionnelle</option>
                                <option value="Grand public">Grand public</option>
                                </select>
                            </div>
                            
                            <!--<div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value id="agree">
                                <label class="form-check-label" for="agree">
                                    I agree with the <a href="#">Terms Of Service.</a>
                                </label>
                            </div>-->
                            <div class="d-flex align-items-center">
                                <button type="submit" class="theme-btn"><span class="far fa-paper-plane"></span>
                                    Je m'inscris gratuitement au FIMEC</button>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>  
@endsection