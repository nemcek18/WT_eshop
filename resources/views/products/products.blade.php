@extends('layout.app')

@section('content')
    <link href="{{ asset('/css/categories.css') }}" rel="stylesheet" type="text/css">
        <section>
            <section id="feature_buttons">
                <div class="container pt-1 pt-md-3">
                    <div class="row">
                        <div class="col-md-4 col-xl-3 d-none d-md-block pt-2">
                            <p class="text-muted m-0 text-center text-sm-center">{{ $products->total() }} položiek</p>
                        </div>
                        
                        <div class="col-md-4 col-xl-3 offset-xl-3 text-center text-sm-right">
                            <a href="#" id="btn_kategorie" class="btn btn-dark btn-block" data-toggle="modal" data-target="#modal_filtrovanie">Filtrovať</a>
                        </div>

                        <div class="col-md-4 col-xl-3 py-2 py-md-0 text-center text-sm-right">
                            <div class="dropdown">
                                <button class="btn btn-dark btn-block dropdown-toggle" type="button" id="btn_kategorie" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zoradiť podľa
                                </button>
                                <div class="dropdown-menu w-100" aria-labelledby="btn_kategorie">
                                        <a href="{{ route('products.index', ['category' => $category, 'sort' => 'asc', 'min_price' => request('min_price'), 'max_price' => request('max_price'), 'brands' => request('brands'), 'rams' => request('rams'), 'types' => request('types')]) }}" name="asc" class="dropdown-item text-center text-md-left">Najlacnejšie</a>
                                        <a href="{{ route('products.index', ['category' => $category, 'sort' => 'desc','min_price' => request('min_price'), 'max_price' => request('max_price'), 'brands' => request('brands'), 'rams' => request('rams'), 'types' => request('types')]) }}" name="desc" class="dropdown-item text-center text-md-left">Najdrahšie</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 d-block d-md-none pt-2">
                            <p class="text-muted m-0 text-center">{{ $products->total() }} položiek</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="products">
                <div class="album py-2">
                    <div class="container">
                        <div class="row">
                            @foreach ($products as $key => $product)
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex">
                                <div class="card py-4 w-100 border-0 d-flex flex-column justify-content-between">
                                    <a href="{{ url('/' . $category . '/' . $product['product_id']) }}" style="text-decoration:none; color:inherit;">
                                        <img class="card-img-top mx-auto" src="{{ $product->url }}" alt="obrazok produktu">
                                        <div class="card-body p-1">
                                            <h5 class="card-title font-weight-bold">{{ $product->brand }} {{ $product->model }}</h5>
                                            <p class="card-text">{{ $product->description }}</p>
                                        </div>
                                    </a>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">{{ $product->price }} €</h5>
                                                <small class="text-muted">{{ intval($product->price * 0.81) }} € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#{{ 'modal' . $product->id}}" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="modal fade" id="{{ 'modal' . $product->id }}" role="dialog" aria-labelledby="modal_buy_title" aria-hidden="true">
                              <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header p-2 mx-auto">
                                    <h5 class="modal-title" id="exampleModalLongTitleX">Tovar bol pridaný do košíka</h5>
                                  </div>
                                  <div class="modal-body text-center">
                                    <img id="modal_img" class="card-img-top" src="{{ $product->url }}" alt="obrazok produktu">
                                    <div class="col-12 mx-auto">
                                        <h5 class="card-title m-0">{{ $product->brand . $product->model}}</h5>
                                    </div>

                                  </div>
                                  <div class="modal-footer p-2">
                                    <button type="button" class="btn btn-outline-dark mr-auto" data-dismiss="modal" aria-label="Close">Späť</button>
                                    <a href="../../kos_prehlad/kos_prehlad.html">
                                        <button type="button" class="btn btn-dark ml-auto">Pokračovať do košíka</button>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>                
            </section>
            <section>
                <div class="d-none d-md-block">
                    {{ $products->links('vendor.pagination.custom-md') }}
                </div>
                <div class="d-block d-md-none">
                    {{ $products->links('vendor.pagination.custom') }}
                </div>
            </section>
        </section>


        <div class="modal hide fade" data-backdrop="static" tabindex="-1" id="modal_filtrovanie" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header p-3 border-0">
                        <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Filtrovanie</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="filter" action="{{ route('products.index', ['category' => $category]) }}" method="GET" accept-charset="utf-8">
                            <div class="form-group">
                                <input class="form-control" type="hidden" name="sort" value="{{ request('sort') }}">
                                <h5 class="font-weight-bold">Cena</h5>
                                <div class="row py-2" id="price">
                                    <label for="input_from" class="col-1 offset-1 col-form-label my-auto">od</label>
                                    <div class="col-4 pl-0">
                                        @if (request('min_price') == null)
                                            <input class="form-control" type="number" min="{{ $min_price }}" max="{{ $max_price }}" name="max_price" id="max_price" value="{{ $min_price }}">
                                        @else
                                           <input class="form-control" type="number" min="{{ $min_price }}" max="{{ $max_price }}" name="min_price" id="min_price" value="{{ request('min_price') }}">
                                        @endif

                                    </div>
                                    <label for="input_to" class="col-1col-form-label my-auto px-2">do</label>
                                    <div class="col-4 pl-0">
                                        @if (request('max_price') == null)
                                            <input class="form-control" type="number" min="{{ $min_price }}" max="{{ $max_price }}" name="max_price" id="max_price" value="{{ $max_price }}">
                                        @else
                                            <input class="form-control" type="number" min="{{ $min_price }}" max="{{ $max_price }}" name="max_price" id="max_price" value="{{ request('max_price')}}">
                                        @endif
                                    </div>
                                </div>

                                @if(in_array($category, $ram_category))
                                    <h5 class="font-weight-bold pt-3">RAM</h5>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <div class="row px-2">
                                            @foreach ($rams as $ram)
                                                <div class="col-12 col-sm-2">
                                                    <label class="btn btn-light btn-block">
                                                        @if ($query_rams != null)
                                                            <input type="checkbox" name="rams[]" value={{$ram}} @if(in_array($ram, $query_rams)) checked @endif> {{$ram}} GB
                                                        @else
                                                            <input type="checkbox" name="rams[]" value={{$ram}}> {{$ram}} GB
                                                        @endif
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @elseif(in_array($category, $type_category))
                                    <h5 class="font-weight-bold pt-3">Typ</h5>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <div class="row px-2">
                                            @foreach ($types as $type)
                                                <div class="col-12 col-sm-6 p-1">
                                                    <label class="btn btn-light btn-block">
                                                        @if ($query_types != null)
                                                            <input type="checkbox" name="types[]" value={{$type}} @if(in_array($type, $query_types)) checked @endif> {{$type}}
                                                        @else
                                                            <input type="checkbox" name="types[]" value={{$type}}> {{$type}}
                                                        @endif
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                
                                
                                <h5 class="font-weight-bold pt-3">Značka</h5>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <div class="row px-2">
                                        @foreach ($brands as $brand)
                                            <div class="col-12 col-sm-4 p-1">
                                                <label class="btn btn-light btn-block">
                                                    @if ($query_brands != null)
                                                        <input type="checkbox" name="brands[]" value={{$brand}} @if(in_array($brand, $query_brands)) checked @endif> {{$brand}}
                                                    @else
                                                        <input type="checkbox" name="brands[]" value={{$brand}}> {{$brand}}
                                                    @endif
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <button class="btn btn-outline-dark btn-block mt-2" type="submit">Filtruj</button>
                            </div>
                        </form>

