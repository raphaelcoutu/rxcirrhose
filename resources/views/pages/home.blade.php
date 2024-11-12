<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.analytics')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('navbar.brand') }}</title>

    <meta name="description" content="{{ __('navbar.description') }}" />

    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ __('navbar.brand') }}" />
    <meta property="og:description" content="{{ __('navbar.description') }}" />

    <link rel="stylesheet" href="{{ mix('css/main.css') }}">

    <link rel="alternate" hreflang="fr" href="{{ config('app.url') }}/?hl=fr" />
    <link rel="alternate" hreflang="en" href="{{ config('app.url') }}/?hl=en" />
    <link rel="alternate" hreflang="x-default" href="{{ config('app.url') }}/?hl=fr" />
</head>
<body class="font-sans flex flex-col h-full" >
<div id="app">
    <header class="absolute pin-t z-10 w-full">
        <div class="container mx-auto flex justify-between flex-wrap">
            <div class="flex flex-no-shrink py-2">
                <a href="{{ url('/') }}" class="mt-2 font-semibold text-xl text-white no-underline pl-2">{{ __('navbar.brand') }}</a>
            </div>
            <div class="block sm:hidden">
                <button class="flex items-center text-white p-2 m-2 border border-white rounded" @click="toggleMobileMenu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div :class="mobileMenu ? 'block' : 'hidden'" class="w-full sm:flex sm:items-center sm:w-auto md:w-3/5 sm:justify-end" v-cloak>
                <div class="w-full sm:flex justify-between items-center tracking-tight font-thin uppercase bg-red-lightest sm:bg-transparent">
                    <a href="{{ url('/') . '?hl=' . App::currentLocale() }}" class="block sm:inline-block p-2 text-sm text-black sm:text-white sm:border-b-2 border-red-lightest no-underline sm:hover:border-red-lightest hover:bg-red-light sm:hover:bg-transparent trans">{{ __('navbar.home') }}</a>
                    <a href="{{ url(__('navbar.cirrhosis')) . '?hl=' . App::currentLocale() }}" class="block sm:inline-block p-2 text-sm no-underline text-black sm:text-white border-b-2 border-transparent sm:hover:border-red-lightest hover:bg-red-light sm:hover:bg-transparent trans">{{ __('navbar.cirrhosis') }}</a>
                    <a href="{{ route('article-translations.index') . '?hl=' . App::currentLocale() }}" class="block sm:inline-block p-2 text-sm no-underline text-black sm:text-white border-b-2 border-transparent sm:hover:border-red-lightest hover:bg-red-light sm:hover:bg-transparent trans">{{ __('navbar.drugs') }}</a>
                    <a href="{{ url('faq') . '?hl=' . App::currentLocale() }}" class="block sm:inline-block p-2 text-sm no-underline text-black sm:text-white border-b-2 border-transparent sm:hover:border-red-lightest hover:bg-red-light sm:hover:bg-transparent trans">{{ __('navbar.faq') }}</a>
                    <a href="{{ url('/?hl='.__('navbar.other_locale')) }}" class="block sm:inline-block p-2 text-sm no-underline text-black sm:text-white border-b-2 border-transparent sm:hover:border-red-lightest hover:bg-red-light sm:hover:bg-transparent trans">
                        @include('svg.globe', ['class' => 'w-4 h-4 fill-current text-white']){{ __('navbar.other_locale_name') }}
                    </a>
                    <div class="w-12 flex justify-center items-center">
                        <cirrhose-search-button
                                class="px-2 py-6 no-underline text-sm text-grey border-b-2 border-transparent hover:text-grey-darker"
                        ></cirrhose-search-button>
                    </div>
                </div>
            </div>
        </div>
        <cirrhose-search class="fixed w-full" locale="{{ App::currentLocale() }}"></cirrhose-search>
    </header>
    <div id="globalContent" class="flex-1">
        <main class="relative overflow-hidden">
            <header class="relative">
                <div id="stripes" class="w-full h-full overflow-hidden absolute">
                </div>
                <section id="intro" class="block relative h-144 flex md:items-center items-start pt-8 container mx-auto">
                    <div class="w-full text-white flex flex-col md:flex-row-reverse justify-between">
                        <div class="w-full md:w-2/5 flex justify-center mb-6">
                            @include('svg.liver', ['class' => 'mt-4 md:h-64 md:w-64 sm:w-32 sm:h-32 w-24 h-24'])
                        </div>
                        <div class="lg:w-3/5 w-full flex flex-col px-2">
                            <div>
                                <p class="text-sm sm:text-base font-thin uppercase">{{ __('home.subheader') }}</p>
                                <h1 class="text-xl sm:text-3xl">{{ __('home.header') }}</h1>
                            </div>
                            <p class="font-thin lg:w-3/4 w-full mt-8 leading-normal">{{ __('home.intro') }}</p>
                            <a class="uppercase bg-white shadow md:p-4 p-2 rounded text-red-light no-underline text-center md:mt-8 mt-4 w-full md:w-1/2" href="{{ route('article-translations.index') . '?hl=' . App::currentLocale() }}">{{ __('home.explore_docs') }}</a>
                        </div>
                    </div>
                </section>
            </header>
            <section id="primary" class="mx-auto container flex flex-col items-center justify-around pb-8">
                <div class="md:w-1/2 w-3/4 flex flex-col justify-center text-center md:text-3xl text-red-light shadow border rounded border-red-dark py-3">
                    <p>{{ $articlesCount }} {{ __('home.articles_written') }}</p>
                    <p>{{ $drugsCount }} {{ __('home.drugs_written') }}</p>
                </div>
                <div class="w-full flex justify-center mt-8">
                    <div class="md:w-1/3 w-1/4 flex justify-center items-center">
                        @include('svg.list', ['class' => 'w-16 h-16 md:w-32 md:h-32'])
                    </div>
                    <div class="w-2/3">
                        <h2 class="text-xl md:text-2xl">{{ __('home.content') }}</h2>
                        <p class="sm:leading-normal md:mt-6 mt-2 text-sm md:text-base">{{ __('home.content_text') }}</p>
                    </div>
                </div>
                <div class="w-full flex md:flex-row-reverse justify-center mt-4">
                    <div class="md:w-1/3 w-1/4 flex justify-center items-center">
                        @include('svg.document', ['class' => 'w-16 h-16 md:w-32 md:h-32'])
                    </div>
                    <div class="w-2/3">
                        <h2 class="text-xl md:text-2xl md:text-right">{{ __('home.structure') }}</h2>
                        <div class="sm:leading-normal md:mt-6 mt-2 md:text-right text-sm md:text-base">
                            <p>{!! __('home.structure_text') !!}</p>
                            <p class="mt-2">{{ __('home.about_child_pugh') }} <a href="{{ url('child-pugh') . '?hl=' . App::currentLocale() }}" class="text-red-light font-bold no-underline">{{ __('home.here') }}</a>.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="relative py-8 mt-10">
                <div class="container mx-auto w-2/3 flex-col">
                    <div>
                        <h2 class="text-center">{{ __('home.caution') }}</h2>
                        <div class="flex w-3/4 mt-10 mx-auto">
                            <div class="w-full mt-4 bg-red-lightest rounded border-2 border-red-dark p-4 text-red-darker shadow tracking-normal leading-normal flex items-center">
                                <p>{{ __('home.caution_text') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <h2 class="text-center">{{ __('home.conflict_of_interest') }}</h2>
                        <div class="flex w-3/4 mt-10 mx-auto">
                            <div class="w-full mt-4 p-4 text-red-darker bg-white shadow tracking-normal leading-normal flex items-center">
                                <p>{{ __('home.conflict_of_interest_text') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    @include('layouts.footer')
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
