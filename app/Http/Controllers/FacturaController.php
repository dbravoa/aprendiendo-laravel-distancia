<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    //

    function index()
    {
        # Trae todos los registros de la base de datos
        $facturas = Factura::orderBy('id', 'desc')->paginate();
        /* ['facturas'=>$facturas] */
        #compact('facturas')
        //Llamando a la vista
        return view("facturas.index", compact('facturas'));
    }
    function show(Factura $factura)
    {
        return view("facturas.show", compact("factura"));
    }
    function create()
    {
        return view("facturas.create");
    }
    function edit(Factura $factura)
    {

        //Vamos a llamar a la vista pero al mismo tiempo enviaremos el parámetro id
        //compact("id") es lo mismo que hacer este array ["id" => $id]
        return view("facturas.edit", compact("factura"));
    }
    function facturaPorAnio($anio = 2024)
    {
        return "Aqui veremos las facturas del año $anio";
    }

    function store(Request $request)
    {
        /* $factura = new Factura;

        $factura->cliente = $request->cliente;
        $factura->empresa_facturadora = $request->empresa_facturadora;
        $factura->monto_total = $request->monto_total;
        $factura->igv = $request->igv;

        $factura->save(); */
        #$request->all();
        $factura = Factura::create($request->all());

        return redirect()->route('facturas.show', $factura);
    }
    function updateAll()
    {
        return "Actualizando todas las facturas";
    }
    function deleteAll()
    {
        return "Eliminando todas las facturas";
    }
    function update(Request $request, Factura $factura)
    {
        /* $factura->cliente = $request->cliente;
        $factura->monto_total = $request->monto_total;
        $factura->empresa_facturadora = $request->empresa_facturadora;
        $factura->igv = $request->igv;

        $factura->save(); */

        $factura->update($request->all());

        return redirect()->route('facturas.show', $factura);
    }

    function destroy(Factura $factura)
    {
        $factura->delete();
        return redirect()->route('facturas.index');
    }
}
