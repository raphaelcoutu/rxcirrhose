<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HépatoPharm</title>

    <link rel="stylesheet" href="{{ mix('css/main.css') }}">

    <!-- Styles -->
</head>
<body class="font-sans flex flex-col h-full">
    <header class="absolute pin-t z-10 w-full">
        <div class="container mx-auto flex justify-between">
            <div class="1/5 py-2">
                <a href="#" class="font-semibold text-xl text-white no-underline">HépatoPharm</a>
            </div>
            <div class="flex items-center justify-between w-3/5 tracking-tight font-thin uppercase">
                <a href="#" class="px-2 text-sm text-white border-b-2 border-red-lightest no-underline">Accueil</a>
                <a href="#" class="px-2 text-sm no-underline text-white border-b-2 border-transparent hover:border-red-lighter">Cirrhose du foie</a>
                <a href="#" class="px-2 text-sm no-underline text-white border-b-2 border-transparent hover:border-red-lighter">Médicaments</a>
                <a href="#" class="px-2 text-sm no-underline text-white border-b-2 border-transparent hover:border-red-lighter">FAQ</a>
            </div>
        </div>
    </header>
    <div id="globalContent" class="flex-1">
        <main class="relative overflow-hidden">
            <header class="relative">
                <div id="stripes" class="w-full h-full overflow-hidden absolute">
                </div>
                <section id="intro" class="block relative h-144 flex items-center container mx-auto">
                    <div class="text-white flex justify-between h-96">
                        <div class="w-3/5 flex flex-col">
                            <div>
                                <p class="font-thin uppercase"></i>Nouvelle référence gratuite</p>
                                <h1>Ajustement des médicaments en insuffisance hépatique</h1>
                            </div>
                            <p class="font-thin w-3/4 mt-8 tracking-wide leading-normal">Un nouvel outil pour les professionnels de la santé conçu par des professionnels. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis est nulla quas quibusdam quisquam, voluptate. Commodi explicabo facere neque saepe. Culpa eligendi laborum nemo perferendis, qui reprehenderit temporibus vero! Ipsa!</p>
                            <a class="uppercase bg-white shadow p-4 rounded text-red-light no-underline text-center mt-10 w-1/2" href="{{ route('articles.index') }}">Explorer la documentation</a>
                        </div>
                        <div class="w-2/5 flex justify-center">
                            @include('svg.liver', ['class' => 'h-64 w-64'])
                        </div>
                    </div>
                </section>
            </header>
            <section id="primary" class="mx-auto container flex flex-col items-center justify-around h-128">
                <div class="flex">
                    <div class="w-1/3 flex justify-center">
                        @include('svg.list', ['class' => 'w-32 h-32'])
                    </div>
                    <div class="w-2/3">
                        <h2>Documentation résumée</h2>
                        <p class="leading-normal mt-6">
                            Le site est conçu pour présenter le suivi des médicaments par classes médicamenteuses. Chaque fiche contient un tableau résumé expliquant brièvement les recommandations. Par la suite, chacune des recommandations est justifiée par une revue de la littérature récente.
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="w-2/3">
                        <h2 class="text-right">Documentation résumée</h2>
                        <p class="leading-normal mt-6 text-right">
                            Le site est conçu pour présenter le suivi des médicaments par classes médicamenteuses. Chaque fiche contient un tableau résumé expliquant brièvement les recommandations. Par la suite, chacune des recommandations est justifiée par une revue de la littérature récente.
                        </p>
                    </div>
                    <div class="w-1/3 flex justify-center">
                        @include('svg.list', ['class' => 'w-32 h-32'])
                    </div>

                </div>
            </section>
            <section id="secondary" class="relative py-8 mt-10">
                <div class="container mx-auto w-2/3 flex-col">
                    <h2>Qui Sommes-nous?</h2>
                    <p class="mt-6 uppercase text-grey-darker">Étudiants finissant en pharmacie</p>
                    <div class="flex justify-around mt-10">
                        <div class="flex flex-col justify-center items-center bg-white rounded border border-grey-light p-2">
                            <img class="h-24 w-24 rounded-full border-2 border-red" src="http://m.bestofmedia.com/sfp/images/ugc/topicContent/ea653fb2d96d7d9b7d199e8e557e565e/le-parrain-jeu-mobile-astuces_tgu_fr_1487863218_w_600.jpg">
                            <p class="text-grey-darkest py-4">Benito Mussolini</p>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-white rounded border border-grey-light p-2">
                            <img class="h-24 w-24 rounded-full border-2 border-red" src="https://upload.wikimedia.org/wikipedia/commons/6/6f/Benito_Mussolini_colored.jpg">
                            <p class="text-grey-darkest py-4">Benito Mussolini</p>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-white rounded border border-grey-light p-2">
                            <img class="h-24 w-24 rounded-full border-2 border-red" src="https://www.plaisirslaitiers.ca/var/ezflow_site/storage/images/plaisirs-laitiers/accueil/recettes/la-meilleure-sauce-a-spaghetti-au-monde/898811-25-eng-CA/best-ever-spaghetti-sauce_large.jpg">
                            <p class="text-grey-darkest py-4">Benito Mussolini</p>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-white rounded border border-grey-light p-2">
                            <img class="h-24 w-24 rounded-full border-2 border-red" src="https://www.superprof.fr/blog/file/2016/11/personnalites-italiennes-1.jpg">
                            <p class="text-grey-darkest py-4">Benito Mussolini</p>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-white rounded border border-grey-light p-2">
                            <img class="h-24 w-24 rounded-full border-2 border-red" src="http://stationopera.com/wp-content/uploads/2012/03/Verdi.png" alt="">
                            <p class="text-grey-darkest py-4">Benito Mussolini</p>
                        </div>
                    </div>
                    <p class="mt-10 uppercase text-grey-darker">Pharmaciens réviseurs</p>
                    <div class="flex justify-around mt-10">
                        <div class="flex flex-col justify-center items-center bg-white rounded border border-grey-light p-2">
                            <img class="h-24 w-24 rounded-full border-2 border-red" src="https://scontent-yyz1-1.xx.fbcdn.net/v/t1.0-9/11012183_10153535350093777_6154377630598111426_n.jpg?_nc_cat=0&oh=d198a2164efe9721a7724d4d92d7f178&oe=5B956FF8">
                            <p class="text-grey-darkest py-4">Raphaël Coutu</p>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-white rounded border border-grey-light p-2">
                            <img class="h-24 w-24 rounded-full border-2 border-red" src="https://scontent-yyz1-1.xx.fbcdn.net/v/t1.0-1/12401009_1075363999162736_3807110703358194319_n.jpg?_nc_cat=0&oh=6bc7ce968a65904f54170f108c8b03b2&oe=5B817B4C">
                            <p class="text-grey-darkest py-4">Victor Ferreira</p>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-white rounded border border-grey-light p-2">
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
                        <div class="flex">
                            <div class="w-1/2 bg-red-lightest rounded border-2 border-red-dark p-4 ml-4 text-red-darker shadow tracking-normal leading-normal flex items-center">
                                <p>Ce site se veut un guide ou une référence contenant assez d’informations pour aider le pharmacien à prendre une décision éclairée. Cependant, ce guide ne remplace aucunement le jugement du professionnel de la santé.</p>
                            </div>
                            <div class="w-1/2 bg-red-lightest rounded border-2 border-red-dark p-4 ml-4 text-red-darker shadow tracking-normal leading-normal flex items-center">
                                <p>Il importe de se rappeler que les valeurs de laboratoire aberrantes devraient être questionnées rigoureusement si elles n’ont vraiment aucun sens. Au besoin, il est pertinent de répéter une analyse de laboratoire.</p>
                            </div>
                        </div>
                        <div class="flex mt-6">
                            <div class="w-1/2 bg-red-lightest rounded border-2 border-red-dark p-4 ml-4 text-red-darker shadow tracking-normal leading-normal flex items-center">
                                <p>En tant que pharmaciens, nous sommes biaisés et nous avons tendance à attribuer tous les problèmes du patient à ses médicaments. Cependant, il faut voir le patient dans son ensemble et penser que les anomalies des valeurs de laboratoire ne sont pas nécessairement dues aux médicaments ou que ceux-ci peuvent avoir contribué sans être l’unique cause. Selon la situation, le patient devrait tout de même être référé en cas d’anomalie significative.</p>
                            </div>
                            <div class="w-1/2 bg-red-lightest rounded border-2 border-red-dark p-4 ml-4 text-red-darker shadow tracking-normal leading-normal flex items-center">
                                <p>Les valeurs normales des analyses de laboratoire peuvent varier selon les laboratoires d’analyse et selon les caractéristiques du patient (l’ethnie, le sexe, etc.). Les valeurs normales inscrites dans les tableaux sont à titre indicatif.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    @include('layouts.footer')
</body>
</html>