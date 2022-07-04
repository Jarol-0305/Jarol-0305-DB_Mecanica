@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reparacion de vehiculo') }}</div>

                <div class="card-body">
                    <form  action="{{route('reparacion.update',$reparacion->rep_id)}}" method="POST">
                        @csrf

                        <div class="input-group mb-3">
                            <label for="rep_descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                            <div class="col-md-6">
                                <input id="rep_descripcion" type="text" value="{{$reparacion->rep_descripcion}}" class="form-control @error('Descripcion') is-invalid @enderror" name="rep_descripcion" value="{{ old('rep_descripcion') }}" required autocomplete="rep_descripcion" autofocus>

                                @error('Descripcion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                

                        <div class="input-group mb-3">
                            <label for="rep_costo" class="col-md-4 col-form-label text-md-right">{{ __('Costo') }}</label>

                            <div class="col-md-6">
                                <input id="rep_costo" type="text" value="{{$reparacion->rep_costo}}" class="form-control @error('Costo') is-invalid @enderror" name="rep_costo" value="{{ old('rep_costo') }}" required autocomplete="rep_costo">

                                @error('Costo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="mec_id" class="col-md-4 col-form-label text-md-right">{{ __('Mecanicos') }}</label>

                            <div class="col-md-6">
                             <select id="mec_id" name="mec_id" class="form-control">
                                @foreach($mecanicos as $mec)
                                @if($mec->mec_id==$reparacion->mec_id)
                                <option selected value="{{$mec->mec_id}}">{{$mec->name}}</option>

                                @else
                                <option value="{{$mec->mec_id}}">{{$mec->name}}</option>
                                @endif
                                
                                @endforeach
                            </select>
                            @error('mec_id')
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
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
