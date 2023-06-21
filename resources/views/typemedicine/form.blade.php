<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_Typemedicine') }}
            {{ Form::text('Id_Typemedicine', $typemedicine->Id_Typemedicine, ['class' => 'form-control' . ($errors->has('Id_Typemedicine') ? ' is-invalid' : ''), 'placeholder' => 'Id Typemedicine']) }}
            {!! $errors->first('Id_Typemedicine', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TypeMedicineCode') }}
            {{ Form::text('TypeMedicineCode', $typemedicine->TypeMedicineCode, ['class' => 'form-control' . ($errors->has('TypeMedicineCode') ? ' is-invalid' : ''), 'placeholder' => 'Typemedicinecode']) }}
            {!! $errors->first('TypeMedicineCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TypeMedicine') }}
            {{ Form::text('TypeMedicine', $typemedicine->TypeMedicine, ['class' => 'form-control' . ($errors->has('TypeMedicine') ? ' is-invalid' : ''), 'placeholder' => 'Typemedicine']) }}
            {!! $errors->first('TypeMedicine', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Description') }}
            {{ Form::text('Description', $typemedicine->Description, ['class' => 'form-control' . ($errors->has('Description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('Description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Condition') }}
            {{ Form::text('Condition', $typemedicine->Condition, ['class' => 'form-control' . ($errors->has('Condition') ? ' is-invalid' : ''), 'placeholder' => 'Condition']) }}
            {!! $errors->first('Condition', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>