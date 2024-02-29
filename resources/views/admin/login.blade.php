@extends('layouts.app-admin')

@section('content')
    <div class="bg-black text-green-400 h-screen">
        <form method="POST" action="{{ route('admin.postLogin') }}" class="flex flex-col items-center justify-center h-screen">
            {{ csrf_field() }}
            <input class="bg-gray-600 rounded" type="password" name="password">
            <button type="submit" class="text-red-400 font-hairline tracking-tight">Ne click pas</button>
        </form>
    </div>
@endsection
