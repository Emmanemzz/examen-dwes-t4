@extends('layouts.app')
 
@section('title', 'Confirmar Eliminación')
 
@section('content')
<h1>¿Eliminar esta prenda?</h1>
 
<p><strong>Nombre:</strong> {{ $prenda->nombre }}</p>
<p><strong>Descripción:</strong> {{ $prenda->descripcion }}</p>
<p><strong>Precio:</strong> {{ number_format($prenda->precio, 2) }} €</p>
 
<p>Esta acción no se puede deshacer.</p>
 
<form action="{{ route('prendas.destroy', $prenda->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Sí, eliminar</button>
    <a href="{{ route('prendas.show', $prenda->id) }}">Cancelar</a>
</form>
@endsection