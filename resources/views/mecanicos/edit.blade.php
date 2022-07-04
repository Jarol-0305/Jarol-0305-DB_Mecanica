@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar información mecanicos') }}</div>

                <div class="card-body">
                    <form  action="{{ route('mecanicos.update',$mecanicos->mec_id) }}" method="POST">
                        @csrf

                        <div class="input-group mb-3">
                            <label for="mec_apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="mec_apellido" type="text" value="{{$mecanicos->mec_apellido}}" class="form-control @error('Apellido') is-invalid @enderror" name="mec_apellido" value="{{ old('mec_apellido') }}" required autocomplete="mec_apellido" autofocus>

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
                                <input id="name" type="text" value="{{$mecanicos->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="mec_fecha_nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="mec_fecha_nacimiento" type="date" value="{{$mecanicos->mec_fecha_nacimiento}}" class="form-control @error('Fecha_nacimiento') is-invalid @enderror" name="mec_fecha_nacimiento" value="{{ old('mec_fecha_nacimiento') }}" required autocomplete="mec_fecha_nacimiento">

                                @error('Fecha_nacimiento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>     

                        <div class="input-group mb-3">
                            <label for="mec_cedula" class="col-md-4 col-form-label text-md-right">{{ __('Cédula') }}</label>

                            <div class="col-md-6">
                                <input id="mec_cedula" type="number" value="{{$mecanicos->mec_cedula}}" class="form-control @error('Cedula') is-invalid @enderror" name="mec_cedula" value="{{ old('mec_cedula') }}" required autocomplete="mec_cedula" autofocus>

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
                                <input id="email" type="email" value="{{$mecanicos->email}}" class="form-control @error('Correo') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('Correo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="mec_direccion" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                            <div class="col-md-6">
                                <input id="mec_direccion" type="text" value="{{$mecanicos->mec_direccion}}" class="form-control @error('Direccion') is-invalid @enderror" name="mec_direccion" value="{{ old('mec_direccion') }}" required autocomplete="mec_direccion" autofocus>

                                @error('Direccion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="mec_telefono" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                            <div class="col-md-6">
                                <input id="mec_telefono" type="number" value="{{$mecanicos->mec_telefono}}" class="form-control @error('Telefono') is-invalid @enderror" name="mec_telefono" value="{{ old('mec_telefono') }}" required autocomplete="usu_telefono" autofocus>

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
