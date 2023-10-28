@extends('layouts.backend.app')
@section('title', __('Quote Settings'))

@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-1">
            <h3 class="content-header-title">{{ __('Quote Settings') }}</h3>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('Quote Settings') }}</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-body">
        @php
            $price_per_word = \App\Helpers\Common::get_business_settings('price_per_word');
            $delivery_words_per_day = \App\Helpers\Common::get_business_settings('delivery_words_per_day');
        @endphp

        <section id="general-info">
            <form class="form" action="{{ route('admin.settings.quote-settings') }}" method="post"
            enctype="multipart/form-data">@csrf
            @include('partials.session_message')
                <div class="card rounded">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="form-body">
                                <h4 class="form-section"><i class="feather icon-briefcase"></i>
                                    {{ __('Quote Information') }}
                                </h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price_per_word">{{ 'Price per word' }}</label>
                                            <input type="number" id="price_per_word" class="form-control"
                                                placeholder="Ex: $0.1" name="price_per_word"
                                                value="{{ $price_per_word }}" min="0" step="any">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="delivery_words_per_day">{{ 'Estimated Delivery (words in a day)' }}</label>
                                            <input type="number" id="delivery_words_per_day" class="form-control"
                                                placeholder="Ex: 20000" name="delivery_words_per_day"
                                                value="{{ $delivery_words_per_day }}" min="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary px-4 submit-btn">{{__('Submit')}}</button>
                </div>
            </form>
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
