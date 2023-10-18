@extends('layouts.backend.app')
@section('title', __('Mail Config'))

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
            $mailInfo = \App\Helpers\Common::get_business_settings('mail_config');
        @endphp

        <section id="mail-config">
            <div class="row">
                <div class="col-lg-8">
                    @include('partials.session_message')
                    <div class="card rounded">
                        <div class="card-body">
                            <form class="form" action="{{ route('admin.business_settings.mailConfig') }}" method="post"> @csrf
                                <div class="form-body">
                                    <h4 class="form-section"><i class="feather icon-mail"></i>
                                        {{ __('SMTP Mail Config') }}
                                    </h4>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="title-color">{{ __('Mail Mailer') }}</label>
                                            <input type="text" placeholder="ex : Alex" class="form-control" name="MAIL_MAILER"  value="{{ $mailInfo['MAIL_MAILER'] }}">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label class="title-color">{{ __('Mail Host') }}</label>
                                            <input type="text" class="form-control" name="MAIL_HOST" value="{{ $mailInfo['MAIL_HOST'] }}">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="title-color">{{ __('Mail Port') }}</label>
                                            <input type="text" class="form-control" name="MAIL_PORT" value="{{ $mailInfo['MAIL_PORT'] }}">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="title-color">{{ __('Mail Username') }}</label>
                                            <input type="text" class="form-control" name="MAIL_USERNAME" value="{{ $mailInfo['MAIL_USERNAME'] }}">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label class="title-color">{{ __('Mail Password') }}</label>
                                            <input type="text" placeholder="ex : ex@yahoo.com" class="form-control" name="MAIL_PASSWORD" value="{{ $mailInfo['MAIL_PASSWORD'] }}">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label class="title-color">{{ __('Mail Encryption') }}</label>
                                            <input type="text" placeholder="ex : ex@yahoo.com" class="form-control" name="MAIL_ENCRYPTION" value="{{ $mailInfo['MAIL_ENCRYPTION'] }}">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label class="title-color">{{ __('Mail From Address') }}</label>
                                            <input type="text" placeholder="ex : tls" class="form-control" name="MAIL_FROM_ADDRESS" value="{{ $mailInfo['MAIL_FROM_ADDRESS'] }}">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label class="title-color">{{ __('Mail From Name') }}</label>
                                            <input type="text" class="form-control" name="MAIL_FROM_NAME" value="{{ $mailInfo['MAIL_FROM_NAME'] }}">
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-end">
                                        <button type="submit" class="btn btn-primary px-4" id="submitBtn">{{ __('Save Changes') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card rounded">
                        <div class="card-body">
                            <form class="form" action="javascript:">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="inputPassword2" class="sr-only">{{ __('Email') }}</label>
                                            <input type="email" id="test-email" class="form-control"
                                                placeholder="Ex : jhon@email.com">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="button" onclick="send_mail()" class="btn btn-primary btn-block">
                                            {{ __('Send Test Mail') }}
                                        </button>
                                    </div>
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
    <script type="text/javascript">
        function ValidateEmail(inputText) {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (inputText.match(mailformat)) {
                return true;
            } else {
                return false;
            }
        }

        function send_mail() {
            if (ValidateEmail($('#test-email').val())) {
                Swal.fire({
                    title: '{{__('Are you sure?')}}?',
                    text: "{{__('A test email will be sent to your email')}}!",
                    showCancelButton: true,
                    confirmButtonColor: '#377dff',
                    cancelButtonColor: 'secondary',
                    confirmButtonText: '{{__('Yes')}}!'
                }).then((result) => {
                    if (result.value) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: "{{route('admin.business_settings.sendTestMail')}}",
                            method: 'POST',
                            data: {
                                "_token": $("#csrfToken").val(),
                                "email": $('#test-email').val(),
                            },
                            success: function (data) {
                                swal.fire({
                                    type: data.type,
                                    text: data.msg,
                                });
                                $('#test-email').val('');
                            },
                            error: function(xhr, status, error) {
                                // Handle error
                                if (xhr.status === 422) {
                                    var errors = xhr.responseJSON.errors;
                                    var title = xhr.responseJSON.message;
                                    var errorMessages = [];

                                    for (var key in errors) {
                                        if (errors.hasOwnProperty(key)) {
                                            errorMessages.push(errors[key][0] + '<br>'); // Add line break after each error key
                                        }
                                    }

                                    swal.fire({
                                        title: title,
                                        type: 'error',
                                        text: errorMessages,
                                    });

                                } else {
                                    console.error(error);
                                }
                            }
                        });
                    }
                })
            } else {
                swal.fire({
                    type: "error",
                    text: "{{ __('Invalid email address')}} !!",
                });
            }
        }
    </script>
@endsection
