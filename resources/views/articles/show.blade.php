@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    <div class="mx-auto container flex flex-1 justify-between items-start pt-4 leading-loose tracking-normal relative">
        <div class="w-1/4 px-6 py-3 border-t-8 border-red bg-white mr-8 shadow">
            <h2 class="text-3xl leading-none text-red border-b border-grey-light" class="text-red">Sommaire.</h2>
            <ul class="list-reset pl-2 text-red-dark mt-2">
                <li class="leading-normal">Tableau résumé</li>
                <li class="leading-normal">Pharmacodynamie</li>
                <li class="leading-normal">Molécules</li>
                <ul class="list-reset pl-3">
                    <li class="leading-normal text-red-darker">Ceftamère</li>
                    <li class="leading-normal text-red-darker">Metamorphine</li>
                    <li class="leading-normal text-red-darker">Activan</li>
                </ul>
                <li class="leading-normal">Références</li>
            </ul>

        </div>
        <div class="w-3/4 bg-white border-t-8 border-red px-6 py-3 shadow">
            <div class="flex border-b border-grey-light items-center">
                <h2 class="text-3xl leading-none text-red">{{ $article->title }}</h2>
                <span class="text-sm ml-2">
                    [<a class="text-red-light no-underline" href="{{ route('articles.edit', $article->id) }}">Edit</a>]
                </span>
            </div>
            <h3 class="text-xl text-red py-2">Tableau résumé</h3>
            {{ $article->summary }}

            <h3 class="text-xl text-red py-2">Pharmacodynamie</h3>
            {{ $article->pharmacodynamics }}

            <h3 class="text-xl text-red py-2 anchor">Molécules</h3>
            // Boucle des drugs


            <h3 class="text-xl text-red py-2">Références</h3>
            {{ $article->references }}
        </div>
    </div>
    @include('layouts.footer')
@endsection

