@php
   $navLinks= [
        [ "name"=>"CHARACTERS" ],
        [ "name"=>"COMICS"],
        [ "name"=>"MOVIES"],
        [ "name"=>"TV" ],
        [ "name"=>"GAMES" ],
        [ "name"=>"COLLECTABLES" ],
        [ "name"=>"VIDEOS" ],
        [ "name"=>"FANS" ],
        [ "name"=>"NEWS" ],
        [ "name"=>"SHOP" ],
];
@endphp

<header class="">

    <div class="d-flex justify-content-around">
      
      <a href="/" class=" my-4">        <!-- //////logo////// -->
        <img src="/images/dc-logo.png" alt="" >
      </a>

      <div class="LinkContainer d-flex align-items-center justify-content-evenly">

        
        @foreach ($navLinks as $link){{-- //////links top////// --}}
        
        <div class="subbed d-flex" >
         <a class="nav-link" href="/comics">
            {{ $link["name"] }}
          </a>
        </div>
          @endforeach

      </div>
    </div>
    <img id="jumboImg" src="/images/jumbotron.jpg" alt=""><!--jumbo-->

  </header>