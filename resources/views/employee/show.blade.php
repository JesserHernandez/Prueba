@extends('layouts.app')

@section('template_title')
    {{ $employee->name ?? "{{ __('Show') Employee" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Employee</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('employees.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Employee:</strong>
                            {{ $employee->Id_Employee }}
                        </div>
                        <div class="form-group">
                            <strong>Employeecode:</strong>
                            {{ $employee->EmployeeCode }}
                        </div>
                        <div class="form-group">
                            <strong>Names:</strong>
                            {{ $employee->Names }}
                        </div>
                        <div class="form-group">
                            <strong>Firstsurname:</strong>
                            {{ $employee->FirstSurName }}
                        </div>
                        <div class="form-group">
                            <strong>Secondsurname:</strong>
                            {{ $employee->SecondSurName }}
                        </div>
                        <div class="form-group">
                            <strong>Identificationcard:</strong>
                            {{ $employee->IdentificationCard }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $employee->Age }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $employee->Gender }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $employee->Address }}
                        </div>
                        <div class="form-group">
                            <strong>Phonenumber:</strong>
                            {{ $employee->PhoneNumber }}
                        </div>
                        <div class="form-group">
                            <strong>Emailaddress:</strong>
                            {{ $employee->EmailAddress }}
                        </div>
                        <div class="form-group">
                            <strong>City:</strong>
                            {{ $employee->City }}
                        </div>
                        <div class="form-group">
                            <strong>Municipality:</strong>
                            {{ $employee->Municipality }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $employee->Image }}
                        </div>
                        <div class="form-group">
                            <strong>Condition:</strong>
                            {{ $employee->Condition }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $employee->Id_User }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
