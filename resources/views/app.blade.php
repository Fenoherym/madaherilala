@php
    getIp();
    getUserSession();
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MADAHERILALA TOURS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>

<body id="#home">
    <header id="header">
        <div class="header  @if (Route::currentRouteName() !== 'home') sticky @endif">
            <a href="{{ route('home') }}" class="logo">MADA<span>HERILALA</span> </a>
            <div class="bx bx-menu" id="menu-icon"><i class="fa-solid fa-bars"></i></div>

            <ul class="navbar">
                <li><a href="{{ route('home') }}">ACCUEIL</a></li>
                <li><a href="{{ route('home') }}#about">A-PROPOS</a></li>
                <li><a href="{{ route('circuit.index') }}">NOS CIRCUITS</a></li>
                <li><a href="{{ route('home') }}#contact">CONTACT</a></li>
            </ul>
        </div>
        @if (Route::currentRouteName() === 'home')
            <div class="top-carousel">
                <div id="work" class="carousel slide" data-ride="carousel">
                    <div class="banner-content text-left">
                        <h1 class="text-left">Bienvenue sur le site de
                            MADAHERILALA TOURS
                        </h1>
                        <p class="col-md-5 adjust">
                            Laisse dans votre cœur, un souvenir inoubliable qui ne s’efface jamais. C’est le plus beau
                            de
                            tous ses trésors et Madagascar est une île qui ne se contente pas du simple regard
                        </p>
                        <br>
                        <p class="pt-4"><a class="btn btn-more btn-lg" href="#welcome">Lire plus</a></p>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#work" data-slide-to="0" class="active"></li>
                        <li data-target="#work" data-slide-to="1"></li>
                        <li data-target="#work" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/bg1.jpg') }}" class="d-block w-100" alt="">

                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/bg2.jpg') }}" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/bg3.jpg') }}" class="d-block w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </header>
    <div class="container mt-5 mb-5">
        @yield('content')
    </div>
    <footer>
        <div class="p-5">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3 mb-3">
                    <div class="contact">
                        <h4>CONTACT</h4>
                        <p><i class="fa-solid fa-location-dot"></i> Adresse: Antsirabe 110</p>
                        <p><i class="fa-solid fa-phone"></i> Telephone: 034 34 432 344</p>
                        <p><i class="fa-solid fa-envelope"></i> Email: <a
                                href="mailto:votreadresse@mail.fr">test@gmail.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <div class="links">
                        <h4>LIENS</h4>
                        <ul>
                            <li><a href="#welcome">Accueil</a></li>
                            <li><a href="#about">A propos</a></li>
                            <li><a href="#circuits">Nos circuits</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="copyright d-flex justify-content-center mt-5">
                <p>RAKOTONIAINA Fenohery Manjaka <i class="fa-brands fa-creative-commons"></i> 2022</p>
            </div>
        </div>

    </footer>
    @yield('script')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init()
    </script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}

    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> --}}
    {{-- <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> --}}
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('popper/popper.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#carouselBanner").swiperight(function() {
                $(this).carousel('prev');
            });
            $("#carouselBanner").swipeleft(function() {
                $(this).carousel('next');
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('a.page-scroll').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location
                    .hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top - 100
                        }, 900);
                        return false;
                    }
                }
            });

            // Show Menu on Book
            $(window).bind('scroll', function() {
                var navHeight = $(window).height() - 500;
                if ($(window).scrollTop() > navHeight) {
                    $('.navbar').addClass('on');
                } else {
                    $('.navbar').removeClass('on');
                }
            });

            $('body').scrollspy({
                target: '.navbar',
                offset: 100
            });

            // Hide nav on click
            $(".navbar-nav li a").click(function(event) {
                // check if window is small enough so dropdown is created
                var toggle = $(".navbar-toggler").is(":visible");
                if (toggle) {
                    $(".navbar-collapse").collapse('hide');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#y-play-video').on('click', function(ev) {
                $(".y-video-thumbnail").hide();
                $(".y-video-embed").show();
                $("#y-video")[0].src += "&autoplay=1";
                ev.preventDefault();
            });
        });
    </script>

</body>

</html>
