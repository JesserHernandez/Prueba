@extends('layouts.app')

@section('template_title')
    {{ $medicine->name ?? "{{ __('Show') Medicine" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Medicine</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('medicines.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Medicine:</strong>
                            {{ $medicine->Id_Medicine }}
                        </div>
                        <div class="form-group">
                            <strong>Medicinecode:</strong>
                            {{ $medicine->MedicineCode }}
                        </div>
                        <div class="form-group">
                            <strong>Medicine:</strong>
                            {{ $medicine->Medicine }}
                        </div>
                        <div class="form-group">
                            <strong>Indication:</strong>
                            {{ $medicine->Indication }}
                        </div>
                        <div class="form-group">
                            <strong>Ingredient:</strong>
                            {{ $medicine->Ingredient }}
                        </div>
                        <div class="form-group">
                            <strong>Contraindication:</strong>
                            {{ $medicine->Contraindication }}
                        </div>
                        <div class="form-group">
                            <strong>Sideeffect:</strong>
                            {{ $medicine->SideEffect }}
                        </div>
                        <div class="form-group">
                            <strong>Dosage:</strong>
                            {{ $medicine->Dosage }}
                        </div>
                        <div class="form-group">
                            <strong>Storage:</strong>
                            {{ $medicine->Storage }}
                        </div>
                        <div class="form-group">
                            <strong>Interaction:</strong>
                            {{ $medicine->Interaction }}
                        </div>
                        <div class="form-group">
                            <strong>Precaution:</strong>
                            {{ $medicine->Precaution }}
                        </div>
                        <div class="form-group">
                            <strong>Quality:</strong>
                            {{ $medicine->Quality }}
                        </div>
                        <div class="form-group">
                            <strong>Purchaseprice:</strong>
                            {{ $medicine->PurchasePrice }}
                        </div>
                        <div class="form-group">
                            <strong>Saleprice:</strong>
                            {{ $medicine->SalePrice }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $medicine->Image }}
                        </div>
                        <div class="form-group">
                            <strong>Expirationdate:</strong>
                            {{ $medicine->ExpirationDate }}
                        </div>
                        <div class="form-group">
                            <strong>Amount:</strong>
                            {{ $medicine->Amount }}
                        </div>
                        <div class="form-group">
                            <strong>Condition:</strong>
                            {{ $medicine->Condition }}
                        </div>
                        <div class="form-group">
                            <strong>Id Brand:</strong>
                            {{ $medicine->Id_Brand }}
                        </div>
                        <div class="form-group">
                            <strong>Id Typemedicine:</strong>
                            {{ $medicine->Id_TypeMedicine }}
                        </div>
                        <div class="form-group">
                            <strong>Id Typemedicinesales:</strong>
                            {{ $medicine->Id_TypemedicineSales }}
                        </div>
                        <div class="form-group">
                            <strong>Id Laboratory:</strong>
                            {{ $medicine->Id_Laboratory }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
