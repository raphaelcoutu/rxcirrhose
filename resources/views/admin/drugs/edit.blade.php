@extends('layouts.app-admin')

@section('content')
    @include('layouts.navbar', ['active' => 'medications'])
    <div class="mx-auto container bg-white mt-4 p-4 shadow">
        <div class="flex justify-between">
        <h3>Éditer: {{ $drug->name}}</h3>
        <div>
            <i class="fas fa-long-arrow-alt-left"></i> Retour à
            <a class="text-red no-underline" href="{{ route('admin.article-translations.edit', $drug->articleTranslation->id) }}">{{ $drug->articleTranslation->title }}</a>
        </div>
        </div>
        @include('admin.drugs.form')
    </div>
    @include('layouts.footer')
@endsection
