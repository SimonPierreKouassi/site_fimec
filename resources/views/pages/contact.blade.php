@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

        <div class="site-breadcrumb" style="background: url({{ Vite::asset('resources/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title">Contact</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Accueil</a></li>
                    <li class="active">Contactez-nous</li>
                </ul>
            </div>
        </div>
        <div class="contact-area py-120">
            <div class="container">
                <div class="contact-content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fa-solid fa-handshake"></i>
                                </div>
                                <div class="contact-info-content">
                                    <a href="/sponsors"><h5>Devenir Sponsors</h5></a>  
                                    <p>Sponsors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fa-solid fa-bullhorn"></i>
                                </div>
                                <div class="contact-info-content">
                                   <a href="/exposants"><h5>Devenir Exposants</h5></a> 
                                    <p>exposants</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fa-solid fa-person"></i>
                                </div>
                                <div class="contact-info-content">
                                    <a href="/visiteurs"><h5>Devenir Visiteur</h5></a>  
                                    <p>Visiteur - Grand public</p>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fa-solid fa-newspaper"></i>
                                </div>
                                <div class="contact-info-content">
                                   <a href="/presse"><h5>Accréditation</h5></a> 
                                    <p>presse</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <div class="contact-img">
                                <img src="{{ Vite::asset('resources/img/contact/02.png') }}" alt> 
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contact-form">
                                <div class="contact-form-header">
                                    <h2 style="color: #f39106;">Venez participer au forum de l'année</h2>
                                    <p style="padding-bottom: 10px; color: black;">1. Visite des stands : explorez les nouveautés et solutions proposées par les professionnels du secteur. </p>
                                        <p style="padding-bottom: 10px; color: black;">2. Activités ludiques : participez à des jeux et animations adaptés à toute la famille.</p>
                                        <p style="padding-bottom: 10px; color: black;">3. Présentations interactives : assistez à des démonstrations technologiques et découvrez les innovations du futur. </p>
                                        <p style="padding-bottom: 10px; color: black;">4. Espace spécial "Métiers des secteurs" : un espace dédié aux étudiants pour découvrir les métiers d’avenir dans les mines, le pétrole et l'énergie.</p>
                                        <p style="padding-bottom: 10px; color: black;">5. Immersion dans une maison solaire : explorez une maison entièrement alimentée par des énergies renouvelables !</p>
                                        <p style="padding-bottom: 10px; color: black;">6. Ateliers pratiques : apprenez les bons gestes pour économiser l’énergie et utiliser le gaz domestique en toute sécurité.</p>
                                        <p style="padding-bottom: 10px; color: black;">7. Village artistique : découvrez le savoir-faire unique des artisans bijoutiers et bien d'autres talents dans cet espace dédié à l’art et à la créativité.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.8636742166887!2d-3.9836080999999997!3d5.2839579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eeb3c92ecd3d%3A0xbacb4d9afe16cd36!2sAGEFOP%20(Agence%20Nationale%20de%20la%20Formation%20Professionnelle)!5e0!3m2!1sfr!2sci!4v1751553122164!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

@endsection