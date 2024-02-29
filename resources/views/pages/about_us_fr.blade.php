@extends('layouts.app')

@section('title', 'Qui sommes-nous?')

@section('description', 'Raphaël Coutu, Victor Ferreira, Alexandre Mathieu et plusieurs autres collaborateurs.')

@section('content')
    @include('layouts.navbar', ['active' => ''])
    <div class="mx-auto container flex flex-grow justify-between items-start pt-4 leading-loose tracking-normal">
        <div class="mx-auto w-full sm:w-3/4 bg-white border-t-8 border-red-500 px-6 py-3 shadow">
            <div class="flex border-b border-gray-400 items-center">
                <h1 class="text-3xl leading-none text-red-500">Qui Sommes-Nous?</h1>
            </div>
            <h3 class="mt-4 px-2 bg-gray-100 border-t border-b border-gray-400">Webmaîtres</h3>

            <div class="pl-2">
                <div class="border-b-2 border-gray-200">
                    <div class="text-red-800">Raphaël Coutu, Pharm.D, M.Sc.</div>
                    <div class="pl-2 text-gray-800 text-sm leading-none">Pharmacien au CIUSSSE-CHUS, site CHUS</div>
                    <div class="pl-2 text-sm">Révision des fiches</div>
                </div>
                <div class="border-b-2 border-gray-200">
                    <div class="text-red-800">Victor Ferreira, Pharm.D, M.Sc.</div>
                    <div class="pl-2 text-gray-800 text-sm leading-none">Pharmacien au CHUM</div>
                    <div class="pl-2 text-sm">Rédaction et révision de fiches</div>
                </div>
                <div class="border-b-2 border-gray-200">
                    <div class="text-red-800">Alexandre Mathieu, Pharm.D, M.Sc.</div>
                    <div class="pl-2 text-gray-800 text-sm leading-none">Pharmacien au CISSS de Lanaudière</div>
                    <div class="pl-2 text-sm">Rédaction et révision de fiches</div>
                </div>
                <div>
                    <div class="text-red-800">D<sup>r</sup> Julien Bissonnette, MD</div>
                    <div class="pl-2 text-gray-800 text-sm leading-none">Hépatologue au CHUM</div>
                    <div class="pl-2 text-sm">Révision des fiches</div>
                </div>
                </div>

            <h3 class="mt-4 px-2 bg-gray-100 border-t border-b border-gray-400">Collaborateurs</h3>
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
            </ul>
        </div>
    </div>
    @include('layouts.footer')
@endsection
