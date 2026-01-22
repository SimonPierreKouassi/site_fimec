 <header class="header">

        <div class="header-top">
            <div class="container">
                <div class="header-top-wrap">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="header-top-left">
                                <div class="header-top-contact">
                                    <ul>
                                        <li><a href="#"><i class="far fa-location-dot"></i>
                                               Abidjan,Marcory zone 4C</a></li>
                                        <li><a
                                                href="https://live.themewild.com/cdn-cgi/l/email-protection#3851565e57785d40595548545d165b5755"><i
                                                    class="far fa-envelopes"></i>
                                                <span class="__cf_email__"
                                                    data-cfemail="751c1b131a35100d14180519105b161a18">infos@fimec.ci</span></a>
                                        </li>
                                        <li><a href="tel:+21236547898"><i class="far fa-phone-volume"></i> +225 07 15 96 96 96</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="header-top-right">
                                <div class="header-top-lang">
                                    <div class="dropdown">
                                        <a href="#" class="top-lang dropdown-toggle" data-bs-toggle="dropdown"><i
                                                class="fal fa-globe"></i> Langue</a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Français</a></li>
                                            <li><a class="dropdown-item" href="#">Anglais</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="header-top-social">
                                    <span>Suivez nous:</span>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">
                    <a href="index.html" class="navbar-brand">
                        <img src="{{ Vite::asset('resources/img/logo/agefop.png') }}" alt="logo"> 
                    </a>
                     <a href="index.html" class="navbar-brand">
                        <img src="{{ Vite::asset('resources/img/logo/fimec.png') }}" alt="logo"> 
                    </a>
                    <div class="mobile-menu-right">
                        <div class="search-btn">
                            <button type="button" class="nav-right-link search-box-outer"><i
                                    class="far fa-search"></i></button>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="/">Accueil</a></li>
                          
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Le FIMEC</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="/forum">Présentation du forum</a></li>
                                    <li><a class="dropdown-item" href="/programme">Programme</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" href="/documentation">Documentation</a>
                                    </li>
                           <!--     <li><a class="dropdown-item" href="testimonial.html">Témoignages</a></li>-->    
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/intervenants">Intervenants</a></li>
                            
                             <li class="nav-item"><a class="nav-link" href="/actualites">Actualités</a></li>
                            <li class="nav-item"><a class="nav-link" href="/mediatheque">Médiathèque</a></li>
                            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                        </ul>
                        <div class="nav-right">
                            <div class="search-btn">
                                <button type="button" class="nav-right-link search-box-outer"><i
                                        class="far fa-search"></i></button>
                            </div>
                            <div class="sidebar-btn">
                                <button type="button" class="nav-right-link"><i class="far fa-bars-sort"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>


    <div class="sidebar-popup">
        <div class="sidebar-wrapper">
            <div class="sidebar-content">
                <button type="button" class="close-sidebar-popup"><i class="far fa-xmark"></i></button>
                <div class="sidebar-logo">
                    <img src="{{ Vite::asset('resources/img/logo/fimec.png') }}" alt>
                </div>
                <div class="sidebar-about">
                    <h4>A propos du FIMEC</h4>
                    <p>Le Forum International des Métiers et des Compétences (FIMEC) est la plateforme de référence pour l'innovation professionnelle et le développement des compétences du futur. </p>
                </div>
                <div class="sidebar-contact">
                    <h4>Informations</h4>
                    <ul>
                        <li>
                            <h6>Email</h6>
                            <a
                                href="info@fimec.ci"><i
                                    class="far fa-envelope"></i><span class="__cf_email__"
                                    data-cfemail="info@fimec.ci">info@fimec.ci</span></a>
                        </li>
                        <li>
                            <h6>Téléphone</h6>
                            <a href="tel:+21236547898"><i class="far fa-phone"></i>++225 07 15 96 96 96</a>
                        </li>
                        <li>
                            <h6>Addresse</h6>
                            <a href="#"><i class="far fa-location-dot"></i>Abidjan,Marcory zone 4C</a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-social">
                    <h4>Suivez nous</h4>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>