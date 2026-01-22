
    <footer class="footer-area">
        <div class="footer-shape">
            <img src="{{ Vite::asset('resources/img/shape/06.png') }}" alt> 
        </div>
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-md-6 col-lg-5">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                <img src="{{ Vite::asset('resources/img/logo/fimec-blanc.png') }}" alt> 
                            </a>
                            <p class="mb-3">
                            Forum International des Métiers et des Compétences
                            Du 10 au 11 février 2025 au Palais des congrès de l'hôtel Ivoire.
                            </p>  
                            <div class="footer-newsletter">
                                <p>Soucrivez à notre newsletter</p>
                                <div class="subscribe-form">
                                    <form action="{{ route('newsletter.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Entrez votre email">
                                            <button class="theme-btn" type="submit">
                                                <span class="far fa-paper-plane"></span>Souscrivez
                                            </button>
                                            @if(session('success'))
                                                <p style="color: green;">{{ session('success') }}</p>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">liens rapides</h4>
                            <ul class="footer-list">
                                <li><a href="/forum"><i class="fas fa-caret-right"></i> A propos</a></li>
                                <li><a href="/actualites"><i class="fas fa-caret-right"></i> Actualités</a></li>
                                <li><a href="/contact"><i class="fas fa-caret-right"></i> Contactez-nous</a></li>
                                <li><a href="/documentation"><i class="fas fa-caret-right"></i> Documentation</a></li>
                                <li><a href="/mediatheque"><i class="fas fa-caret-right"></i> Médiathèque</a></li>
                            <!-- <li><a href="privacy.html"><i class="fas fa-caret-right"></i> Privacy policy</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Réseaux sociaux</h4>
                            <ul class="footer-list social">
                                <li><a href="https://www.facebook.com/FIMEC.forum/"><i class="fab fa-facebook"></i> Facebook</a></li>
                                <li><a href="https://www.tiktok.com/@fimec.forum"><i class="fa-brands fa-tiktok"></i> Tiktok</a></li>
                                <li><a href="https://www.instagram.com/fimec.forum"><i class="fab fa-instagram"></i> Instagram</a></li>
                               <!--   <li><a href="#"><i class="fab fa-youtube"></i> Youtube</a></li> -->
                               <!-- <li><a href="#"><i class="fab fa-whatsapp"></i> Whatsapp</a></li> -->
                                <li><a href="https://www.linkedin.com/company/fimec-ci/?viewAsMember=true"><i class="fab fa-linkedin-in"></i> Linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Informations</h4>
                            <ul class="footer-contact">
                                <li><a href="tel:+21236547898"><i class="far fa-phone"></i>+225 07 15 96 96 96</a></li>
                                <li><i class="far fa-map-marker-alt"></i>Abidjan,Marcory zone 4C</li>
                                <li><a
                                        href="https://live.themewild.com/cdn-cgi/l/email-protection#fc95929a93bc99849d918c9099d29f9391"><i
                                            class="far fa-envelope"></i><span class="__cf_email__"
                                            data-cfemail="761f18101936130e171b061a135815191b">info@fimec.ci</span></a>
                                </li>
                            </ul>
                            <div class="footer-request">
                                <p></p>
                                <a href="/contact" class="theme-btn">Contactez-nous<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="www.agefop.ci"> Agefop </a> Tous droits réservés.
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="footer-menu">
                            <li><a href="contact.html">Support</a></li>
                            <li><a href="terms.html">Conditions générales d'utilisation</a></li>
                            <li><a href="privacy.html">Politique de confidentialité</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>