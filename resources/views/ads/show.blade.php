
























{{--@extends('layouts.app')--}}
{{-- tramite questi comandi si possono usare i layout, il  @section('content') indica dove inserire il contenuto nel layout}}
{{--@section('content')--}}

{{--non mi interessano le classi: si possono modificare, servono solo per esempio per far vedere che parti della pagina sarebbero--}}

{{-- Mostra un eventuale messaggio di errore (in sostanza se non si ha il permesso di modificare l'annuncio--}}
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="ad-details">
    <h2>{{ $ad->title }}</h2>
    <p>{{ $ad->description }}</p>
    <p>Prezzo: {{ $ad->price }}</p>
    <!-- Altri dettagli dell'annuncio -->

    <!-- Pulsante per modificare l'annuncio -->
    <a href="{{ route('ads.edit', $ad->id) }}" class="btn btn-primary">Modifica annuncio</a>

    <!-- Form per eliminare l'annuncio -->
    <form action="{{ route('ads.destroy', $ad->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"
                onclick="return confirm('Sei sicuro di voler eliminare questo annuncio?')">Elimina annuncio
        </button>
    </form>

    <!-- link per tornare alla pagina precedente -->
    <a href="{{ url()->previous() }}" class="btn btn-secondary">Torna indietro</a>
</div>
{{--@endsection--}}
