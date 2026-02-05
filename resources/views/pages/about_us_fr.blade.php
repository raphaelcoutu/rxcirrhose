@extends('layouts.app')

@section('title', 'Qui sommes-nous?')

@section('description', 'Raphaël Coutu, Victor Ferreira, Alexandre Mathieu et plusieurs autres collaborateurs.')

@section('hreflang_fr', 'qui-sommes-nous')
@section('hreflang_en', 'about-us')

@section('content')
    @include('layouts.navbar', ['active' => ''])
    <div class="mx-auto container flex flex-grow justify-between items-start pt-4 leading-loose tracking-normal">
        <div class="mx-auto w-full sm:w-3/4 bg-white border-t-8 border-red-500 px-6 py-3 shadow dark:bg-slate-800 dark:border-red-500">
            <div class="flex border-b border-gray-400 items-center dark:border-slate-700">
                <h1 class="text-3xl leading-none text-red-500">Qui Sommes-Nous?</h1>
            </div>
            <h3 class="mt-4 px-2 bg-gray-100 border-t border-b border-gray-400 dark:bg-slate-800 dark:border-slate-700">Webmaîtres</h3>

            <div class="pl-2">
                <div class="border-b-2 border-gray-200 dark:border-slate-700">
                    <div class="text-red-800 dark:text-red-400">Raphaël Coutu, Pharm.D, M.Sc.</div>
                    <div class="pl-2 text-gray-800 text-sm leading-none dark:text-gray-300">Pharmacien au CIUSSSE-CHUS, site CHUS</div>
                    <div class="pl-2 text-sm dark:text-gray-400">Révision des fiches</div>
                </div>
                <div class="border-b-2 border-gray-200 dark:border-slate-700">
                    <div class="text-red-800 dark:text-red-400">Victor Ferreira, Pharm.D, M.Sc.</div>
                    <div class="pl-2 text-gray-800 text-sm leading-none dark:text-gray-300">Pharmacien au CHUM</div>
                    <div class="pl-2 text-sm dark:text-gray-400">Rédaction et révision de fiches</div>
                </div>
                <div class="border-b-2 border-gray-200 dark:border-slate-700">
                    <div class="text-red-800 dark:text-red-400">Alexandre Mathieu, Pharm.D, M.Sc.</div>
                    <div class="pl-2 text-gray-800 text-sm leading-none dark:text-gray-300">Pharmacien au CISSS de Lanaudière</div>
                    <div class="pl-2 text-sm dark:text-gray-400">Rédaction et révision de fiches</div>
                </div>
                <div>
                    <div class="text-red-800 dark:text-red-400">D<sup>r</sup> Julien Bissonnette, MD</div>
                    <div class="pl-2 text-gray-800 text-sm leading-none dark:text-gray-300">Hépatologue au CHUM</div>
                    <div class="pl-2 text-sm dark:text-gray-400">Révision des fiches</div>
                </div>
                </div>

            <h3 class="mt-4 px-2 bg-gray-100 border-t border-b border-gray-400 dark:bg-slate-800 dark:border-slate-700">Collaborateurs</h3>
            <ul>
                <li>Yasemin Cokay, candidate au Pharm.D (2018): Rédaction de fiches</li>
                <li>Steven Mancino, candidat au Pharm.D (2018): Rédaction de fiches</li>
                <li>Fabiano Pandozzi, candidat au Pharm.D (2018): Rédaction de fiches</li>
                <li>Donna Renda, candidate au Pharm.D (2018): Rédaction de fiches</li>
                <li>Alessio Valentini, candidat au Pharm.D (2018): Rédaction de fiches</li>
                <li>Sandra Arencia Cubas, candidate au Pharm.D (2020): Rédaction de fiches</li>
                <li>Elizabeth Delisle, candidate au Pharm.D (2020): Rédaction de fiches</li>
                <li>Isabelle Dansereau, candidate au Pharm.D (2020): Rédaction de fiches</li>
                <li>Wael Mouas, candidat au Pharm.D (2021): Rédaction de fiches</li>
                <li>Nourredine-Nassim Krid, candidat au Pharm.D (2023): Rédaction de fiches</li>
                <li>Sandra Labonté, candidate à la maîtrise en pharmacothérapie avancée (2024): Rédaction de fiches</li>
                <li>Jessica Lan, candidate au Pharm.D (2024): Rédaction et révision de fiches</li>
                <li>Marc-André Lord, candidat au Pharm.D (2024): Rédaction et révision de fiches</li>
                <li>Sewanou Mickael Tossou, candidat au Pharm.D (2025): Rédaction et révisions de fiches</li>
                <li>Lauriane Chagnon, candidate au Pharm.D (2025): Rédaction de fiches</li>
            </ul>
        </div>
    </div>
    @include('layouts.footer')
@endsection
