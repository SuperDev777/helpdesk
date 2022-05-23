<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $table = 'colaboradores';

    protected $fillable = [
        'area_id',
        'tipoDocumento',
        'numeroDocumento',
        'nombres',
        'apellidoPaterno',
        'apellidoMaterno',
        'correo'
    ];

    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function incidente(){
        return $this->hasMany(Inicidente::class);
    }

}
