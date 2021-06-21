<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_cliente') }}
            {{ Form::text('id_cliente', $compra->id_cliente, ['class' => 'form-control' . ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_carrito') }}
            {{ Form::text('id_carrito', $compra->id_carrito, ['class' => 'form-control' . ($errors->has('id_carrito') ? ' is-invalid' : ''), 'placeholder' => 'Id Carrito']) }}
            {!! $errors->first('id_carrito', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_pago') }}
            {{ Form::text('id_pago', $compra->id_pago, ['class' => 'form-control' . ($errors->has('id_pago') ? ' is-invalid' : ''), 'placeholder' => 'Id Pago']) }}
            {!! $errors->first('id_pago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $compra->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>