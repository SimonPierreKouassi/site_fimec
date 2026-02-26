<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from live.themewild.com/eventu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2024 15:15:48 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content>
    <meta name="keywords" content>

    <title>{{ config('app.name', 'FIMEC') }} - @yield('title', 'FIMEC')</title>

    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/img/logo/favicon.svg') }}">

    {{-- modernizr en head si requis --}}
    @vite('resources/js/modernizr.min.js')

    @vite([
        'resources/css/bootstrap.min.css',
        'resources/css/all-fontawesome.min.css',
        'resources/css/animate.min.css',
        'resources/css/magnific-popup.min.css',
        'resources/css/owl.carousel.min.css',
        'resources/css/style.css',
        'resources/css/custom.css',
    ])
</head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5BZMNRE88H"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-5BZMNRE88H');
    </script>

<body>

    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>


   @include('components.header')


    

    <main class="main">
     
        @yield('content')
       
    </main>

   @include('components.footer')


    <a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ Vite::asset('resources/js/jquery-3.7.1.min.js') }}"></script>

    <script src="{{ Vite::asset('resources/js/modernizr.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/jquery.appear.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/jquery.easing.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/owl.carousel.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/counter-up.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/wow.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/countdown.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/main.js') }}"></script>
    <script src="https://cdn.botpress.cloud/webchat/v3.5/inject.js"></script>
    <script src="https://files.bpcontent.cloud/2026/01/22/17/20260122170905-WQLH5MPL.js" defer></script>
</body>

<!-- Mirrored from live.themewild.com/eventu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2024 15:16:17 GMT -->

</html>