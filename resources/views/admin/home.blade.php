@extends('layouts.app-admin')

@section('content')
    @include('layouts.navbar', ['active' => 'medicaments'])
    <div class="">
        <div class="mx-auto container flex flex-grow justify-between items-start pt-4 leading-loose tracking-normal">
            <div class="mx-auto w-full sm:w-3/4 bg-white border-t-8 border-red px-6 py-3 shadow">
                <div class="flex border-b border-gray-400 items-center">
                    <h1 class="text-3xl leading-none text-red">Admin</h1>
                </div>
                <a href="{{ route('admin.getLogout') }}">Logout</a>
                <a href="{{ route('admin.articles.index') }}">Gestionnaire de fiches</a>
                <p>Il y a {{ $queries->total() }} requêtes.</p>
                <table>
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Date</th>
                        <th>IP</th>
                        <th>Query</th>
                        <th>#Results</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($queries as $query)
                        <tr>
                            <td>{{ $query->id }}</td>
                            <td>{{ $query->created_at }}</td>
                            <td>{{ $query->host }}</td>
                            <td>{{ $query->query }}</td>
                            <td>{{ $query->results }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @if ($queries->hasPages())
                    <ul class="pagination flex justify-between mx-4 mt-4 list-reset text-white font-bold">
                    {{-- Previous Page Link --}}
                    @if (!$queries->onFirstPage())
                        <li>
                            <a class="button bg-transparent border border-brown py-2 px-4 rounded opacity-85" href="{{ $queries->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                        </li>
                    @else
                        <li></li>
                    @endif

                    {{-- Next Page Link --}}
                    @if ($queries->hasMorePages())
                        <li>
                            <a class="button bg-transparent border border-brown py-2 px-4 rounded opacity-85" href="{{ $queries->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                        </li>
                    @endif
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
