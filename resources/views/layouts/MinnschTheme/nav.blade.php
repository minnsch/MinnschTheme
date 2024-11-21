<nav id="Navbar" class=navbar fixed-top navbar-expand-lg bg-light>
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="<!--LINK HERE-->" alt="ANA Virtual Group Logo" style="max-height: 250px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                
                <!--NAV CONTENT START-->
                @if(!Auth::check())
                <li>
                    <a class="nav-link" href="{{ url('/register') }}">
                        <i class="bi bi-person-vcard"></i>
                        <p>@lang('common.register')</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <p>@lang('common.login')</p>
                    </a>
                </li>
                @endif

            </ul>
        </div>
    </div>
</nav>