@extends('dashboard')

@section('contenido')

<div class="container">
    <div class="row">
        <form method="POST" action="{{ route('factura.update', ['id' => $factura->id]) }}">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre factura</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $factura->nombre }}">
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor de la factura</label>
                <input type="number" class="form-control" id="valor" name="valor" value="{{ $factura->valor }}">
            </div>
            <button type="submit" class="btn btn-primary">actualizar</button>
        </form>

@endsection
