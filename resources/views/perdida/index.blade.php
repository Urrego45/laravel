@extends('dashboard')

@section('contenido')

    <div class="container">
        @foreach ($perdidas as $perdida)
                <div class="row py-1">
                    <div class="col-md-9">
                        ID FACTURA
                        <p>{{ $perdida->id_facturas }}</p>
                    </div>
                    <div class="col-md-9">
                        NOMBRE
                        <p>{{ $perdida->nombre }}</p>
                    </div>
                    <div class="col-md-9">
                        NOMBRE
                        <p>{{ $perdida->valor }}</p>
                    </div>
                </div>
                <div class="col-md-9">
                    <form action="{{ route('perdida.destroy', [$perdida->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Recuperar</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection