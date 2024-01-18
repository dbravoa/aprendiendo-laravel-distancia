<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>Lista de Facturas</li>
                <li>Crear Facturas</li>
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
