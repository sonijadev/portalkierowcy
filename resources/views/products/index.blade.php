@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4 mt-4">
      <div class="col-6">
         <h3>Lista dodanych produktów:</h3>
      </div>
      <div class="col-6">
          <a href="{{ route('products.create') }}" class="d-flex justify-content-end">
            <button class="btn btn-sm btn-success">Dodaj produkt</button>
          </a>
      </div>
    </div>

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nazwa</th>
      <th scope="col">Opis</th>
      <th scope="col">Ilość</th>
      <th scope="col">Cena</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
        <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->amount }}</td>
            <td>{{ $product->price }}</td>
            <td>
              <button class="btn btn-sm btn-danger userdeletebtn" data-id="{{ $product->id }}">X</button>
              <a href="{{ route('products.edit', $product->id) }}">
                <button class="btn btn-sm btn-primary">E</button>
              </a>
              <a href="{{ route('products.show', $product->id) }}">
                <button class="btn btn-sm btn-primary">P</button>
              </a>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
      {{ $products->links() }}
  </ul>
</nav>
@endsection

@section('javascript')
const deleteUrl = "{{ url('products') }}/";
@endsection

@section('js-files')
@vite(['resources/js/delete.js'])
@endsection