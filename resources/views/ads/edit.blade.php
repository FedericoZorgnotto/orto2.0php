{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--non mi interessano le classi: si possono modificare, servono solo per esempio per far vedere che parti della pagina sarebbero--}}

<div class="container">
    <h1>Modifica annuncio</h1>
    <form action="{{ route('ads.update', $ad->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $ad->title }}">
        </div>

        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description">{{ $ad->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $ad->price }}">
        </div>

        <!-- Altri campi dell'annuncio, se necessario -->

        <button type="submit" class="btn btn-primary">Salva modifiche</button>
    </form>
</div>
{{--@endsection--}}
