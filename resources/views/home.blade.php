@extends('layouts.app')

@section('main_content')
    <section class="jumbotron">
        <div class="container">
            <div class="title">
                <h3>Current series</h3>

            </div>
        </div>
    </section> 
    
    <section class="comics">
        <div class="container">
            <div class="comics-container">

                @foreach ($comics as $comic)
                <div class="comic">
                    <a href="{{ route('product', ['id' => $comic['id']]) }}">
                        <div class="cover">
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </div>
        
                        <h4>{{ $comic['title'] }} </h4>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        <div class="button">
            <a href="#">Load more</a>
        </div>

    </section>

    <section class="blue-section">
        <div class="container">
            <ul class="blue-menu">
                <li>
                    <img class="list-icon" src="{{ asset('img/buy-comics-digital-comics.png') }}" alt=""> <span>DIGITAL COMICS</span>
                </li>

                <li>
                    <img class="list-icon" src="{{ asset('img/buy-comics-merchandise.png') }}" alt=""> <span>DC MERCHANDISE</span>
                </li>

                <li>
                    <img class="list-icon" src="{{ asset('img/buy-comics-subscriptions.png') }}" alt=""> <span>SUBSCRIPTION</span>
                </li>

                <li>
                    <img class="list-icon" src="{{ asset('img/buy-comics-shop-locator.png') }}" alt=""> <span>COMIC SHOP LOCATOR</span>
                </li>

                <li>
                    <img class="list-icon power-visa" src="{{ asset('img/buy-dc-power-visa.svg') }}" alt=""> <span>DC POWER VISA</span>
                </li>
            </ul>
        </div>
    </section>
@endsection 