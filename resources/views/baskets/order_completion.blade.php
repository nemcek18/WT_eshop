@extends('layout.app')

@section('content')

    <section>
        <header>
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-7">
                        <h3 class="font-weight-bold">Objednávka bola dokončená</h3>
                    </div>
                </div>
            </div>
        </header>

        <article>
            <div id="objednavka" class="container pb-4">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p style="text-align: justify;">Číslo vašej objednávky je <b>{{ $order_num }}</b>. Informácie ohľadom doručenia vám budú zaslané na email. Prajeme pekný zvyšok dňa.</p>
                    </div>
                    <div class="col-md-7 text-right">
                        <a href="{{ url('/') }}" class="btn btn-dark" type="button" id="btn_kategorie">Späť do obchodu</a>
                    </div>
                </div>
            </div>
        </article>
    </section>

@endsection