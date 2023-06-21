<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_Laboratory') }}
            {{ Form::text('Id_Laboratory', $laboratory->Id_Laboratory, ['class' => 'form-control' . ($errors->has('Id_Laboratory') ? ' is-invalid' : ''), 'placeholder' => 'Id Laboratory']) }}
            {!! $errors->first('Id_Laboratory', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LaboratoryCode') }}
            {{ Form::text('LaboratoryCode', $laboratory->LaboratoryCode, ['class' => 'form-control' . ($errors->has('LaboratoryCode') ? ' is-invalid' : ''), 'placeholder' => 'Laboratorycode']) }}
            {!! $errors->first('LaboratoryCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Laboratory') }}
            {{ Form::text('Laboratory', $laboratory->Laboratory, ['class' => 'form-control' . ($errors->has('Laboratory') ? ' is-invalid' : ''), 'placeholder' => 'Laboratory']) }}
            {!! $errors->first('Laboratory', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Description') }}
            {{ Form::text('Description', $laboratory->Description, ['class' => 'form-control' . ($errors->has('Description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('Description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Condition') }}
            {{ Form::text('Condition', $laboratory->Condition, ['class' => 'form-control' . ($errors->has('Condition') ? ' is-invalid' : ''), 'placeholder' => 'Condition']) }}
            {!! $errors->first('Condition', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>