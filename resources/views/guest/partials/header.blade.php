{{-- <header>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'active' : '' }}" href="{{ route('contacts') }}">Contatti</a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'active' : '' }}" href="#">Link</a>
        </li> --}}
    {{-- </ul>
</header> --}}

<header>

    <div class="container">
    <nav class="navbar navbar-expand-md">


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div class="logo_laravel text-uppercase">
                        boolfolio
                    </div>
                    {{-- config('app.name', 'Laravel') --}}
                </a>
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
                    </li>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf

                            {{-- Logout --}}
                            <button class="btn btn-link" type="submit">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </button>
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>

    </nav>
    </div>
</header>
