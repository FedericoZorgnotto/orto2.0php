{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--non mi interessano le classi: si possono modificare, servono solo per esempio per far vedere che parti della pagina sarebbero--}}

{{-- Mostra un eventuale messaggio di errore --}}
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="container">
    <h1>Aggiungi Annuncio</h1>
    <form action="{{ route('ads.store') }}" method="POST">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
        </div>

        <button type="submit" class="btn btn-primary">Aggiungi Annuncio</button>
    </form>
</div>
{{--@endsection--}}
