@extends("layouts.public")

@section("content")

<div class="d-flex flex-column darkBg">
    <a href={{ route("index") }} class="btn btn-primary m-5">Indietro</a>

    <div class="d-flex justify-content-center flex-wrap text-center">
    
    
        <div class="col-12 col-lg-4 d-flex flex-column justify-content-center">
        
          <img class="RefImg" src="{{ $cardComics->thumb }}" alt="{{ $cardComics->title }}">
          
        </div>
        <div class="col-12 col-lg-4 px-5">
            <h1 class="text-white">{{ $cardComics->title }}</h1>
            <h2>{{ ucfirst($cardComics->type) }}</h2>
            <p class="text-white">{{ $cardComics->price }} €</p>
            <p>{{ $cardComics->description }}</p>
    
        </div>
    </div>
    <a href={{ route("index") }} class="btn btn-primary m-5">Indietro</a>


</div>



@endsection