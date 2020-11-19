<header>
    <div class="container pt-2">
        <div class="row">
            <div class="col-md-1 pr-md-0 pl-md-2 pr-lg-4 pl-lg-2">
                <p class="text-center">
                    <a href="{{ url('/') }}">
                        <!---<img src="../img/logo.png" alt="logo" class="img-fluid rounded" style="max-width: 50px;">--->
                        <img src="{{ asset('/logo.png') }}" alt="logo" class="img-fluid rounded" style="max-width: 50px;">
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
                                    <button class="btn btn-outline-dark" type="button">
                                        <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                        </svg>
                                        Hľadať
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>

            @guest
                <div class="col-6 pt-3 text-center col-md-2 offset-md-1 pt-md-0 text-md-left d-flex flex-column pr-0">
                    <a href="#" id="user" data-toggle="modal" data-target="#modal_login">
                        <div class="row justify-content-center align-items-center">
                            <div class="pr-1">
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                                </svg>
                            </div>
                            <p class="font-weight-bold m-0" id="user"> Prihlásiť sa</p>
                        </div>
                    </a>
                </div>
            @else
                <div class="col-6 pt-3 text-center col-md-2 offset-md-1 pt-md-0 text-md-left d-flex flex-column pr-0">
                    <a href="#" id="user">
                    <div class="row justify-content-center align-items-center">
                        <div class="pr-1">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                            </svg>
                        </div>
                        <!--
                        <p class="font-weight-bold m-0" id="user"> Odhlásiť sa</p>
                        -->

                        <!--Odhlasenie-->
                        <p class="font-weight-bold m-0" id="user" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"
                        > Odhlásiť sa</p>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                    </a>
                    
                    <div class="row justify-content-center">
                        <a href="../nastavenia/nastavenia.html">
                            <p class="text-muted m-0" id="username">{{ Auth::user()->name . " " . Auth::user()->surname }}</p>
                        </a>
                    </div>
                </div>
            @endguest

            <div class="col-6 pt-3 text-center col-md-2 pt-md-0 text-md-left d-flex flex-column">
                <a href="../kos_prehlad/kos_prehlad.html" style="color:inherit">
                    <div class="row justify-content-center align-items-center">
                        <div class="pr-1">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                            </svg>
                        </div>
                        <p class="font-weight-bold m-0" id="user"> Košík</p>
                    </div>
                </a>

                <div class="row justify-content-center">
                    <!--Dorobit cenu podla aktualneho kosika--->
                    <p class="text-muted m-0">1348,98 €</p>
                </div>
            </div>
        </div>
    </div>
</header>