<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{
    use HasFactory;

    protected $fillable = [
        'cuenta_id',
        'colaborador_id',
        'tecnico_id',
        'resumen',
        'descripcion',
        'estado',
        'estaSolucionado',
        'fechaSolucion',
        'solucion',
        'observacion'
    ];

    public function cuenta(){
        return $this->belongsTo(Cuenta::class);
    }

    public function colaborador(){
        return $this->belongsTo(Colaborador::class);
    }

    public function Tecnico(){
        return $this->belongsTo(Tecnico::class);
    }

}
