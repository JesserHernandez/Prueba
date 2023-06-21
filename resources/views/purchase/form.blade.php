<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_Purchase') }}
            {{ Form::text('Id_Purchase', $purchase->Id_Purchase, ['class' => 'form-control' . ($errors->has('Id_Purchase') ? ' is-invalid' : ''), 'placeholder' => 'Id Purchase']) }}
            {!! $errors->first('Id_Purchase', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PurchaseCode') }}
            {{ Form::text('PurchaseCode', $purchase->PurchaseCode, ['class' => 'form-control' . ($errors->has('PurchaseCode') ? ' is-invalid' : ''), 'placeholder' => 'Purchasecode']) }}
            {!! $errors->first('PurchaseCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MethodPayment') }}
            {{ Form::text('MethodPayment', $purchase->MethodPayment, ['class' => 'form-control' . ($errors->has('MethodPayment') ? ' is-invalid' : ''), 'placeholder' => 'Methodpayment']) }}
            {!! $errors->first('MethodPayment', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PaymentAmount') }}
            {{ Form::text('PaymentAmount', $purchase->PaymentAmount, ['class' => 'form-control' . ($errors->has('PaymentAmount') ? ' is-invalid' : ''), 'placeholder' => 'Paymentamount']) }}
            {!! $errors->first('PaymentAmount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ProductQuantity') }}
            {{ Form::text('ProductQuantity', $purchase->ProductQuantity, ['class' => 'form-control' . ($errors->has('ProductQuantity') ? ' is-invalid' : ''), 'placeholder' => 'Productquantity']) }}
            {!! $errors->first('ProductQuantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descount') }}
            {{ Form::text('Descount', $purchase->Descount, ['class' => 'form-control' . ($errors->has('Descount') ? ' is-invalid' : ''), 'placeholder' => 'Descount']) }}
            {!! $errors->first('Descount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Total') }}
            {{ Form::text('Total', $purchase->Total, ['class' => 'form-control' . ($errors->has('Total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('Total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Condition') }}
            {{ Form::text('Condition', $purchase->Condition, ['class' => 'form-control' . ($errors->has('Condition') ? ' is-invalid' : ''), 'placeholder' => 'Condition']) }}
            {!! $errors->first('Condition', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_Medicine') }}
            {{ Form::text('Id_Medicine', $purchase->Id_Medicine, ['class' => 'form-control' . ($errors->has('Id_Medicine') ? ' is-invalid' : ''), 'placeholder' => 'Id Medicine']) }}
            {!! $errors->first('Id_Medicine', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_Supplier') }}
            {{ Form::text('Id_Supplier', $purchase->Id_Supplier, ['class' => 'form-control' . ($errors->has('Id_Supplier') ? ' is-invalid' : ''), 'placeholder' => 'Id Supplier']) }}
            {!! $errors->first('Id_Supplier', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_Employee') }}
            {{ Form::text('Id_Employee', $purchase->Id_Employee, ['class' => 'form-control' . ($errors->has('Id_Employee') ? ' is-invalid' : ''), 'placeholder' => 'Id Employee']) }}
            {!! $errors->first('Id_Employee', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>