@extends('layouts.app')
@section('main')
    {{-- blue bar --}}
    <div class="container-fluid comic_top_container bg-primary py-5">
        <div class="row">
            <div class="col">
                <div class="container px-5">
                    <div class="row px-5">
                        <div class="col">
                            <img src="{{ $comic['thumb'] }}" alt="" class="comic_cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- description --}}
    <div class="container-fluid comic_description_container py-5">
        <div class="row">
            <div class="col">
                <div class="container px-5">
                    <div class="row px-5">
                        <div class="col-8">
                            <h2>{{ $comic['title'] }}</h2>
                            <div class="my-4 buy_comic bg-success bg-gradient d-flex justify-content-between">
                                <div style='width: 100%;' class='p-3 d-flex justify-content-between'>
                                    <div>U.S. Price {{ $comic['price'] }}</div>
                                    <div>AVAILABLE</div>
                                </div>
                                <select class='p-3 bg-success bg-gradient' name="" id="">
                                    <option value="">Check Availability</option>
                                </select>
                            </div>
                            <p class='text-secondary'>{{ $comic['description'] }}</p>
                        </div>
                        <div class="adv_container col-4">
                            <p class='text-end'>ADVIRSEMENT</p>
                            <img class='adv_img' src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- details --}}
    <div class="pt-4 container-fluid bg-light comic_detail_container">
        <div class="row pb-5">
            <div class="col">
                <div class="px-5 container">
                    <div class="px-5 row">
                        <div class="col">
                            <h4>Talent</h4>
                            <hr>
                            <div class='d-flex justify-content-between'>
                                <span class='col-3'>Art by:</span>
                                <div class='col-8'>
                                    {{--  @foreach ($comic['artists'] as $key => $artist)
                                        <a class='font-size-12' href="#">{{$artist}}</a>,
                                    @endforeach --}}
                                </div>
                            </div>
                            <hr>
                            <div class='d-flex justify-content-between'>
                                <span class='col-3'>Written by:</span>
                                <div class='col-8'>
                                    {{-- @foreach ($comic['writers'] as $key => $writer)
                                        <a class='font-size-12' href="#">{{$writer}}</a>,
                                    @endforeach --}}
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col">
                            <h4>Specs</h4>
                            <hr>
                            <div class='d-flex justify-content-between'>
                                <span class='col-3'>Series:</span>
                                <div class='col-8'>
                                    <a href="">{{ $comic['series'] }}</a>
                                </div>
                            </div>
                            <hr>
                            <div class='d-flex justify-content-between'>
                                <span class='col-3'>U.S. Price:</span>
                                <div class='col-8'>
                                    {{ $comic['price'] }}
                                </div>
                            </div>
                            <hr>
                            <div class='d-flex justify-content-between'>
                                <span class='col-3'>On Sale Date:</span>
                                <div class='col-8'>
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d', $comic['sale_date'])->format('M d Y') }}
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- edit card --}}
        <div class="py-5 load_more_button">
            <button><a href='{{ route('current_series.edit', ['current_series' => $comic['id']]) }}'>EDIT CURRENT
                    COMIC</a></button>
        </div>
        <br>

        {{-- delete card --}}
        <div class="py-5  delete_button">
            <form action="{{ route('current_series.destroy', ['current_series' => $comic['id']]) }}" method='POST'>
                @csrf

                @method('DELETE')
                <button>
                    DELETE CURRENT COMIC
                </button>
            </form>
        </div>

        <div class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col border border-secondary p-4 justify-content-between d-flex">
                        <div class='font-size-12 text-secondary fw-bold'>DIGITAL COMICS</div>
                        <img class='merch_icon_1' src="{{ Vite::asset('resources/img/cta-icons.png') }}" alt="">
                    </div>
                    <div class="col border border-secondary p-4 justify-content-between d-flex">
                        <div class='font-size-12 text-secondary fw-bold'>SHOP DC</div>
                        <img class='merch_icon_2' src="{{ Vite::asset('resources/img/cta-icons.png') }}" alt="">
                    </div>
                    <div class="col border border-secondary p-4 justify-content-between d-flex">
                        <div class='font-size-12 text-secondary fw-bold'>COMIC SHOP LOCATOR</div>
                        <img class='merch_icon_1' src="{{ Vite::asset('resources/img/cta-icons.png') }}" alt="">
                    </div>
                    <div class="col border border-secondary p-4 justify-content-between d-flex">
                        <div class='font-size-12 text-secondary fw-bold'>SUBSCRIPTIONS</div>
                        <img class='merch_icon_2' src="{{ Vite::asset('resources/img/cta-icons.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
