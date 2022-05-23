@extends('layouts.app')

@section('title', 'Colaboradores | Nuevo')

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

<div class="mt-5">
    <form action="{{ route('colaboradores.store') }}" method="POST">
        @csrf
        <!--
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="row">
                    <div class="col-12">
                        <label for="">Área</label>
                    </div>
                    <div class="col-12">
                        
                    </div>
                </div>
            </div>
        </div>
-->


        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="row">
                    <div class="col-12">
                        <label for="">Tipo Documento</label>
                    </div>
                    <div class="col-12">
                        <select name="tipoDocumento" class="form-select">
                            <option {{ old('tipoDocumento') == "DNI" ? 'selected' : '' }} value="DNI">DNI</option>
                            <option {{ old('tipoDocumento') == "CE" ? 'selected' : '' }} value="CE">CE</option>
                            <option {{ old('tipoDocumento') == "PASAPORTE" ? 'selected' : '' }} value="PASAPORTE">PASAPORTE</option>
                        </select>
                        @error('tipoDocumento')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="row">
                    <div class="col-12">
                        <label for="">N° Documento</label>
                    </div>
                    <div class="col-12">
                        <input type="text" name="numeroDocumento" class="form-control" value="{{ old('numeroDocumento') }}">
                        @error('numeroDocumento')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="row">
                    <div class="col-12">
                        <label for="">Nombres</label>
                    </div>
                    <div class="col-12">
                        <input type="text" name="nombres" class="form-control" value="{{ old('nombres') }}">
                        @error('nombres')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="row">
                    <div class="col-12">
                        <label for="">Apellido Paterno</label>
                    </div>
                    <div class="col-12">
                        <input type="text" name="apellidoPaterno" class="form-control" value="{{ old('apellidoPaterno') }}">
                        @error('apellidoPaterno')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="row">
                    <div class="col-12">
                        <label for="">Apellido Materno</label>
                    </div>
                    <div class="col-12">
                        <input type="text" name="apellidoMaterno" class="form-control" value="{{ old('apellidoMaterno') }}">
                        @error('apellidoMaterno')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="row">
                    <div class="col-12">
                        <label for="">Correo</label>
                    </div>
                    <div class="col-12">
                        <input type="email" name="correo" class="form-control" value="{{ old('correo') }}">
                        @error('correo')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="row">
                    <div class="col-12">
                        <label for="">Área</label>
                    </div>
                    <div class="col-12">
                        <select name="area_id" class="form-select">
                            <option disabled selected>Seleccione</option>
                            @foreach($areas as $area)
                            <option {{ old('area_id') == $area->id ? 'selected' : '' }} value="{{ $area->id }}">{{ $area->nombre }}</option>
                            @endforeach
                        </select>
                        @error('area_id')
                        <span>{{ $message }}</span>
                        @enderror
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