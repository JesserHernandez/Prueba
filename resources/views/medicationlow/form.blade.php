<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_MedicationLow') }}
            {{ Form::text('Id_MedicationLow', $medicationlow->Id_MedicationLow, ['class' => 'form-control' . ($errors->has('Id_MedicationLow') ? ' is-invalid' : ''), 'placeholder' => 'Id Medicationlow']) }}
            {!! $errors->first('Id_MedicationLow', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MedicationLowCode') }}
            {{ Form::text('MedicationLowCode', $medicationlow->MedicationLowCode, ['class' => 'form-control' . ($errors->has('MedicationLowCode') ? ' is-invalid' : ''), 'placeholder' => 'Medicationlowcode']) }}
            {!! $errors->first('MedicationLowCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Motive') }}
            {{ Form::text('Motive', $medicationlow->Motive, ['class' => 'form-control' . ($errors->has('Motive') ? ' is-invalid' : ''), 'placeholder' => 'Motive']) }}
            {!! $errors->first('Motive', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observations') }}
            {{ Form::text('Observations', $medicationlow->Observations, ['class' => 'form-control' . ($errors->has('Observations') ? ' is-invalid' : ''), 'placeholder' => 'Observations']) }}
            {!! $errors->first('Observations', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DateLeaving') }}
            {{ Form::text('DateLeaving', $medicationlow->DateLeaving, ['class' => 'form-control' . ($errors->has('DateLeaving') ? ' is-invalid' : ''), 'placeholder' => 'Dateleaving']) }}
            {!! $errors->first('DateLeaving', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_Medicine') }}
            {{ Form::text('Id_Medicine', $medicationlow->Id_Medicine, ['class' => 'form-control' . ($errors->has('Id_Medicine') ? ' is-invalid' : ''), 'placeholder' => 'Id Medicine']) }}
            {!! $errors->first('Id_Medicine', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>