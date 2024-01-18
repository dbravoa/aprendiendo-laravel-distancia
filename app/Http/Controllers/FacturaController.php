<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    //

    function index()
    {
        //Llamando a la vista
        return view("facturas.index");
    }
    function show($id)
    {
        return view("facturas.show", compact("id"));
    }
    function create()
    {
        return view("facturas.create");
    }
    function update($id)
    {
        //Vamos a llamar a la vista pero al mismo tiempo enviaremos el parámetro id
        //compact("id") es lo mismo que hacer este array ["id" => $id]
        return view("facturas.update", compact("id"));
    }
    function facturaPorAnio($anio = 2024)
    {
        return "Aqui veremos las facturas del año $anio";
    }

    function proccess()
    {
        return "Estoy registrando";
    }
    function updateAll()
    {
        return "Actualizando todas las facturas";
    }
    function deleteAll()
    {
        return "Eliminando todas las facturas";
    }
}
