<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('facturas.index') }}">Lista de Facturas</a></li>
                <li><a href="{{ route('facturas.create') }}">Crear Facturas</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <main>
            @yield('contenido-principal')
        </main>
    </section>
    <footer>
        <div>
            Copyright© 2024 - Instituto Continental
        </div>
    </footer>
</body>

</html>