<!-- 
                        <button type="button" class="btn btn-dark btn-block mt-2" data-toggle="collapse" data-target="#procesor" aria-expanded="false" aria-controls="kategorie" id="btn_brand_collapse">Procesor</button>
                        <div class="collapse my-2" id="procesor">
                            <div class="row px-2">
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">Intel Core i9</button>
                                </div>
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">Intel Core i7</button>
                                </div>
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">Intel Core i5</button>
                                </div>
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">Intel Core i3</button>
                                </div>
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">Intel Pentium</button>
                                </div>
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">AMD Ryzen 7</button>
                                </div>
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">AMD Ryzen 5</button>
                                </div>
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">AMD Ryzen 3</button>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-dark btn-block mt-2" data-toggle="collapse" data-target="#ulozisko" aria-expanded="false" aria-controls="kategorie" id="btn_prize_collapse">Úložisko</button>
                        <div class="collapse my-2" id="ulozisko">
                            <div class="form-group row">
                              <label for="input_from" class="col-1 offset-1 col-form-label my-auto">od</label>
                              <div class="col-4 pl-0">
                                <input class="form-control" type="number" min="0" max="9999" id="input_from" value="0">
                              </div>
                              <label for="input_to" class="col-1col-form-label my-auto px-2">do</label>
                              <div class="col-4 pl-0">
                                <input class="form-control" type="number" min="0" max="9999" id="input_to" value="9999">
                              </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-dark btn-block my-2" data-toggle="collapse" data-target="#typ_uloziska" aria-expanded="false" aria-controls="kategorie" id="btn_brand_collapse">Typ úložiska</button>
                        <div class="collapse my-2" id="typ_uloziska">
                            <div class="row px-2">
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">HDD</button>
                                </div>
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">SSD</button>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-dark btn-block mt-2" data-toggle="collapse" data-target="#klavesnica" aria-expanded="false" aria-controls="kategorie" id="btn_brand_collapse">Klávesnica</button>
                        <div class="collapse my-2" id="klavesnica">
                            <div class="row px-2">
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">numerická</button>
                                </div>
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">podsvietená</button>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
@endsection