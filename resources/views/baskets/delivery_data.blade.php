@extends('layout.app')

@section('content')

<section id="breadcrumb">
    <div class="container d-none d-md-block">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-info" href="{{ url('/') }}">Úvodná strana</a></li>
            <li class="breadcrumb-item"><a class="text-info" href="{{ url('/basket') }}">Košík</a></li>
            <li class="breadcrumb-item"><a class="text-info" href="{{ url('/basket/delivery&payment') }}">Doprava a platba</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dodacie údaje</li>
            </ol>
        </nav>
    </div>
</section>
    

<section id="navigation_up">     
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-6 col-md-4 col-lg-3 pt-1">
                <a href="{{ url('/basket/delivery&payment') }}" role="button" id="btn_kategorie" class="btn btn-outline-dark btn-block">Späť</a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 pt-1"></div>
        </div>
    </div>
</section>

<section id="formular">
    <header>
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <h3 class="font-weight-bold">Dodacie údaje</h3>
                </div>
            </div>
        </div>
    </header>

    <article>
        <div id="dodacie" class="album pb-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <form action="{{ url('/basket/delivery_data') }}" id="delivery_data" method="post">
                            {{ csrf_field() }}
                            <div class="form-group py-1">
                                <label class="font-weight-bold" for="input_name">Meno</label>
                                <input name="name" type="text" class="form-control" id="input_name" title="meno" pattern="([a-zA-Z]+)" required>
                            </div>
                            <div class="form-group py-1">
                                <label class="font-weight-bold" for="input_surname">Priezvisko</label>
                                <input name="surname" type="text" class="form-control" id="input_surname" title="priezvisko" pattern="([a-zA-Z]+)" required>
                            </div>
                            <div class="form-group py-1">
                                <label class="font-weight-bold"  for="input_street">Ulica</label>
                                <input name="street" type="text" class="form-control" id="input_street" required>
                            </div>
                            <div class="form-group py-1">
                                <label class="font-weight-bold"  for="input_city">Mesto</label>
                                <input name="city" type="text" class="form-control" id="input_city" required>
                            </div>
                            <div class="form-group py-1">
                                <label class="font-weight-bold"  for="input_psc">PSČ</label>
                                <input name="postcode" type="text" class="form-control" id="input_psc" title="111 22" pattern="[0-9]{3} [0-9]{2}" required>
                            </div>
                            <div class="form-group py-1">
                                <label class="font-weight-bold"  for="input_email">Email</label>
                                <input name="email" type="email" class="form-control" id="input_email" required>
                            </div>
                            <div class="form-group py-1">
                                <label class="font-weight-bold"  for="input_phone">Telefón</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+421</span>
                                </div>
                                <input name="tel" type="tel" class="form-control" id="input_phone" pattern="[0-9]{3} [0-9]{3} [0-9]{3}" title="111 222 333" required>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
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
    <section id="navigation_down">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-6 col-md-4 col-lg-3 py-4 text-center">
                    <h5 class="font-weight-bold m-0">Spolu: {{ $final_price }} €</h5>
                </div>
                <div class="col-6 col-md-4 col-lg-3 py-4">
                    <button class="btn btn-dark btn-block" form="delivery_data" type="submit" value="Submit">Objednať</button>
                </div>
            </div>
        </div>
    </section>
@endif

@endsection