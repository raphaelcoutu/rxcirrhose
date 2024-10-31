@extends('layouts.app')

@section('title', $article->title)

@section('description', trim(mb_substr(strip_tags($article->pharmacodynamics), 0, 150).'...'))

@section('content')
    @include('layouts.navbar', ['active' => 'medicaments'])
    <div class="mx-auto container flex flex-col md:flex-row items-start pt-4 leading-loose tracking-normal">
        <div class="md:w-1/4 w-full px-6 py-3 border-t-8 border-red mr-8 shadow bg-white">
            <h2 class="text-3xl leading-none text-red border-b border-grey-light" class="text-red">{{ Str::of(__('article.summary'))->ucfirst() }}.</h2>
            <ul class="list-reset pl-2 text-red-dark mt-2">
                <li class="leading-normal"><a class="text-red no-underline" href="#resume">{{ Str::of(__('article.summary_table'))->ucfirst() }}</a></li>
                <li class="leading-normal"><a class="text-red no-underline" href="#pharmacodynamie">{{ Str::of(__('article.pharmacodynamics'))->ucfirst() }}</a></li>
                @if($article->drugs->where('table_only', 0)->count() > 0)
                <li class="leading-normal"><a class="text-red no-underline" href="#molecules">{{ Str::of(__('article.drug'))->plural()->ucfirst() }}</a></li>
                @endif
                <ul class="list-reset pl-3">
                    @foreach($article->drugs->where('table_only', 0) as $drug)
                        <li class="leading-normal">
                            <a class="text-red-darker no-underline" href="#{{Str::slug($drug->name) }}">{{ $drug->name }}</a>
                            @auth
                                <span class="text-sm">
                                [<a class="text-red-light no-underline" href="{{ route('admin.drugs.edit', $drug->id) }}">Edit</a>]
                                </span>
                            @endauth
                        </li>
                    @endforeach
                </ul>
                <li class="leading-normal"><a class="text-red no-underline" href="#references">{{ Str::of(__('article.references'))->ucfirst() }}</a></li>
            </ul>
        </div>
        <div class="md:w-3/4 w-full bg-white border-t-8 border-red px-2 sm:px-6 py-3 shadow mt-4 md:mt-0 break-words">
            <div class="flex border-b border-grey-light items-center">
                <h1 class="text-3xl leading-none text-red">{{ $article->title }}</h1>
                @auth
                <span class="text-sm ml-2">
                    {{-- [<a class="text-red-light no-underline" href="{{ route('articles.edit', $article->id) }}">Edit</a>] --}}
                </span>
                @endauth
            </div>
            @isset($lastRevision)
            <p class="flex justify-end text-sm"><i>Dernière révision: {{ $lastRevision->revision_date }}</i></p>
            @endisset
            <h3 id="resume" class="text-xl text-red py-2">{{ Str::of(__('article.summary_table'))->ucfirst() }}</h3>
            <table class="w-full">
                <thead>
                <tr>
                    <th class="table-header">{{ __('article.drug') }}</th>
                    <th width="25%" class="table-header">Child A</th>
                    <th width="25%" class="table-header">Child B</th>
                    <th width="25%" class="table-header">Child C</th>
                </tr>
                </thead>
                <tbody>
                @foreach($article->drugs as $drug)
                <tr>
                    <td>{{ $drug->name }}</td>
                    <td class="{{ $drug->childClass("A") }}">
                        @if($drug->childA_text)
                            {{ $drug->childA_text }}
                        @else
                            {{ $drug->childString("A") }}
                        @endif
                    </td>
                    <td class="{{ $drug->childClass("B") }}">
                        @if($drug->childB_text)
                            {{ $drug->childB_text }}
                        @else
                            {{ $drug->childString("B") }}
                        @endif
                    </td>
                    <td class="{{ $drug->childClass("C") }}">
                        @if($drug->childC_text)
                            {{ $drug->childC_text }}
                        @else
                            {{ $drug->childString("C") }}
                        @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {!! $article->summary !!}

            <h3 id="pharmacodynamie" class="text-xl text-red py-2">{{ Str::of(__('article.pharmacodynamics'))->ucfirst() }}</h3>
            {!! $article->pharmacodynamics !!}

            @if($article->drugs->where('table_only', 0)->count() > 0)
            <h3 id="molecules" class="text-xl text-red py-2 anchor">{{ Str::of(__('article.drug'))->plural()->ucfirst() }}</h3>
            @endif
            @foreach($article->drugs->where('table_only', 0) as $drug)
                <h4 id={{Str::slug($drug->name)}} class="mt-4">{{ $drug->name }}</h4>
            <section>
                <table>
                    <tr>
                        <td width="20%" class="table-header">Absorption</td>
                        <td class="bg-blue-lightest">{!! $drug->absorption !!}</td>
                    </tr>
                    <tr>
                        <td width="20%" class="table-header">Distribution</td>
                        <td class="bg-blue-lightest">{!! $drug->distribution !!}</td>
                    </tr>
                    <tr>
                        <td width="20%" class="table-header">Métabolisme</td>
                        <td class="bg-blue-lightest">{!! $drug->metabolisme !!}</td>
                    </tr>
                    <tr>
                        <td width="20%" class="table-header">Élimination</td>
                        <td class="bg-blue-lightest">{!! $drug->elimination !!}</td>
                    </tr>
                </table>
            </section>

            <section class="mt-4">
                <table class="w-full">
                    <thead>
                        <th class="table-header">{{ Str::of(__('article.drug_monograph_recommandations'))->ucfirst() }}</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bg-blue-lightest">{!! $drug->official !!}</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="mt-4">
                {!! $drug->litterature !!}
            </section>
            @endforeach

            <h3 id="references" class="text-xl text-red py-2">{{ Str::of(__('article.references'))->ucfirst() }}</h3>
            {!! $article->references !!}
        </div>
    </div>
    @include('layouts.footer')
@endsection

