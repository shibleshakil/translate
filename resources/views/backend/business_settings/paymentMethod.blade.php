@extends('layouts.backend.app')
@section('title', __('Payment Method Setup'))

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-1">
            <h3 class="content-header-title">{{ __('3rd Party') }}</h3>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('3rd Party') }}</li>
                    <li class="breadcrumb-item active">{{ __('Payment Method Setup') }}</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-body">
        @include('backend.business_settings.third_party_nav')

        <section id="general-info">
            @include('partials.session_message')
            <div class="row gy-3">
                <div class="col-md-6">
                    <div class="card rounded h-100">
                        <div class="card-body">
                            @php($config = \App\Helpers\Common::get_business_settings('stripe'))
                            <form action="{{ route('admin.business_settings.paymentMethodUpdate', ['stripe']) }}"
                                method="post" class="form">@csrf

                                <center class="my-2">
                                    <img src="{{ asset('/public/backend/app-assets/images/logo/stripe.png') }}" alt="">
                                </center>

                                @if (isset($config))
                                @php($config['environment'] = $config['environment'] ?? 'sandbox')
                                <div class="form-group pb-1">
                                    <div class="float-right">
                                        <input type="checkbox" name="status" id="stripe_status" value="1"
                                        data-size="sm" class="switchery" {{$config['status']==1?'checked':''}} />
                                    </div>
                                    <label for="stripe_status" class="text-uppercase">{{__('Stripe')}}</label>
                                </div>

                                <div class="form-group">
                                    <label class="d-flex title-color">{{ __('Choose Environment') }}</label>
                                    <select class="select form-control" name="environment">
                                        <option value="sandbox" {{ $config['environment']=='sandbox' ? 'selected' : ''
                                            }}>
                                            {{ __('sandbox') }}
                                        </option>
                                        <option value="live" {{ $config['environment']=='live' ? 'selected' : '' }}>
                                            {{ __('live') }}
                                        </option>
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
                                    <button type="submit" id="submitBtn" class="btn btn-primary px-4 text-uppercase">{{
                                        __('save') }}</button>
                                </div>
                                @else
                                <button type="submit" class="btn btn-primary px-4 text-uppercase btn-block">{{
                                    __('Configure') }} {{ __('Stripe') }}</button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card rounded h-100">
                        <div class="card-body">

                            @php($config=\App\Helpers\Common::get_business_settings('paypal'))
                            <form action="{{route('admin.business_settings.paymentMethodUpdate',['paypal'])}}"
                                method="post">
                                @csrf
                                <center class="my-2">
                                    <img src="{{ asset('/public/backend/app-assets/images/logo/paypal.png') }}" alt="">
                                </center>

                                @if(isset($config))
                                <div class="form-group pb-1">
                                    <div class="float-right">
                                        <input type="checkbox" name="status" id="paypal_status" value="1"
                                        data-size="sm" class="switchery" {{$config['status']==1?'checked':''}} />
                                    </div>
                                    <label for="paypal_status" class="text-uppercase">{{__('Paypal')}}</label>
                                </div>

                                <div class="form-group">
                                    <label class="d-flex title-color">{{ __('Choose Environment') }}</label>
                                    <select class="js-example-responsive form-control w-100" name="environment">

                                        <option value="sandbox"
                                            {{isset($config['environment'])==true?$config['environment']=='sandbox'
                                            ?'selected':'':''}}>{{__('sandbox')}}</option>
                                        <option value="live"
                                            {{isset($config['environment'])==true?$config['environment']=='live'
                                            ?'selected':'':''}}>{{__('live')}}</option>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="title-color d-flex">{{__('Paypal')}}
                                        {{__('Client')}}{{__('ID')}}</label>
                                    <input type="text" class="form-control" name="paypal_client_id"
                                        value="{{env('APP_MODE')=='demo'?'':$config['paypal_client_id']}}">
                                </div>
                                <div class="form-group">
                                    <label class="title-color d-flex">{{__('Paypal')}} {{__('Secret')}} </label>
                                    <input type="text" class="form-control" name="paypal_secret"
                                        value="{{env('APP_MODE')=='demo'?'':$config['paypal_secret']}}">
                                </div>
                                <div class="mt-3 d-flex flex-wrap justify-content-end gap-10">
                                    <button type="submit" id="submitBtn"
                                        class="btn btn-primary px-4 text-uppercase">{{__('save')}}</button>
                                    @else
                                    <button type="submit"
                                        class="btn btn-primary px-4 text-uppercase btn-block">{{__('Configure')}}
                                        {{__('Paypal')}}</button>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('script')
@endsection
