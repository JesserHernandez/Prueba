<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_Configuration') }}
            {{ Form::text('Id_Configuration', $configuration->Id_Configuration, ['class' => 'form-control' . ($errors->has('Id_Configuration') ? ' is-invalid' : ''), 'placeholder' => 'Id Configuration']) }}
            {!! $errors->first('Id_Configuration', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('BisinessName') }}
            {{ Form::text('BisinessName', $configuration->BisinessName, ['class' => 'form-control' . ($errors->has('BisinessName') ? ' is-invalid' : ''), 'placeholder' => 'Bisinessname']) }}
            {!! $errors->first('BisinessName', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RUC') }}
            {{ Form::text('RUC', $configuration->RUC, ['class' => 'form-control' . ($errors->has('RUC') ? ' is-invalid' : ''), 'placeholder' => 'Ruc']) }}
            {!! $errors->first('RUC', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Address') }}
            {{ Form::text('Address', $configuration->Address, ['class' => 'form-control' . ($errors->has('Address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('Address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PhoneNumber') }}
            {{ Form::text('PhoneNumber', $configuration->PhoneNumber, ['class' => 'form-control' . ($errors->has('PhoneNumber') ? ' is-invalid' : ''), 'placeholder' => 'Phonenumber']) }}
            {!! $errors->first('PhoneNumber', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EmailAddress') }}
            {{ Form::text('EmailAddress', $configuration->EmailAddress, ['class' => 'form-control' . ($errors->has('EmailAddress') ? ' is-invalid' : ''), 'placeholder' => 'Emailaddress']) }}
            {!! $errors->first('EmailAddress', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>