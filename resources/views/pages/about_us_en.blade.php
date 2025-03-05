@extends('layouts.app')

@section('title', 'Qui sommes-nous?')

@section('description', 'Raphaël Coutu, Victor Ferreira, Alexandre Mathieu et plusieurs autres collaborateurs.')

@section('hreflang_fr', 'qui-sommes-nous')
@section('hreflang_en', 'about-us')

@section('content')
    @include('layouts.navbar', ['active' => ''])
    <div class="mx-auto container flex flex-grow justify-between items-start pt-4 leading-loose tracking-normal">
        <div class="mx-auto w-full sm:w-3/4 bg-white border-t-8 border-red px-6 py-3 shadow">
            <div class="flex border-b border-grey-light items-center">
                <h1 class="text-3xl leading-none text-red">About Us</h1>
            </div>
            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Webmasters</h3>

            <div class="pl-2">
                <div class="border-b-2 border-grey-lighter">
                    <div class="text-red-darker">Raphaël Coutu, Pharm.D, M.Sc.</div>
                    <div class="pl-2 text-grey-darker text-sm leading-none">Pharmacist at CIUSSSE-CHUS, CHUS site</div>
                    <div class="pl-2 text-sm">Review of drug datasheets</div>
                </div>
                <div class="border-b-2 border-grey-lighter">
                    <div class="text-red-darker">Victor Ferreira, Pharm.D, M.Sc.</div>
                    <div class="pl-2 text-grey-darker text-sm leading-none">Pharmacist at CHUM</div>
                    <div class="pl-2 text-sm">Writing and review of drug datasheets</div>
                </div>
                <div class="border-b-2 border-grey-lighter">
                    <div class="text-red-darker">Alexandre Mathieu, Pharm.D, M.Sc.</div>
                    <div class="pl-2 text-grey-darker text-sm leading-none">Pharmacist at CISSS de Lanaudière</div>
                    <div class="pl-2 text-sm">Writing and review of drug datasheets</div>
                </div>
                <div>
                    <div class="text-red-darker">D<sup>r</sup> Julien Bissonnette, MD</div>
                    <div class="pl-2 text-grey-darker text-sm leading-none">Hepatologist at CHUM</div>
                    <div class="pl-2 text-sm">Review of drug datasheets</div>
                </div>
                </div>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Collaborators</h3>
            <ul>
                <li>Yasemin Cokay, candidate for Pharm.D (2018): Writing of drug datasheets</li>
                <li>Steven Mancino, candidate for Pharm.D (2018): Writing of drug datasheets</li>
                <li>Fabiano Pandozzi, candidate for Pharm.D (2018): Writing of drug datasheets</li>
                <li>Donna Renda, candidate for Pharm.D (2018): Writing of drug datasheets</li>
                <li>Alessio Valentini, candidate for Pharm.D (2018): Writing of drug datasheets</li>
                <li>Sandra Arencia Cubas, candidate for Pharm.D (2020): Writing of drug datasheets</li>
                <li>Elizabeth Delisle, candidate for Pharm.D (2020): Writing of drug datasheets</li>
                <li>Isabelle Dansereau, candidate for Pharm.D (2020): Writing of drug datasheets</li>
                <li>Wael Mouas, candidate for Pharm.D (2021): Writing of drug datasheets</li>
                <li>Nourredine-Nassim Krid, candidate for Pharm.D (2023): Writing of drug datasheets</li>
                <li>Sandra Labonté, candidate for Master's in Advanced Pharmacotherapy (2024): Writing of drug datasheets</li>
                <li>Jessica Lan, candidate for Pharm.D (2024): Writing and reviewing of drug datasheets</li>
                <li>Marc-André Lord, candidate for Pharm.D (2024): Writing and reviewing of drug datasheets</li>
                <li>Sewanou Mickael Tossou, candidate for Pharm.D (2025): Writing and reviewing of drug datasheets</li>
            </ul>
        </div>
    </div>
    @include('layouts.footer')
@endsection
