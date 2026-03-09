@extends('layouts.app')

@section('title', $article->title)
@section('description', $article->description)

@section('content')
    @include('layouts.navbar', [
        'active' => 'cirrhose',
        'localeSwitchUrl' => $alternateUrls[App::currentLocale() === 'fr' ? 'en' : 'fr'] ?? null,
    ])
    <div class="mx-auto container flex flex-grow justify-between items-start pt-4 leading-loose tracking-normal">
        <div class="mx-auto w-full bg-white border-t-8 border-red-500 px-6 py-3 shadow dark:bg-slate-800">
            <div class="flex border-b border-gray-400 items-center">
                <h1 class="text-3xl leading-none text-red-500">{{ $article->title }}</h1>
            </div>

            <div class="clinical-content mt-2 dark:text-gray-300">
                {!! $article->html !!}
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
