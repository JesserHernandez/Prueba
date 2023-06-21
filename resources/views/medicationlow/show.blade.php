@extends('layouts.app')

@section('template_title')
    {{ $medicationlow->name ?? "{{ __('Show') Medicationlow" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Medicationlow</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('medicationlows.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Medicationlow:</strong>
                            {{ $medicationlow->Id_MedicationLow }}
                        </div>
                        <div class="form-group">
                            <strong>Medicationlowcode:</strong>
                            {{ $medicationlow->MedicationLowCode }}
                        </div>
                        <div class="form-group">
                            <strong>Motive:</strong>
                            {{ $medicationlow->Motive }}
                        </div>
                        <div class="form-group">
                            <strong>Observations:</strong>
                            {{ $medicationlow->Observations }}
                        </div>
                        <div class="form-group">
                            <strong>Dateleaving:</strong>
                            {{ $medicationlow->DateLeaving }}
                        </div>
                        <div class="form-group">
                            <strong>Id Medicine:</strong>
                            {{ $medicationlow->Id_Medicine }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
