@extends('layout.app')

@section('content')

<section id="breadcrumb">
    <div class="container d-none d-md-block">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-info" href="{{ url('/') }}">Úvodná strana</a></li>
            <li class="breadcrumb-item active" aria-current="page">Košík</li>
        </ol>
        </nav>
    </div>
</section>

<section id="navigation_up">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-6 col-md-4 col-lg-3 pt-1">
                <p class="text-muted my-auto">3 položky</p>
            </div>
            <div class="col-6 col-md-4 col-lg-3 pt-1 text-center">
            </div>
        </div>
    </div>
</section>


<section id="products">
    <div id="kosik" class="album">
        <div class="container">

            
            
            
            <div class="col-12 p-4">
                <hr>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <p class=" m-0">Macbook Pro 13 2020</p>
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-outline-dark btn-sm" id="btn_kategorie">x</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-start">
                <div class="col-6 col-md-4 col-lg-3">
                    <img src="../img/laptop.jpg">
                </div>

                <div class="col-6 col-md-4 col-lg-3 mt-3 mt-sm-5">
                    <div class="row justify-content-end">
                        <div class="col-12 col-sm-8 col-xl-6 text-right pl-0">
                            <div class="input-group my-1">
                                <button class="btn btn-outline-dark" type="button">-</button>
                                <input type="number" class="form-control" value="1" min="1" max="10">
                                <button class="btn btn-outline-dark" type="button">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col text-right mt-sm-5">
                            <p class="font-weight-bold">1348,98 €</p>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</section>

<div class="col-12 p-4">
    <hr>
</div>

<section id="navigation_down">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-6 col-md-4 col-lg-3 py-4 text-center">
                <h5 class="font-weight-bold m-0">Spolu: 7348,98 €</h5>
            </div>
            <div class="col-6 col-md-4 col-lg-3 py-4">
                <a href="{{ url('/basket/delivery&payment') }}" role="button" id="btn_kategorie" type="submit" class="btn btn-dark btn-block">Pokračovať</a>
            </div>
        </div>
    </div>
</section>


@endsection