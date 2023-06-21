<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_Order') }}
            {{ Form::text('Id_Order', $order->Id_Order, ['class' => 'form-control' . ($errors->has('Id_Order') ? ' is-invalid' : ''), 'placeholder' => 'Id Order']) }}
            {!! $errors->first('Id_Order', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('OrderCode') }}
            {{ Form::text('OrderCode', $order->OrderCode, ['class' => 'form-control' . ($errors->has('OrderCode') ? ' is-invalid' : ''), 'placeholder' => 'Ordercode']) }}
            {!! $errors->first('OrderCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PhoneNumber') }}
            {{ Form::text('PhoneNumber', $order->PhoneNumber, ['class' => 'form-control' . ($errors->has('PhoneNumber') ? ' is-invalid' : ''), 'placeholder' => 'Phonenumber']) }}
            {!! $errors->first('PhoneNumber', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Address') }}
            {{ Form::text('Address', $order->Address, ['class' => 'form-control' . ($errors->has('Address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('Address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Condition') }}
            {{ Form::text('Condition', $order->Condition, ['class' => 'form-control' . ($errors->has('Condition') ? ' is-invalid' : ''), 'placeholder' => 'Condition']) }}
            {!! $errors->first('Condition', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_Medicine') }}
            {{ Form::text('Id_Medicine', $order->Id_Medicine, ['class' => 'form-control' . ($errors->has('Id_Medicine') ? ' is-invalid' : ''), 'placeholder' => 'Id Medicine']) }}
            {!! $errors->first('Id_Medicine', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_Customer') }}
            {{ Form::text('Id_Customer', $order->Id_Customer, ['class' => 'form-control' . ($errors->has('Id_Customer') ? ' is-invalid' : ''), 'placeholder' => 'Id Customer']) }}
            {!! $errors->first('Id_Customer', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_Employee') }}
            {{ Form::text('Id_Employee', $order->Id_Employee, ['class' => 'form-control' . ($errors->has('Id_Employee') ? ' is-invalid' : ''), 'placeholder' => 'Id Employee']) }}
            {!! $errors->first('Id_Employee', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>