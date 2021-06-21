@extends('layouts.app')

@section('template_title')
    {{ $compra->name ?? 'Show Compra' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Compra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('compras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $compra->id_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Id Carrito:</strong>
                            {{ $compra->id_carrito }}
                        </div>
                        <div class="form-group">
                            <strong>Id Pago:</strong>
                            {{ $compra->id_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $compra->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
