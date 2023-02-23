@extends('layouts.app')

@section('main')
        <div class="content_div">
            <div class="currentseries_container">
                <div class="series_container">
                    <div>
                        <h2 class="series_header">CURRENT SERIES</h2>
                    </div>
                    <div class="series_cards_container">
                        <div class="container">
                            <div class="row row-cols-6">
                                @foreach($comics as $key=>$comic)
                                <a href="{{ route('current_series.show', ['current_series'=>$comic['id']])}}">
                                    <div class="col my_card">
                                        <img class="card_image" src="{{$comic['thumb']}}" alt="">
                                        <p class="series_name">{{ $comic['title'] }}</p>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="load_more_button">
                    <button>LOAD MORE</button>
                </div>
            </div>
        </div>
        <div class="top_footer_container">
            <div class="main_container">
                <ul class="shop_ul">
                    <li class="shop_li_label">
                        <img class="shop_icon" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                            alt="">
                        <span>
                            DIGITAL COMICS
                        </span>
                    </li>
                    <li class="shop_li_label">
                        <img class="shop_icon" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}"
                            alt="">
                        <span>
                            DC MERCHANDISE
                        </span>
                    </li>
                    <li class="shop_li_label">
                        <img class="shop_icon" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                            alt="">
                        <span>
                            SUBSCRIPTION
                        </span>
                    </li>
                    <li class="shop_li_label">
                        <img class="shop_icon" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                            alt="">
                        <span>
                            COMIC SHOP LOCATOR
                        </span>
                    </li>
                    <li class="shop_li_label">
                        <img class="shop_icon" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                        <span>
                            DC POWER VISA
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </main>
@endsection