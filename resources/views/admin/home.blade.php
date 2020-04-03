@extends('layouts.app-admin')

@section('content')
    @include('layouts.navbar', ['active' => 'medicaments'])
    <div class="">
        <div class="mx-auto container flex flex-grow justify-between items-start pt-4 leading-loose tracking-normal">
            <div class="mx-auto w-full sm:w-3/4 bg-white border-t-8 border-red px-6 py-3 shadow">
                <div class="flex border-b border-grey-light items-center">
                    <h1 class="text-3xl leading-none text-red">Admin</h1>
                </div>
                <a href="{{ route('admin.getLogout') }}">Logout</a>
                <p>Il y a {{ $queryCount }} requêtes.</p>
                <table>
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>IP</th>
                        <th>Query</th>
                        <th>#Results</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($queries as $query)
                        <tr>
                            <td>{{ $query->created_at }}</td>
                            <td>{{ $query->host }}</td>
                            <td>{{ $query->query }}</td>
                            <td>{{ $query->results }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
@endsection
