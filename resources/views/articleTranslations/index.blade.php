@extends('layouts.app')

@section('title', 'Médicaments')

@section('content')
    @include('layouts.navbar', ['active' => 'medicaments'])
    <div class="mx-auto container flex flex-1 justify-between items-start pt-4 leading-loose tracking-normal relative">
        <div class="mx-auto w-full bg-white border-t-8 border-red px-6 py-3 shadow">
            <div class="flex border-b border-grey-light items-center">
                <h2 class="text-3xl leading-none text-red">{{ __('article.drug_datasheets') }}</h2>
            </div>

            <ul class="list-reset mt-4">
                @foreach($articles as $article)
                <li>
                    <i class="fas fa-long-arrow-alt-right"></i>
                    <a class="text-red-dark no-underline" href="{{ route('article-translations.showBySlug', ['locale' => App::currentLocale(), 'slug' => $article->slug]) }}">{{ $article->title }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @include('layouts.footer')
@endsection
