@extends('layouts.app')

@section('title', 'Médiathèque')

@section('content')
 <div class="site-breadcrumb" style="background: url({{ Vite::asset('resources/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Galerie</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Accueil</a></li>
                    <li class="active">Galerie</li>
                </ul>
            </div>
        </div>


        <div class="gallery-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline"></span>
                            <h2 class="site-title">Retrouver Nos photos</h2>
                            <div class="site-shadow-text wow fadeInRight" data-wow-delay=".35s">Notre Galerie</div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 popup-gallery">
                    <div class="col-md-7">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="gallery-item wow fadeInDown" data-wow-delay=".25s">
                                    <div class="gallery-img">
                                        <img src="{{ Vite::asset('resources/img/gallery/11.jpg') }}" alt>
                                    <a class="popup-img gallery-link" href="{{ Vite::asset('resources/img/gallery/11.jpg') }}"><i
                                                class="fal fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="gallery-item wow fadeInDown" data-wow-delay=".25s">
                                    <div class="gallery-img">
                                        <img src="{{ Vite::asset('resources/img/gallery/mambe.jpg') }}" alt>
                                        <a class="popup-img gallery-link" href="{{ Vite::asset('resources/img/gallery/mambe.jpg') }}"><i
                                                class="fal fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="gallery-item wow fadeInDown" data-wow-delay=".25s">
                                    <div class="gallery-img">
                                        <img src="{{ Vite::asset('resources/img/gallery/koffi.jpg') }}" alt>
                                        <a class="popup-img gallery-link" href="{{ Vite::asset('resources/img/gallery/koffi.jpg') }}"><i
                                                class="fal fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="gallery-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="gallery-img">
                                <img src="{{ Vite::asset('resources/img/gallery/dg.jpg') }}" alt>
                                <a class="popup-img gallery-link" href="{{ Vite::asset('resources/img/gallery/dg.jpg') }}"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                     <div class="text-center mt-40 wow fadeInUp" data-wow-delay=".25s">
                    <a href="https://flic.kr/s/aHBqjCgScr" target="_blank" class="theme-btn"><span class="fal fa-users"></span> Accéder à notre album</a>
                </div>
                </div>
                 <div class="venue-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <h2 class="site-title">Retrouver Nos vidéos</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 wow fadeInUp" data-wow-delay=".25s">
                    @php
                        $videos = $videos ?? collect();
                    @endphp
                    @foreach ( $videos as $video )
                    <div class="col-md-6 col-lg-4">
                        <div class="venue-item">
                            <div class="venue-img">
                                @if ($video->categorie == 'Reportage')
                                    <img src="{{ Vite::asset('resources/img/venue/reportage.jpg') }}" alt>
                                @else
                                    <img src="{{ Vite::asset('resources/img/venue/interview.jpg') }}" alt>
                                @endif
                            </div>
                            <div class="venue-content">
                                <span></span>
                                <h6>{{ $video->titre }}</h6>
                                <p>Abidjan, Côte d'Ivoire</p>
                                <div class="venue-play">
                                    <a class="popup-youtube" href="{{ $video->url }}">
                                        <span>Cliquez ici</span>
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                   
                    <div class="col-md-7"></div>
                    <a href="https://www.youtube.com/@agefopci9672" target="_blank" class="theme-btn"><span class="fal fa-users"></span> Accéder à notre chaîne youtube</a>

                </div>
            </div>
        </div>
            </div>
        </div>

@endsection