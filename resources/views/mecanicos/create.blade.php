@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar') }}</div>

                <div class="card-body">
                    <form  action="{{ route('mecanicos.store') }}" method="POST">
                        @csrf

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                                <label for="mec_apellido" class="input-group-text" id="addon-wrapping" style="width: 35%;">Apellido</label>

                                <input id="mec_apellido" type="text" class="form-control @error('Apellido') is-invalid @enderror" placeholder="Surname" aria-label="Surname" aria-describedby="addon-wrapping" name="mec_apellido" value="{{ old('mec_apellido') }}" required autocomplete="mec_apellido" autofocus>

                                @error('Apellido')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                                <label for="name" class="input-group-text" id="addon-wrapping" style="width: 35%;">Nombre</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" aria-label="Name" aria-describedby="addon-wrapping" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                                <label for="mec_fecha_nacimiento" class="input-group-text" id="addon-wrapping" style="width: 35%;">Fecha de nacimiento</label>

                                <input id="mec_fecha_nacimiento" type="date" class="form-control @error('Fecha_nacimiento') is-invalid @enderror" placeholder="Date of birth" aria-label="Date of birth" aria-describedby="addon-wrapping" name="mec_fecha_nacimiento" value="{{ old('mec_fecha_nacimiento') }}" required autocomplete="mec_fecha_nacimiento">

                                @error('Fecha_nacimiento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>     

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                                <label for="mec_cedula" class="input-group-text" id="addon-wrapping" style="width: 35%;">Cédula</label>

                                <input id="mec_cedula" type="number" class="form-control @error('Cedula') is-invalid @enderror" placeholder="Identification card" aria-label="Identification card" aria-describedby="addon-wrapping" name="mec_cedula" value="{{ old('mec_cedula') }}" required autocomplete="mec_cedula" autofocus>

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
                                <label for="mec_direccion" class="input-group-text" id="addon-wrapping" style="width: 35%;">Dirección</label>

                                <input id="mec_direccion" type="text" class="form-control @error('Direccion') is-invalid @enderror" placeholder="Address" aria-label="Address" aria-describedby="addon-wrapping" name="mec_direccion" value="{{ old('mec_direccion') }}" required autocomplete="mec_direccion" autofocus>

                                @error('Direccion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                                <label for="mec_telefono" class="input-group-text" id="addon-wrapping" style="width: 35%;">Numero celular</label>

                                <input id="mec_telefono" type="number" class="form-control @error('Telefono') is-invalid @enderror" placeholder="Cell phone number" aria-label="Cell phone number" aria-describedby="addon-wrapping" name="mec_telefono" value="{{ old('mec_telefono') }}" required autocomplete="usu_telefono" autofocus>

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
