<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administration</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    @yield('extra-css')
</head>

<body>
    <div class="header  @if (Route::currentRouteName() !== 'home') sticky @endif">
        <a href="{{ route('dashboard') }}" class="logo">ESPACE <span>ADMIN</span> </a>
        <div class="bx bx-menu" id="menu-icon"><i class="fa-solid fa-bars"></i></div>

        <ul class="navbar">
            <li><a href="{{ route('dashboard') }}">ACCUEIL</a></li>
            <li><a href=" {{ route('admin.circuit.index') }}">CIRCUITS</a></li>
            <li><a href="{{ route('admin.contact.index') }}">CONTACT</a></li>
            <li class="profil-link">
                <a href="#">{{ auth()->user()->name }}</a>
                <div class="profil">
                    <ul>
                        <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="container" style="margin-top: 100px;">
        @yield('content')
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
    @yield('extra-js')
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('popper/popper.min.js') }}"></script>

    <script>
        let profil_link = document.querySelector("li.profil-link")
        let profil = document.querySelector("li.profil-link .profil")
        profil_link.onclick = () => {
            profil.classList.toggle("active")
        }
        document.addEventListener("mouseup", function(event) {
            if (!profil.contains(event.target)) {
                profil.classList.remove("active")
            }
        });
    </script>
</body>

</html>
