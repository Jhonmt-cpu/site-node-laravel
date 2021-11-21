<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="/css/home.css">-->
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/global.css">
    @yield('headers')
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Node.js</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link {{ (Route::current()->getName() === 'site.home' ? 'active' : '')}}" aria-current="page" href="{{ route('site.home') }}">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ (Route::current()->getName() === 'site.frameworks' ? 'active' : '') }}" href="{{ route('site.frameworks') }}">Frameworks</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ (Route::current()->getName() === 'site.contact' ? 'active' : '') }}" href="{{ route('site.contact') }}">Contato</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ (Route::current()->getName() === 'site.logos' ? 'active' : '') }}" href="{{ route('site.logos') }}">Logos</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ (Route::current()->getName() === 'site.about' ? 'active' : '') }}" href="{{ route('site.about') }}">Sobre</a>
                        </li>

                    </ul>
                    @auth
                    <a class="btn btn-outline-light my-2 pr-2 my-sm-0" href="{{ route('dashboard') }}">Dashboard</a>
                    @endauth
                    @guest
                    <a class="btn btn-outline-light my-2 my-sm-0 register-button" href="{{ route('register') }}">Cadastrar</a>
                    <a class="btn btn-outline-dark my-2 ml-2 my-sm-0" href="{{ route('login') }}">Entrar</a>
                    @endguest
                </div>
            </div>
        </nav>
    </header>

    <main>


        @yield('content')

        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; {{date('Y')}} Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
