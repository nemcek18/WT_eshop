@extends('layout.app')

@section('content')
    <link href="{{ asset('/css/detail.css') }}" rel="stylesheet" type="text/css">
        <section id="product">
            <div id="detail" class="album py-4"> 
                <article>
                    <section id="main_info">
                        <div class="container-fluid px-4">
                            <div class="row justify-content-center">
                                <div class="col-9 col-sm-8 col-md-6 col-lg-4 text-center">
                                    <img src="{{ $small }}" alt="product image" class="img-fluid" data-toggle="modal" data-target="#myModal">
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="product_name">
                        <div class="row justify-content-center px-4 py-4">
                            <div class="col-10 col-sm-8 col-lg-6 col-xl-4">
                                <div class="row">
                                    <h5 class="font-weight-bold">{{ $detail->brand . " " . $detail->model }}</h5>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="price_buy">
                        <div class="row justify-content-center px-4">
                            <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                                <div class="row">
                                    <h5 class="font-weight-bold">{{ $detail->price }} €</h5>
                                </div>
                                <div class="row">
                                    <p class="small text-muted">{{ intval($detail->price * 0.81) }} € bez DPH </p>
                                </div>
                            </div>
                            <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                                <div class="row justify-content-end">
                                    <!--<button type="button" class="btn btn-info mt-1">Kúpiť</button>--->
                                    <a href="{{ url('cart_add/'.$detail->id) }}">
                                        <button type="button" class="btn btn-info mt-1">Kúpiť</button>
                                    </a>
                                </div>    
                            </div>  
                        </div>
                    </section>

                    <section id="specification">
                        <div class="row justify-content-center px-4 py-4">
                            <div class="col-10 col-sm-8 col-lg-6 col-xl-4">
                                <div class="row">
                                    <h5 class="font-weight-bold">Špecifikácia</h5>
                                    <p>{{ $detail->description }}</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
            </div>

        </section>


        <div id="myModal" class="modal py-4" tabindex="-1" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                      <ol class="carousel-indicators">
                       @foreach( $gallery as $photo )
                          <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                       @endforeach
                      </ol>

                      <div class="carousel-inner" role="listbox">
                        @foreach( $gallery as $photo )
                           <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                               <img id="carousel_img" class="d-block img-fluid" src="{{ $photo->url }}" alt="x">
                                  <div class="carousel-caption d-none d-md-block">
                                  </div>
                           </div>
                        @endforeach
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>

                </div>
            </div>
        </div>
@endsection