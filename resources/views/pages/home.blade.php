@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
        <div class="hero-section">
            <div class="hero-scroll-box">
                <div class="hero-scroll">
                    <div class="scroller"></div>
                </div>
            </div>
            <div class="hero-slider owl-carousel owl-theme">
                <div class="hero-single" style="background-image: url('{{ Vite::asset('resources/img/hero/slider-1.jpg') }}')">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="hero-content">
                                    <div class="hero-date" data-animation="fadeInDown" data-delay=".25s">
                                        <h1>16/17</h1>
                                        <div class="date-content">
                                            <span>Février 2026</span>
                                            <p>Sofitel Hotel ivoire, Abidjan, Côte d'Ivoire</p>
                                        </div>
                                    </div>
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                        Forum Internationale des Métiers et des Compétences
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s" style="color:#F39106">
                                         Les compétences au cœur de la transformation économique en Afrique, à l’ère du numérique et de l’IA : la formation professionnelle comme levier stratégique de transition de l’informel vers le formel.
                                    </p>
                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                       <!--<a href="#" class="theme-btn">Buy Ticket<i class="fas fa-arrow-right"></i></a>--> 
                                        <a href="/programme" class="theme-btn theme-btn2">Voir le programme<i
                                                class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-single" style="background-image: url('{{ Vite::asset('resources/img/hero/slider-2.jpg') }}')">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="hero-content">
                                    <div class="hero-date" data-animation="fadeInDown" data-delay=".25s">
                                        <h1>16/17</h1>
                                        <div class="date-content">
                                            <span>Février 2026</span>
                                            <p>Sofitel Hotel ivoire, Abidjan, Côte d'Ivoire</p>
                                        </div>
                                    </div>
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                        Forum Internationale des Métiers et des Compétences
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s" style="color:#F39106">
                                        Les compétences au cœur de la transformation économique en Afrique, à l’ère du numérique et de l’IA : la formation professionnelle comme levier stratégique de transition de l’informel vers le formel.
                                    </p>
                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                       <!--<a href="#" class="theme-btn">Buy Ticket<i class="fas fa-arrow-right"></i></a>--> 
                                        <a href="/programme" class="theme-btn theme-btn2">Voir le programme<i
                                                class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-single" style="background-image: url('{{ Vite::asset('resources/img/hero/slider-3.jpg') }}')">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                 <div class="hero-content">
                                    <div class="hero-date" data-animation="fadeInDown" data-delay=".25s">
                                        <h1>16/17</h1>
                                        <div class="date-content">
                                            <span>Février 2026</span>
                                            <p>Sofitel Hotel ivoire, Abidjan, Côte d'Ivoire</p>
                                        </div>
                                    </div>
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                       Forum Internationale des Métiers et des Compétences
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s" style="color:#F39106">
                                         Les compétences au cœur de la transformation économique en Afrique, à l’ère du numérique et de l’IA : la formation professionnelle comme levier stratégique de transition de l’informel vers le formel.
                                    </p>
                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                       <!--<a href="#" class="theme-btn">Buy Ticket<i class="fas fa-arrow-right"></i></a>--> 
                                        <a href="/programme" class="theme-btn theme-btn2">Voir le programme<i
                                                class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="event-countdown ec-1">
            <div class="event-countdown-wrap">
                <div data-countdown="2026/02/15" class="event-countdown"></div>
            </div>
            <div class="event-countdown-text">
                <span>Compteur</span>
            </div>
        </div>


        <div class="about-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left wow fadeInRight" data-wow-delay=".25s">
                            <div class="about-img">
                                <img class="img-1" src="{{ Vite::asset('resources/img/about/01.jpg') }}" alt>
                                <img class="img-2" src="{{ Vite::asset('resources/img/about/02.jpg') }}" alt>
                                <img class="img-3" src="{{ Vite::asset('resources/img/about/03.jpg') }}" alt>
                            </div>
                            <div class="about-experience" style="background: #01054C;">
                                <span>1re</span>
                                <h5>Édition <br> </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right wow fadeInLeft" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">Bienvenue au FIMEC</span>
                                <h2 class="site-title">
                                    le Forum Internationale <span>des Métiers</span> et des Compétences
                                </h2>
                                <div class="site-shadow-text wow fadeInRight" data-wow-delay=".35s">FIMEC</div>
                            </div>
                            <p class="about-text">Le Forum International des Métiers et des Compétences (FIMEC) est la plateforme de référence pour l'innovation professionnelle et le développement des compétences du futur.
                                Une initiative phare du Ministère de l’Enseignement Technique, de la Formation Professionnelle et de l’Apprentissage (METFPA), portée par l’AGEFOP. Cet événement, prévu les 10 et 11 février 2025 au Palais des Congrès du Sofitel Hôtel Ivoire à Abidjan, se positionne comme une plateforme incontournable pour redéfinir les paradigmes de la formation professionnelle en Côte d’Ivoire et dans la sous-région.
                            </p>
                            
                            <a style="margin-top: 20px;" href="/forum" class="theme-btn">en savoir plus<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="video-area">
            <div class="container-fluid px-0">
                <div class="video-content pb-50" style="background-image: url('{{ Vite::asset('resources/img/video/01.jpg') }}');">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="video-info">
                                    <div class="site-heading mb-0">
                                        <span class="site-title-tagline text-white">Recap Édition 2025</span>
                                        <h2 class="site-title text-white">Un Rendez-vous crucial
                                         pour les acteurs de la formation professionnelle</h2>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="video-wrapper">
                                    <a class="play-btn popup-youtube"
                                        href="https://www.youtube.com/watch?v=PeVlaREeCCk">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="feature-area fa-negative">
            <div class="container">
                <div class="feature-wrapper">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                                <span class="count">01</span>
                                <div class="feature-icon">
                                    <img src="{{ Vite::asset('resources/img/icon/speaker-2.svg') }}" alt>
                                </div>
                                <h4 class="feature-title">Rencontrer des experts de renom</h4>
                                <p></p>
                            <!--<a href="contact.html" class="theme-btn mt-20">Learn More<i
                                        class="fas fa-arrow-right"></i></a>-->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item wow fadeInDown" data-wow-delay=".25s">
                                <span class="count">02</span>
                                <div class="feature-icon">
                                    <img src="{{ Vite::asset('resources/img/icon/learn.svg') }}" alt>
                                </div>
                                <h4 class="feature-title">Accéder à une variété de métiers</h4>
                                <p></p>
                               <!-- <a href="contact.html" class="theme-btn mt-20">Learn More<i
                                        class="fas fa-arrow-right"></i></a>-->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                                <span class="count">03</span>
                                <div class="feature-icon">
                                    <img src="{{ Vite::asset('resources/img/icon/meet.svg') }}" alt>
                                </div>
                                <h4 class="feature-title">Découvrez des formations </h4>
                                <p></p>
                                <!--<a href="contact.html" class="theme-btn mt-20">Learn More<i
                                        class="fas fa-arrow-right"></i></a>-->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item wow fadeInDown" data-wow-delay=".25s">
                                <span class="count">04</span>
                                <div class="feature-icon">
                                    <img src="{{ Vite::asset('resources/img/icon/question.svg') }}" alt>
                                </div>
                                <h4 class="feature-title">Affiner son projet d’orientation</h4>
                                <p></p>
                                <!--<a href="contact.html" class="theme-btn mt-20">Learn More<i
                                        class="fas fa-arrow-right"></i></a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="choose-area py-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-img wow fadeInLeft" data-wow-delay=".25s">
                            <img src="{{ Vite::asset('resources/img/choose/01.jpg') }}" alt>
                            <a href="#" class="theme-btn">Ministre N'Guessan Koffi </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-content wow fadeInUp" data-wow-delay=".25s">
                            <div class="site-heading mb-0">
                                <span class="site-title-tagline">Sous le haut parrainage</span>
                                <h2 class="site-title mb-10">Rejoignez le mouvement</h2>
                                <p>
                                 
                                    
                                        La vision du Ministre N’Guessan KOFFI, Ministre de l’Enseignement Technique, de la Formation Professionnelle et de l’Apprentissage : « Repenser et revaloriser l’Enseignement Technique, la Formation Professionnelle et l’Apprentissage pour soutenir le développement socioéconomique et contribuer à l’émergence rapide de la Côte d’Ivoire », souligne l’importance de moderniser et d’améliorer le système de formation professionnelle en Côte d’Ivoire, afin de répondre aux besoins du marché et de stimuler la croissance économique du pays.

                                        Le Forum International des Métiers et des Compétences est en phase avec la vision de Monsieur le Ministre de l’Enseignement Technique, de la Formation Professionnelle et de l’Apprentissage. Il sera l’occasion de discuter des problématiques réelles de la formation professionnelle avec tous les acteurs de l’écosystème de la formation professionnelle aussi bien au plan national, qu’international. L’objectif étant, de proposer des solutions concrètes de modernisation et d’amélioration du système de la formation professionnelle en Côte d’Ivoire.
                                    
                                </p>
                            </div>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <div class="area-index pt-80 pb-80">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-5">
                        <div class="counter-info">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline text-white">Bilan</span>
                                <h2 class="site-title text-white">
                                   Le FIMEC, un évènement incontournable
                                </h2>
                            </div>
                            <p class="text-white">
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-4 justify-content-center">
                            <div class="col-md-6">
                                <div class="counter-box wow fadeInUp" data-wow-delay=".25s">
                                    <div class="icon">
                                        <img src="{{ Vite::asset('resources/img/icon/workshop.svg') }}" alt>
                                    </div>
                                    <div class="counter-content">
                                        <div class="counter-info">
                                            <span class="counter" data-count="+" data-to="15"
                                                data-speed="3000">15</span>
                                            <span class="counter-unit">+</span>
                                        </div>
                                        <h6 class="title">Exposants</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="counter-box wow fadeInDown" data-wow-delay=".25s">
                                    <div class="icon">
                                        <img src="{{ Vite::asset('resources/img/icon/participant.svg') }}" alt>
                                    </div>
                                    <div class="counter-content">
                                        <div class="counter-info">
                                            <span class="counter" data-count="+" data-to="3"
                                                data-speed="3000">3</span>
                                            <span class="counter-unit">K</span>
                                        </div>
                                        <h6 class="title">Participants</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="counter-box wow fadeInUp" data-wow-delay=".25s">
                                    <div class="icon">
                                        <img src="{{ Vite::asset('resources/img/icon/speaker-2.svg') }}" alt>
                                    </div>
                                    <div class="counter-content">
                                        <div class="counter-info">
                                            <span class="counter" data-count="+" data-to="40"
                                                data-speed="3000">40</span>
                                            <span class="counter-unit">+</span>
                                        </div>
                                        <h6 class="title">Intervenants</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="counter-box wow fadeInDown" data-wow-delay=".25s">
                                    <div class="icon">
                                        <img src="{{ Vite::asset('resources/img/icon/award.svg') }}" alt>
                                    </div>
                                    <div class="counter-content">
                                        <div class="counter-info">
                                            <span class="counter" data-count="+" data-to="10"
                                                data-speed="3000">10</span>
                                            <span class="counter-unit">+</span>
                                        </div>
                                        <h6 class="title">Récompenses</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
        <div class="team-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline">Ambassadeurs</span>
                            <h2 class="site-title">Découvrez nos ambassadeurs</h2>
                            <div class="site-shadow-text"></div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 wow fadeInUp" data-wow-delay=".25s">
                    @php
						$intervenants = $intervenants ?? collect();
					@endphp
                    @if ($intervenants->isNotEmpty())
                        @if ($intervenants->first()->categorie == 'Ambassadeur' && $intervenants->first()->publie == 1)
                            @foreach ( $intervenants as $intervenant )
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
        <div class="cta-area pt-60 pb-60" style="background-image: url('{{ Vite::asset('resources/img/cta/01.jpg') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="cta-content wow fadeInUp" data-wow-delay=".25s">
                            <h1>Voulez vous participer à notre évènement</h1>
                            <p>Amis de la presse, <br>
                                Journalistes indépendants, Photographes, Caméraman</p>
                            <a href="#" style="background: #01054C;" class="theme-btn">Enregistrez vous ici<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="partner-area partner-bg py-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline">Partenaires</span>
                            <h2 class="site-title">Découvrez ceux qui nous accompagnent<span></span></h2>
                        </div>
                    </div>
                </div>
                <div class="partner-wrapper wow fadeInUp" data-wow-delay=".25s">
                    <div class="row g-5 justify-content-center">
                        <div class="col-6 col-md-2">
                            <img src="{{ Vite::asset('resources/img/partner/etfpa.png') }}" alt="thumb">
                        </div>
                        <div class="col-6 col-md-2">
                            <img src="{{ Vite::asset('resources/img/partner/fdfp.png') }}" alt="thumb">
                        </div>
                        <div class="col-6 col-md-2">
                            <img src="{{ Vite::asset('resources/img/partner/cpntic.png') }}" alt="thumb">
                        </div>
                       <div class="col-6 col-md-2">
                            <img src="{{ Vite::asset('resources/img/partner/ipnetp.png') }}" alt="thumb">
                        </div>
                        <div class="col-6 col-md-2">
                            <img src="{{ Vite::asset('resources/img/partner/cidfor.png') }}" alt="thumb">
                        </div>
                    </div>
                    
                </div>
                <div class="text-center mt-40 wow fadeInUp" data-wow-delay=".25s">
                    <a href="/sponsors" class="theme-btn"><span class="fal fa-users"></span> Devenez sponsors</a>
                </div>
            </div>
        </div>

@endsection