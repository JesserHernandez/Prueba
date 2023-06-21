<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_TypemedicineSales') }}
            {{ Form::text('Id_TypemedicineSales', $typemedicinesale->Id_TypemedicineSales, ['class' => 'form-control' . ($errors->has('Id_TypemedicineSales') ? ' is-invalid' : ''), 'placeholder' => 'Id Typemedicinesales']) }}
            {!! $errors->first('Id_TypemedicineSales', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TypeMedicineSaleCode') }}
            {{ Form::text('TypeMedicineSaleCode', $typemedicinesale->TypeMedicineSaleCode, ['class' => 'form-control' . ($errors->has('TypeMedicineSaleCode') ? ' is-invalid' : ''), 'placeholder' => 'Typemedicinesalecode']) }}
            {!! $errors->first('TypeMedicineSaleCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TypeMedicineSale') }}
            {{ Form::text('TypeMedicineSale', $typemedicinesale->TypeMedicineSale, ['class' => 'form-control' . ($errors->has('TypeMedicineSale') ? ' is-invalid' : ''), 'placeholder' => 'Typemedicinesale']) }}
            {!! $errors->first('TypeMedicineSale', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Description') }}
            {{ Form::text('Description', $typemedicinesale->Description, ['class' => 'form-control' . ($errors->has('Description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('Description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Condition') }}
            {{ Form::text('Condition', $typemedicinesale->Condition, ['class' => 'form-control' . ($errors->has('Condition') ? ' is-invalid' : ''), 'placeholder' => 'Condition']) }}
            {!! $errors->first('Condition', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>