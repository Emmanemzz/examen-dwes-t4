<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tienda de Ropa')</title>
</head>
<body>
    <header>
        <h1>Tienda de Ropa</h1>
        <nav>
            <a href="{{ route('prendas.index') }}">Listado de prendas</a>
            <a href="{{ route('prendas.create') }}">Crear prenda</a>
        </nav>
    </header>

    <main>
        @if(session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
