@extends('layouts.backend.app')
@section('title', __('Payment Method Setup'))

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-1">
            <h3 class="content-header-title">{{ __('Payment Method Setup') }}</h3>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('Payment Method Setup') }}</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-body">
        @include('backend.business_settings.top_nav')

        <section id="general-info">
            @include('partials.session_message')
            <div class="row gy-3">
                <div class="col-md-6">
                    <div class="card rounded h-100">
                        <div class="card-body">
                            @php($config = \App\Helpers\Common::get_business_settings('stripe'))
                            <form action="{{ route('admin.business_settings.paymentMethodUpdate', ['stripe']) }}"
                                method="post" class="form">@csrf
                                @if (isset($config))
                                    @php($config['environment'] = $config['environment'] ?? 'sandbox')
                                    <div class="rounded border-color-c1 px-1 py-1 d-flex justify-content-between">
                                        <h5 class="mb-0 d-flex gap-1 c1">
                                            {{ __('Status') }}
                                        </h5>
                                        <div class="position-relative">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="maintenance_mode"
                                                    name="status" value="1"
                                                    {{ $config['status'] == 1 ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="maintenance_mode"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <center class="my-2">
                                        <img src="{{ asset('/public/app-assets/images/logo/stripe.png') }}" alt="">
                                    </center>

                                    <div class="form-group">
                                        <label class="d-flex title-color">{{ __('Choose Environment') }}</label>
                                        <select class="select form-control" name="environment">
                                            <option value="sandbox"
                                                {{ $config['environment'] == 'sandbox' ? 'selected' : '' }}>
                                                {{ __('sandbox') }}</option>
                                            <option value="live" {{ $config['environment'] == 'live' ? 'selected' : '' }}>
                                                {{ __('live') }}</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="d-flex title-color">{{ __('Published Key') }}</label>
                                        <input type="text" class="form-control" name="published_key"
                                            value="{{ $config['published_key'] }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="d-flex title-color">{{ __('Api Key') }}</label>
                                        <input type="text" class="form-control" name="api_key"
                                            value="{{ $config['api_key'] }}">
                                    </div>
                                    <div class="mt-3 d-flex flex-wrap justify-content-end gap-10">
                                        <button type="submit" id="submitBtn"
                                            class="btn btn-primary px-4 text-uppercase">{{ __('save') }}</button>
                                    </div>
                                @else
                                    <button type="submit" id="submitBtn"class="btn btn-primary px-4 text-uppercase">{{ __('Configure') }}</button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>
@endsection

@section('script')
@endsection
