@extends('layouts.main')

@section('content')
<h1>Create:</h1>

{{-- CREATE FORM --}}
<form method="POST" action="{{ route('comics.store') }}">
    @csrf
    @method('POST')

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" placeholder="inserisci il titolo" name="title">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea rows="4" type="text" class="form-control" id="description" placeholder="inserisci la descrizione" name="description"></textarea>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" step="0.01" class="form-control" id="price" placeholder="inserisci prezz" name="price">
    </div>
    <div class="form-group">
        <label for="thumb">Image</label>
        <input type="text" class="form-control" id="thumb" placeholder="inserisci ulr immagine" name="thumb">
    </div>
    <div class="form-group">
        <label for="series">Series</label>
        <input type="text" class="form-control" id="series" placeholder="inserisci la serie" name="series">
    </div>
    <div class="form-group">
        <label for="sale_date">Data</label>
        <input type="text" class="form-control" id="sale_date" placeholder="inserisci la serie" name="sale_date">
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" id="type" placeholder="inserisci la serie" name="type">
    </div>
    {{-- devo inserire tutte i campi da inserire --}}
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('comics.index') }}" class="btn btn-primary">Comics Index</a>
</form>
@endsection