@extends('template.plantilla')
@section('titulo', 'Actualizar - Facturas')

@section('contenido-principal')
    <h1>Editar Factura</h1>
    <form action="{{ route('facturas.update', $factura) }}" method="POST">
        {{-- Llamaremos al token para enviarlo junto a nuestro request del formulario --}}
        @csrf

        @method('put')

        <label>
            Cliente:
            <input type="text" name="cliente" id="" value="{{ $factura->cliente }}">
        </label>
        <br>
        <label>
            Empresa Facturadora:
            <input type="text" name="empresa_facturadora" id="" value="{{ $factura->empresa_facturadora }}">
        </label>
        <br>
        <label>
            Monto total:
            <input type="number" name="monto_total" id="" value="{{ $factura->monto_total }}">
        </label>
        <br>
        <label>
            IGV:
            <input type="number" name="igv" id="" value="{{ $factura->igv }}">
        </label>
        <br>
        <input type="submit" value="Actualizar Factura">
    </form>
@endsection
