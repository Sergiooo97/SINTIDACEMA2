<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materiales extends Model
{
    protected $fillable = [
        'id_partida','numero_orden','lugar_entrega',
        'N_partida','cantidad','unidad',
        'grupos','partes','descripcion','fecha_entrada','fecha_salida',
        'precio','importe', 
    ];
    use HasFactory;

    public function scopeGrupo($query, $grupo){
        if($grupo)
        return $query->where('materiales.grupos', 'LIKE', "%$grupo%" );
    }

}
