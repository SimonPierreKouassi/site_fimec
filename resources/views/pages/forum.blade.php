@extends('layouts.app')


@section('title', 'le forum')

@section('content')

        <div class="site-breadcrumb" style="background: url({{ Vite::asset('resources/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title">À propos du FIMEC</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Accueil</a></li>
                    <li class="active">À propos</li>
                </ul>
            </div>
        </div>
        <div class="pricing-area bg py-120" style="background-image: url('{{ Vite::asset('resources/img/about/map.png') }}'); background-size: cover; background-position: center;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline">Le FIMEC</span>
                            <h2 class="site-title">Présentation du FIMEC </h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5" style="color: black;">
                     <p class="about-text">La Côte d’Ivoire, moteur économique de l’Afrique de l’Ouest, est engagée dans une dynamique de transformation profonde de son système éducatif et de formation professionnelle, en ligne avec la Vision 2030 portée par Son Excellence Monsieur Alassane Ouattara Président de la République de Côte d’Ivoire. Dans un environnement marqué par une urbanisation rapide et une croissance démographique soutenue, le pays fait face à des défis critiques liés à l’adéquation formation-emploi, l’insertion professionnelle et l’évolution constante des exigences du marché du travail.</p>
                            <p class="about-text">Le système actuel de formation professionnelle peine encore à répondre aux besoins des secteurs économiques porteurs, limitant ainsi son rôle en tant que levier stratégique pour le développement socio-économique. Trop souvent perçue comme une voie secondaire, la formation professionnelle doit être repensée pour s’aligner avec les mutations du marché de l’emploi et les aspirations d’une jeunesse en quête d’opportunités.</p>
                            <p class="about-text">C’est dans ce contexte que s’inscrit le Forum International des Métiers et des Compétences (FIMEC), une initiative phare du Ministère de l’Enseignement Technique, de la Formation Professionnelle et de l’Apprentissage (METFPA), portée par l’AGEFOP. Cet événement, prévu les 10 et 11 février 2025 au Palais des Congrès du Sofitel Hôtel Ivoire à Abidjan, se positionne comme une plateforme incontournable pour redéfinir les paradigmes de la formation professionnelle en Côte d’Ivoire et dans la sous-région.</p>
                            <p class="about-text">Le thème central, <span style="color: #ee6822;">« Réinventer la formation professionnelle pour un capital humain, moteur de croissance inclusive et durable »</span> « Réinventer la formation professionnelle pour un capital humain, moteur de croissance inclusive et durable » traduit la volonté de bâtir un système plus résilient et innovant, en phase avec les besoins d’un marché du travail impacté par la transformation numérique et écologique.</p>
                            <p class="about-text">Avec pour ambition de connecter talents, entreprises et innovations, le FIMEC explorera des solutions concrètes pour moderniser les approches, anticiper les métiers d’avenir et renforcer l’adéquation formation-emploi, dans une dynamique durable et inclusive, qui favorise l’épanouissement individuel et la compétitivité économique</p>
                </div>
            </div>
        </div>

        <div class="error-area py-120" style="padding-bottom: 0px;">
            <div class="container">
                <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <h2 class="site-title">Objectif du forum </h2>
                        </div>
                <div class="col-lg-12 mx-auto">
                    <div class="error-wrapper">
                        <div class="error-img">
                            <img src="{{ Vite::asset('resources/img/about/01.png') }}" alt>
                        </div>
                     </div>
                </div>
            </div>
        </div>
         <div class="faq-area py-120">
            <div class="container">
                <div class="row">
                     <div class="col-lg-12">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline">Panels et Masterclass</span>
                            <h2 class="site-title">Panels FIMEC 2026 </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion wow fadeInRight" data-wow-delay=".25s" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span>01</span>Partage d’expériences : compétences et transformation économique
                                        (Allemagne, Inde et Corée du sud)
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       
                                    </div>
                                </div>
                            </div>
                           
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span>03</span> Former pour transformer l’Afrique
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion wow fadeInRight" data-wow-delay=".25s" id="accordionExample">
                           <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span>02</span> IA, compétences numériques et transformation des métiers : quels
                                        enjeux pour l’Afrique ?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <span>04</span> Professionnaliser les métiers et structurer les secteurs d’activités pour
                                        une économie rentable et durable
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion wow fadeInRight" data-wow-delay=".25s" id="accordionExample">
                           <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span>05</span> Le rôle stratégique des collectivités territoriales dans le développement
                                        des compétences et l’insertion locale
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       
                                    </div>
                                </div>
                            </div>
                            
                        
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 50px;">
                     <div class="col-lg-12">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <h2 class="site-title">Masterclass FIMEC 2026 </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion wow fadeInRight" data-wow-delay=".25s" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span>01</span>Utiliser l’IA pour améliorer son employabilité
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       
                                    </div>
                                </div>
                            </div>
                           
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span>03</span> Construire son parcours professionnel et réussir son insertion
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion wow fadeInRight" data-wow-delay=".25s" id="accordionExample">
                           <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span>02</span> L’art du pitch : bien se présenter et bien vendre son projet
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="accordion wow fadeInRight" data-wow-delay=".25s" id="accordionExample">
                           <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span>04</span> Transformer une activité informelle en entreprise durable
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       
                                    </div>
                                </div>
                            </div>
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
                            <span class="site-title-tagline">Sponsors</span>
                            <h2 class="site-title">Découvrez ceux qui nous accompagnent</h2>
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
                    <a href="form-sponsors.html" class="theme-btn"><span class="fal fa-users"></span> Devenir Sponsors</a>
                </div>
            </div>
        </div>
@endsection