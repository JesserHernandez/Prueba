@extends('layouts.app')

@section('template_title')
    {{ $administrator->name ?? "{{ __('Show') Administrator" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Administrator</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('administrators.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Administrator:</strong>
                            {{ $administrator->Id_Administrator }}
                        </div>
                        <div class="form-group">
                            <strong>Administratorcode:</strong>
                            {{ $administrator->AdministratorCode }}
                        </div>
                        <div class="form-group">
                            <strong>Names:</strong>
                            {{ $administrator->Names }}
                        </div>
                        <div class="form-group">
                            <strong>Firstsurname:</strong>
                            {{ $administrator->FirstSurName }}
                        </div>
                        <div class="form-group">
                            <strong>Secondsurname:</strong>
                            {{ $administrator->SecondSurName }}
                        </div>
                        <div class="form-group">
                            <strong>Identificationcard:</strong>
                            {{ $administrator->IdentificationCard }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $administrator->Age }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $administrator->Gender }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $administrator->Address }}
                        </div>
                        <div class="form-group">
                            <strong>Phonenumber:</strong>
                            {{ $administrator->PhoneNumber }}
                        </div>
                        <div class="form-group">
                            <strong>Emailaddress:</strong>
                            {{ $administrator->EmailAddress }}
                        </div>
                        <div class="form-group">
                            <strong>City:</strong>
                            {{ $administrator->City }}
                        </div>
                        <div class="form-group">
                            <strong>Municipality:</strong>
                            {{ $administrator->Municipality }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $administrator->Image }}
                        </div>
                        <div class="form-group">
                            <strong>Condition:</strong>
                            {{ $administrator->Condition }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $administrator->Id_User }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
