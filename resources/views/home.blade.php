@extends('layouts.app')

@section('main')
    <main>
        <div class="bg-white">
            <div class="py-5 home_container text-center">
                <h1 class="mb-5">Welcome to DC Comics</h1>
                <span class="bg-primary bg-graient px-5 py-3 fs-5 my_button_discover"><a
                        href="{{ route('current_series.index') }}">Discover our
                        colletion</a></span>
            </div>
        </div>
    </main>
@endsection
