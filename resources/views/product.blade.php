@extends('layouts.app')

@section('main_content')

    <section class="jumbotron">
        <div class="container">
            <div class="title">
                <h3>Current series</h3>

            </div>
        </div>
    </section> 

    {{-- Single Product --}}
    <div class="single-product">

        <div class="bg-blue"></div>

        <div class="container">

            <img class="product-image" src=" {{ $product['thumb'] }}" alt="{{ $product['series'] }}">

            <div class="info flex">

                <div class="info-product">
                    
                    <h1>{{ $product['title'] }}</h1>

                    <div class="availability flex">

                        <div class="price">U.S: Price: <span class="result-price">{{ $product['price'] }}</span></div>

                        <div class="available">Available</div>

                        <div class="check-availability"> Check Availability <span><i class="fas fa-sort-down"></i></span></div>

                    </div>

                    <p class="description"> {!! $product['description'] !!} </p>

                </div>

                <div class="adv-image">
                    <h3>ADVERTISEMENT</h3>
                    <img src=" {{ asset('img/adv.jpg')}} " alt="advisor">
                </div>
            </div>

        </div>

        <div class="cast">

            {{-- Cast Content --}}
            <div class="cast-content container flex">

                {{-- End Artist content --}}
                <div class="artist-content">

                    <h2>Talent</h2>

                    <div class="artist flex">

                        <div class="list-title">
                            Art by:
                        </div>

                        <div class="data-of-product">

                            @include('components.artist-list', [
                                'type_of_artist' => 'artists'
                            ])                      

                        </div>
                        

                    </div>

                    <div class="writers flex">

                        <div class="list-title">
                            Written by:
                        </div>

                        <div class="data-of-product">

                            @include('components.artist-list', [
                                'type_of_artist' => 'writers'
                            ])                      

                        </div> 

                    </div>

                </div>
                {{-- End Artist content --}}

                {{-- Info content --}}
                <div class="info-content">

                    <h2>Specs</h2>

                    <div class="details">

                        <div class="series flex">

                            <div class="list-title">Series:</div>

                            <div class="data-of-product specs-series"> {{ $product['series'] }} </div>
                        </div>

                        <div class="price flex">
                            <div class="list-title">U.S. Price:</div>

                            <div class="data-of-product"> {{ $product['price'] }} </div>
                        </div>

                        <div class="on-sale flex">
                            <div class="list-title">ON Sale Date:</div>

                            <div class="data-of-product"> {{ $product['sale_date'] }} </div>
                        </div>

                    </div>


                </div>
                {{-- End Info content --}}


            </div>
            {{-- End Cast Content --}}

           <div class="icon-container ">
                {{-- Icon --}}
                <div class="icon-product-page container flex">

                    {{-- Single Icon --}}
                    <div class="single-icon flex">

                        <h5>digital comics</h5>

                        <div id="digital-comics"></div>

                    </div>
                    {{-- End Single Icon --}}

                    {{-- Single Icon --}}
                    <div class="single-icon flex">

                        <h5>Shop DC </h5>

                        <div id="shop-dc"></div>

                    </div>
                    {{-- End Single Icon --}}

                    {{-- Single Icon --}}
                    <div  class="single-icon flex">

                        <h5>Comic Shop locator</h5>

                        <div id="comic-shop"></div>

                    </div>
                    {{-- End Single Icon --}}

                    {{-- Single Icon --}}
                    <div  class="single-icon flex">

                        <h5>subscription </h5>

                        <div id="subscription"></div>

                    </div>
                    {{-- End Single Icon --}}

                </div>
                {{-- End Icon --}}
           </div>

        </div>

    </div>

@endsection