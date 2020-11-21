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
                @if(session('cart'))
                    @if(count(session('cart')) > 1)
                    <p class="text-muted my-auto">{{ count(session('cart')) }}  položky</p>
                    @else
                    <p class="text-muted my-auto">{{ count(session('cart')) }}  položka</p>
                    @endif
                @else
                    <p class="text-muted my-auto">Košík je prázdny</p>
                @endif
            </div>
            <div class="col-6 col-md-4 col-lg-3 pt-1 text-center">
            </div>
        </div>
    </div>
</section>


<section id="products">
    <div id="kosik" class="album">
        <div class="container">

            
            @if(session('cart'))
                @foreach(session('cart') as $id => $product)
            
                <div class="col-12 p-4">
                    <hr>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <p class=" m-0">{{ $product['brand'] }} {{ $product['model'] }}</p>
                            </div>
                            <div class="col-auto">
                                <p class="btn-holder"><a href="{{ url('/remove_cart/'.$id) }}" class="btn btn-outline-dark btn-sm" role="button">X</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-start">
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="{{ $product['photo_url'] }}" alt="obrazok produktu" width="70%">
                    </div>

                    <div class="col-6 col-md-4 col-lg-3 mt-3 mt-sm-5">
                        <div class="row justify-content-end">
                            <div class="col-12 col-sm-8 col-xl-6 text-right pl-0">
                                <div class="input-group my-1">
                                    <!--
                                    <a href="{{ url('/update_cart/'.$id) }}">
                                        <button class="btn btn-outline-dark" type="button">-</button>
                                    </a>
                                    --->
                                    <!--
                                    <button id="minus{{ $id }}" class="btn btn-outline-dark" type="button" onclick="minus_product('{{ $id }}')">-</button>
                                    --->
                                    <button data-product-id="{{ $id }}" class="btn btn-outline-dark minus-button" type="button">-</button>
                                    <input id="quantity{{ $id }}" type="number" class="form-control" value="{{ $product['quantity'] }}" min="1" max="99">
                                    <!--<a href="{{ url('/update_cart/'.$id) }}">
                                        <button class="btn btn-outline-dark" type="button">+</button>
                                    </a>
                                    --->
                                    <!--
                                    <button id="plus{{ $id }}" class="btn btn-outline-dark" type="button" onclick="plus_product('{{ $id }}')">+</button>
                                    --->
                                    <button data-product-id="{{ $id }}" class="btn btn-outline-dark plus-button" type="button" >+</button>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col text-right mt-sm-5">
                                <p class="font-weight-bold">{{ $product['overall_price'] }} €</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif



        </div>
    </div>
</section>

<div class="col-12 p-4">
    <hr>
</div>


@if(session('cart'))
    @php
        $final_price = 0
    @endphp

    @foreach(session('cart') as $id => $product)
        @php
            $final_price = $final_price + $product['overall_price']
        @endphp
    @endforeach
    <section id="navigation_down">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-6 col-md-4 col-lg-3 py-4 text-center">
                    <h5 class="font-weight-bold m-0">Spolu: {{ $final_price }} €</h5>
                </div>
                <div class="col-6 col-md-4 col-lg-3 py-4">
                    <a href="{{ url('/basket/delivery&payment') }}" role="button" id="btn_kategorie" type="submit" class="btn btn-dark btn-block">Pokračovať</a>
                </div>
            </div>
        </div>
    </section>
@endif



<script>
/*function plus_product(pressed_id) {
    //pressed_id = $(this).data("id");

    document.getElementById('quantity'+pressed_id).stepUp();
};

function minus_product(pressed_id) {
    document.getElementById('quantity'+pressed_id).stepDown();
};*/


$(document).on('click', '.plus-button', function() {
    pressed_id = $(this).data("product-id");
    quantity = document.getElementById('quantity'+pressed_id).value;

    if(quantity !=99){
        document.getElementById('quantity'+pressed_id).stepUp();
        quantity = document.getElementById('quantity'+pressed_id).value;
        window.location.href = "/update_cart/"+pressed_id+"/"+quantity;
    }

});

$(document).on('click', '.minus-button', function() {
    pressed_id = $(this).data("product-id");
    quantity = document.getElementById('quantity'+pressed_id).value;

    if(quantity !=1){
        document.getElementById('quantity'+pressed_id).stepDown();
        quantity = document.getElementById('quantity'+pressed_id).value;
        window.location.href = "/update_cart/"+pressed_id+"/"+quantity;
    }

});


</script>


@endsection