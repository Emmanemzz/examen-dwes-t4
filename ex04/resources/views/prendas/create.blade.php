@extends('layouts.app')

@section('title', 'Crear Prenda')

@section('content')
    <h2>Crear Nueva Prenda</h2>

    <form action="{{ route('prendas.store') }}" method="POST">
        @csrf

        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
        <br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea name="descripcion" id="descripcion" rows="4" required>{{ old('descripcion') }}</textarea>
        <br><br>

        <label for="precio">Precio (€):</label><br>
        <input type="number" name="precio" id="precio" value="{{ old('precio') }}" min="5" max="999.99" step="0.01" required>
        <br><br>

        <button type="submit">Guardar</button>
        <a href="{{ route('prendas.index') }}">Cancelar</a>
    </form>
@endsection
