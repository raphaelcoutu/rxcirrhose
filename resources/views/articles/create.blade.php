@extends('layouts.app')

@section('content')
    @include('layouts.navbar', ['active' => 'medications'])
    <div class="mx-auto container bg-white mt-4 p-4 shadow">
        <h3>Créer une nouvelle fiche</h3>
        @include('articles.form')
    </div>
    @include('layouts.footer')
@endsection