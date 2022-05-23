@extends('layouts.app')

@section('title', 'Incidentes | Lista')

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
        <a href="{{ route('incidentes.create') }}" class="btn btn-success">Nuevo</a>
    </div>
</div>

<div class="table-responsive mt-2">
    <table class="table table-bordered border-secondary align-middle">
        <thead class="table-dark">
            <th>NÚMERO</th>
            <th>COLABORADOR</th>
            <th>TECNICO</th>
            <th>RESUMEN</th>
            <th>ESTADO</th>
            <th>ACCIONES</th>
        </thead>
        <tbody class="align-middle">
            @foreach($incidentes as $incidente)
            <tr>
                <td>{{ $incidente->id }}</td>
                <td>{{ $incidente->colaborador->numeroDocumento }}</td>
                <td>{{ $incidente->tecnico->apellidoPaterno }} {{ $incidente->tecnico->apellidoMaterno }} {{ $incidente->tecnico->nombres }}</td>
                <td>{{ $incidente->resumen }}</td>
                <td>{{ $incidente->estado }}</td>
                <td><a href="" class="btn btn-primary">Editar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection