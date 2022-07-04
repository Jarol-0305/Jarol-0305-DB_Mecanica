@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reparacion de vehiculo') }}</div>

                <div class="card-body">
                    <form  action="{{route('reparacion.store')}}" method="POST">
                        @csrf

                        <div class="input-group mb-3">
                            <label for="rep_descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                            <div class="col-md-6">
                                <input id="rep_descripcion" type="text" class="form-control @error('Descripcion') is-invalid @enderror" name="rep_descripcion" value="{{ old('rep_descripcion') }}" required autocomplete="rep_descripcion" autofocus>

                                @error('Descripcion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <input type="hidden" name="veh_id" id="veh_id" value="{{$vehiculo->veh_id}}">

                        <div class="input-group mb-3">
                            <label for="rep_costo" class="col-md-4 col-form-label text-md-right">{{ __('Costo') }}</label>

                            <div class="col-md-6">
                                <input id="rep_costo" type="number" step="0.001" class="form-control @error('Costo') is-invalid @enderror" name="rep_costo" value="{{ old('rep_costo') }}" required autocomplete="rep_costo">

                                @error('Costo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="input-group mb-3">
                            <label for="rep_fecha" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de registro') }}</label>

                            <div class="col-md-6">
                                <input id="rep_fecha" type="date" class="form-control @error('rep_fecha') is-invalid @enderror" name="rep_fecha" value="{{ old('rep_fecha') }}" required autocomplete="rep_fecha">

                                @error('rep_fecha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="mec_id" class="col-md-4 col-form-label text-md-right">{{ __('Mecanicos') }}</label>

                            <div class="col-md-6">
                             <select id="mec_id" name="mec_id" class="form-control" id="validationCustom04" required>
                                <option  selected disabled value="">Elija un mecanico</option>
                                @foreach($mecanicos as $mec)
                                <option value="{{$mec->mec_id}}">
                                    {{$mec->name}}
                                </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Seleccione un mecanico.
                            </div>
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
