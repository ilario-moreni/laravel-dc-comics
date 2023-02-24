@extends('layouts.app')

@section('main')
    <main>
        <div class="container form_container py-5">
            <form action="{{ route('current_series.update', $comic->id) }}" method="POST">
                @csrf

                @method('PUT')
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title py-3" id="offcanvasRightLabel">Create Comic</h5>
                </div>
                <div class="offcanvas-body">
                    <div class="mb-3">
                        <label for="formtextMultiple" class="form-label">Title</label>
                        <input name='title' class="form-control form-control-lg" type="text" id="formtext">
                    </div>
                    <div class="mb-3">
                        <label for="formtextMultiple" class="form-label">Description</label>
                        <input name='description' class="form-control form-control-lg" type="text" id="formtext"
                            multiple>
                    </div>
                    <div class="mb-3">
                        <label for="formtextMultiple" class="form-label">Thumb</label>
                        <input name='thumb' class="form-control form-control-lg" type="text" id="formtext" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="formtextSm" class="form-label">Price</label>
                        <input name='price' class="form-control form-control-lg" id="formtext" type="text">
                    </div>
                    <div>
                        <label for="formtextLg" class="form-label">Series</label>
                        <input name='series' class="form-control form-control-lg" id="formtext" type="text">
                    </div>
                    <div>
                        <label for="formtextLg" class="form-label">Sale_date</label>
                        <input name='sale_date' class="form-control form-control-lg" id="formtext" type="date">
                    </div>
                    <div>
                        <label for="formtextLg" class="form-label">Type</label>
                        <input name='type' class="form-control form-control-lg" id="formtext" type="text">
                    </div>
                    <button type="submit" class="mt-3 btn btn-primary">Submit</button>
                    {{-- <a href="{{ route('current_series.show', ['current_series' => $comic['id']]) }}">
                        <div class="mt-5 load_more_button">
                            <button>TURN BACK</button>
                        </div>
                    </a> --}}
                </div>
            </form>
        </div>
    </main>
@endsection
