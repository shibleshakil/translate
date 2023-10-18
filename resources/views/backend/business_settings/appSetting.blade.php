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
            $appStoreLink = \App\Helpers\Common::get_business_settings('apple_store_link');
            $playStoreLink = \App\Helpers\Common::get_business_settings('play_store_link');
        @endphp

        <section id="general-info">
            <div class="card rounded">
                @include('partials.session_message')
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form class="form" action="{{ route('admin.business_settings.appSetting') }}" method="post"
                            enctype="multipart/form-data">@csrf
                            <div class="form-body">
                                <h4 class="form-section"><i class="feather icon-grid"></i>
                                    {{ __('Apps Download Link') }}
                                </h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apple_store_link">{{ __('Apple Store Link') }}</label>
                                            <input type="text" id="apple_store_link" class="form-control"
                                                placeholder="Ex: #" name="apple_store_link" value="{{ $appStoreLink }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="play_store_link">{{ __('Google Play Store Link') }}</label>
                                            <input type="text" id="play_store_link" class="form-control"
                                                placeholder="Ex: #" name="play_store_link"
                                                value="{{ $playStoreLink }}">
                                        </div>
                                    </div>
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
        </section>
    </div>
</div>
@endsection

@section('script')
@endsection
