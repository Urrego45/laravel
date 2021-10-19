@extends('dashboard')

@section('contenido')

<div class="container">
    <div class="row">
        <form method="POST" action="{{ route('factura.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre factura</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor de la factura</label>
                <input type="number" class="form-control" id="valor" name="valor">
            </div>
            <button type="submit" class="btn btn-primary">ingresar</button>
        </form>

        <div>
            @foreach ($facturas as $factura)
                <div class="row py-1">
                    <div class="col-md-9">
                        <a href="{{ route('factura.show', ['id' => $factura->id]) }}">{{ $factura->nombre }}</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <form action="{{ route('factura.destroy', [$factura->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
