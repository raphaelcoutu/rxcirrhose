<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RxCirrhose</title>

    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Styles -->
</head>
<body class="font-sans flex flex-col h-full" >
<div id="app">
    <header class="absolute pin-t z-10 w-full">
        <div class="container mx-auto flex justify-between flex-wrap">
            <div class="flex flex-no-shrink py-2">
                <a href="#" class="mt-2 font-semibold text-xl text-white no-underline pl-2">RxCirrhose</a>
            </div>
            <div class="block sm:hidden">
                <button class="flex items-center text-white p-2 m-2 border border-white rounded" @click="toggleMobileMenu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div :class="mobileMenu ? 'block' : 'hidden'" class="w-full sm:flex sm:items-center sm:w-auto md:w-3/5 sm:justify-end" v-cloak>
                <div class="w-full sm:flex justify-between items-center tracking-tight font-thin uppercase bg-red-lightest sm:bg-transparent">
                    <a href="#" class="block sm:inline-block p-2 text-sm text-black sm:text-white sm:border-b-2 border-red-lightest no-underline sm:hover:border-red-lightest hover:bg-red-light sm:hover:bg-transparent trans">Accueil</a>
                    <a href="#" class="block sm:inline-block p-2 text-sm no-underline text-black sm:text-white border-b-2 border-transparent sm:hover:border-red-lightest hover:bg-red-light sm:hover:bg-transparent trans">Cirrhose du foie</a>
                    <a href="{{ route('articles.index') }}" class="block sm:inline-block p-2 text-sm no-underline text-black sm:text-white border-b-2 border-transparent sm:hover:border-red-lightest hover:bg-red-light sm:hover:bg-transparent trans">Médicaments</a>
                    <a href="#" class="block sm:inline-block p-2 text-sm no-underline text-black sm:text-white border-b-2 border-transparent sm:hover:border-red-lightest hover:bg-red-light sm:hover:bg-transparent trans">FAQ</a>
                </div>
            </div>
        </div>
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
                            <p class="font-thin lg:w-3/4 w-full mt-8 leading-normal">La cirrhose a un impact majeur sur le métabolisme de la majorité des médicaments disponibles sur le marché.
                                Bien que ce problème de santé devient de plus en plus prévalence (plus de 1 % de la population mondiale en serait atteinte), il existe peu d’information dans les monographies concernant leur ajustement en présence d’insuffisance hépatique.</p>
                            <a class="uppercase bg-white shadow md:p-4 p-2 rounded text-red-light no-underline text-center md:mt-8 mt-4 w-full md:w-1/2" href="{{ route('articles.index') }}">Explorer la documentation</a>
                        </div>
                    </div>
                </section>
            </header>
            <section id="primary" class="mx-auto container flex flex-col items-center justify-around md:h-128">
                <div class="w-full flex justify-center">
                    <div class="md:w-1/3 w-1/4 flex justify-center items-center">
                        @include('svg.list', ['class' => 'w-16 h-16 md:w-32 md:h-32'])
                    </div>
                    <div class="w-2/3">
                        <h2 class="text-xl md:text-2xl">Documentation résumée</h2>
                        <p class="sm:leading-normal md:mt-6 mt-2 text-sm md:text-base">
                            Le site est conçu pour présenter le suivi des médicaments par classes médicamenteuses. Chaque fiche contient un tableau résumé expliquant brièvement les recommandations. Par la suite, chacune des recommandations est justifiée par une revue de la littérature récente.
                        </p>
                    </div>
                </div>
                <div class="w-full flex md:flex-row-reverse justify-center">
                    <div class="md:w-1/3 w-1/4 flex justify-center items-center">
                        @include('svg.document', ['class' => 'w-16 h-16 md:w-32 md:h-32'])
                    </div>
                    <div class="w-2/3">
                        <h2 class="text-xl md:text-2xl md:text-right">Structure des fiches médicamenteuses</h2>
                        <p class="sm:leading-normal md:mt-6 mt-2 md:text-right text-sm md:text-base">
                            Pour chaque classe, vous trouverez au début de la fiche un tableau résumant la sécurité du médicament selon la sévérité de la cirrhose. Une section concernant la pharmacodynamie du médicament a été développée pour aider les cliniciens à comprendre l’impact de la cirrhose sur l’effet du médicament (et vice-versa). Un tableau résume ensuite les propriétés pharmacocinétiques de chaque molécule chez les patients sains et chez les cirrhotiques. Un résumé des études utilisées pour formuler les recommandations se trouve à la suite du tableau. Les références sont disponibles à la fin de la fiche.
                        </p>
                    </div>
                </div>
            </section>
            <section id="secondary" class="relative py-8 mt-10">
                <div class="container mx-auto w-2/3 flex-col">
                    <h2>Qui Sommes-nous?</h2>
                    <p class="mt-6 uppercase text-grey-darker">Étudiants finissant en pharmacie</p>
                    <div class="flex flex-col md:flex-row justify-around mt-10">
                        <div class="flex flex-col justify-center items-center bg-white rounded border border-grey-light p-2 my-2">
                            <img class="h-24 w-24 rounded-full border-2 border-red" src="https://rentnjoy.com/development/wp-content/uploads/1457/86/analyst-placeholder-avatar.png">
                            <p class="text-grey-darkest py-4">Prénom Nom</p>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-white rounded border border-grey-light p-2 my-2">
                            <img class="h-24 w-24 rounded-full border-2 border-red" src="https://rentnjoy.com/development/wp-content/uploads/1457/86/analyst-placeholder-avatar.png">
                            <p class="text-grey-darkest py-4">Prénom Nom</p>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-white rounded border border-grey-light p-2 my-2">
                            <img class="h-24 w-24 rounded-full border-2 border-red" src="https://rentnjoy.com/development/wp-content/uploads/1457/86/analyst-placeholder-avatar.png">
                            <p class="text-grey-darkest py-4">Prénom Nom</p>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-white rounded border border-grey-light p-2 my-2">
                            <img class="h-24 w-24 rounded-full border-2 border-red" src="https://rentnjoy.com/development/wp-content/uploads/1457/86/analyst-placeholder-avatar.png">
                            <p class="text-grey-darkest py-4">Prénom Nom</p>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-white rounded border border-grey-light p-2 my-2">
                            <img class="h-24 w-24 rounded-full border-2 border-red" src="https://rentnjoy.com/development/wp-content/uploads/1457/86/analyst-placeholder-avatar.png" alt="">
                            <p class="text-grey-darkest py-4">Prénom Nom</p>
                        </div>
                    </div>
                    <p class="mt-10 uppercase text-grey-darker">Pharmaciens réviseurs</p>
                    <div class="flex flex-col md:flex-row justify-around mt-10">
                        <div class="flex flex-col justify-center items-center bg-white rounded border border-grey-light p-2 my-2">
                            <img class="h-24 w-24 rounded-full border-2 border-red" src="https://scontent-yyz1-1.xx.fbcdn.net/v/t1.0-9/11012183_10153535350093777_6154377630598111426_n.jpg?_nc_cat=0&oh=d198a2164efe9721a7724d4d92d7f178&oe=5B956FF8">
                            <p class="text-grey-darkest py-4">Raphaël Coutu</p>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-white rounded border border-grey-light p-2 my-2">
                            <img class="h-24 w-24 rounded-full border-2 border-red" src="https://scontent-yyz1-1.xx.fbcdn.net/v/t1.0-1/12401009_1075363999162736_3807110703358194319_n.jpg?_nc_cat=0&oh=6bc7ce968a65904f54170f108c8b03b2&oe=5B817B4C">
                            <p class="text-grey-darkest py-4">Victor Ferreira</p>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-white rounded border border-grey-light p-2 my-2">
                            <img class="h-24 w-24 rounded-full border-2 border-red" src="https://scontent-yyz1-1.xx.fbcdn.net/v/t1.0-9/11800065_10153490591324491_4053491543982135528_n.jpg?_nc_cat=0&oh=4895f6f1ac00d89d5ef81959a7e8ae95&oe=5B9568C6">
                            <p class="text-grey-darkest py-4">Alexandre Mathieu</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="tertiary" class="bg-white">
                <div class="container mx-auto py-10">
                    <h2 class="text-center">Mise en garde</h2>
                    <div class="flex flex-col w-3/4 mt-10 mx-auto">
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full md:w-1/2 mt-4 bg-red-lightest rounded border-2 border-red-dark p-4 text-red-darker shadow tracking-normal leading-normal flex items-center">
                                <p>Ce site se veut un guide ou une référence contenant assez d’informations pour aider le pharmacien à prendre une décision éclairée. Cependant, ce guide ne remplace aucunement le jugement du professionnel de la santé.</p>
                            </div>
                            <div class="w-full md:w-1/2 mt-4 bg-red-lightest rounded border-2 border-red-dark p-4 md:ml-4 text-red-darker shadow tracking-normal leading-normal flex items-center">
                                <p>Il importe de se rappeler que les valeurs de laboratoire aberrantes devraient être questionnées rigoureusement si elles n’ont vraiment aucun sens. Au besoin, il est pertinent de répéter une analyse de laboratoire.</p>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row md:mt-4">
                            <div class="w-full md:w-1/2 mt-4 md:mt-0 bg-red-lightest rounded border-2 border-red-dark p-4 text-red-darker shadow tracking-normal leading-normal flex items-center">
                                <p>En tant que pharmaciens, nous sommes biaisés et nous avons tendance à attribuer tous les problèmes du patient à ses médicaments. Cependant, il faut voir le patient dans son ensemble et penser que les anomalies des valeurs de laboratoire ne sont pas nécessairement dues aux médicaments ou que ceux-ci peuvent avoir contribué sans être l’unique cause. Selon la situation, le patient devrait tout de même être référé en cas d’anomalie significative.</p>
                            </div>
                            <div class="w-full md:w-1/2 mt-4 md:mt-0 bg-red-lightest rounded border-2 border-red-dark p-4 md:ml-4 text-red-darker shadow tracking-normal leading-normal flex items-center">
                                <p>Les valeurs normales des analyses de laboratoire peuvent varier selon les laboratoires d’analyse et selon les caractéristiques du patient (l’ethnie, le sexe, etc.). Les valeurs normales inscrites dans les tableaux sont à titre indicatif.</p>
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