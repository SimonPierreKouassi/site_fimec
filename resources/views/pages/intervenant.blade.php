@extends('layouts.app')

@section('title', 'Les intervenants')

@section('content')

        <div class="site-breadcrumb" style="background: url({{ Vite::asset('resources/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Intervenants</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Accueil</a></li>
                    <li class="active">Intervenants</li>
                </ul>
            </div>
        </div>


        <div class="team-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline">Speakers</span>
                            <h2 class="site-title">Rencontrez nos Intervenants <span></span></h2>
                            <div class="site-shadow-text">Speakers</div>
                            <p>Découvrez nos intervenants d'exception et nos partenaires stratégiques qui participent au succès du Forum International des Métiers et des Compétences (FIMEC).</p>
                        </div>
                    </div>
                </div>
                <div class="row g-4 wow fadeInUp" data-wow-delay=".25s">
                    @php
						$intervenants = $intervenants ?? collect();
					@endphp
                    @if ($intervenants->isNotEmpty())
                        @if ($intervenants->first()->categorie == 'Speaker' && $intervenants->first()->publie == 1)
                            @foreach ($intervenants as $intervenant)
                            <div class="col-6 col-md-3 col-lg-2">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="{{ asset('storage/'.$intervenant->photo) }}" alt>
                                    </div>
                                    <div class="team-content">
                                        <div class="social">
                                            <a href="{{ $intervenant->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                            <a href="{{ $intervenant->twitter }}"><i class="fab fa-x-twitter"></i></a>
                                            <a href="{{ $intervenant->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                        <div class="info">
                                            <h4><a href="#">{{ $intervenant->nom_intervenant }}</a></h4>
                                            <span>{{ $intervenant->fonction }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endif
                        
                    @endif
                   
                </div>
            </div>
        </div>


        <div class="team-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline">Modérateurs</span>
                            <h2 class="site-title">Découvrez nos <span>Modérateurs</span></h2>
                            <div class="site-shadow-text">Modérateurs</div>
                            <p>Découvrez nos modérateurs d'exception et nos partenaires stratégiques qui participent au succès du Forum International des Métiers et des Compétences (FIMEC).</p>

                        </div>
                    </div>
                </div>
                <div class="row g-4 wow fadeInUp" data-wow-delay=".25s">
                    @php
						$intervenants = $intervenants ?? collect();
					@endphp
                    @if ($intervenants->isNotEmpty())
                        @if ($intervenants->first()->categorie == 'Moderateur' && $intervenants->first()->publie == 1)
                            @foreach ($intervenants as $intervenant)
                            <div class="col-6 col-md-3 col-lg-2">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="{{ asset('storage/'.$intervenant->photo) }}" alt>
                                    </div>
                                    <div class="team-content">
                                        <div class="social">
                                            <a href="{{ $intervenant->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                            <a href="{{ $intervenant->twitter }}"><i class="fab fa-x-twitter"></i></a>
                                            <a href="{{ $intervenant->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                        <div class="info">
                                            <h4><a href="#">{{ $intervenant->nom_intervenant }}</a></h4>
                                            <span>{{ $intervenant->fonction }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endif
                        
                    @endif
                   
                </div>
            </div>
        </div>
@endsection