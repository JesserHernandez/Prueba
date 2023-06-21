@extends('layouts.app')

@section('template_title')
    {{ $purchase->name ?? "{{ __('Show') Purchase" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Purchase</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('purchases.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Purchase:</strong>
                            {{ $purchase->Id_Purchase }}
                        </div>
                        <div class="form-group">
                            <strong>Purchasecode:</strong>
                            {{ $purchase->PurchaseCode }}
                        </div>
                        <div class="form-group">
                            <strong>Methodpayment:</strong>
                            {{ $purchase->MethodPayment }}
                        </div>
                        <div class="form-group">
                            <strong>Paymentamount:</strong>
                            {{ $purchase->PaymentAmount }}
                        </div>
                        <div class="form-group">
                            <strong>Productquantity:</strong>
                            {{ $purchase->ProductQuantity }}
                        </div>
                        <div class="form-group">
                            <strong>Descount:</strong>
                            {{ $purchase->Descount }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $purchase->Total }}
                        </div>
                        <div class="form-group">
                            <strong>Condition:</strong>
                            {{ $purchase->Condition }}
                        </div>
                        <div class="form-group">
                            <strong>Id Medicine:</strong>
                            {{ $purchase->Id_Medicine }}
                        </div>
                        <div class="form-group">
                            <strong>Id Supplier:</strong>
                            {{ $purchase->Id_Supplier }}
                        </div>
                        <div class="form-group">
                            <strong>Id Employee:</strong>
                            {{ $purchase->Id_Employee }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
