@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                 <p><a href="{{ url()->previous() }}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Powrót</a></p>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Podgląd produktu ID#{{ $product->id }}</div>

                <div class="card-body">
                            @if(!is_null($product->image_path))
                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <img src="{{ asset('storage/' . $product->image_path) }}" alt="Zdjęcie produktu">
                                </div>
                            </div>
                            @else
                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <img src="https://via.placeholder.com/240x240/5fa9f8/efefef" alt="Zdjęcie produktu">
                                </div>
                            </div>
                            @endif

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nazwa') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" maxlength="500" class="form-control" name="name" value="{{ $product->name }}" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Opis') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" maxlength="1500" type="text" class="form-control" name="description" disabled>{{ $product->description }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="amount" class="col-md-4 col-form-label text-md-end">{{ __('Ilość') }}</label>

                            <div class="col-md-6">
                                <input id="amount" type="number" min="0" class="form-control" name="amount" value="{{ $product->amount }}" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Cena') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" step="0.01" min="0" class="form-control" name="price" value="{{ $product->price }}" disabled>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
