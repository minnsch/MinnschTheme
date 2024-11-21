<ul id="navbar-bottom" class="navbar-nav align-middle">
    @if(Auth::check())
    <li class="nav-item">
        <a class="nav-link" href="{{ route('frontend.dashboard.index')}}">
        <p>@lang('common.dashboard')</p>
        </a>
    </li>
    @endif

    <li class="nav-item">
        <a class="nav-link" href="{{ route('frontend.livemap.index') }}">
            <i class="bi bi-radar"></i>
            <p>@lang('common.livemap')</p>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('frontend.pilots.index') }}">
            <i class="bi bi-person-lines-fill"></i>
            <p>{{ trans_choice('common.pilot', 2) }}</p>
        </a>
    </li>
</ul>