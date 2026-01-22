@extends('layouts.app')

@section('title', 'Listado de Prendas')

@section('content')
    <h2>Listado de Prendas</h2>

    @if($prendas->isEmpty())
        <p>No hay prendas registradas</p>
    @else
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($prendas as $prenda)
                    <tr>
                        <td>{{ $prenda->id }}</td>
                        <td>{{ $prenda->nombre }}</td>
                        <td>{{ $prenda->descripcion }}</td>
                        <td>{{ number_format($prenda->precio, 2) }} €</td>
                        <td>
                            <a href="{{ route('prendas.show', $prenda->id) }}">Ver</a>
                            <a href="{{ route('prendas.edit', $prenda->id) }}">Modificar</a>
                            <form action="{{ route('prendas.destroy', $prenda->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('¿Estás seguro de eliminar esta prenda?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection