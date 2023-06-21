@extends('layouts.app')

@section('template_title')
    {{ $order->name ?? "{{ __('Show') Order" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Order</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('orders.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Order:</strong>
                            {{ $order->Id_Order }}
                        </div>
                        <div class="form-group">
                            <strong>Ordercode:</strong>
                            {{ $order->OrderCode }}
                        </div>
                        <div class="form-group">
                            <strong>Phonenumber:</strong>
                            {{ $order->PhoneNumber }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $order->Address }}
                        </div>
                        <div class="form-group">
                            <strong>Condition:</strong>
                            {{ $order->Condition }}
                        </div>
                        <div class="form-group">
                            <strong>Id Medicine:</strong>
                            {{ $order->Id_Medicine }}
                        </div>
                        <div class="form-group">
                            <strong>Id Customer:</strong>
                            {{ $order->Id_Customer }}
                        </div>
                        <div class="form-group">
                            <strong>Id Employee:</strong>
                            {{ $order->Id_Employee }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
