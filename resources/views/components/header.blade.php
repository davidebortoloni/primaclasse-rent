<header class="position-fixed w-100">
    <nav class="px-5 py-3 navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <div class="row w-100 justify-content-between">
                <div class="col-auto">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="logo Primaclasse">
                    </a>
                </div>
                <div class="col-auto">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link @if (str_starts_with(Request::path(), '/')) active @endif" aria-current="page"
                                    href="{{ route('home') }}">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if (str_starts_with(Request::path(), 'cars')) active @endif" aria-current="page"
                                    href="{{ route('cars.index') }}">FLOTTA</a>
                            </li>
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link @if (str_starts_with(Request::path(), 'account')) active @endif" aria-current="page"
                                        href="{{ route('account') }}">
                                        IL MIO ACCOUNT
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        LOGOUT
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            @else
                                <a class="nav-link @if (str_starts_with(Request::path(), 'login')) active @endif" aria-current="page"
                                    href="{{ route('login') }}">LOGIN</a>
                            @endauth
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="tel:0116810682">011 681 0682</a>
                            </li>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
