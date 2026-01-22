@extends('layouts.app')

@section('title', 'Modificar Prenda')

@section('content')
    <h2>Modificar Prenda</h2>

    <form action="{{ route('prendas.update', $prenda->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $prenda->nombre) }}" required>
        <br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea name="descripcion" id="descripcion" rows="4" required>{{ old('descripcion', $prenda->descripcion) }}</textarea>
        <br><br>

        <label for="precio">Precio (€):</label><br>
        <input type="number" name="precio" id="precio" value="{{ old('precio', $prenda->precio) }}" min="5" max="999.99" step="0.01" required>
        <br><br>

        <button type="submit">Actualizar</button>
        <a href="{{ route('prendas.index') }}">Cancelar</a>
    </form>
@endsection
