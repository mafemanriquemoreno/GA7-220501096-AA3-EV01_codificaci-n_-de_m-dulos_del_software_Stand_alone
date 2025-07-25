<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementoInventario extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'elementos_inventario'; // Le decimos explícitamente el nombre de la tabla

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre_elemento',
        'lote',
        'presentacion',
        'marca',
        'fecha_vencimiento',
        'tipo_elemento',
        'existencias_elemento',
        'laboratorio_id',
        'proveedor_id',
        'categoria_id',
    ];
}