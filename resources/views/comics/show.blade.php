@extends('layouts.main')

@section('content')
    <h1>{{ $comic->title }}
        <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
    </h1>

    <div class="row my-5">
        <div class="col-3">
            <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title . 'cover'}}">
        </div>
        <div class="col-6">
            <h4>Description</h4>
            <p>{{ $comic->description }}</p>
        </div>
        <div class="col-3">
            <h4>Type:</h4>
            <p>{{ $comic->type }}</p>
            <h4>Series</h4>
            <p>{{ $comic->series }}</p>
            <h4>Price</h4>
            <p>{{ $comic->price }} &euro;</p>
            <h4>Realesed:</h4>
            <p>{{ $comic->sale_date }}</p>
        </div>
    </div>

    <div class="mt-4">
        <a class="btn btn-primary" href="{{ route('comics.index') }}">Torna Indietro</a>
    </div>
@endsection