@extends('layouts.backend.app')

@section('title', __('App Settings'))
@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-1">
            <h3 class="content-header-title">{{ __('App Settings') }}</h3>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('App Settings') }}</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-body">
        @include('backend.business_settings.top_nav')

        @php
            $exchange_rate_api_key = \App\Helpers\Common::get_business_settings('exchange_rate_api_key');
        @endphp

        <section id="general-info">
            <div class="row">
                <div class="col-md-6">
                    <div class="card rounded">
                        @include('partials.session_message')
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" action="{{ route('admin.business_settings.exchangeRate') }}"
                                    method="post" enctype="multipart/form-data">@csrf
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="feather icon-repeat"></i>
                                            {{ __('Exchange Rate API Key') }}
                                        </h4>
                                        <div class="form-group">
                                            <label for="exchange_rate_api_key">{{ __('API Key') }}</label>
                                            <input type="text" id="exchange_rate_api_key" class="form-control"
                                                placeholder="Ex: 818b882261c8a55903e1805c" name="exchange_rate_api_key"
                                                value="{{ $exchange_rate_api_key }}">
                                        </div>
                                    </div>

                                    <div class="form-actions right">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-check-square-o"></i> Save Changes
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card rounded">
                        <div class="card-content">
                            <div class="card-body">
                                <h4>{{ __('Instruction') }}:</h4>
                                <ul>
                                    <li>Go to https://www.exchangerate-api.com/</li>
                                    <li>Create an account and sign in</li>
                                    <li>Go to `Get Free Key` or `API Keys` and Create key</li>
                                    <li>Copy the Keys</li>
                                </ul>
                            </div>
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
