@extends('layouts.app')

@section('template_title')
    {{ $supplier->name ?? "{{ __('Show') Supplier" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Supplier</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('suppliers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Supplier:</strong>
                            {{ $supplier->Id_Supplier }}
                        </div>
                        <div class="form-group">
                            <strong>Suppliercode:</strong>
                            {{ $supplier->SupplierCode }}
                        </div>
                        <div class="form-group">
                            <strong>Names:</strong>
                            {{ $supplier->Names }}
                        </div>
                        <div class="form-group">
                            <strong>Firstsurname:</strong>
                            {{ $supplier->FirstSurName }}
                        </div>
                        <div class="form-group">
                            <strong>Secondsurname:</strong>
                            {{ $supplier->SecondSurName }}
                        </div>
                        <div class="form-group">
                            <strong>Identificationcard:</strong>
                            {{ $supplier->IdentificationCard }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $supplier->Age }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $supplier->Gender }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $supplier->Address }}
                        </div>
                        <div class="form-group">
                            <strong>Phonenumber:</strong>
                            {{ $supplier->PhoneNumber }}
                        </div>
                        <div class="form-group">
                            <strong>Emailaddress:</strong>
                            {{ $supplier->EmailAddress }}
                        </div>
                        <div class="form-group">
                            <strong>City:</strong>
                            {{ $supplier->City }}
                        </div>
                        <div class="form-group">
                            <strong>Municipality:</strong>
                            {{ $supplier->Municipality }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $supplier->Image }}
                        </div>
                        <div class="form-group">
                            <strong>Condition:</strong>
                            {{ $supplier->Condition }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $supplier->Id_User }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
