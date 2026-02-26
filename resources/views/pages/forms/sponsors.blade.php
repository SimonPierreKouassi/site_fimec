@extends('layouts.app')

@section('title', 'Actualités')

@section('content')
     <div class="site-breadcrumb" style="background: url({{ Vite::asset('resources/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Sponsors</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Accueil</a></li>
                    <li class="active">sponsors</li>
                </ul>
            </div>
        </div>


         <div class="login-area py-120 form-sponsors">
            <div class="container">
                <div class="col-md-7 mx-auto">
                    <div class="login-form">
                        <div class="login-header">
                            <img src="{{ Vite::asset('resources/img/logo/fimec.png') }}" alt>
                            <p>Inscrivez-vous en 2 min pour sponsoriser le SIREXE.</p>
                        </div>
                        <form action="{{ route('sponsors.store') }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-text"><i class="far fa-user-tie"></i></span>
                                <input type="text" name="nom_prenoms" class="form-control" placeholder="Votre nom & prénoms">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-input-text"></i></span>
                                <input type="text" name="denomination_sociale" class="form-control" placeholder="Dénomination sociale">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="far fa-user-tie"></i></span>
                                <input type="text" name="poste" class="form-control" placeholder="Poste/Fonction">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="Adresse email">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                <input type="tel" name="telephone" class="form-control" placeholder="numéro de Téléphone">
                            </div>
                           
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-flag-swallowtail"></i></span>
                                <select class="form-control" name="pays" id="pet-select">
                                <option value="">Choisissez votre pays</option>
                                <option value="Côte d'ivoire">Côte d'ivoire</option>
                                <option value="Etranger">Etranger</option>
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
                                    Je souhaite être en contact avec votre service commercial</button>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div> 
@endsection