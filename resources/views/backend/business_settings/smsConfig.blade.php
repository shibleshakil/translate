@extends('layouts.backend.app')
@section('title', __('SMS Config Setup'))

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
                    <li class="breadcrumb-item active">{{ __('SMS Config Setup') }}</li>
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
                    <!-- <div class="card-header">
                    </div> -->
                    <div class="card-body">
                        <h5>{{__('Twilio SMS')}}</h5>
                        <p class="badge text-wrap badge-soft-info">{{__('NB: #OTP# will be replace with OTP')}}</p>
                        @php($config=\App\Helpers\Common::get_business_settings('twilio_sms'))
                        <form action="{{route('admin.business_settings.smsConfigUpdate',['twilio_sms'])}}"method="post"> @csrf
                            
                            <div class="forn-group radio">
                                <label>
                                    <input type="radio" name="status" value="1" {{isset($config) && $config['status']==1?'checked':''}}>
                                    Active
                                </label>
                            </div>
                            
                            <div class="forn-group radio">
                                <label>
                                    <input type="radio" name="status" value="0" {{isset($config) && $config['status']==0?'checked':''}}>
                                    Inactive
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="text-capitalize title-color">{{__('SID')}}</label>
                                <input type="text" class="form-control" name="sid"
                                    value="{{$config['sid']??''}}">
                            </div>

                            <div class="form-group">
                                <label class="text-capitalize title-color">{{__('Messaging Service SID')}}</label>
                                <input type="text" class="form-control" name="messaging_service_sid"
                                    value="{{$config['messaging_service_sid']??''}}">
                            </div>

                            <div class="form-group">
                                <label class="title-color">{{__('Token')}}</label>
                                <input type="text" class="form-control" name="token"
                                    value="{{$config['token']??''}}">
                            </div>

                            <div class="form-group">
                                <label class="title-color">{{__('From')}}</label>
                                <input type="text" class="form-control" name="from"
                                    value="{{$config['from']??''}}">
                            </div>

                            <div class="form-group">
                                <label class="title-color">{{__('OTP Template')}}</label>
                                <input type="text" class="form-control" name="otp_template"
                                    value="{{$config['otp_template']??''}}">
                            </div>

                            <div class="mt-3 d-flex flex-wrap justify-content-end gap-10">
                                <button type="submit}}" class="btn btn-primary px-4">{{__('Save')}}</button>
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
