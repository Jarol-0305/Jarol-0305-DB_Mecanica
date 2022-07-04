@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar información registro') }}</div>

                <div class="card-body">
                    <form  action="{{route('clientes.update',$clientes->cli_id)}}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <label for="cli_apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="cli_apellido" type="text" value="{{$clientes->cli_apellido}}" class="form-control @error('Apellido') is-invalid @enderror" name="cli_apellido" value="{{ old('cli_apellido') }}" required autocomplete="cli_apellido">

                                @error('Apellido')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="cli_nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="cli_nombre" type="text" value="{{$clientes->cli_nombre}}" class="form-control @error('cli_nombre') is-invalid @enderror" name="cli_nombre" value="{{ old('cli_nombre') }}" required autocomplete="name" autofocus>

                                @error('cli_nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>   

                        <div class="input-group mb-3">
                            <label for="cli_cedula" class="col-md-4 col-form-label text-md-right">{{ __('Cédula') }}</label>

                            <div class="col-md-6">
                                <input id="cli_cedula" type="number" value="{{$clientes->cli_cedula}}" class="form-control @error('Cedula') is-invalid @enderror" name="cli_cedula" value="{{ old('cli_cedula') }}" required autocomplete="cli_cedula" autofocus>

                                @error('Cedula')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>   


                        <div class="input-group mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" value="{{$clientes->email}}" class="form-control @error('Correo') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('Correo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="cli_direccion" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                            <div class="col-md-6">
                                <input id="cli_direccion" type="text" value="{{$clientes->cli_direccion}}" class="form-control @error('Direccion') is-invalid @enderror" name="cli_direccion" value="{{ old('cli_direccion') }}" required autocomplete="cli_direccion" autofocus>

                                @error('Direccion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="cli_telefono" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                            <div class="col-md-6">
                                <input id="cli_telefono" type="number" value="{{$clientes->cli_telefono}}" class="form-control @error('Telefono') is-invalid @enderror" name="cli_telefono" value="{{ old('cli_telefono') }}" required autocomplete="cli_telefono" autofocus>

                                @error('Telefono')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div style="text-align: center;" class="input-group mb-3">
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
