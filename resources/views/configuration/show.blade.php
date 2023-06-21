@extends('layouts.app')

@section('template_title')
    {{ $configuration->name ?? "{{ __('Show') Configuration" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Configuration</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('configurations.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Configuration:</strong>
                            {{ $configuration->Id_Configuration }}
                        </div>
                        <div class="form-group">
                            <strong>Bisinessname:</strong>
                            {{ $configuration->BisinessName }}
                        </div>
                        <div class="form-group">
                            <strong>Ruc:</strong>
                            {{ $configuration->RUC }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $configuration->Address }}
                        </div>
                        <div class="form-group">
                            <strong>Phonenumber:</strong>
                            {{ $configuration->PhoneNumber }}
                        </div>
                        <div class="form-group">
                            <strong>Emailaddress:</strong>
                            {{ $configuration->EmailAddress }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
