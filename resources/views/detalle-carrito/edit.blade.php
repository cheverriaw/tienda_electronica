@extends('layouts.app')

@section('template_title')
    Update Detalle Carrito
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Detalle Carrito</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('detalle-carritos.update', $detalleCarrito->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('detalle-carrito.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
