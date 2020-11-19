@extends('layout.app')

@section('content')
<link href="{{ asset('/css/categories.css') }}" rel="stylesheet" type="text/css">

<article>
    <section id="price_reduction">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <h2 class="font-weight-bold">Akcie</h2>
                </div>
            </div>
            <div class="row">
            @foreach($action_products as $product)
            
            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-xl-3 d-flex">
                <div class="card py-4 w-100 border-0 d-flex flex-column justify-content-between">
                    <a href="../../detail_produktu/detail_produktu.html" style="text-decoration:none; color:inherit;">
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
    </section>


    <section id="new_products">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <h2 class="font-weight-bold">Novinky</h2>
                </div>
            </div>
            <div class="row">
            @foreach($new_products as $product)
            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-xl-3 d-flex">
                <div class="card py-4 w-100 border-0 d-flex flex-column justify-content-between">
                    <a href="../../detail_produktu/detail_produktu.html" style="text-decoration:none; color:inherit;">
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
    </section>


    <section id="recommended">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <h2 class="font-weight-bold">Odporúčané</h2>
                </div>
            </div>
            <div class="row mb-4">
            @foreach($rec_products as $product)
            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-xl-3 d-flex">
                <div class="card py-4 w-100 border-0 d-flex flex-column justify-content-between">
                    <a href="../../detail_produktu/detail_produktu.html" style="text-decoration:none; color:inherit;">
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
    </section>
</article>

@endsection