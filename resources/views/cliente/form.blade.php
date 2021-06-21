<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $cliente->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $cliente->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('identificacion') }}
            {{ Form::text('identificacion', $cliente->identificacion, ['class' => 'form-control' . ($errors->has('identificacion') ? ' is-invalid' : ''), 'placeholder' => 'Identificacion']) }}
            {!! $errors->first('identificacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $cliente->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $cliente->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pais') }}
            {{ Form::text('pais', $cliente->pais, ['class' => 'form-control' . ($errors->has('pais') ? ' is-invalid' : ''), 'placeholder' => 'Pais']) }}
            {!! $errors->first('pais', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $cliente->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $cliente->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tarjeta_de_credito') }}
            {{ Form::text('tarjeta_de_credito', $cliente->tarjeta_de_credito, ['class' => 'form-control' . ($errors->has('tarjeta_de_credito') ? ' is-invalid' : ''), 'placeholder' => 'Tarjeta De Credito']) }}
            {!! $errors->first('tarjeta_de_credito', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario') }}
            {{ Form::text('usuario', $cliente->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
            {!! $errors->first('usuario', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>