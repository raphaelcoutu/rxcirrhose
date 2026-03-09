@extends('layouts.app')

@section('title', App::currentLocale() === 'fr' ? 'Informations cliniques' : 'Clinical information')
@section('description', App::currentLocale() === 'fr' ? 'Articles cliniques de reference sur la cirrhose.' : 'Reference clinical articles about cirrhosis.')

@section('content')
    @include('layouts.navbar', [
        'active' => 'cirrhose',
        'localeSwitchUrl' => App::currentLocale() === 'fr'
            ? route('clinical-articles.index.en', ['hl' => 'en'])
            : route('clinical-articles.index.fr', ['hl' => 'fr']),
    ])
    <div class="mx-auto container flex flex-grow justify-between items-start pt-4 leading-loose tracking-normal">
        <div class="mx-auto w-full bg-white border-t-8 border-red-500 px-6 py-3 shadow dark:bg-slate-800">
            <div class="flex border-b border-gray-400 items-center justify-between gap-4">
                <h1 class="text-3xl leading-none text-red-500">
                    {{ App::currentLocale() === 'fr' ? 'Informations cliniques' : 'Clinical information' }}
                </h1>
                <span class="text-sm uppercase tracking-wide text-gray-400">{{ $articles->count() }}</span>
            </div>

            <div class="mt-4 grid gap-3">
                @foreach($articles as $article)
                    <a href="{{ $article->url() }}" class="block rounded border border-gray-200 bg-gray-50 px-4 py-3 no-underline transition hover:border-red-300 hover:bg-red-50 dark:border-slate-700 dark:bg-slate-900 dark:hover:border-red-400 dark:hover:bg-slate-950">
                        <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">{{ $article->title }}</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ $article->description }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
