@extends('layouts.app')

@section('title', 'Incidentes | Nuevo')

@section('content')

@if($mensaje = session('success'))
<div class="alert alert-success mt-2 mensaje-alerta">
    {{ $mensaje }}
</div>
@endif

@if($mensaje = session('error'))
<div class="alert alert-danger mt-2 mensaje-alerta">
    {{ $mensaje }}
</div>
@endif

@php

use Carbon\Carbon;

$today = Carbon::now()->setTime(0,0,0,0);

@endphp

<div class="mt-5">
    <form action="{{ route('incidentes.store') }}" method="POST">
        @csrf
        <input type="hidden" name="cuenta_id" value="">
        <div class="row mb-1">
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12">
                        <label for="">Usuario Afectado</label>
                    </div>
                    <div class="col-12">
                        <select name="colaborador_id" class="form-select">
                            <option selected disabled>Seleccione</option>
                            @foreach($colaboradores as $colaborador)
                            <option value="{{ $colaborador->id }}" {{ old('colaborador_id') == $colaborador->id ? 'selected' : '' }}>{{ $colaborador->apellidoPaterno }} {{ $colaborador->apellidoMaterno }} {{ $colaborador->nombres }}</option>
                            @endforeach
                        </select>
                        @error('colaborador_id')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12">
                        <label for="">Técnico</label>
                    </div>
                    <div class="col-12">
                        <select name="tecnico_id" class="form-select">
                            <option selected disabled>Seleccione</option>
                            @foreach($tecnicos as $tecnico)
                            <option value="{{ $tecnico->id }}" {{ old('tecnico_id') == $tecnico->id ? 'selected' : '' }}>{{ $tecnico->apellidoPaterno }} {{ $tecnico->apellidoMaterno }} {{ $tecnico->nombres }}</option>
                            @endforeach
                        </select>
                        @error('tecnico_id')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-1">
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12">
                        <label for="">Usuario Afectado</label>
                    </div>
                    <div class="col-12">
                        <input type="text" name="fechaCreacion" class="form-control" value="{{ $today  }}" disabled>
                        @error('fechaCreacion')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12">
                        <label for="">Estado</label>
                    </div>
                    <div class="col-12">
                        <select name="estado" class="form-select">
                            <option selected disabled>Seleccione</option>
                            <option value="REGISTRADO" {{ old('estado') == 'REGISTRADO' ? 'selected' : '' }}>REGISTRADO</option>
                            <option value="ASIGNADO" {{ old('estado') == 'ASIGNADO' ? 'selected' : '' }}>ASIGNADO</option>
                            <option value="PENDIENTE" {{ old('estado') == 'PENDIENTE' ? 'selected' : '' }}>PENDIENTE</option>
                            <option value="EN PROCESO" {{ old('estado') == 'EN PROCESO' ? 'selected' : '' }}>EN PROCESO</option>
                            <option value="SOLUCIONADO" {{ old('estado') == 'EN PROCESO' ? 'selected' : '' }}>SOLUCIONADO</option>
                            <option value="CERRADO" {{ old('estado') == 'EN PROCESO' ? 'selected' : '' }}>CERRADO</option>
                        </select>
                        @error('estado')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-1">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <label for="">Resumen</label>
                    </div>
                    <div class="colo-12">
                        <input type="text" name="resumen" class="form-control">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-1">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <label for="">Descripción</label>
                    </div>
                    <div class="colo-12">
                        <textarea name="descripcion" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-1">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <label for="">Observación</label>
                    </div>
                    <div class="colo-12">
                        <textarea name="observacion" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-1">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <label for="">Solución</label>
                    </div>
                    <div class="colo-12">
                        <textarea name="solucion" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </div>

    </form>
</div>
@endsection