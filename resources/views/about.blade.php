@extends('layouts.layout')

@section('title')
    {{ __('navigation.about') }}
@endsection

@section('content')
    <div class="white-bg">
        <div class="collection-title">
            Some links about this API
        </div>
        <div class="collection">
            @foreach ($about_links as $about)
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