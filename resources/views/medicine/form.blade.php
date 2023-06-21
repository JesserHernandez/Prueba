<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_Medicine') }}
            {{ Form::text('Id_Medicine', $medicine->Id_Medicine, ['class' => 'form-control' . ($errors->has('Id_Medicine') ? ' is-invalid' : ''), 'placeholder' => 'Id Medicine']) }}
            {!! $errors->first('Id_Medicine', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MedicineCode') }}
            {{ Form::text('MedicineCode', $medicine->MedicineCode, ['class' => 'form-control' . ($errors->has('MedicineCode') ? ' is-invalid' : ''), 'placeholder' => 'Medicinecode']) }}
            {!! $errors->first('MedicineCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Medicine') }}
            {{ Form::text('Medicine', $medicine->Medicine, ['class' => 'form-control' . ($errors->has('Medicine') ? ' is-invalid' : ''), 'placeholder' => 'Medicine']) }}
            {!! $errors->first('Medicine', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Indication') }}
            {{ Form::text('Indication', $medicine->Indication, ['class' => 'form-control' . ($errors->has('Indication') ? ' is-invalid' : ''), 'placeholder' => 'Indication']) }}
            {!! $errors->first('Indication', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ingredient') }}
            {{ Form::text('Ingredient', $medicine->Ingredient, ['class' => 'form-control' . ($errors->has('Ingredient') ? ' is-invalid' : ''), 'placeholder' => 'Ingredient']) }}
            {!! $errors->first('Ingredient', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contraindication') }}
            {{ Form::text('Contraindication', $medicine->Contraindication, ['class' => 'form-control' . ($errors->has('Contraindication') ? ' is-invalid' : ''), 'placeholder' => 'Contraindication']) }}
            {!! $errors->first('Contraindication', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SideEffect') }}
            {{ Form::text('SideEffect', $medicine->SideEffect, ['class' => 'form-control' . ($errors->has('SideEffect') ? ' is-invalid' : ''), 'placeholder' => 'Sideeffect']) }}
            {!! $errors->first('SideEffect', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dosage') }}
            {{ Form::text('Dosage', $medicine->Dosage, ['class' => 'form-control' . ($errors->has('Dosage') ? ' is-invalid' : ''), 'placeholder' => 'Dosage']) }}
            {!! $errors->first('Dosage', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Storage') }}
            {{ Form::text('Storage', $medicine->Storage, ['class' => 'form-control' . ($errors->has('Storage') ? ' is-invalid' : ''), 'placeholder' => 'Storage']) }}
            {!! $errors->first('Storage', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Interaction') }}
            {{ Form::text('Interaction', $medicine->Interaction, ['class' => 'form-control' . ($errors->has('Interaction') ? ' is-invalid' : ''), 'placeholder' => 'Interaction']) }}
            {!! $errors->first('Interaction', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precaution') }}
            {{ Form::text('Precaution', $medicine->Precaution, ['class' => 'form-control' . ($errors->has('Precaution') ? ' is-invalid' : ''), 'placeholder' => 'Precaution']) }}
            {!! $errors->first('Precaution', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Quality') }}
            {{ Form::text('Quality', $medicine->Quality, ['class' => 'form-control' . ($errors->has('Quality') ? ' is-invalid' : ''), 'placeholder' => 'Quality']) }}
            {!! $errors->first('Quality', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PurchasePrice') }}
            {{ Form::text('PurchasePrice', $medicine->PurchasePrice, ['class' => 'form-control' . ($errors->has('PurchasePrice') ? ' is-invalid' : ''), 'placeholder' => 'Purchaseprice']) }}
            {!! $errors->first('PurchasePrice', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SalePrice') }}
            {{ Form::text('SalePrice', $medicine->SalePrice, ['class' => 'form-control' . ($errors->has('SalePrice') ? ' is-invalid' : ''), 'placeholder' => 'Saleprice']) }}
            {!! $errors->first('SalePrice', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Image') }}
            {{ Form::text('Image', $medicine->Image, ['class' => 'form-control' . ($errors->has('Image') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }}
            {!! $errors->first('Image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ExpirationDate') }}
            {{ Form::text('ExpirationDate', $medicine->ExpirationDate, ['class' => 'form-control' . ($errors->has('ExpirationDate') ? ' is-invalid' : ''), 'placeholder' => 'Expirationdate']) }}
            {!! $errors->first('ExpirationDate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Amount') }}
            {{ Form::text('Amount', $medicine->Amount, ['class' => 'form-control' . ($errors->has('Amount') ? ' is-invalid' : ''), 'placeholder' => 'Amount']) }}
            {!! $errors->first('Amount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Condition') }}
            {{ Form::text('Condition', $medicine->Condition, ['class' => 'form-control' . ($errors->has('Condition') ? ' is-invalid' : ''), 'placeholder' => 'Condition']) }}
            {!! $errors->first('Condition', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_Brand') }}
            {{ Form::text('Id_Brand', $medicine->Id_Brand, ['class' => 'form-control' . ($errors->has('Id_Brand') ? ' is-invalid' : ''), 'placeholder' => 'Id Brand']) }}
            {!! $errors->first('Id_Brand', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_TypeMedicine') }}
            {{ Form::text('Id_TypeMedicine', $medicine->Id_TypeMedicine, ['class' => 'form-control' . ($errors->has('Id_TypeMedicine') ? ' is-invalid' : ''), 'placeholder' => 'Id Typemedicine']) }}
            {!! $errors->first('Id_TypeMedicine', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_TypemedicineSales') }}
            {{ Form::text('Id_TypemedicineSales', $medicine->Id_TypemedicineSales, ['class' => 'form-control' . ($errors->has('Id_TypemedicineSales') ? ' is-invalid' : ''), 'placeholder' => 'Id Typemedicinesales']) }}
            {!! $errors->first('Id_TypemedicineSales', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_Laboratory') }}
            {{ Form::text('Id_Laboratory', $medicine->Id_Laboratory, ['class' => 'form-control' . ($errors->has('Id_Laboratory') ? ' is-invalid' : ''), 'placeholder' => 'Id Laboratory']) }}
            {!! $errors->first('Id_Laboratory', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>