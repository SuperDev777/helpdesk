<form action="{{ route('colaboradores.update') }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    <select name="area_id">
        <option disabled selected>Seleccione</option>
        @foreach($areas as $area)
        <option value="{{ $area->id }}" {{ old('area_id', $colaborador->area_id) == $area->id ? 'selected' : '' }}>{{ $area->nombre }}</option>
        @endforeach
    </select>
    <input type="hidden" name="id" value="{{ $colaborador->id }}">
    <input type="text" name="tipoDocumento" value="{{ old('tipoDocumento', $colaborador->tipoDocumento) }}">
    <input type="text" name="numeroDocumento" value="{{ old('numeroDocumento', $colaborador->numeroDocumento) }}">
    <input type="text" name="nombres" value="{{ old('nombres', $colaborador->nombres) }}">
    <input type="text" name="apellidoPaterno" value="{{ old('apellidoPaterno', $colaborador->apellidoPaterno) }}">
    <input type="text" name="apellidoMaterno" value="{{ old('apellidoMaterno', $colaborador->apellidoMaterno) }}">
    <input type="email" name="correo" value="{{ old('correo', $colaborador->correo) }}">
    <button type="submit">Guardar</button>
</form>