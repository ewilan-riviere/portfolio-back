<ul id="auth-dropdown" class="dropdown-content">
    @if (Route::has('login'))
        @if (Auth::check())
            <li class="{{($route == 'home') ? 'active' : ''}}">
                <a href="{{ route('home') }}">
                    <i class="material-icons left">dashboard</i>
                    {{ __('navigation.home') }}
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="
                        event.preventDefault();
                        document.getElementById('logout-form').submit();"
                >
                    <i class="material-icons left">lock_open</i> {{ __('navigation.logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @else
            <li class="{{($route == 'login') ? 'active' : ''}}">
                <a href="{{ route('login') }}">
                    <i class="material-icons left">lock</i>
                    {{ __('navigation.login') }}
                </a>
            </li>
            @if (Route::has('register'))
                <li class="{{($route == 'register') ? 'active' : ''}}">
                    <a href="{{ route('register') }}">
                        <i class="material-icons left">add</i>
                        {{ __('navigation.register') }}
                    </a>
                </li>
            @endif
        @endif
    @endif
</ul>

<ul id="auth-lg-dropdown" class="dropdown-content">
        @if (Route::has('login'))
            @if (Auth::check())
                <li class="{{($route == 'home') ? 'active' : ''}}">
                    <a href="{{ route('home') }}">
                        <i class="material-icons left">dashboard</i>
                        {{ __('navigation.home') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="
                            event.preventDefault();
                            document.getElementById('logout-form').submit();"
                    >
                        <i class="material-icons left">lock_open</i> {{ __('navigation.logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @else
                <li class="{{($route == 'login') ? 'active' : ''}}">
                    <a href="{{ route('login') }}">
                        <i class="material-icons left">lock</i>
                        {{ __('navigation.login') }}
                    </a>
                </li>
                @if (Route::has('register'))
                    <li class="{{($route == 'register') ? 'active' : ''}}">
                        <a href="{{ route('register') }}">
                            <i class="material-icons left">add</i>
                            {{ __('navigation.register') }}
                        </a>
                    </li>
                @endif
            @endif
        @endif
    </ul>
