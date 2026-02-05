@extends('layouts.app')

@section('title', 'Médicaments')

@section('hreflang_fr', 'articles')
@section('hreflang_en', 'articles')

@section('content')
    @include('layouts.navbar', ['active' => 'medicaments'])

    <div class="min-h-screen bg-gradient-to-b from-red-50 to-white dark:from-slate-900 dark:to-slate-800">
        <div class="relative overflow-hidden">
            <div class="absolute inset-0 stripes opacity-20"></div>
            <div class="relative container mx-auto px-6 py-12">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                        {{ __('article.drug_datasheets') }}
                    </h1>
                    <p class="text-lg text-gray-600 dark:text-gray-400">
                        Fiches médicaments adaptées à la cirrhose
                    </p>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-6 pb-16">
            <div class="max-w-6xl mx-auto">
                <article-search :articles="{{ json_encode($articles) }}"></article-search>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection
