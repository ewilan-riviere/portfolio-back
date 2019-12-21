@php
    $route = \Request::route()->getName();
@endphp

@include('layouts.navbar-auth-module')
{{-- Main Navbar  --}}
<div id="navbar" class="links">
    <nav class="white no-shadows">
        <div class="nav-wrapper">
            <a href="{{ route('welcome') }}" class="brand-logo">
                <img src="{{ asset('images/laravel.svg') }}" alt="" class="navbar-logo">
            </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>

            <ul class="right hide-on-med-and-down">
                @foreach ($navbar as $item)
                    @php
                        $activeForeach = ($route == $item->link) ? 'active' : '' ;
                    @endphp
                    <li class="{{$activeForeach}}">
                        <a href="{{ route($item->link) }}">
                            <i class="material-icons left">{{$item->icon}}</i>
                            {{ __('navigation.'.$item->title) }}
                        </a>
                    </li>
                @endforeach
                @if (Route::has('login'))
                    <li>
                        <a class="dropdown-trigger {{($route == 'home') ? 'active' : ''}} {{($route == 'login') ? 'active' : ''}} {{($route == 'register') ? 'active' : ''}}"
                            data-target="auth-dropdown"
                        >
                            <i class="material-icons left">account_circle</i>
                                @if (Auth::check())
                                    {{ Auth::user()->name }}
                                @else
                                    {{ __('navigation.account') }}
                                @endif
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                @endif
            </ul>

        </div>
    </nav>

    <ul id="mobile-demo" class="sidenav">
        <li class="black-text">
            <div class="user-view">
                <div class="background grey lighten-4">

                </div>
                <a href="#user">
                    <img class="circle" src="{{asset('logo.png')}}">
                </a>
                <a class="black-text">
                    <span class="name">
                        {{config('app.user_name')}}
                    </span>
                </a>
                <a href="mailto:{{config('app.user_mail')}}" class="black-text">
                    <span class="email">
                        {{config('app.user_mail')}}
                    </span>
                </a>
            </div>
        </li>
        @foreach ($navbar as $item => $value)
            @php
                $active = ($route == $value->link) ? 'active' : '' ;
            @endphp
            <li class="{{$active}}">
                <a href="{{ route($value->link) }}">
                    <i class="material-icons left">{{$value->icon}}</i>
                    {{$value->title}}
                </a>
            </li>
        @endforeach
        @include('layouts.navbar-auth-module')
    </ul>
</div>
