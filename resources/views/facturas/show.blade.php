@extends('template.plantilla')
@section('titulo', 'Detalle - Facturas')

@section('contenido-principal')

    <a href="{{ route('facturas.edit', $factura) }}">Editar Factura</a>
    <form action="{{ route('facturas.destroy', $factura) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Eliminar Factura">
    </form>
    <h1>Esta es la factura {{ $factura->id }}</h1>
    <ul>
        <li>Cliente: {{ $factura->cliente }}</li>
        <li>Empresa Facturadora: {{ $factura->empresa_facturadora }}</li>
        <li>Monto Total: S/ {{ $factura->monto_total }}</li>
        <li>IGV: S/ {{ $factura->igv }}</li>
    </ul>
@endsection
