@extends('layouts.app')

@section('template_title')
    {{ $detalleCarrito->name ?? 'Show Detalle Carrito' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Detalle Carrito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-carritos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Carrito:</strong>
                            {{ $detalleCarrito->id_carrito }}
                        </div>
                        <div class="form-group">
                            <strong>Id Productos:</strong>
                            {{ $detalleCarrito->id_productos }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detalleCarrito->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $detalleCarrito->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Subtotal:</strong>
                            {{ $detalleCarrito->subtotal }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
