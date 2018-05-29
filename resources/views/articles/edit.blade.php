@extends('layouts.app')

@section('content')
    @include('layouts.navbar', ['active' => 'medications'])
    <div class="mx-auto container bg-white mt-4 p-4 shadow">
        <h3>Éditer: {{ $article->title }}</h3>
        @include('articles.form')
    </div>
    @include('layouts.footer')
@endsection