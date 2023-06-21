<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_Customer') }}
            {{ Form::text('Id_Customer', $customer->Id_Customer, ['class' => 'form-control' . ($errors->has('Id_Customer') ? ' is-invalid' : ''), 'placeholder' => 'Id Customer']) }}
            {!! $errors->first('Id_Customer', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CustomerCode') }}
            {{ Form::text('CustomerCode', $customer->CustomerCode, ['class' => 'form-control' . ($errors->has('CustomerCode') ? ' is-invalid' : ''), 'placeholder' => 'Customercode']) }}
            {!! $errors->first('CustomerCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Names') }}
            {{ Form::text('Names', $customer->Names, ['class' => 'form-control' . ($errors->has('Names') ? ' is-invalid' : ''), 'placeholder' => 'Names']) }}
            {!! $errors->first('Names', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FirstSurName') }}
            {{ Form::text('FirstSurName', $customer->FirstSurName, ['class' => 'form-control' . ($errors->has('FirstSurName') ? ' is-invalid' : ''), 'placeholder' => 'Firstsurname']) }}
            {!! $errors->first('FirstSurName', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SecondSurName') }}
            {{ Form::text('SecondSurName', $customer->SecondSurName, ['class' => 'form-control' . ($errors->has('SecondSurName') ? ' is-invalid' : ''), 'placeholder' => 'Secondsurname']) }}
            {!! $errors->first('SecondSurName', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('IdentificationCard') }}
            {{ Form::text('IdentificationCard', $customer->IdentificationCard, ['class' => 'form-control' . ($errors->has('IdentificationCard') ? ' is-invalid' : ''), 'placeholder' => 'Identificationcard']) }}
            {!! $errors->first('IdentificationCard', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Age') }}
            {{ Form::text('Age', $customer->Age, ['class' => 'form-control' . ($errors->has('Age') ? ' is-invalid' : ''), 'placeholder' => 'Age']) }}
            {!! $errors->first('Age', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Gender') }}
            {{ Form::text('Gender', $customer->Gender, ['class' => 'form-control' . ($errors->has('Gender') ? ' is-invalid' : ''), 'placeholder' => 'Gender']) }}
            {!! $errors->first('Gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Address') }}
            {{ Form::text('Address', $customer->Address, ['class' => 'form-control' . ($errors->has('Address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('Address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PhoneNumber') }}
            {{ Form::text('PhoneNumber', $customer->PhoneNumber, ['class' => 'form-control' . ($errors->has('PhoneNumber') ? ' is-invalid' : ''), 'placeholder' => 'Phonenumber']) }}
            {!! $errors->first('PhoneNumber', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EmailAddress') }}
            {{ Form::text('EmailAddress', $customer->EmailAddress, ['class' => 'form-control' . ($errors->has('EmailAddress') ? ' is-invalid' : ''), 'placeholder' => 'Emailaddress']) }}
            {!! $errors->first('EmailAddress', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('City') }}
            {{ Form::text('City', $customer->City, ['class' => 'form-control' . ($errors->has('City') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
            {!! $errors->first('City', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Municipality') }}
            {{ Form::text('Municipality', $customer->Municipality, ['class' => 'form-control' . ($errors->has('Municipality') ? ' is-invalid' : ''), 'placeholder' => 'Municipality']) }}
            {!! $errors->first('Municipality', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Image') }}
            {{ Form::text('Image', $customer->Image, ['class' => 'form-control' . ($errors->has('Image') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }}
            {!! $errors->first('Image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Condition') }}
            {{ Form::text('Condition', $customer->Condition, ['class' => 'form-control' . ($errors->has('Condition') ? ' is-invalid' : ''), 'placeholder' => 'Condition']) }}
            {!! $errors->first('Condition', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_User') }}
            {{ Form::text('Id_User', $customer->Id_User, ['class' => 'form-control' . ($errors->has('Id_User') ? ' is-invalid' : ''), 'placeholder' => 'Id User']) }}
            {!! $errors->first('Id_User', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>