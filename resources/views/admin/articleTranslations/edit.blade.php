@extends('layouts.app-admin')

@section('content')
    @include('layouts.navbar', ['active' => 'medications'])
    <div class="mx-auto container bg-white mt-4 p-4 shadow dark:bg-slate-800">
        <div class="flex justify-between">
            <h3>Éditer: {{ $articleTranslation->title }}</h3>
        </div>
        @include('admin.articleTranslations.form')
    </div>
    @include('layouts.footer')
@endsection
