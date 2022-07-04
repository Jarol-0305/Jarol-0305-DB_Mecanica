@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar información registro') }}</div>

                <div class="card-body">
                    <form  action="{{route('usuarios.update',$users->usu_id)}}" method="POST">
                        @csrf

                        <div class="input-group mb-3">
                            <label for="usu_usuario" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="usu_usuario" type="text" value="{{$users->usu_usuario}}" class="form-control @error('Usuario') is-invalid @enderror" name="usu_usuario" value="{{ old('usu_usuario') }}" required autocomplete="usu_usuario" autofocus>

                                @error('Usuario')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="usu_apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="usu_apellido" type="text" value="{{$users->usu_apellido}}" class="form-control @error('Apellido') is-invalid @enderror" name="usu_apellido" value="{{ old('usu_apellido') }}" required autocomplete="usu_apellido">

                                @error('Apellido')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" value="{{$users->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="usu_fecha_nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="usu_fecha_nacimiento" type="date" value="{{$users->usu_fecha_nacimiento}}" class="form-control @error('Fecha_nacimiento') is-invalid @enderror" name="usu_fecha_nacimiento" value="{{ old('usu_fecha_nacimiento') }}" required autocomplete="usu_fecha_nacimiento">

                                @error('Fecha_nacimiento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>     

                        <div class="input-group mb-3">
                            <label for="usu_cedula" class="col-md-4 col-form-label text-md-right">{{ __('Cédula') }}</label>

                            <div class="col-md-6">
                                <input id="usu_cedula" type="number" value="{{$users->usu_cedula}}" class="form-control @error('Cedula') is-invalid @enderror" name="usu_cedula" value="{{ old('usu_cedula') }}" required autocomplete="usu_cedula" autofocus>

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
                                <input id="email" type="email" value="{{$users->email}}" class="form-control @error('Correo') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('Correo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="usu_direccion" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                            <div class="col-md-6">
                                <input id="usu_direccion" type="text" value="{{$users->usu_direccion}}" class="form-control @error('Direccion') is-invalid @enderror" name="usu_direccion" value="{{ old('usu_direccion') }}" required autocomplete="usu_direccion" autofocus>

                                @error('Direccion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="usu_telefono" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                            <div class="col-md-6">
                                <input id="usu_telefono" type="number" value="{{$users->usu_telefono}}" class="form-control @error('Telefono') is-invalid @enderror" name="usu_telefono" value="{{ old('usu_telefono') }}" required autocomplete="usu_telefono" autofocus>

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
                                    {{ __('Guardar') }}
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
