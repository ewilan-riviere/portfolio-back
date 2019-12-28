@extends('layouts.layout')

@section('title','Connexion')

@section('content')
    <div id="login">
        <div class="container white z-depth-1">
            <form class="row" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-field col s12">
                    <input
                        id="email"
                        name="email"
                        type="email"
                        class="validate"
                        @error('email') is-invalid @enderror"
                        required
                        autocomplete="email"
                        autofocus
                    >
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="email">
                            {{ __('navigation.email') }}
                    </label>
                </div>
                <div class="input-field col s12">
                    <input
                        id="password"
                        name="password"
                        type="password"
                        class="validate"
                        @error('password') is-invalid @enderror"
                        required
                        autocomplete="current-password"
                    >
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="password">
                        {{ __('navigation.password') }}
                    </label>
                </div>
                <div class="col s12">
                    <label for="remember">
                        <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                            class="fill-in"
                            {{ old('remember') ? 'checked' : '' }}
                        >
                        <span>{{ __('navigation.remember') }}</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-login">
                    <i class="material-icons left">lock</i> {{ __('navigation.login') }}
                </button>
                <div class="password-request">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('navigation.forgot-your-password') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection