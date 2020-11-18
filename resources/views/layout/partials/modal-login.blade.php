<!-- prihlasenie -->
<div class="modal hide fade" data-backdrop="static" tabindex="-1" id="modal_login" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header p-3">
                <h5 class="modal-title" id="modal_title">Prihlásenie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- old version -->
            <!--
            <div class="modal-body">
                <form method="post" id="modal_details">
                    <div class="form-group" id="modal_details">
                        <label for="input_email" class=" font-weight-bold">Email</label>
                        <input type="email" class="form-control" id="input_email" aria-describedby="emailHelp" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="input_password" class=" font-weight-bold">Heslo</label>
                        <input type="password" class="form-control" id="input_password" placeholder="Heslo" required>
                    </div>
                </form> 
            </div>
            --->
            <div class="modal-body">

                <form id="login" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class=" font-weight-bold">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="password" class=" font-weight-bold">Heslo</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </form>

            </div>

            <div class="modal-footer p-3">
                <a href="{{ route('register') }}" type="button" class="btn btn-outline-dark mr-auto">
                    Zaregistrovať sa                            
                </a>
                <button type="submit" form="login" class="btn btn-dark ml-auto" form="modal_details">Prihlásiť sa</button>
            </div>

        </div>
    </div>
</div>