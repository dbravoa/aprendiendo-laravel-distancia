@extends('template.plantilla')
@section('titulo', 'Inicio - Facturas')

@section('contenido-principal')

    <h1>Lista de Facturas</h1>
    <table>
        <thead>
            <th>Id</th>
            <th>Cliente</th>
            <th>Empresa Facturadora</th>
            <th>Monto Total</th>
            <th>IGV</th>
        </thead>
        <tbody>
            @foreach ($facturas as $factura)
                <tr>
                    {{-- id del registro --}}
                    <td>{{ $factura->id }}</td>
                    <td>{{ $factura->cliente }}</td>
                    <td>{{ $factura->empresa_facturadora }}</td>
                    <td>S/ {{ $factura->monto_total }}</td>
                    <td>S/ {{ $factura->igv }}</td>
                    <td><a href="{{ route('facturas.show', $factura->id) }}">Ver Detalle de Factura</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $facturas->links() }}

@endsection
