@extends('layouts.app')

@section('template_title')
    {{ $invoicesale->name ?? "{{ __('Show') Invoicesale" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Invoicesale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('invoicesales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Invoicesale:</strong>
                            {{ $invoicesale->Id_InvoiceSale }}
                        </div>
                        <div class="form-group">
                            <strong>Invoicesalecode:</strong>
                            {{ $invoicesale->InvoiceSaleCode }}
                        </div>
                        <div class="form-group">
                            <strong>Broadcastdate:</strong>
                            {{ $invoicesale->BroadcastDate }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sale:</strong>
                            {{ $invoicesale->Id_Sale }}
                        </div>
                        <div class="form-group">
                            <strong>Id Configuration:</strong>
                            {{ $invoicesale->Id_Configuration }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
