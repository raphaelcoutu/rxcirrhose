<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.analytics')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="RxCirrhose" />
    <meta property="og:description" content="Référence d'ajustement des médicaments en insuffisance hépatique." />
    <meta property="description" content="Référence d'ajustement des médicaments en insuffisance hépatique." />

    <title>RxCirrhose</title>

    <link rel="stylesheet" href="{{ mix('css/main.css') }}">

    <!-- Styles -->
</head>
<body class="font-sans flex flex-col h-full" >
<div id="app">
    <header class="absolute pin-t z-10 w-full">
        <div class="container mx-auto flex justify-between flex-wrap">
            <div class="flex flex-no-shrink py-2">
                <a href="{{ url('/') }}" class="mt-2 font-semibold text-xl text-white no-underline pl-2">RxCirrhose</a>
            </div>
            <div class="block sm:hidden">
                <button class="flex items-center text-white p-2 m-2 border border-white rounded" @click="toggleMobileMenu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div :class="mobileMenu ? 'block' : 'hidden'" class="w-full sm:flex sm:items-center sm:w-auto md:w-3/5 sm:justify-end" v-cloak>
                <div class="w-full sm:flex justify-between items-center tracking-tight font-thin uppercase bg-red-lightest sm:bg-transparent">
                    <a href="{{ url('/') }}" class="block sm:inline-block p-2 text-sm text-black sm:text-white sm:border-b-2 border-red-lightest no-underline sm:hover:border-red-lightest hover:bg-red-light sm:hover:bg-transparent trans">Accueil</a>
                    <a href="{{ url('cirrhose') }}" class="block sm:inline-block p-2 text-sm no-underline text-black sm:text-white border-b-2 border-transparent sm:hover:border-red-lightest hover:bg-red-light sm:hover:bg-transparent trans">Cirrhose</a>
                    <a href="{{ route('articles.index') }}" class="block sm:inline-block p-2 text-sm no-underline text-black sm:text-white border-b-2 border-transparent sm:hover:border-red-lightest hover:bg-red-light sm:hover:bg-transparent trans">Médicaments</a>
                    <a href="{{ url('faq') }}" class="block sm:inline-block p-2 text-sm no-underline text-black sm:text-white border-b-2 border-transparent sm:hover:border-red-lightest hover:bg-red-light sm:hover:bg-transparent trans">FAQ</a>
                    <div class="w-12 flex justify-center items-center">
                        <cirrhose-search-button
                                class="px-2 py-6 no-underline text-sm text-grey border-b-2 border-transparent hover:text-grey-darker"
                        ></cirrhose-search-button>
                    </div>
                </div>
            </div>
        </div>
        <cirrhose-search class="fixed w-full"></cirrhose-search>
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
                                <p class="text-sm sm:text-base font-thin uppercase"></i>Nouvelle référence gratuite</p>
                                <h1 class="text-xl sm:text-3xl">Ajustement des médicaments en insuffisance hépatique</h1>
                            </div>
                            <p class="font-thin lg:w-3/4 w-full mt-8 leading-normal">La cirrhose a un impact majeur sur le métabolisme de la majorité des médicaments disponibles sur le marché. Bien que ce problème de santé devient de plus en plus prévalent, il existe peu d’information dans les monographies concernant leur ajustement en présence d’insuffisance hépatique.</p>
                            <a class="uppercase bg-white shadow md:p-4 p-2 rounded text-red-light no-underline text-center md:mt-8 mt-4 w-full md:w-1/2" href="{{ route('articles.index') }}">Explorer la documentation</a>
                        </div>
                    </div>
                </section>
            </header>
            <section id="primary" class="mx-auto container flex flex-col items-center justify-around pb-8">
                <div class="md:w-1/2 w-3/4 flex flex-col justify-center text-center md:text-3xl text-red-light shadow border rounded border-red-dark py-3">
                    <p>{{ $articlesCount }} fiches médicamenteuses produites</p>
                    <p>{{ $drugsCount }} molécules analysées</p>
                </div>
                <div class="w-full flex justify-center mt-8">
                    <div class="md:w-1/3 w-1/4 flex justify-center items-center">
                        @include('svg.list', ['class' => 'w-16 h-16 md:w-32 md:h-32'])
                    </div>
                    <div class="w-2/3">
                        <h2 class="text-xl md:text-2xl">Documentation résumée</h2>
                        <p class="sm:leading-normal md:mt-6 mt-2 text-sm md:text-base">
                            Le site est conçu pour présenter des fiches de recommandation par classes médicamenteuses lors d'insuffisance hépatique. L'utilisation suggérée et les précautions sont justifiées par une revue de la littérature récente. L'objectif est de fournir un outil de référence supplémentaire aux cliniciens pour la prescription aux patients avec cirrhose de médicaments couramment utilisés.
                        </p>
                    </div>
                </div>
                <div class="w-full flex md:flex-row-reverse justify-center mt-4">
                    <div class="md:w-1/3 w-1/4 flex justify-center items-center">
                        @include('svg.document', ['class' => 'w-16 h-16 md:w-32 md:h-32'])
                    </div>
                    <div class="w-2/3">
                        <h2 class="text-xl md:text-2xl md:text-right">Structure des fiches médicamenteuses</h2>
                        <div class="sm:leading-normal md:mt-6 mt-2 md:text-right text-sm md:text-base">
                            <p>Pour chaque classe, vous trouverez au début de la fiche un tableau résumant la sécurité du médicament selon la sévérité de la cirrhose. Une section concernant la pharmacodynamie de la classe médicamenteuse a été développée pour aider les cliniciens à comprendre l’impact de la cirrhose sur l’effet du médicament (et vice-versa). Un tableau résume ensuite les propriétés pharmacocinétiques de chaque molécule chez les sujets sains et chez les cirrhotiques. Un résumé des études utilisées pour formuler les recommandations se trouve à la suite du tableau. Les références sont disponibles à la fin de la fiche.</p>
                            <p class="mt-2">Vous trouverez de l’information concernant le score Child-Pugh <a href="{{ url('child-pugh') }}" class="text-red-light font-bold no-underline">ici</a>.</p>
                        </div>
                    </div>
                </div>
            </section>
            {{--<section id="secondary" class="relative py-8 mt-10">--}}
            <section class="relative py-8 mt-10">
                <div class="container mx-auto w-2/3 flex-col">
                    <div>
                        <h2 class="text-center">Mise en garde</h2>
                        <div class="flex w-3/4 mt-10 mx-auto">
                            <div class="w-full mt-4 bg-red-lightest rounded border-2 border-red-dark p-4 text-red-darker shadow tracking-normal leading-normal flex items-center">
                                <p>Ce site se veut un guide ou une référence contenant assez d’informations pour aider le pharmacien à prendre une décision éclairée. Cependant, ce guide ne remplace aucunement le jugement du professionnel de la santé.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <h2 class="text-center">Conflits d’intérêts</h2>
                        <div class="flex w-3/4 mt-10 mx-auto">
                            <div class="w-full mt-4 p-4 text-red-darker bg-white shadow tracking-normal leading-normal flex items-center">
                                <p>Aucun membre de l’équipe n’a de conflits d’intérêts à divulguer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{--<section id="tertiary" class="bg-white">--}}
                {{--<div class="container flex flex-col mx-auto py-10">--}}
                {{--</div>--}}
            {{--</section>--}}
        </main>
    </div>
    @include('layouts.footer')
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
