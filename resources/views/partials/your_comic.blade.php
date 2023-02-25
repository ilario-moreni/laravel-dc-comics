@extends('layouts.app')

@section('main')
    <main>
        <div class="container form_container py-5">
            <form action="{{ route('current_series.store') }}" method="POST">
                @csrf
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title py-3" id="offcanvasRightLabel">Create Comic</h5>
                </div>
                <div class="offcanvas-body">
                    <div class="mb-3">
                        <label for="formtextMultiple" class="form-label">Title</label>
                        @error('title')
                            <div class="bg-danger bg-gradient my-3 py-4 ps-5 text-white"> {{ $message }}</div>
                        @enderror
                        <input name='title' class="form-control form-control-lg" type="text" id="formtext" multiple>
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
                        @error('price')
                            <div class="bg-danger bg-gradient my-3 py-4 ps-5 text-white"> {{ $message }}</div>
                        @enderror
                        <input name='price' class="form-control form-control-lg" id="formtext" type="text">
                    </div>
                    <div>
                        <label for="formtextLg" class="form-label">Series</label>
                        @error('series')
                            <div class="bg-danger bg-gradient my-3 py-4 ps-5 text-white"> {{ $message }}</div>
                        @enderror
                        <input name='series' class="form-control form-control-lg" id="formtext" type="text">
                    </div>
                    <div>
                        <label for="formtextLg" class="form-label">Sale_date</label>
                        @error('sale_date')
                            <div class="bg-danger bg-gradient my-3 py-4 ps-5 text-white"> {{ $message }}</div>
                        @enderror
                        <input name='sale_date' class="form-control form-control-lg" id="formtext" type="date">
                    </div>
                    <div>
                        <label for="formtextLg" class="form-label">Type</label>
                        @error('type')
                            <div class="bg-danger bg-gradient my-3 py-4 ps-5 text-white"> {{ $message }}</div>
                        @enderror
                        <input name='type' class="form-control form-control-lg" id="formtext" type="text">
                    </div>
                    <button type="submit" class="mt-3 btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </main>
@endsection
