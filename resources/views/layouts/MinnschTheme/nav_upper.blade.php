<div class="nav-tabs-navigation">
    <div class="nav-tabs-wrapper">
        <ul class="navbar-nav align-end">
            @if (Auth::check())
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

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('/logout') }}">
                <i class="bi bi-box-arrow-right"></i>&nbsp;&nbsp;@lang('common.logout')
                </a>
                </div>
            </li>
            @else
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false">
                <img src="https://i.ibb.co/YBzWqkG/favicon.png" style="height: 38px; width: 38px;">
                You're not logged in.
                </a>
                
                <div class="dropdown-menu dropdown-menu-right">

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('/login') }}">
                <i class="bi bi-box-arrow-right"></i>&nbsp;&nbsp;@lang('common.login')
                </a>
                </div>
            </li>
            @endif
        </ul>
    </div>
</div>