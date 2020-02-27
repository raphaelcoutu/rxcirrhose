@extends('layouts.app')

@section('title', 'Médicaments')

@section('content')
    @include('layouts.navbar', ['active' => 'medicaments'])
    <div class="mx-auto container flex flex-1 justify-between items-start pt-4 leading-loose tracking-normal relative">
        <div class="mx-auto w-full sm:w-3/4 bg-white border-t-8 border-red px-6 py-3 shadow">
            <div class="flex border-b border-grey-light items-center">
                <h2 class="text-3xl leading-none text-red">Classes de médicaments</h2>
            </div>

            <ul class="list-reset mt-4">
                @foreach($articles as $article)
                <li>
                    <i class="fas fa-long-arrow-alt-right"></i>
                    <a class="text-red-dark no-underline" href="{{ route('articles.showSlug', $article->slug) }}">{{ $article->title }}</a>
                    @auth
                    <span class="text-sm ml-2">
                        [<a class="text-red-light no-underline" href="{{ route('articles.edit', $article->id) }}">Edit</a>]
                    </span>
                    @endauth
                </li>
                @endforeach
            </ul>
            @auth
            <div class="mt-4">
                <a href="{{ route('articles.create') }}" class="bg-red-light p-2 text-white shadow rounded">Ajouter une fiche</a>
            </div>
            @endauth
        </div>
    </div>
    @include('layouts.footer')
@endsection
