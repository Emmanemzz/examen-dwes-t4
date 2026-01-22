@extends('layouts.app')

@section('title', 'Detalle de Prenda')

@section('content')
    <h2>Detalle de Prenda</h2>

    <p><strong>ID:</strong> {{ $prenda->id }}</p>
    <p><strong>Nombre:</strong> {{ $prenda->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $prenda->descripcion }}</p>
    <p><strong>Precio:</strong> {{ number_format($prenda->precio, 2) }} €</p>

    <div>
        <a href="{{ route('prendas.edit', $prenda->id) }}">Modificar</a>
        <form action="{{ route('prendas.destroy', $prenda->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('¿Estás seguro de eliminar esta prenda?');">
            @csrf
            @method('DELETE')
            <button type="submit">Borrar</button>
        </form>
        <a href="{{ route('prendas.index') }}">Volver al listado</a>
    </div>
@endsection