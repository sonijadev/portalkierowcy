@extends('layouts.app')

@section('content')

<div class="container mb-4">
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4 ">Nasza <span class="underline--magical">oferta</span></h1>
      <p class="lead">Chcesz uniknąć codziennego kupowania biletu w strefie płatnego parkowania? Skorzystaj z naszej oferty abonamentów parkingowych, aby parkować spokojniej, taniej i szybciej!</p>
</div>
</div>

<div class="container">
  <div class="row">
    @foreach($products as $key => $product)
      <div class="col-sm">
        <div class="card mb-4 shadow-sm text-center mt-4" style="">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">{{ $product->name }}</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small style="font-size: 18px;">PLN</small>  {{ $product->price }} <small class="text-muted">/ msc</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>{{ $product->description }}</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Dodaj do koszyka</button>
          </div>
        </div>
      </div>

      @if (($key + 1) % 3 == 0)
        <div class="clearfix"></div>
      @endif
    @endforeach
  </div>
</div>



<div class="container mt-5 ">
    <div class="alert alert-primary" role="alert">
    <h4 class="alert-heading">
        @if(Auth::check())
            Witaj {{ Auth::user()->name }}!
        @else
            Witaj
        @endif
    </h4>
    <p>Miło nam, ze odwiedziłeś nasz sklep abonamentów. Pamiętaj, że nasza strona powstała po to aby ułatwić Tobie parkowanie w naszym mieście.</p>
    <hr>
    <p class="mb-0">Jeżeli potrzebujesz więcej informacji lub chcesz uzyskać pomoc, skontaktuj się z nami przez zakładkę KONTAKT.</p>
    </div>
</div>

@endsection