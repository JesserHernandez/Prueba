<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_Sale') }}
            {{ Form::text('Id_Sale', $sale->Id_Sale, ['class' => 'form-control' . ($errors->has('Id_Sale') ? ' is-invalid' : ''), 'placeholder' => 'Id Sale']) }}
            {!! $errors->first('Id_Sale', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SaleCode') }}
            {{ Form::text('SaleCode', $sale->SaleCode, ['class' => 'form-control' . ($errors->has('SaleCode') ? ' is-invalid' : ''), 'placeholder' => 'Salecode']) }}
            {!! $errors->first('SaleCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MethodPayment') }}
            {{ Form::text('MethodPayment', $sale->MethodPayment, ['class' => 'form-control' . ($errors->has('MethodPayment') ? ' is-invalid' : ''), 'placeholder' => 'Methodpayment']) }}
            {!! $errors->first('MethodPayment', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ProductQuantity') }}
            {{ Form::text('ProductQuantity', $sale->ProductQuantity, ['class' => 'form-control' . ($errors->has('ProductQuantity') ? ' is-invalid' : ''), 'placeholder' => 'Productquantity']) }}
            {!! $errors->first('ProductQuantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PaymentAmount') }}
            {{ Form::text('PaymentAmount', $sale->PaymentAmount, ['class' => 'form-control' . ($errors->has('PaymentAmount') ? ' is-invalid' : ''), 'placeholder' => 'Paymentamount']) }}
            {!! $errors->first('PaymentAmount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descount') }}
            {{ Form::text('Descount', $sale->Descount, ['class' => 'form-control' . ($errors->has('Descount') ? ' is-invalid' : ''), 'placeholder' => 'Descount']) }}
            {!! $errors->first('Descount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Total') }}
            {{ Form::text('Total', $sale->Total, ['class' => 'form-control' . ($errors->has('Total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('Total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Condition') }}
            {{ Form::text('Condition', $sale->Condition, ['class' => 'form-control' . ($errors->has('Condition') ? ' is-invalid' : ''), 'placeholder' => 'Condition']) }}
            {!! $errors->first('Condition', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_Order') }}
            {{ Form::text('Id_Order', $sale->Id_Order, ['class' => 'form-control' . ($errors->has('Id_Order') ? ' is-invalid' : ''), 'placeholder' => 'Id Order']) }}
            {!! $errors->first('Id_Order', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_Customer') }}
            {{ Form::text('Id_Customer', $sale->Id_Customer, ['class' => 'form-control' . ($errors->has('Id_Customer') ? ' is-invalid' : ''), 'placeholder' => 'Id Customer']) }}
            {!! $errors->first('Id_Customer', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_Employee') }}
            {{ Form::text('Id_Employee', $sale->Id_Employee, ['class' => 'form-control' . ($errors->has('Id_Employee') ? ' is-invalid' : ''), 'placeholder' => 'Id Employee']) }}
            {!! $errors->first('Id_Employee', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>