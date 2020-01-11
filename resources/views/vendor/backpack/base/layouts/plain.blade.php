<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ config('backpack.base.html_direction') }}">
  <head>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include(backpack_view('inc.head'))
  </head>
  <body class="app">

    @yield('header')
    <div class="navbar">
        <div class="navbar-top-left">
            <div class="navbar-link">
                <a href="{{ route('welcome') }}">
                    <img src="{{ asset('images/logos/logo-er-laravel-trans.png') }}" alt="" width="50" height="50">
                </a>
            </div>
        </div>
        <div class="navbar-top-right">
            <div class="navbar-link">
                <a href="{{ route('about') }}">
                  @lang('navigation.about')
                </a>
              </div>
              <div class="link">
                <a href="{{ url('/admin') }}">
                  @lang('navigation.login')
                </a>
        </div>
        </div>
      </div>
      <div class="flex-row align-items-center">
        <div class="flex-center position-ref full-height">

            <div class="container">
              @yield('content')
            </div>
          </div>


      </div>
      <footer class="app-footer sticky-footer">
        @include('backpack::inc.footer')
      </footer>

      @yield('before_scripts')
      @stack('before_scripts')

      @include(backpack_view('inc.scripts'))

      @yield('after_scripts')
      @stack('after_scripts')

  </body>
</html>
