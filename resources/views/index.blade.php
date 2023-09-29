@extends('layouts.public')

@section('content')
    <div class=" text-center darkBg p-3">

        <h1>Benvenuto</h1>
        <p>scegli il fumetto che ti interessa</p>
        <div class=" text-center">

            {{-- @include('partials.cardsContainer') --}}
            <div class=" darkBanner ">

                <div class="text-center relative">


                    <div id="cards_container" class="row flex-wrap gy-5">

                        {{-- ////////////// cards in ciclo for //////////////// --}}
                        @foreach ($comics as $cardComics)
                            <div class="col-12 col-md-4 col-lg-2">
                                <a href="{{ route('show', $cardComics->id) }}">

                                <div class="card border-0 rounded-0 h-100">
                                    <img class="relative card-img-top" src={{ $cardComics['thumb'] }}
                                        alt="" />{{-- //////immagine////// --}}

                                    <div class="card-body d-flex flex-column text-white bg-dark"> {{-- //////nome////// --}}
                                        {{ $cardComics['series'] }}
                                    </div>
                                    <div class="overlay"> {{-- //////info in hover////// --}}

                                            <div class="absolute top hidden justify-content-center">Tipologia:{{ ucfirst($cardComics['type']) }}</div>
                                            <div class="absolute bottom hidden justify-content-center">Prezzo: {{ $cardComics['price'] }} €</div>

                                        </div>
                                        
                                        
                                    </div>
                                    
                                </a>
                                </div>
                                @endforeach

                    </div>
                </div>


            </div>
        </div>
    @endsection
