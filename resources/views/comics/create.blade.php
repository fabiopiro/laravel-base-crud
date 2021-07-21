@extends('layouts.main')

@section('content')
    <h1>Crea una nuova birra</h1>
    <form method="POST" action="{{ route('comics.store') }}">
        
        {{-- IMPO x tutti i form - evita un assalto di richieste --}}
        @csrf
        {{-- IMPO  --}}
        @method('POST')

        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" id="" placeholder="inserisci..." name="">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea type="text" class="form-control" id="" placeholder="inserisci..." name=""></textarea>
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
            <label for=""></label>
            <input type="text" class="form-control" id="" placeholder="inserisci..." name="">
        </div>
        {{-- devo inserire tutte i campi da inserire --}}
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection

{{-- una volta completato l'inserimento dati...
metodo store in Comic Controller --}}