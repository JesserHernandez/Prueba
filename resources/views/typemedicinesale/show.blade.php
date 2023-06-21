@extends('layouts.app')

@section('template_title')
    {{ $typemedicinesale->name ?? "{{ __('Show') Typemedicinesale" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Typemedicinesale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('typemedicinesales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Typemedicinesales:</strong>
                            {{ $typemedicinesale->Id_TypemedicineSales }}
                        </div>
                        <div class="form-group">
                            <strong>Typemedicinesalecode:</strong>
                            {{ $typemedicinesale->TypeMedicineSaleCode }}
                        </div>
                        <div class="form-group">
                            <strong>Typemedicinesale:</strong>
                            {{ $typemedicinesale->TypeMedicineSale }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $typemedicinesale->Description }}
                        </div>
                        <div class="form-group">
                            <strong>Condition:</strong>
                            {{ $typemedicinesale->Condition }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
