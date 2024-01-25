<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    /* Configurando por el nombre de la tabla a la que pertenece el modelo */
    // protected $table="comprobantes";

    /*     protected $fillable =
    [
        'cliente',
        'monto_total',
        'igv',
        'empresa_facturadora'
    ]; */
    protected $guarded = [];
}
