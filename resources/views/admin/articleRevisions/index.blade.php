@extends('layouts.app-admin')

@section('content')
    @include('layouts.navbar', ['active' => 'medications'])
    <div class="mx-auto container bg-white mt-4 p-4 shadow dark:bg-slate-800">
        <h3>Éditer: {{ $articleTranslation->title }}</h3>
        <h4>Liste des révisions</h4>

        <a class="text-red-light underline dark:text-red-400" href="{{ route('admin.article-revisions.create', $articleTranslation) }}">Ajouter une révision</a>
        <table class="w-full table border dark:border-slate-600">
            <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Auteur</th>
                <th>Description</th>
                <th>Visible/Caché</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($revisions as $revision)
                <tr>
                    <td>{{ $revision->id }}</td>
                    <td>{{ $revision->revision_date }}</td>
                    <td>{{ $revision->author }}</td>
                    <td>{{ $revision->content }}</td>
                    <td>{{ $revision->hidden ? 'Caché' : 'Visible' }}</td>
                    <td><a class="text-red-light dark:text-red-400" href="{{ route('admin.article-revisions.edit', [$articleTranslation->id, $revision->id]) }}">Éditer</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="flex justify-end mt-4">
            <a href="{{ route('admin.article-translations.edit', $articleTranslation->id) }}"
               class="no-underline text-grey-dark p-2 border border-grey rounded mr-4 dark:text-gray-400 dark:border-slate-600">Retour</a>
        </div>
    </div>
    @include('layouts.footer')
@endsection
