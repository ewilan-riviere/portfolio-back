@extends('layouts.layout')

@section('title')
    {{ __('navigation.router') }}
@endsection

@section('content')
    <div class="white-bg">
        <div class="collection-title">
            API Routes
        </div>
        <div class="collection">
            @foreach ($route_links as $about)
                <a
                    href="{{ $about->link }}"
                    target="_blank"
                    class="black-text collection-item"
                >
                    {{ $about->title }}
                </a>
            @endforeach
        </div>
    </div>
@endsection