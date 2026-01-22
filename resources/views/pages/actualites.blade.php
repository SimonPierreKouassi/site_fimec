@extends('layouts.app')

@section('title', 'Actualités')

@section('content')
        <div class="site-breadcrumb" style="background: url({{ Vite::asset('resources/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Actualités</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Accueil</a></li>
                    <li class="active">Actualités</li>
                </ul>
            </div>
        </div>


        <div class="blog-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline"></span>
                            <h2 class="site-title">Nos Actualités <br> <span></span></h2>
                            <p>Retrouvez ici les dernières nouvelles du Forum International des Métiers et des Compétences (FIMEC), ainsi que des articles sur les tendances des métiers et compétences.</p>
                            <div class="site-shadow-text wow fadeInRight" data-wow-delay=".35s">Actualités</div>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                            @php
                                $actualites = $actualites ?? collect();
                            @endphp
                            @if ($actualites->isNotEmpty())
                                @foreach ($actualites as $actualite)
                                    <div class="col-md-6 col-lg-4">
                                        <div class="blog-item wow fadeInDown" data-wow-delay=".25s">
                                            <span class="blog-date">{{$actualite->created_at->format('M d, Y')}}</span>
                                            <div class="blog-item-img">
                                                <img src="{{ asset('storage/'.$actualite->image) }}" alt="Thumb">
                                            </div>
                                            <div class="blog-item-info">
                                                <div class="blog-item-meta">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-user-circle"></i> By Admin</a></li>
                                                        <li><a href="#"><i class="far fa-comments"></i> 1.25k Commentaires</a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="blog-title">
                                                    <a href="#">{{ $actualite->titre }}</a>
                                                </h4>
                                                <a class="theme-btn" href="{{ route('detail_actualites.show', ['actualite' => $actualite->id]) }}">Voir plus<i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                    
                    
                    
                </div>

                <div class="pagination-area">
                    <ul class="pagination">
                        {{-- Bouton Précédent --}}
                        <li class="page-item {{ $actualites->onFirstPage() ? 'disabled' : '' }}" >
                            <a class="page-link" href="{{ $actualites->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
                            </a>
                        </li>
                        {{-- Boucle pour les numéros de page --}}
                        @foreach ($actualites->getUrlRange(1, $actualites->lastPage()) as $page => $url)
                            <li class="page-item {{ $page == $actualites->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        {{-- Bouton Suivant --}}
                        <li class="page-item {{ !$actualites->hasMorePages() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $actualites->nextPageUrl() }}" aria-label="Next">
                                <span aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
@endsection