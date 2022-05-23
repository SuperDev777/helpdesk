@extends('layouts.app')

@section('title', 'Colaboradores | Lista')

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

<div class="row mt-5">
    <div class="col">
        <a href="{{ route('colaboradores.create') }}" class="btn btn-success">Nuevo</a>
    </div>
</div>

<div class="table-responsive mt-2">
    <table class="table table-bordered border-secondary align-middle">
        <thead class="table-dark">
            <th>T. DOCUMENTO</th>
            <th>N° DOCUMENTO</th>
            <th>COLABORADOR</th>
            <th>CORREO</th>
            <th>ÁREA</th>
            <th>ACCIONES</th>
        </thead>
        <tbody class="align-middle">
            @foreach($colaboradores as $colaborador)
            <tr>
                <td>{{ $colaborador->tipoDocumento }}</td>
                <td>{{ $colaborador->numeroDocumento }}</td>
                <td>{{ $colaborador->apellidoPaterno }} {{ $colaborador->apellidoMaterno }} {{ $colaborador->nombres }}</td>
                <td>{{ $colaborador->correo }}</td>
                <td>{{ $colaborador->area->nombre }}</td>
                <td><a href="{{ route('colaboradores.edit', $colaborador->id) }}" class="btn btn-primary">Editar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection