@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Iniciar sesión') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                            <label for="email" class="input-group-text" id="addon-wrapping" style="width: 35%;">Correo</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Mail" aria-label="Mail" aria-describedby="addon-wrapping" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Estas credenciales no coinciden con nuestros registros.</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                            <label for="password" class="input-group-text" id="addon-wrapping" style="width: 35%;">Contraseña</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<br>
                        <div class="form-group row" style="margin-left: 9%;">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuérdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0" style="margin-left: -8%;">
                            <div class="row col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar sesión') }}
                                </button>

                                <li class="form-group row mb-0" style="margin-left: 10%;">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            </div>

                                
                                @if (Route::has('password.request'))
                                    <div style="margin-left: 40%; margin-top: 2%;">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                    </div>
                                @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
