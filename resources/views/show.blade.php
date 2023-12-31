@extends('layouts.public')

@section('content')
    <div class="d-flex flex-column darkBg">
        <a href={{ route('index') }} class="btn btn-primary m-5">Indietro</a>

        <div class="d-flex justify-content-center flex-wrap text-center">


            <div class="col-12 col-lg-4 d-flex flex-column justify-content-center p-5">

                <img class="RefImg" src="{{ $cardComics->thumb }}" alt="{{ $cardComics->title }}">

            </div>
            <div class="col-12 col-lg-4 px-5 d-flex flex-column justify-content-center">
                <h1 class="text-white">{{ $cardComics->title }}</h1>
                <h2>{{ ucfirst($cardComics->type) }}</h2>
                <p>{{ ucfirst($cardComics->series) }}</p>
                <p class="white-mb0">Lore :</p>
                <p>{{ $cardComics->description }}</p>
                <p class="white-mb0">Drawed by:</p>
                <p>{!! implode(', ', $cardComics->artists) !!}</p>
                <p class="white-mb0">Wrote by:</p>
                <p>{!! implode(', ', $cardComics->writers) !!}</p>
                <p class="white-mb0">Price:</p>
                <p class="text-white fs-3">{{ $cardComics->price }} €</p>

            </div>
        </div>

        <div class="d-flex justify-content-center">
            <a href={{ route('comic.edit', $cardComics->id) }} class="btn btn-warning my-5 mx-2">Modifica</a>
            <form class="my-5 mx-2" action="{{ route('comic.destroy', ['id' => $cardComics->id]) }}" method="POST">
                @csrf

                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Elimina">

            </form>
        </div>


    </div>
@endsection
