@extends('layouts.app')

@section('template_title')
    {{ $brand->name ?? "{{ __('Show') Brand" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Brand</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('brands.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Brand:</strong>
                            {{ $brand->Id_Brand }}
                        </div>
                        <div class="form-group">
                            <strong>Brandcode:</strong>
                            {{ $brand->BrandCode }}
                        </div>
                        <div class="form-group">
                            <strong>Brand:</strong>
                            {{ $brand->Brand }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $brand->Description }}
                        </div>
                        <div class="form-group">
                            <strong>Condition:</strong>
                            {{ $brand->Condition }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
