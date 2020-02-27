@extends('layouts.app-admin')

@section('content')
    @include('layouts.navbar', ['active' => 'medicaments'])
    <div>
        <a href="{{ route('admin.getLogout') }}">Logout</a>
    </div>
@endsection
