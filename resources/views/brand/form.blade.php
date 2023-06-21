<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_Brand') }}
            {{ Form::text('Id_Brand', $brand->Id_Brand, ['class' => 'form-control' . ($errors->has('Id_Brand') ? ' is-invalid' : ''), 'placeholder' => 'Id Brand']) }}
            {!! $errors->first('Id_Brand', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('BrandCode') }}
            {{ Form::text('BrandCode', $brand->BrandCode, ['class' => 'form-control' . ($errors->has('BrandCode') ? ' is-invalid' : ''), 'placeholder' => 'Brandcode']) }}
            {!! $errors->first('BrandCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Brand') }}
            {{ Form::text('Brand', $brand->Brand, ['class' => 'form-control' . ($errors->has('Brand') ? ' is-invalid' : ''), 'placeholder' => 'Brand']) }}
            {!! $errors->first('Brand', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Description') }}
            {{ Form::text('Description', $brand->Description, ['class' => 'form-control' . ($errors->has('Description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('Description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Condition') }}
            {{ Form::text('Condition', $brand->Condition, ['class' => 'form-control' . ($errors->has('Condition') ? ' is-invalid' : ''), 'placeholder' => 'Condition']) }}
            {!! $errors->first('Condition', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>