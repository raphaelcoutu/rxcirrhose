@extends('layouts.app-admin')

@section('content')
    @include('layouts.navbar', ['active' => 'medications'])
    <div class="mx-auto container bg-white mt-4 p-4 shadow">
        <div class="flex justify-between">
            <h3>Ajouter une molécule</h3>
            <div>
                <i class="fas fa-long-arrow-alt-left"></i> Retour à
                <a class="text-red no-underline" href="{{ route('articles.edit', $article->id) }}">{{ $article->title }}</a>
            </div>
        </div>
        @include('drugs.form')
    </div>
    @include('layouts.footer')
@endsection
