@extends('layouts.app')

@section('template_title')
    {{ $typemedicine->name ?? "{{ __('Show') Typemedicine" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Typemedicine</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('typemedicines.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Typemedicine:</strong>
                            {{ $typemedicine->Id_Typemedicine }}
                        </div>
                        <div class="form-group">
                            <strong>Typemedicinecode:</strong>
                            {{ $typemedicine->TypeMedicineCode }}
                        </div>
                        <div class="form-group">
                            <strong>Typemedicine:</strong>
                            {{ $typemedicine->TypeMedicine }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $typemedicine->Description }}
                        </div>
                        <div class="form-group">
                            <strong>Condition:</strong>
                            {{ $typemedicine->Condition }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
