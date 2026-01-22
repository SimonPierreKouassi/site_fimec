@extends('layouts.app')

@section('title', 'Actualités')

@section('content')
       <div class="site-breadcrumb" style="background: url({{ Vite::asset('resources/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Accréditation</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Accueil</a></li>
                    <li class="active">accréditation</li>
                </ul>
            </div>
        </div>

        <div class="login-area py-120 form-accreditation">
            <div class="container">
                <div class="col-md-7 mx-auto">
                    <div class="login-form">
                        <div class="login-header">
                            <img src="{{ Vite::asset('resources/img/logo/fimec.png') }}" alt>
                            <p>Accréditation presse : Formulaire de demande</p>
                        </div>
                        <form action="{{ route('presse.store') }}" method="POST">
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
                                <input type="tel" name="nom_media" class="form-control" placeholder="nom du media">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-newspaper"></i></span>
                                <select class="form-control" name="type_media" id="pet-select">
                                <option value="">Choisissez le type de média</option>
                                <option value="dog">Télévision</option>
                                <option value="cat">Radio</option>
                                <option value="hamster">Presse écrite</option>
                                <option value="parrot">Digital</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-regular fa-brackets-curly"></i></span>
                                <input type="url_media" name="url_media" class="form-control" placeholder="Entrer le site web de votre média">
                            </div>
                            
                            <div class="d-flex align-items-center">
                                <button type="submit" class="theme-btn"><span class="far fa-paper-plane"></span>
                                    Je demande mon accréditation</button>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
@endsection