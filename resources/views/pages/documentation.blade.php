@extends('layouts.app')

@section('title', 'Documentation')

@section('content')
        <div class="site-breadcrumb" style="background: url({{ Vite::asset('resources/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Notre Documentation</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Accueil</a></li>
                    <li class="active">documentation</li>
                </ul>
            </div>
        </div>


        <div class="venue-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline">Documentation</span>
                            <h2 class="site-title">Explorer notre documentation</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 wow fadeInUp" data-wow-delay=".25s">
                    @php
						$documentations = $documentations ?? collect();
					@endphp
                    @if ($documentations->isNotEmpty())
                        @foreach ($documentations as $documentation)
                            <div class="col-md-6 col-lg-4">
                                <div class="venue-item">
                                    <div class="venue-img">
                                        <img src="{{ asset('storage/'.$documentation->image_couverture) }}" alt>
                                    </div>
                                    <div class="venue-content">
                                        <span></span>
                                        <h6>{{ $documentation->nom_document }}</h6>
                                        <p>{{ $documentation->annee_parution }}</p>
                                        <div class="venue-play">
                                            <a class="popup-youtube" href="{{ asset('storage/'.$documentation->fichier) }}">
                                                <span>Télécharger</span>
                                                <i class="fas fa-download"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else

                    @endif
              
                </div>
               <div class="pagination-area">
                    <ul class="pagination">
                        {{-- Bouton Précédent --}}
                        <li class="page-item {{ $documentations->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $documentations->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
                            </a>
                        </li>

                        {{-- Boucle pour les numéros de page --}}
                        @foreach ($documentations->getUrlRange(1, $documentations->lastPage()) as $page => $url)
                            <li class="page-item {{ $page == $documentations->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        {{-- Bouton Suivant --}}
                        <li class="page-item {{ !$documentations->hasMorePages() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $documentations->nextPageUrl() }}" aria-label="Next">
                                <span aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
@endsection