@extends('layouts.app-admin')

@section('content')
    @include('layouts.navbar', ['active' => 'medications'])
    <div class="mx-auto container bg-white mt-4 p-4 shadow">
        <div class="flex justify-between">
            <h3>Éditer une révision</h3>
        </div>
        @include('admin.articleRevisions.form')
    </div>
    @include('layouts.footer')
@endsection
