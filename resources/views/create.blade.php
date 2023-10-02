@extends('layouts.public')

@section('content')
<div class="container">


<form action="{{ route('comic.store') }}" method="POST">
    @csrf()

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input name="title" type="text" class="form-control" >
        <div class="form-text">Inserisci il titolo</div>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input name="description" type="text" class="form-control" >
        <div class="form-text">Inserisci la descrizione</div>
      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Immagine di copertina</label>
        <input name="thumb" type="text" class="form-control" >
        <div class="form-text">Inserisci l'url dell'immagine</div>
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input name="price" type="decimal" class="form-control" >
        <div class="form-text">Inserisci il prezzo</div>
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input name="series" type="string" class="form-control" >
        <div class="form-text">Inserisci la serie del fumetto</div>
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Data uscita</label>
        <input name="sale_date" type="date" class="form-control" >
        <div class="form-text">Inserisci</div>
      </div>
      <div class="mb-3">
        <label for="artists" class="form-label">Artisti*</label>
        <input name="artists" type="text" class="form-control" >
        <div class="form-text">Inserisci gli artisti divisi da una virgola</div>
      </div>
      <div class="mb-3">
        <label for="writers" class="form-label">Scrittori*</label>
        <input name="writers" type="text" class="form-control" >
        <div class="form-text">Inserisci gli sceneggiatori divisi da una virgola</div>
      </div>
      <button type="submit" class="btn btn-primary">Conferma</button>
      <a type="submit" href="{{ route('index')}}" class="btn btn-secondary">Annulla</a>
</form>
</div>
@endsection