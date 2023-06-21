@extends('layouts.app')

@section('template_title')
    {{ $sale->name ?? "{{ __('Show') Sale" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Sale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Sale:</strong>
                            {{ $sale->Id_Sale }}
                        </div>
                        <div class="form-group">
                            <strong>Salecode:</strong>
                            {{ $sale->SaleCode }}
                        </div>
                        <div class="form-group">
                            <strong>Methodpayment:</strong>
                            {{ $sale->MethodPayment }}
                        </div>
                        <div class="form-group">
                            <strong>Productquantity:</strong>
                            {{ $sale->ProductQuantity }}
                        </div>
                        <div class="form-group">
                            <strong>Paymentamount:</strong>
                            {{ $sale->PaymentAmount }}
                        </div>
                        <div class="form-group">
                            <strong>Descount:</strong>
                            {{ $sale->Descount }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $sale->Total }}
                        </div>
                        <div class="form-group">
                            <strong>Condition:</strong>
                            {{ $sale->Condition }}
                        </div>
                        <div class="form-group">
                            <strong>Id Order:</strong>
                            {{ $sale->Id_Order }}
                        </div>
                        <div class="form-group">
                            <strong>Id Customer:</strong>
                            {{ $sale->Id_Customer }}
                        </div>
                        <div class="form-group">
                            <strong>Id Employee:</strong>
                            {{ $sale->Id_Employee }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
