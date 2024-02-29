@extends('layouts.app')

@section('title', 'Médicaments')

@section('content')
    @include('layouts.navbar', ['active' => 'medicaments'])
    <div class="mx-auto container flex flex-1 justify-between items-start pt-4 leading-loose tracking-normal relative">
        <div class="mx-auto w-full bg-white border-t-8 border-red px-6 py-3 shadow">
            <div class="flex border-b border-gray-400 items-center">
                <h2 class="text-3xl leading-none text-red">Fiches</h2>
            </div>
            <a href="{{ route('admin.articles.create') }}">Ajouter une fiche</a>
            <table>
                <thead>
                    <tr>
                        <td>Nom</td>
                        <td>FR</td>
                        <td>EN</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td><a href="{{ route('admin.articles.edit', ['id' => $article]) }}">{{ $article->name }}</a>
                            </td>
                            <td>
                                @if ($articleFr = $article->translations->firstWhere('locale', 'fr'))
                                    <a href="{{ route('admin.articleTranslations.edit', ['id' => $articleFr]) }}">Modifier</a>
                                @else
                                    <a href="{{ route('admin.articleTranslations.create', ['articleId' => $article->id, 'locale' => 'fr']) }}">Ajouter</a>
                                @endif
                            </td>
                            <td>
                                @if ($articleEn = $article->translations->firstWhere('locale', 'en'))
                                    <a href="{{ route('admin.articleTranslations.edit', ['id' => $articleEn]) }}">Modifier</a>
                                @else
                                    <a href="{{ route('admin.articleTranslations.create', ['articleId' => $article->id, 'locale' => 'en']) }}">Ajouter</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('layouts.footer')
@endsection
