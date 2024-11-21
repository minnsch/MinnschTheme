<ul class="navbar-nav align-end">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
        data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false">
        @if (Auth::user()->avatar == null)
        <img src="{{ Auth::user()->gravatar(38) }}" style="height: 38px; width: 38px;">
        {{ Auth::user()->name_private }}
        @else
        <img src="{{ Auth::user()->avatar->url }}" style="height: 38px; width: 38px;">
        {{ Auth::user()->name_private }}
        @endif
        </a>

        <div class="dropdown-menu dropdown-menu-right">

        <a class="dropdown-item" href="{{ route('frontend.profile.index') }}">
            <i class="bi bi-person-fill"></i>&nbsp;&nbsp;@lang('common.profile')
        </a>

        @ability('admin', 'admin-access')
        <a class="dropdown-item" href="{{ url('/admin') }}">
        <i class="bi bi-person-fill-gear"></i>&nbsp;&nbsp;@lang('common.administration')
        </a>
        @endability

        @if(Auth::check())
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ url('/logout') }}">
        <i class="bi bi-box-arrow-right"></i>&nbsp;&nbsp;@lang('common.logout')
        </a>
        </div>
        @else
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ url('/login') }}">
        <i class="bi bi-box-arrow-in-right"></i>&nbsp;&nbsp;@lang('common.login')
        </a>
        </div>
        @endif
    </li>
</ul>