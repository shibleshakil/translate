@extends('layouts.backend.app')
@section('title', __('Business Settings'))

@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-1">
            <h3 class="content-header-title">{{ __('Business Settings') }}</h3>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('Business Settings') }}</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-body">
        @include('backend.business_settings.top_nav')

        @php
            $maintainanceMode = \App\Helpers\Common::get_business_settings('maintenance_mode');
            $companyName = \App\Helpers\Common::get_business_settings('company_name');
            $logo = \App\Helpers\Common::get_business_settings('logo');
            $small_logo = \App\Helpers\Common::get_business_settings('small_logo');
            $footer_logo = \App\Helpers\Common::get_business_settings('footer_logo');
            $companyEmail = \App\Helpers\Common::get_business_settings('company_email');
            $companyPhone = \App\Helpers\Common::get_business_settings('company_phone');
            $companyAddress = \App\Helpers\Common::get_business_settings('company_address');
            $copyRight = \App\Helpers\Common::get_business_settings('copy_right_text');
        @endphp

        <section id="general-info">
            <div class="card rounded">
                <div class="card-body">
                    <div class="rounded border-color-c1 px-1 py-1 d-flex justify-content-between">
                        <h5 class="mb-0 d-flex gap-1 c1">
                            {{ __('Maintenance Mode') }}
                        </h5>
                        <div class="position-relative">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="maintenance_mode"
                                    {{ $maintainanceMode == 1 ? 'checked' : '' }} onclick="maintenance_mode()">
                                <label class="custom-control-label" for="maintenance_mode"></label>
                            </div>
                        </div>
                    </div>
                    <p class="text-danger mb-0">
                        *{{ __('By turning on maintaince mode all your app and customer website will be turned off. Only admin panel will be functional') }}
                    </p>
                </div>
            </div>


            <div class="card rounded">
                @include('partials.session_message')
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form class="form" action="{{ route('admin.business_settings.generalInfo') }}" method="post"
                            enctype="multipart/form-data">@csrf
                            <div class="form-body">
                                <h4 class="form-section"><i class="feather icon-user"></i>
                                    {{ __('Company Information') }}
                                </h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company_name">{{ 'Company Name' }}</label>
                                            <input type="text" id="company_name" class="form-control"
                                                placeholder="Ex: Chamaz" name="company_name"
                                                value="{{ $companyName }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company_email">{{ 'Company Email' }}</label>
                                            <input type="email" id="company_email" class="form-control"
                                                placeholder="Ex: info@company.com" name="company_email"
                                                value="{{ $companyEmail }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company_phone">{{ 'Company Phone' }}</label>
                                            <input type="text" id="company_phone" class="form-control"
                                                placeholder="Ex: +8801717124584" name="company_phone"
                                                value="{{ $companyPhone }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company_address">{{ 'Company Address' }}</label>
                                            <input type="text" id="company_address" class="form-control"
                                                placeholder="Ex: House# 07, Road# SW 07, Gulshan-1, Dhaka-1212"
                                                name="company_address" value="{{ $companyAddress }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="copy_right_text">{{ 'Copy Right Text' }}</label>
                                            <input type="text" id="copy_right_text" class="form-control"
                                                placeholder="Ex: Copyright © 2023" name="copy_right_text"
                                                value="{{ $copyRight }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3 form-group">
                                        <label for="logo">{{ __('Website Header Logo') }}</label>
                                        <input type="file" id="logo" name="logo" class="dropify"
                                            @if ($logo) data-default-file="{{ asset('public/storage/' . $logo) }}" @endif />
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="small_logo">{{ __('Small Logo') }}</label>
                                        <input type="file" id="small_logo" name="small_logo" class="dropify"
                                            @if ($small_logo) data-default-file="{{ asset('public/storage/' . $small_logo) }}" @endif />
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="footer_logo">{{ __('Website Footer Logo') }}</label>
                                        <input type="file" id="footer_logo" name="footer_logo" class="dropify"
                                            @if ($footer_logo) data-default-file="{{ asset('public/storage/' . $footer_logo) }}" @endif />
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
    <script type="text/javascript">
        function maintenance_mode() {
            Swal.fire({
                title: '{{ __('Are you sure') }}?',
                text: '{{ __('Be careful before you turn on/off maintenance mode') }}',
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: 'default',
                confirmButtonColor: '#377dff',
                cancelButtonText: 'No',
                confirmButtonText: 'Yes',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    $.get({
                        url: '{{ route('admin.business_settings.maintenanceMode') }}',
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            Swal.fire({
                                type:data.type,
                                title:data.title,
                                text:data.msg,
                            });
                        },
                    });
                } else {
                    location.reload();
                }
            })
        };
    </script>
@endsection
