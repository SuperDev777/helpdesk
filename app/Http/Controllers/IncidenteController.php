<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use App\Models\Incidente;
use App\Models\Tecnico;
use Illuminate\Http\Request;

class IncidenteController extends Controller
{

    public function index(){
        $incidentes = Incidente::get();
        return view('incidentes.index', ['incidentes' => $incidentes]);
    }

    public function create(){
        $colaboradores = Colaborador::get();
        $tecnicos = Tecnico::get();
        return view('incidentes.create', ['colaboradores' => $colaboradores, 'tecnicos' => $tecnicos]);
    }

    public function store(Request $request){

        $incidente = Incidente::create([
            //'cuenta_id' => $request->cuenta_id,
            'cuenta_id' => 1,
            'colaborador_id' => $request->colaborador_id,
            'tecnico_id' => $request->tecnico_id,
            'resumen' => $request->resumen,
            'descripcion' => $request->descripcion,
            'estado' => $request->estado,
            'estaSolucionado' => 'N',
            'fechaSolucion' => '2022-05-22',
            'solucion' => $request->solucion,
            'observacion' => $request->observacion
        ]);

        return redirect()->route('incidentes.index')->with('success', 'El colaborador fue registrado.');

       
    }



}
