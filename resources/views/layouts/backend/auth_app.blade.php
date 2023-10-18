<!-- - var menuBorder = true-->
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

@php($logo = \App\Helpers\Common::get_business_settings('logo'))
@php($small_logo = \App\Helpers\Common::get_business_settings('small_logo'))
@php($company_name = \App\Helpers\Common::get_business_settings('company_name'))

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $company_name ?? 'Translations' }} | @yield('title')</title>

    <link rel="icon" type="image/x-icon" href="{{$small_logo ? asset ('public/storage/'. $small_logo) : asset ('public/frontend/images/logosmall.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{$small_logo ? asset ('public/storage/'. $small_logo) : asset ('public/frontend/images/logosmall.png') }}" sizes="16x16">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/vendors/css/forms/icheck/icheck.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/vendors/css/forms/icheck/custom.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/css/components.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/css/pages/login-register.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 1-column blank-page blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">

    <input type="hidden" id="csrfToken" value="{{ csrf_token() }}">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        @yield('content')
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset ('public/backend/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset ('public/backend/app-assets/vendors/js/forms/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset ('public/backend/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset ('public/backend/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset ('public/backend/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset ('public/backend/app-assets/js/scripts/forms/form-login-register.js') }}"></script>
    @yield('script')
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
