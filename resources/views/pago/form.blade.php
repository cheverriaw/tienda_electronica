<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo_de_pago') }}
            {{ Form::text('tipo_de_pago', $pago->tipo_de_pago, ['class' => 'form-control' . ($errors->has('tipo_de_pago') ? ' is-invalid' : ''), 'placeholder' => 'Tipo De Pago']) }}
            {!! $errors->first('tipo_de_pago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('permitido') }}
            {{ Form::text('permitido', $pago->permitido, ['class' => 'form-control' . ($errors->has('permitido') ? ' is-invalid' : ''), 'placeholder' => 'Permitido']) }}
            {!! $errors->first('permitido', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>