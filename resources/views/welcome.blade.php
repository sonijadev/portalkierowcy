@extends('layouts.app')

@section('content')

<div class="container pt-5">
    <div class="row">
        <div class="col-md-8 order-md-2 col-lg-9">
            <div class="container-fluid">
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="dropdown text-md-start text-center float-md-start mb-3 mt-3 mt-md-0 mb-md-0">
                            <label class="mr-2">Sort by:</label>
                            <button class="btn btn-lg btn-light dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Relevance
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                                <li><a class="dropdown-item" href="#">Relevance</a></li>
                                <li><a class="dropdown-item" href="#">Price Descending</a></li>
                                <li><a class="dropdown-item" href="#">Price Ascending</a></li>
                                <li><a class="dropdown-item" href="#">Best Selling</a></li>
                            </ul>
                        </div>
                        <div class="btn-group float-md-end ml-3">
                            <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-left"></span> </button>
                            <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-right"></span> </button>
                        </div>
                        <div class="dropdown float-md-end">
                            <label class="mr-2">View:</label>
                            <button class="btn btn-lg btn-light dropdown-toggle" type="button" id="viewDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                9
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="sortDropdown">
                                <li><a class="dropdown-item" href="#">12</a></li>
                                <li><a class="dropdown-item" href="#">24</a></li>
                                <li><a class="dropdown-item" href="#">48</a></li>
                                <li><a class="dropdown-item" href="#">96</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($products as $product)
                <div class="col-6 col-md-6 col-lg-4 mb-3">
                        <div class="card h-100 border-0">
                            @if(!is_null($product->image_path))
                                <img src="{{ asset('storage/' . $product->image_path) }}" class="card-img-top img-fluid" alt="Zdjęcie produktu">
                            @else
                                <img src="https://via.placeholder.com/240x240/5fa9f8/efefef" class="card-img-top img-fluid" alt="Zdjęcie produktu">
                            @endif
                          <div class="card-body text-center">
                            <h4 class="card-title">
                              <a href="product.html" class="font-weight-bold text-dark text-uppercase small" style="text-decoration: none;"> {{ $product->name }}</a>
                            </h4>
                            <h5 class="card-price small text-primary">
                              <i>PLN {{ $product->price }}</i>
                            </h5>
                          </div>
                        </div>
                      </div>
                      @endforeach
                </div>
                <div class="row sorting mb-5 mt-5">
                    <div class="col-12">
                        <a class="btn btn-light">
                            <i class="fas fa-arrow-up mr-2"></i> Back to top</a>
                        <div class="btn-group float-md-end ml-3">
                            <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-left"></span> </button>
                            <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-right"></span> </button>
                        </div>
                        <div class="dropdown float-md-end">
                            <label class="mr-2">View:</label>
                            <button class="btn btn-light btn-lg dropdown-toggle" type="button" id="viewDropdownBottom" data-bs-toggle="dropdown" aria-expanded="false">
                                12
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="viewDropdownBottom">
                                <li><a class="dropdown-item" href="#">12</a></li>
                                <li><a class="dropdown-item" href="#">24</a></li>
                                <li><a class="dropdown-item" href="#">48</a></li>
                                <li><a class="dropdown-item" href="#">96</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 order-md-1 col-lg-3 sidebar-filter">
        <h3 class="mt-0 mb-5">Produkty <span class="text-primary">{{ count($products) }}</span></h3>
                  <h6 class="text-uppercase font-weight-bold mb-3">Categories</h6>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="category-1">
                      <label class="custom-control-label" for="category-1">Accessories</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="category-2">
                      <label class="custom-control-label" for="category-2">Coats &amp; Jackets</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="category-3">
                      <label class="custom-control-label" for="category-3">Hoodies &amp; Sweatshirts</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="category-4">
                      <label class="custom-control-label" for="category-4">Jeans</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="category-5">
                      <label class="custom-control-label" for="category-5">Shirts</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="category-6">
                      <label class="custom-control-label" for="category-6">Underwear</label>
                    </div>
                  </div>
                  <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
                  <h6 class="text-uppercase mt-5 mb-3 font-weight-bold">Size</h6>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="filter-size-1">
                      <label class="custom-control-label" for="filter-size-1">X-Small</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="filter-size-2">
                      <label class="custom-control-label" for="filter-size-2">Small</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="filter-size-3">
                      <label class="custom-control-label" for="filter-size-3">Medium</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="filter-size-4">
                      <label class="custom-control-label" for="filter-size-4">Large</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="filter-size-5">
                      <label class="custom-control-label" for="filter-size-5">X-Large</label>
                    </div>
                  </div>
                  <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
                  <h6 class="text-uppercase mt-5 mb-3 font-weight-bold">Price</h6>
                  <div class="price-filter-control">
                    <input type="number" class="form-control w-50 pull-left mb-2" value="50" id="price-min-control">
                    <input type="number" class="form-control w-50 pull-right" value="150" id="price-max-control">
                  </div>
                  <input id="ex2" type="text" class="slider " value="50,150" data-slider-min="10" data-slider-max="200" data-slider-step="5" data-slider-value="[50,150]" data-value="50,150" style="display: none;">
                  <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
                  <a href="#" class="btn btn-lg btn-block btn-primary mt-5">Update Results</a>
                </div>
        </div>
    </div>
</div>


@endsection