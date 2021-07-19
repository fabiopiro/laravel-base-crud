@extends('layouts.main')

@section('content')
    <h1>Elenco Comics</h1>

    {{-- @dump($comics) --}}
    <table class="mt-5 table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th colspan="3">Azioni</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($comics as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>show</td>
                    <td>edit</td>
                    <td>delete</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- ho usato il paginate... --}}
    {{ $comics->links() }}

@endsection