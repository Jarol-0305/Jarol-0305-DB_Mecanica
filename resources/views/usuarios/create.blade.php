@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar usuario') }}</div>

                <div class="card-body">
                    <form  action="{{route('usuarios.store')}}" method="POST">
                        @csrf

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 1%;"> 
                            <div class="input-group">
                                <label for="usu_usuario" class="input-group-text" id="addon-wrapping" style="width: 35%;">Nombre de usuario</label>

                                <input id="usu_usuario" type="text" class="form-control @error('Usuario') is-invalid @enderror" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="usu_usuario" value="{{ old('usu_usuario') }}" required autocomplete="usu_usuario" autofocus>

                                @error('Usuario')
                                <span class="alert alert-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                                <label for="usu_apellido" class="input-group-text" id="addon-wrapping" style="width: 35%;">Apellido</label>
                                
                                <input id="usu_apellido" type="text" class="form-control @error('Apellido') is-invalid @enderror" placeholder="Surname" aria-label="Surname" aria-describedby="addon-wrapping" name="usu_apellido" value="{{ old('usu_apellido') }}" required autocomplete="usu_apellido">

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
                                <label for="usu_fecha_nacimiento" class="input-group-text" id="addon-wrapping" style="width: 35%;">Fecha de nacimiento</label>

                                <input id="usu_fecha_nacimiento" type="date" class="form-control @error('Fecha_nacimiento') is-invalid @enderror" placeholder="Date of birth" aria-label="Date of birth" aria-describedby="addon-wrapping" name="usu_fecha_nacimiento" value="{{ old('usu_fecha_nacimiento') }}" required autocomplete="usu_fecha_nacimiento">

                                @error('Fecha_nacimiento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>     

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                                <label for="usu_cedula" class="input-group-text" id="addon-wrapping" style="width: 35%;">Cedula</label>

                                
                                <input id="usu_cedula" type="number" class="form-control @error('Cedula') is-invalid @enderror" placeholder="Identification card" aria-label="Identification card" aria-describedby="addon-wrapping" name="usu_cedula" value="{{ old('usu_cedula') }}" required autocomplete="usu_cedula" autofocus>

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
                                <label for="usu_direccion" class="input-group-text" id="addon-wrapping" style="width: 35%;">Direccion</label>

                                
                                <input id="usu_direccion" type="text" class="form-control @error('Direccion') is-invalid @enderror" placeholder="Address" aria-label="Address" aria-describedby="addon-wrapping" name="usu_direccion" value="{{ old('usu_direccion') }}" required autocomplete="usu_direccion" autofocus>

                                @error('Direccion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                                <label for="usu_telefono" class="input-group-text" id="addon-wrapping" style="width: 35%;">Numero celular</label>

                                
                                <input id="usu_telefono" type="number" class="form-control @error('Telefono') is-invalid @enderror" placeholder="Cell phone number" aria-label="Cell phone number" aria-describedby="addon-wrapping" name="usu_telefono" value="{{ old('usu_telefono') }}" required autocomplete="usu_telefono" autofocus>

                                @error('Telefono')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                                <label for="password" class="input-group-text" id="addon-wrapping" style="width: 35%;">Contraseña</label>

                                
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8" style="margin-left: 16%; margin-top: 2%;"> 
                            <div class="input-group">
                                <label for="password-confirm" class="input-group-text" id="addon-wrapping" style="width: 35%;">Confirmar contraseña</label>

                                
                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" aria-label="Confirm password" aria-describedby="addon-wrapping" name="password_confirmation" required autocomplete="new-password">
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
