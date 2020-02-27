@extends('layouts.app')

@section('title', 'Qui sommes-nous?')

@section('content')
    @include('layouts.navbar', ['active' => ''])
    <div class="mx-auto container flex flex-grow justify-between items-start pt-4 leading-loose tracking-normal">
        <div class="mx-auto w-full sm:w-3/4 bg-white border-t-8 border-red px-6 py-3 shadow">
            <div class="flex border-b border-grey-light items-center">
                <h2 class="text-3xl leading-none text-red">Qui Sommes-Nous?</h2>
            </div>
            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Webmaîtres</h3>

            <div class="pl-2">
                <div class="border-b-2 border-grey-lighter">
                    <div class="text-red-darker">Raphaël Coutu, Pharm.D, M.Sc.</div>
                    <div class="pl-2 text-grey-darker text-sm leading-none">Pharmacien au CIUSSSE-CHUS, site CHUS</div>
                    <div class="pl-2 text-sm">Révision des fiches</div>
                </div>
                <div class="border-b-2 border-grey-lighter">
                    <div class="text-red-darker">Victor Ferreira, Pharm.D, M.Sc.</div>
                    <div class="pl-2 text-grey-darker text-sm leading-none">Pharmacien au CHUM</div>
                    <div class="pl-2 text-sm">Rédaction et révision de fiches</div>
                </div>
                <div class="border-b-2 border-grey-lighter">
                    <div class="text-red-darker">Alexandre Mathieu, Pharm.D, M.Sc.</div>
                    <div class="pl-2 text-grey-darker text-sm leading-none">Pharmacien au CHUM</div>
                    <div class="pl-2 text-sm">Rédaction et révision de fiches</div>
                </div>
                <div>
                    <div class="text-red-darker">D<sup>r</sup> Julien Bissonnette, MD</div>
                    <div class="pl-2 text-grey-darker text-sm leading-none">Hépatologue au CHUM</div>
                    <div class="pl-2 text-sm">Révision des fiches</div>
                </div>
                </div>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Collaborateurs</h3>
            <ul>
                <li>Yasemin Cokay, candidate au Pharm.D (2018): Rédaction de fiches</li>
                <li>Steven Mancino, candidat au Pharm.D (2018): Rédaction de fiches</li>
                <li>Fabiano Pandozzi, candidat au Pharm.D (2018): Rédaction de fiches</li>
                <li>Donna Renda, candidate au Pharm.D (2018): Rédaction de fiches</li>
                <li>Alessio Valentini, candidat au Pharm.D (2018): Rédaction de fiches</li>
                <li>Sandra Arencia Cubas, candidate au Pharm.D (2020): Rédaction de fiches</li>
                <li>Elizabeth Delisle, candidate au Pharm.D (2020): Rédaction de fiches</li>
                <li>Isabelle Dansereau, candidate au Pharm.D (2020): Rédaction de fiches</li>
            </ul>
        </div>
    </div>
    @include('layouts.footer')
@endsection
