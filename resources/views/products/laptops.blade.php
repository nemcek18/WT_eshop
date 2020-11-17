<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>wimo.sk</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../main/main.css">
    <link rel="stylesheet" type="text/css" href="notebooky.css">
  </head>

  <body>
    <header>
        <div class="container pt-2">
            <div class="row">
                <div class="col-md-1 pr-md-0 pl-md-2 pr-lg-4 pl-lg-2">
                    <p class="text-center">
                        <a href="../../uvodna_strana/uvodna_strana.html">
                            <img src="../../img/logo.png" alt="logo" class="img-fluid rounded" style="max-width: 50px;">
                        </a>
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <form action="" class="form-horizontal" method="post" accept-charset="utf-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Hľadaný výraz" aria-label="Hľadaný výraz">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-dark" type="button">Hľadať</button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
                <div class="col-6 pt-3 text-center col-md-2 offset-md-1 pt-md-0 text-md-left d-flex flex-column">
                    <div>
                        <a href="#" class="font-weight-bold" id="user" data-toggle="modal" data-target="#modal_login">Odlásiť sa</a>
                    </div>
                    <div>
                        <a href="../../nastavenia/nastavenia.html">
                            <p class="text-muted m-0" id="username">Lenka</p>
                        </a>
                    </div>
                </div>
                <div class="col-6 pt-3 text-center col-md-2 pt-md-0 text-md-left d-flex flex-column">
                    <div>
                        <a href="../../kos_prehlad/kos_prehlad.html" class="font-weight-bold" id="user"> Košík</a>
                    </div>
                    <div>
                        <p class="text-muted m-0">1348,98 €</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </header>

    <nav>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center py-1 py-md-0 pb-md-0">
                    <button type="button" class="btn btn-primary btn-block d-md-none" data-toggle="collapse" data-target="#kategorie" aria-expanded="false" aria-controls="kategorie" id="btn_kategorie_collapse">Kategórie</button>
                </div>
            </div>
        </div>


        <div class="collapse d-md-block" id="kategorie">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-2 pl-0">
                        <p class="text-center text-md-left m-0 py-2">
                            <a href="../notebooky/notebooky.html" class="btn btn-dark" type="button" id="btn_kategorie">mobily</a>
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-2 pl-0">
                        <p class="text-center text-md-left m-0 py-2">
                            <a href="../notebooky/notebooky.html" class="btn btn-dark" type="button" id="btn_kategorie">tablety</a>
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-2 pl-0">
                        <p class="text-center text-md-left m-0 py-2">
                            <a href="../notebooky/notebooky.html" class="btn btn-dark" type="button" id="btn_kategorie">notebooky</a>
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-2 pl-0">
                        <p class="text-center text-md-left m-0 py-2">
                            <a href="../notebooky/notebooky.html" class="btn btn-dark" type="button" id="btn_kategorie">počítače</a>
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-2 pl-0">
                        <p class="text-center text-md-left m-0 py-2">
                            <a href="../notebooky/notebooky.html" class="btn btn-dark" type="button" id="btn_kategorie">hodinky</a>
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-2 pl-0">
                        <p class="text-center text-md-left m-0 py-2">
                            <a href="../notebooky/notebooky.html" class="btn btn-dark" type="button" id="btn_kategorie">televízory</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main role="main">
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
                        	@foreach ($laptops as $laptop)
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex">        
                                <div class="card w-100 border-0">
                                    <a href="../../detail_produktu/detail_produktu.html" style="text-decoration:none; color:inherit;">
                                        <img class="card-img-top mx-auto" src="../../img/laptop.jpg" alt="obrazok produktu">
                                        <div class="card-body p-1">
                                            <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                            <p class="card-text"> {{ $laptop->description }}</p>
                                        </div>
                                    </a>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">{{ $laptop->price }} €</h5>
                                                <small class="text-muted">{{ $laptop->price * 0.81 }} € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	@endforeach
                            <!-- 
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <a href="../../detail_produktu/detail_produktu.html" style="text-decoration:none; color:inherit;">
                                        <img class="card-img-top mx-auto" src="../../img/laptop1.jpg" alt="obrazok produktu">
                                        <div class="card-body p-1">
                                            <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                            <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                        </div>
                                    </a>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <a href="../../detail_produktu/detail_produktu.html" style="text-decoration:none; color:inherit;">
                                        <img class="card-img-top mx-auto" src="../../img/laptop2.jpg" alt="obrazok produktu">
                                        <div class="card-body p-1">
                                            <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                            <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                        </div>
                                    </a>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy">Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <a href="../../detail_produktu/detail_produktu.html" style="text-decoration:none; color:inherit;">
                                        <img class="card-img-top mx-auto" src="../../img/laptop3.jpg" alt="obrazok produktu">
                                        <div class="card-body p-1">
                                            <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                            <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                        </div>
                                    </a>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop4.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop5.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop3.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop1.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop1.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop2.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop3.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop4.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop5.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop3.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop1.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop1.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop2.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop3.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop4.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop5.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop3.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-xl-3 d-flex ">
                                <div class="card w-100 border-0">
                                    <img class="card-img-top mx-auto" src="../../img/laptop1.jpg" alt="obrazok produktu">
                                    <div class="card-body p-1">
                                        <h5 class="card-title font-weight-bold">Macbook Pro 2020 16</h5>
                                        <p class="card-text">skfdsnfjdnjfinddsjofdsfdfodjfiosdjifndinfidnfinsdfi</p>
                                    </div>
                                    <div class="card-footer p-1">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-start flex-column">
                                                <h5 class="mr-auto font-weight-bold m-0">1779,99 €</h5>
                                                <small class="text-muted">1482,99 € bez DPH</small>
                                            </div>
                                            <a href="#" class="btn btn-info ml-auto" id="btn_kategorie" data-toggle="modal" data-target="#modal_buy" >Kúpiť</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>                
            </section>
            <section id="page_navigation">
                <ul class="pagination justify-content-center p-4">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
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


        <div class="modal fade" id="modal_buy" role="dialog" aria-labelledby="modal_buy_title" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header p-2 mx-auto">
                <h5 class="modal-title" id="exampleModalLongTitleX">Tovar bol pridaný do košíka</h5>
              </div>
              <div class="modal-body text-center">
                <img id="modal_img" class="card-img-top" src="../../img/laptop.jpg" alt="obrazok produktu">
                <div class="col-12 mx-auto">
                    <h5 class="card-title m-0">Macbook Pro 16 2020</h5>
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
        
    </main>

    <footer class="album py-4 border-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 offset-sm-1 col-md-3 offset-md-0">
                    <h5 class="font-weight-bold">Spoločnosť</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted">O nás</a></li>
                        <li><a href="#" class="text-muted">Ocenenia</a></li>
                        <li><a href="#" class="text-muted">Partneri</a></li>
                        <li><a href="#" class="text-muted">História</a></li>
                    </ul>
                </div>
                <div class="col-sm-5 offset-sm-1 col-md-3 offset-md-0">
                    <h5 class="font-weight-bold">Kontakt</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted">Predajne</a></li>
                        <li><a href="#" class="text-muted">Infolinka</a></li>
                        <li><a href="#" class="text-muted">Voľné miesta</a></li>
                        <li><a href="#" class="text-muted">Servisné strediská</a></li>
                    </ul>
                </div>
                <div class="col-sm-5 offset-sm-1 col-md-3 offset-md-0">
                    <h5 class="font-weight-bold">Služby</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted">Nákup na splátky</a></li>
                        <li><a href="#" class="text-muted">Doprava zadarmo</a></li>
                        <li><a href="#" class="text-muted">Reklamácia a vrátenie</a></li>
                        <li><a href="#" class="text-muted">Predajná sieť</a></li>
                    </ul>
                </div>
                <div class="col-sm-5 offset-sm-1 col-md-3 offset-md-0">
                    <h5 class="font-weight-bold">Odkazy</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted">Stav objednávky</a></li>
                        <li><a href="#" class="text-muted">Obchodné podmienky</a></li>
                        <li><a href="#" class="text-muted">Aktuálny leták</a></li>
                        <li><a href="#" class="text-muted">Najčastejšie otázky</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>