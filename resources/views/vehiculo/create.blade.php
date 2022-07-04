@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar vehiculo') }}</div>

                <div class="card-body">
                    <form  action="{{route('vehiculo.store')}}" method="POST">
                        @csrf

                        <div class="input-group mb-3">
                            <label for="veh_modelo" class="col-md-4 col-form-label text-md-right">{{ __('Modelo') }}</label>

                            <div class="col-md-6">
                                <input id="veh_modelo" type="text" class="form-control @error('Modelo') is-invalid @enderror" name="veh_modelo" value="{{ old('veh_modelo') }}" required autocomplete="veh_modelo" autofocus>

                                @error('Modelo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <input type="hidden" name="cli_id" id="cli_id" value="{{$clientes->cli_id}}">

                        <div class="input-group mb-3">
                            <label for="veh_marca" class="col-md-4 col-form-label text-md-right">{{ __('Marca') }}</label>

                            <div class="col-md-6">
                                <input id="veh_marca" type="text" class="form-control @error('Marca') is-invalid @enderror" name="veh_marca" value="{{ old('veh_marca') }}" required autocomplete="veh_marca">

                                @error('Marca')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="veh_color" class="col-md-4 col-form-label text-md-right">{{ __('Color') }}</label>

                            <div class="col-md-6">
                                <input id="veh_color" type="text" class="form-control @error('Color') is-invalid @enderror" name="veh_color" value="{{ old('veh_color') }}" required autocomplete="veh_color" autofocus>

                                @error('Color')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="veh_matricula" class="col-md-4 col-form-label text-md-right">{{ __('Matricula') }}</label>

                            <div class="col-md-6">
                                <input id="veh_matricula" type="text" class="form-control @error('Matricula') is-invalid @enderror" name="veh_matricula" value="{{ old('veh_matricula') }}" required autocomplete="veh_matricula">

                                @error('Matricula')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>     

                        <div class="input-group mb-3">
                            <label for="veh_fecha" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de entrada') }}</label>

                            <div class="col-md-6">
                                <input id="veh_fecha" type="date" class="form-control @error('Fecha_entrada') is-invalid @enderror" name="veh_fecha" value="{{ old('veh_fecha') }}" required autocomplete="veh_fecha" autofocus>

                                @error('Fecha_entrada')
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
