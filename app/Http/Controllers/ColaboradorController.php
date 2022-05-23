<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreColaboradorRequest;
use App\Models\Area;
use App\Models\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{

    public function index()
    {
        $colaboradores = Colaborador::get();
        return view('colaboradores.index', ['colaboradores' => $colaboradores]);
    }

    public function create()
    {
        $areas = Area::get();
        return view('colaboradores.create', ['areas' => $areas]);
    }

    public function store(StoreColaboradorRequest $request)
    {

        $colaborador = Colaborador::create([
            'area_id' => $request->area_id,
            'tipoDocumento' => $request->tipoDocumento,
            'numeroDocumento' => $request->numeroDocumento,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'apellidoPaterno' => $request->apellidoPaterno,
            'apellidoMaterno' => $request->apellidoMaterno,
            'correo' => $request->correo,
        ]);

        return redirect()->route('colaboradores.index')->with('success', 'El colaborador fue registrado.');
    }

    public function edit($id)
    {
        $areas = Area::get();
        $colaborador = Colaborador::find($id);
        return view('colaboradores.edit', ['areas' => $areas, 'colaborador' => $colaborador]);
    }

    public function update(Request $request)
    {

        $colaborador = Colaborador::find($request->id);

        $colaborador->area_id = $request->area_id;
        $colaborador->tipoDocumento = $request->tipoDocumento;
        $colaborador->numeroDocumento = $request->numeroDocumento;
        $colaborador->nombres = $request->nombres;
        $colaborador->apellidoPaterno = $request->apellidoPaterno;
        $colaborador->apellidoMaterno = $request->apellidoMaterno;
        $colaborador->correo = $request->correo;

        $colaborador->save();

        return redirect()->route('colaboradores.index')->with('success', 'El colaborador fue actualizado.');

    }
}
