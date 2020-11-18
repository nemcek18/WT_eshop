@extends('layout.app')


@section('content')
<header>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <h2 class="font-weight-bold">Registrácia</h2>
                <p clast="text-muted">* povinné údaje</p>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <form id="registration" method="POST" action="{{ route('register') }}">
                @csrf

                <section>
                    <h3 class="font-weight-bold">Prihlasovacie údaje</h3>

                    <div class="form-group py-1">
                        <label for="name" class="font-weight-bold">{{ __('Meno *') }}</label>

                        <div>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group py-1">
                        <label for="surname" class="font-weight-bold">{{ __('Priezvisko *') }}</label>

                        <div>
                            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                            @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group py-1">
                        <label for="email_reg" class="font-weight-bold">{{ __('E-Mail *') }}</label>

                        <div>
                            <input id="email_reg" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    
                    <div class="form-group py-1">
                        <label for="password_reg" class="font-weight-bold">{{ __('Heslo *') }}</label>

                        <div>
                            <input id="password_reg" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group py-1">
                        <label for="password-confirm" class="font-weight-bold">{{ __('Potvrdenie hesla *') }}</label>

                        <div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="row">
                <div class="col-6 offset-6 pl-md-0 pr-3 mb-3">
                    <button type="submit" class="btn btn-dark btn-block" form="registration" >Zaregistrovať sa</button>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection