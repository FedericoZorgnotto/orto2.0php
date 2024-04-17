{{--@extends('layouts.app')--}}
{{-- tramite questi comandi si possono usare i layout, il  @section('content') indica dove inserire il contenuto nel layout}}
{{--@section('content')--}}

{{--non mi interessano le classi: si possono modificare, servono solo per esempio per far vedere che parti della pagina sarebbero--}}

<div class="container">
    <h1>Lista degli Annunci</h1>

    <!-- Pulsante per creare un nuovo annuncio -->
    <a href="{{ route('ads.create') }}" class="btn btn-primary mb-3">Crea Annuncio</a>

    <!-- Form per eseguire una ricerca -->
    <form action="{{ route('ads.index') }}" method="GET" class="mb-3">
        <div class="form-group">
            <input type="text" name="query" class="form-control" placeholder="Cerca...">
        </div>
        <button type="submit" class="btn btn-primary">Cerca</button>
    </form>

    <!-- Elenco degli annunci -->
    @foreach ($ads as $ad)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $ad->title }}</h5>
                <p class="card-text">{{ $ad->description }}</p>
                <p class="card-text">Prezzo: {{ $ad->price }}</p>
                <!-- Altri dettagli dell'annuncio -->
                <a href="{{ route('ads.show', $ad->id) }}" class="btn btn-primary">Visualizza</a>
            </div>
        </div>
    @endforeach
</div>
{{--@endsection--}}
