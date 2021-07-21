@extends('layouts.main')

@section('content')
    <h1>Elenco Comics</h1>

    @if (session('deleted'))
        <div class="alert alert-success">
            {{ session('deleted')}}
        </div>
    @endif

    {{-- @dump($comics) --}}
    <table class="mt-4 table table-striped">
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
                    <td>
                        <a href="{{ route('comics.show', $item->id) }}" class="btn btn-primary btn-succes">SHOW</a>
                    </td>
                    <td>
                        <a href="{{ route('comics.edit', $item->id) }}" class="btn btn-primary btn-succes">EDIT</a>
                    </td>
                    <td>
                        <form action="{{ route('comics.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="DELETE">
                        </form> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- ho usato il paginate... --}}
    {{ $comics->links() }}

@endsection