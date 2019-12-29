@extends('layouts.layout')

@section('title','')

@section('content')
    <img src="{{ asset('images/logo.png') }}" width="250">
    <div class="title m-b-md">
        {{-- {{ config('app.name') }} --}}
    </div>

    <div class="links">
        @lang('navigation.api-of')
        <a href="https://portfolio.ewilan-riviere.com/">
            portfolio.ewilan-riviere.com
        </a>
    </div>
@endsection

@section('javascript')
    <script>
        // let title = document.getElementById('title')
        // let titleContent = title.textContent;
        // title.innerHTML = titleContent+'<br>API'
    </script>
@endsection
