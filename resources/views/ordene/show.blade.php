@extends('layouts.app')

@section('template_title')
    {{ $ordene->name ?? 'Show Ordene' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ordene</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ordenes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Carrito:</strong>
                            {{ $ordene->id_carrito }}
                        </div>
                        <div class="form-group">
                            <strong>Id Productos:</strong>
                            {{ $ordene->id_productos }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $ordene->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $ordene->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Subtotal:</strong>
                            {{ $ordene->subtotal }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
