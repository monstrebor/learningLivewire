<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img src="{{ asset('/img/education.jpeg') }}" class="img-fluid" style="max-width: 80px;" alt="logo_picture">
        @if (Route::currentRouteName() !== 'home.login')
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home.login') }}">
                <span class="material-symbols-outlined">
                    login
                </span>
                Login
            </a>
        @endif
        @if (Route::currentRouteName() !== 'home.index')
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home.index') }}">
                <span class="material-symbols-outlined">
                    home
                </span>
                Home
            </a>
        @endif
        @if (Route::currentRouteName() !== 'home.register')
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home.register') }}">
                <span class="material-symbols-outlined">
                    how_to_reg
                </span>
                Register
            </a>
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="container-fluid">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
