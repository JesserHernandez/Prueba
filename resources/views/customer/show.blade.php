@extends('layouts.app')

@section('template_title')
    {{ $customer->name ?? "{{ __('Show') Customer" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Customer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('customers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Customer:</strong>
                            {{ $customer->Id_Customer }}
                        </div>
                        <div class="form-group">
                            <strong>Customercode:</strong>
                            {{ $customer->CustomerCode }}
                        </div>
                        <div class="form-group">
                            <strong>Names:</strong>
                            {{ $customer->Names }}
                        </div>
                        <div class="form-group">
                            <strong>Firstsurname:</strong>
                            {{ $customer->FirstSurName }}
                        </div>
                        <div class="form-group">
                            <strong>Secondsurname:</strong>
                            {{ $customer->SecondSurName }}
                        </div>
                        <div class="form-group">
                            <strong>Identificationcard:</strong>
                            {{ $customer->IdentificationCard }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $customer->Age }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $customer->Gender }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $customer->Address }}
                        </div>
                        <div class="form-group">
                            <strong>Phonenumber:</strong>
                            {{ $customer->PhoneNumber }}
                        </div>
                        <div class="form-group">
                            <strong>Emailaddress:</strong>
                            {{ $customer->EmailAddress }}
                        </div>
                        <div class="form-group">
                            <strong>City:</strong>
                            {{ $customer->City }}
                        </div>
                        <div class="form-group">
                            <strong>Municipality:</strong>
                            {{ $customer->Municipality }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $customer->Image }}
                        </div>
                        <div class="form-group">
                            <strong>Condition:</strong>
                            {{ $customer->Condition }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $customer->Id_User }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
