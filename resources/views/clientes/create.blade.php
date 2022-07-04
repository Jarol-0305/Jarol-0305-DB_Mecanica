@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar clientes') }}</div>

                <div class="card-body">
                    <form  action="{{route('clientes.store')}}" method="POST">
                        @csrf

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                                <label for="cli_apellido" class="input-group-text" id="addon-wrapping" style="width: 35%;">Apellido</label>

                                <input id="cli_apellido" type="text" class="form-control @error('Apellido') is-invalid @enderror" placeholder="Surname" aria-label="Surname" aria-describedby="addon-wrapping" name="cli_apellido" value="{{ old('cli_apellido') }}" required autocomplete="cli_apellido" autofocus>

                                @error('Apellido')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                                <label for="cli_nombre" class="input-group-text" id="addon-wrapping" style="width: 35%;">Nombre</label>

                                <input id="cli_nombre" type="text" class="form-control @error('cli_nombre') is-invalid @enderror" placeholder="Name" aria-label="Name" aria-describedby="addon-wrapping" name="cli_nombre" value="{{ old('cli_nombre') }}" required autocomplete="cli_nombre" autofocus>

                                @error('cli_nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                                <label for="cli_cedula" class="input-group-text" id="addon-wrapping" style="width: 35%;">Cédula</label>

                                <input id="cli_cedula" type="number" class="form-control @error('Cedula') is-invalid @enderror" placeholder="Identification card" aria-label="Identification card" aria-describedby="addon-wrapping" name="cli_cedula" value="{{ old('cli_cedula') }}" required autocomplete="cli_cedula" autofocus>

                                @error('Cedula')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>   

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                                <label for="email" class="input-group-text" id="addon-wrapping" style="width: 35%;">Correo</label>

                                <input id="email" type="email" class="form-control @error('Correo') is-invalid @enderror" placeholder="Mail" aria-label="Mail" aria-describedby="addon-wrapping" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('Correo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                                <label for="cli_direccion" class="input-group-text" id="addon-wrapping" style="width: 35%;">Dirección</label>

                                <input id="cli_direccion" type="text" class="form-control @error('Direccion') is-invalid @enderror" placeholder="Address" aria-label="Address" aria-describedby="addon-wrapping" name="cli_direccion" value="{{ old('cli_direccion') }}" required autocomplete="cli_direccion" autofocus>

                                @error('Direccion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                                <label for="cli_telefono" class="input-group-text" id="addon-wrapping" style="width: 35%;">Numero celular</label>

                                <input id="cli_telefono" type="number" class="form-control @error('Telefono') is-invalid @enderror" placeholder="Cell phone number" aria-label="Cell phone number" aria-describedby="addon-wrapping" name="cli_telefono" value="{{ old('cli_telefono') }}" required autocomplete="usu_telefono" autofocus>

                                @error('Telefono')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div style="margin-left: 10%; margin-top: 2%;" class="input-group mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
