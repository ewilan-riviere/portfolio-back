@extends('layouts.layout')

@section('title','')

@section('content')
    <div id="title" class="title m-b-md">
        {{config('app.name')}}
    </div>
@endsection

@section('javascript')
    <script>
        let title = document.getElementById('title')
        let titleContent = title.textContent;
        title.innerHTML = titleContent+'<br>API'
    </script>
@endsection