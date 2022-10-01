 <!-- Navigation -->
 <pre>{{Auth::user()->roles->pluck('name')[0]}}</pre>
 <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="navbar-examples">
            <i class="fab fa-laravel" style="color: #f4645f;"></i>
            <span class="nav-link-text" style="color: #f4645f;">{{ __('Laravel Examples') }}</span>
        </a>

        <div class="collapse show" id="navbar-examples">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.edit') }}">
                        {{ __('User profile') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">
                        {{ __('User Management') }}
                    </a>
                </li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ activeMenu('roles', 'text-danger') }}" href="#navbar-examples"
            data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
            <i class="ni ni-settings-gear-65 text-primary"></i>
            <span class="nav-link-text">{{ __('Settings') }}</span>
        </a>

        <div class="collapse {{ activeMenu('roles', 'show') }}" id="navbar-examples">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ activeMenu('roles', 'text-primary') }}" {{-- <a class="nav-link {{ request()->is('roles') ? 'text-primary' : '' }}" --}}
                        href="{{ route('roles.index') }}">
                        {{ __('Roles') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">
                        {{ __('Permission') }}
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('icons') }}">
            <i class="ni ni-planet text-blue"></i> {{ __('Icons') }}
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('map') }}">
            <i class="ni ni-pin-3 text-orange"></i> {{ __('Maps') }}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('table') }}">
            <i class="ni ni-bullet-list-67 text-default"></i>
            <span class="nav-link-text">Tables</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="ni ni-circle-08 text-pink"></i> {{ __('Register') }}
        </a>
    </li>
    <li class="nav-item mb-5 mr-4 ml-4 pl-1 bg-danger" style="position: absolute; bottom: 0;">
        <a class="nav-link text-white"
            href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank">
            <i class="ni ni-cloud-download-95"></i> Upgrade to PRO
        </a>
    </li>
</ul>
