@extends('layout.app')

@section('content')
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
                <div class="col-12 col-sm-6 col-lg-3 d-flex ">
                    <div class="card w-100 border-0">
                        <a href="../detail_produktu/detail_produktu.html" style="text-decoration:none; color:inherit;">
                            <img class="card-img-top" src="../img/laptop4.jpg" alt="img">
                            <div class="card-body p-1">
                                <h5 class="card-title font-weight-bold">{{ $product->brand . " " . $product->model}}</h5>
                                <p class="card-text">Popis produktu....Popis produktu....Popis produktu....Popis produktu....</p>
                            </div>
                        </a>
                        <div class="card-footer p-1">
                            <div class="d-flex">
                                <div class="d-flex align-items-start flex-column">
                                    <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                    <small class="text-muted">1482,99 € bez DPH</small>
                                </div>
                                <a href="#" class="btn btn-info ml-auto" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
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
                <div class="col-12 col-sm-6 col-lg-3 d-flex ">
                    <div class="card w-100 border-0">
                        <img class="card-img-top" src="../img/laptop.jpg" alt="img">
                        <div class="card-body p-1">
                            <h5 class="card-title font-weight-bold">{{ $product->brand . " " . $product->model}}</h5>
                            <p class="card-text">Popis produktu....Popis produktu....Popis produktu....Popis produktu....</p>
                        </div>
                        <div class="card-footer p-1">
                            <div class="d-flex">
                                <div class="d-flex align-items-start flex-column">
                                    <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                    <small class="text-muted">1482,99 € bez DPH</small>
                                </div>
                                <a href="#" class="btn btn-info ml-auto" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
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
            <div class="row">
            @foreach($rec_products as $product)
                <div class="col-12 col-sm-6 col-lg-3 d-flex ">
                    <div class="card w-100 border-0">
                        <img class="card-img-top" src="../img/laptop.jpg" alt="img">
                        <div class="card-body p-1">
                            <h5 class="card-title font-weight-bold">{{ $product->brand . " " . $product->model}}</h5>
                            <p class="card-text">Popis produktu....Popis produktu....Popis produktu....Popis produktu....</p>
                        </div>
                        <div class="card-footer p-1">
                            <div class="d-flex">
                                <div class="d-flex align-items-start flex-column">
                                    <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                    <small class="text-muted">1482,99 € bez DPH</small>
                                </div>
                                <a href="#" class="btn btn-info ml-auto" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>  
    </section>
</article>


<div class="modal fade" id="modal_buy" role="dialog" aria-labelledby="exampleModalCenterTitleX" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header p-2 mx-auto">
                <h5 class="modal-title" id="exampleModalLongTitleX">Tovar bol pridaný do košíka</h5>
            </div>
            <div class="modal-body text-center">
                <img id="modal_img" class="card-img-top" src="../img/laptop.jpg" alt="img">
                <div class="col-12 mx-auto">
                    <h5 class="card-title m-0">Macbook Pro 16 2020</h5>
                </div>
            </div>

            <div class="modal-footer p-2">
                <button type="button" class="btn btn-outline-dark mr-auto" data-dismiss="modal" aria-label="Close">Späť</button>
                <a href="../kos_prehlad/kos_prehlad.html">
                    <button type="button" class="btn btn-dark ml-auto">Pokračovať do košíka</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection