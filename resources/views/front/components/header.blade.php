<header class="header" id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 my-auto">
                <a href="{{ route('home') }}" class="header-logo">
                    <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 d-lg-block d-none">
                <ul class="header-nav">
                    <li class="header-nav-item">
                        <a href="{{ route('moneybet') }}" class="header-nav-link @routeis('moneybet') active @endrouteis">
                            <img src="{{ asset('images/icons/hotbets.png') }}" class="header-nav-icon">
                            <span>MoneyBets</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-end my-auto">
                <div class="desktop-view">
                    @auth
                        <div class="header-action">
                            <span class="header-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/icons/menu.png') }}" alt="">
                            </span>
                            <ul class="dropdown-menu dropdown-nav">
                                <li>
                                    <a class="dropdown-item dropdown-nav-item" href="{{ route('moneybet') }}">
                                        <img src="{{ asset('images/icons/hotbets.png') }}" class="dropdown-nav-icon">
                                        <span>MoneyBets</span>
                                    </a>
                                </li>
                                <div class="dropdown-action">
                                    @if (Auth::user()->role == 'user')
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary">Se déconnecter</a>
                                    @else
                                        <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();" class="btn btn-primary">Se déconnecter</a>
                                    @endif
                                </div>
                            </ul>
                        </div>
                    @else
                        <div class="header-action">
                            <a href="{{ route('login') }}" class="btn btn-primary">S'identifier</a>
                        </div>
                    @endauth
                </div>
                <div class="mobile-view">
                    @auth
                        <div class="header-action">
                            <span class="header-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/icons/menu.png') }}" alt="">
                            </span>
                            <ul class="dropdown-menu dropdown-nav">
                                <li>
                                    <a class="dropdown-item dropdown-nav-item" href="{{ route('moneybet') }}">
                                        <img src="{{ asset('images/icons/hotbets.png') }}" class="dropdown-nav-icon">
                                        <span>MoneyBets</span>
                                    </a>
                                </li>
                                <div class="dropdown-action">
                                    @if (Auth::user()->role == 'user')
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary">Se déconnecter</a>
                                    @else
                                        <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();" class="btn btn-primary">Se déconnecter</a>
                                    @endif
                                </div>
                            </ul>
                        </div>
                    @else
                        <div class="header-action">
                            <span class="header-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/icons/menu.png') }}" alt="">
                            </span>
                            <ul class="dropdown-menu dropdown-nav">
                                <li>
                                    <a class="dropdown-item dropdown-nav-item" href="{{ route('moneybet') }}">
                                        <img src="{{ asset('images/icons/hotbets.png') }}" class="dropdown-nav-icon">
                                        <span>MoneyBets</span>
                                    </a>
                                </li>
                                <div class="dropdown-action">
                                    <a href="" class="btn btn-primary">S'identifier</a>
                                </div>
                            </ul>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>
