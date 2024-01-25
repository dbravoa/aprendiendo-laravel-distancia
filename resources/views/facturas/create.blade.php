@extends('template.plantilla')
@section('titulo', 'Crear - Facturas')

@section('contenido-principal')
    <h1>Crear Factura</h1>
    <form action="{{ route('facturas.store') }}" method="POST">
        {{-- Llamaremos al token para enviarlo junto a nuestro request del formulario --}}
        @csrf

        <label>
            Cliente:
            <input type="text" name="cliente" id="">
        </label>
        <br>
        <label>
            Empresa Facturadora:
            <input type="text" name="empresa_facturadora" id="">
        </label>
        <br>
        <label>
            Monto total:
            <input type="number" name="monto_total" id="">
        </label>
        <br>
        <label>
            IGV:
            <input type="number" name="igv" id="">
        </label>
        <br>
        <input type="submit" value="Registrar Factura">
    </form>
@endsection
