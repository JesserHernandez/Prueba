@extends('layouts.app')

@section('template_title')
    {{ $laboratory->name ?? "{{ __('Show') Laboratory" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Laboratory</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('laboratories.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Laboratory:</strong>
                            {{ $laboratory->Id_Laboratory }}
                        </div>
                        <div class="form-group">
                            <strong>Laboratorycode:</strong>
                            {{ $laboratory->LaboratoryCode }}
                        </div>
                        <div class="form-group">
                            <strong>Laboratory:</strong>
                            {{ $laboratory->Laboratory }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $laboratory->Description }}
                        </div>
                        <div class="form-group">
                            <strong>Condition:</strong>
                            {{ $laboratory->Condition }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
