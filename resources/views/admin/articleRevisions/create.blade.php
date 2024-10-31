@extends('layouts.app-admin')

@section('content')
    @include('layouts.navbar', ['active' => 'medications'])
    <div class="mx-auto container bg-white mt-4 p-4 shadow">
        <h3>Créer une nouvelle révision</h3>
        @include('admin.articleRevisions.form')
    </div>
    @include('layouts.footer')
@endsection
