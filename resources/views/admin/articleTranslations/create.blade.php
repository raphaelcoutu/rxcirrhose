@extends('layouts.app-admin')

@section('content')
    @include('layouts.navbar', ['active' => 'medications'])
    <div class="mx-auto container bg-white mt-4 p-4 shadow dark:bg-slate-800">
        <h3>Créer une nouvelle fiche traduite</h3>
        @include('admin.articleTranslations.form')
    </div>
    @include('layouts.footer')
@endsection
