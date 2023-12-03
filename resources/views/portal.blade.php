@extends('layouts.app')

@section('content')


<div class="container">
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Nasza oferta</h1>
      <p class="lead">Chcesz uniknąć codziennego kupowania biletu w strefie płatnego parkowania? Skorzystaj z naszej oferty abonamentów parkingowych, aby parkować spokojniej, taniej i szybciej!</p>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="card mb-4 shadow-sm text-center" style="margin-top: 8%;">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Abonament #A</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small style="font-size: 18px;">PLN</small>  150 <small class="text-muted">/ msc</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Podstrefa A</li>
              <li>Płatność miesięczna, półroczna lub roczna</li>
              <li>Wiele metod płatności</li>
              <li>Rabaty itp</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Dodaj do koszyka</button>
          </div>
        </div>
    </div>
    <div class="col-sm">
    <div class="card mb-4 shadow text-center bg-dark text-light" style="min-height: 40vh; width: 30rem;">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Abonament #B</h4>
          </div>
          
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
          <span class="badge badge-success" style="background-color: #28A745; font-size: 12px; color: #fff; border-radius: 4px; padding: 4px 6px;">NAJCZĘŚCIEJ WYBIERANY</span>
            <h1 class="card-title pricing-card-title display-3"><small style="font-size: 18px;">PLN</small>  300 <small class="">/ msc</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Podstrefa B</li>
              <li>Płatność miesięczna, półroczna lub roczna</li>
              <li>Wiele metod płatności</li>
              <li>Rabaty itp</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-danger">Dodaj do koszyka</button>
          </div>
        </div>
    </div>
    <div class="col-sm">
    <div class="card mb-4 shadow-sm text-center" style="margin-top: 8%;">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Abonament #C</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small style="font-size: 18px;">PLN</small> 450 <small class="text-muted">/ msc</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Podstrefa C</li>
              <li>Płatność miesięczna, półroczna lub roczna</li>
              <li>Wiele metod płatności</li>
              <li>Rabaty itp</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Dodaj do koszyka</button>
          </div>
        </div>
    </div>
  </div>
</div>

@endsection
