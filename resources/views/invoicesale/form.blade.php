<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_InvoiceSale') }}
            {{ Form::text('Id_InvoiceSale', $invoicesale->Id_InvoiceSale, ['class' => 'form-control' . ($errors->has('Id_InvoiceSale') ? ' is-invalid' : ''), 'placeholder' => 'Id Invoicesale']) }}
            {!! $errors->first('Id_InvoiceSale', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('InvoiceSaleCode') }}
            {{ Form::text('InvoiceSaleCode', $invoicesale->InvoiceSaleCode, ['class' => 'form-control' . ($errors->has('InvoiceSaleCode') ? ' is-invalid' : ''), 'placeholder' => 'Invoicesalecode']) }}
            {!! $errors->first('InvoiceSaleCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('BroadcastDate') }}
            {{ Form::text('BroadcastDate', $invoicesale->BroadcastDate, ['class' => 'form-control' . ($errors->has('BroadcastDate') ? ' is-invalid' : ''), 'placeholder' => 'Broadcastdate']) }}
            {!! $errors->first('BroadcastDate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_Sale') }}
            {{ Form::text('Id_Sale', $invoicesale->Id_Sale, ['class' => 'form-control' . ($errors->has('Id_Sale') ? ' is-invalid' : ''), 'placeholder' => 'Id Sale']) }}
            {!! $errors->first('Id_Sale', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_Configuration') }}
            {{ Form::text('Id_Configuration', $invoicesale->Id_Configuration, ['class' => 'form-control' . ($errors->has('Id_Configuration') ? ' is-invalid' : ''), 'placeholder' => 'Id Configuration']) }}
            {!! $errors->first('Id_Configuration', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>