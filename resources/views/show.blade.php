@extends("layouts.public")

@section("content")

<div class="container">
  <a href={{ route("index", ["id" => $cardComics->id]) }} class="btn btn-outline-primary">Indietro</a>

  <img src="{{ $cardComics->thumb }}" alt="{{ $cardComics->title }}">
  <h1>{{ $cardComics->title }}</h1>
  <h2>{{ ucfirst($cardComics->type) }}</h2>
  <p>{{ $cardComics->price }} €</p>

  <p>{{ $cardComics->description }}</p>
</div>

@endsection