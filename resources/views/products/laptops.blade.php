@extends('layout.app')

@section('content')
    <link href="{{ asset('/css/categories.css') }}" rel="stylesheet" type="text/css">
        <section>
            <section id="feature_buttons">
                <div class="container pt-1 pt-md-3">
                    <div class="row">
                        <div class="col-md-4 col-xl-3 d-none d-md-block pt-2">
                            <p class="text-muted m-0 text-center text-sm-center">24 položiek</p>
                        </div>
                        <div class="col-md-4 col-xl-3 offset-xl-3 text-center text-sm-right">
                            <a href="#" id="btn_kategorie" class="btn btn-dark btn-block" data-toggle="modal" data-target="#modal_filtrovanie">Filtrovať</a>
                        </div>
                        <div class="col-md-4 col-xl-3 py-2 py-md-0 text-center text-sm-right">
                            <div class="dropdown">
                                <button class="btn btn-dark btn-block dropdown-toggle" type="button" id="btn_kategorie" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zoradiť podľa
                                </button>
                                <div class="dropdown-menu w-100" aria-labelledby="btn_kategorie">
                                    <a href="#" class="dropdown-item text-center text-md-left">Najlacnejšie</a>
                                    <a href="#" class="dropdown-item text-center text-md-left">Najdrahšie</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-block d-md-none pt-2">
                            <p class="text-muted m-0 text-center">24 položiek</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="products">
                <div class="album py-2">
                    <div class="container">
                        <div class="row">
                            @foreach ($laptops as $key => $laptop)
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex">
                                <div class="card py-4 w-100 border-0 d-flex flex-column justify-content-between">
                                    <a href="../../detail_produktu/detail_produktu.html" style="text-decoration:none; color:inherit;">
                                        <img class="card-img-top mx-auto" src="{{ $laptop->url }}" alt="obrazok produktu">
                                        <div class="card-body p-1">
                                            <h5 class="card-title font-weight-bold">{{ $laptop->brand }} {{ $laptop->model }}</h5>
                                            <p class="card-text"> {{ $laptop->description }} </p>
                                        </div>
                                    </a>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">{{ $laptop->price }} €</h5>
                                                <small class="text-muted">{{ intval($laptop->price * 0.81) }} € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#{{ 'modal' . $laptop->id}}" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="modal fade" id="{{ 'modal' . $laptop->id }}" role="dialog" aria-labelledby="modal_buy_title" aria-hidden="true">
                              <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header p-2 mx-auto">
                                    <h5 class="modal-title" id="exampleModalLongTitleX">Tovar bol pridaný do košíka</h5>
                                  </div>
                                  <div class="modal-body text-center">
                                    <img id="modal_img" class="card-img-top" src="{{ $laptop->url }}" alt="obrazok produktu">
                                    <div class="col-12 mx-auto">
                                        <h5 class="card-title m-0">{{ $laptop->brand . $laptop->model}}</h5>
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
                    {{ $laptops->links('vendor.pagination.custom-md') }}
                </div>
                <div class="d-block d-md-none">
                    {{ $laptops->links('vendor.pagination.custom') }}
                </div>
            </section>
        </section>



        <div class="modal hide fade" data-backdrop="static" tabindex="-1" id="modal_filtrovanie" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header p-3">
                        <h5 class="modal-title" id="exampleModalLongTitle">Filtrovanie</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <button type="button" class="btn btn-dark btn-block" data-toggle="collapse" data-target="#price" aria-expanded="false" aria-controls="kategorie" id="btn_prize_collapse">Cena</button>
                        <div class="collapse my-2" id="price">
                            <div class="form-group row">
                              <label for="input_from" class="col-1 offset-1 col-form-label my-auto">od</label>
                              <div class="col-4 pl-0">
                                <input class="form-control" type="number" min="1" max="9999" id="input_from" value="1">
                              </div>
                              <label for="input_to" class="col-1col-form-label my-auto px-2">do</label>
                              <div class="col-4 pl-0">
                                <input class="form-control" type="number" min="1" max="9999" id="input_to" value="9999">
                              </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-dark btn-block mt-2" data-toggle="collapse" data-target="#brand" aria-expanded="false" aria-controls="kategorie" id="btn_brand_collapse">Značka</button>
                        <div class="collapse my-2" id="brand">
                            <div class="row px-2">
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">Acer</button>
                                </div>
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">Apple</button>
                                </div>
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">Asus</button>
                                </div>
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">DELL</button>
                                </div>
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">HP</button>
                                </div>
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">HUAWEI</button>
                                </div>
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">Lenovo</button>
                                </div>
                                <div class="col-12 col-sm-6 p-1">
                                    <button type="button" class="btn btn-light btn-block" data-toggle="button">ThinkPad</button>
                                </div>
                            </div>
                        </div>

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection