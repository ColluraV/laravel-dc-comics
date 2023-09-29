@php
    $footerLinks = [['title' => 'DcComics', 'childs' => [['name' => 'Characters'], ['name' => 'Comics'], ['name' => 'Movies'], ['name' => 'Tv'], ['name' => 'Games'], ['name' => 'Videos'], ['name' => 'News']]], ['title' => 'Shop', 'childs' => [['name' => 'Shop Dc'], ['name' => 'Shop Collectables']]], ['title' => 'DC', 'childs' => [['name' => 'Terms Of Use'], ['name' => 'Privacy Policy(New)'], ['name' => 'AdChoice'], ['name' => 'Advertising'], ['name' => 'Jobs'], ['name' => 'Subscriptions'], ['name' => 'Talent Workshops'], ['name' => 'CPSC Certificates'], ['name' => 'Ratings'], ['name' => 'Shop Help'], ['name' => 'Contact Us']]], ['title' => 'Sites', 'childs' => [['name' => 'DC'], ['name' => 'Mad Magazine'], ['name' => 'DC Kids'], ['name' => 'DC Universe'], ['name' => 'DC Power Visa']]]];
@endphp


<footer>
    <div class="bottom d-flex">
        <div class="col-6 d-flex flex-column flex-wrap p-5">

            <div class="bottomLinks"> {{-- //////links array in foreach////// --}}

                <div class="d-flex">
                    @foreach ($footerLinks as $element)
                    <div class="mx-4 mh">
                        <h5 href="#" >
                            {{ $element['title'] }}
                        </h5>
                        <div>

                            <ul class="unlisted">
                                @foreach ($element['childs'] as $onelink)
                                    <li>
                                        <a href="#">{{ $onelink['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
             
                    @endforeach
                </div>


            </div>

        </div>
        <div id="cutted" class="col-6"></div>{{-- ////// dc logo////// --}}


    </div>

    <div class="contacts align-content-middle">
        <div class="container d-flex justify-content-between">
            <button type="button" class="btn btn-outline-primary">SIGN-UP NOW</button>
            <div class="socials"> {{-- //////socials////// --}}
                FOLLOW US
                <img src="/images/footer-facebook.png" alt="">
                <img src="/images/footer-periscope.png" alt="">
                <img src="/images/footer-pinterest.png" alt="">
                <img src="/images/footer-twitter.png" alt="">
                <img src="/images/footer-youtube.png" alt="">
            </div>
        </div>
    </div>

</footer>