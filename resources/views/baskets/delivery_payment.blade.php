@extends('layout.app')

@section('content')

 <!-- breadcrumb -->
 <section>
    <div class="container d-none d-md-block">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-info" href="{{ url('/') }}">Úvodná strana</a></li>
            <li class="breadcrumb-item"><a class="text-info" href="{{ url('/basket') }}">Košík</a></li>
            <li class="breadcrumb-item active" aria-current="page">Doprava a platba</li>
        </ol>
        </nav>
    </div>
</section>

<section id="navigation_up">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-6 col-md-4 col-lg-3 pt-1">
                <a href="{{ url('/basket') }}" role="button" id="btn_kategorie" type="submit" class="btn btn-outline-dark btn-block">Späť</a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 pt-1"></div>
        </div>
    </div>
</section>


<section>
    <header>
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <h3 class="font-weight-bold">Doprava a platba</h3>
                </div>
            </div>
        </div>
    </header>

    <article>
        <form action="{{ url('/basket/delivery_payment') }}" method="post" id="form">
            {{ csrf_field() }}
            <section id="delivery">
                <div class="container pt-1">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6">
                            <h5 class="font-weight-bold">Doprava</h5>
                            <div class="row">
                                <div class="col-12 py-1">
                                    <div class="btn-group-vertical btn-group-toggle btn-block" data-toggle="buttons">
                                        <label class="btn btn-info rounded mb-2">
                                            <div class="row">
                                                <div class="col-8 text-left">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="delivery_option1" name="delivery" value="kurier" class="custom-control-input" required>
                                                        <label class="custom-control-label" for="delivery_option1">Kuriér</label>
                                                    </div>  
                                                </div>
                                                <div class="col-4 text-right">
                                                    <p class="m-0">5 €</p>
                                                </div>
                                            </div>
                                        </label>
                                        <label class="btn btn-info rounded mb-2">
                                            <div class="row">
                                                <div class="col-8 text-left">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="delivery_option2" name="delivery" value="posta" class="custom-control-input" required>
                                                        <label class="custom-control-label" for="delivery_option2">Pošta</label>
                                                    </div>  
                                                </div>
                                                <div class="col-4 text-right pl-0">
                                                    <p class="m-0">3 €</p>
                                                </div>
                                            </div>
                                        </label>
                                        <label class="btn btn-info rounded">
                                            <div class="row">
                                                <div class="col-8 text-left">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="delivery_option3" name="delivery" value="osobne" class="custom-control-input" required>
                                                        <label class="custom-control-label" for="delivery_option3">Osobný odber</label>
                                                    </div> 
                                                </div>
                                                <div class="col-4 text-right pl-0">
                                                    <p class="m-0">zadarmo</p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="payment">

                <div class="container pt-4">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6">
                            <h5 class="font-weight-bold">Platba</h5>
                            <div class="row">
                                <div class="col-12 py-1">
                                    <div class="btn-group-vertical btn-group-toggle btn-block" data-toggle="buttons">
                                        <label class="btn btn-info rounded mb-2">
                                            <div class="row">
                                                <div class="col-9 text-left">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="payment_option1" name="payment" value="prevzatie" class="custom-control-input" required>
                                                        <label class="custom-control-label" for="payment_option1">Pri prevzatí</label>
                                                    </div>  
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="m-0">1 €</p>
                                                </div>
                                            </div>
                                        </label>
                                        <label class="btn btn-info rounded mb-2">
                                            <div class="row">
                                                <div class="col-8 text-left">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="payment_option2" name="payment" value="karta" class="custom-control-input" required>
                                                        <label class="custom-control-label" for="payment_option2">Kartou</label>
                                                    </div>  
                                                </div>
                                                <div class="col-4 text-right pl-0">
                                                    <p class="m-0">zadarmo</p>
                                                </div>
                                            </div>
                                        </label>
                                        <label class="btn btn-info rounded">
                                            <div class="row">
                                                <div class="col-8 text-left">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="payment_option3" name="payment" value="prevod" class="custom-control-input" required>
                                                        <label class="custom-control-label" for="payment_option3">Prevodom na účet</label>
                                                    </div>  
                                                </div>
                                                <div class="col-4 text-right pl-0">
                                                    <p class="m-0">zadarmo</p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </section> 
                        
        </form>
    </article>
</section>

@if(session('cart'))
    @php
        $final_price = 0
    @endphp

    @foreach(session('cart') as $id => $product)
        @php
            $final_price = $final_price + $product['overall_price']
        @endphp
    @endforeach
@endif

<section id="navigation_down">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-6 col-md-4 col-lg-3 py-4 text-center">
                <h5 class="font-weight-bold m-0">Spolu: {{ $final_price }} €</h5>
            </div>
            <div class="col-6 col-md-4 col-lg-3 py-4">
                <!---
                <a role="button" id="btn_kategorie" form="form1" type="submit" class="btn btn-dark btn-block">Pokračovať</a>
                --->
                <button class="btn btn-dark btn-block" form="form" type="submit" value="Submit">Pokračovať</button>
            </div>
        </div>
    </div>
</section>

@endsection