<!-- - var menuBorder = true-->
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

@php($small_logo = \App\Helpers\Common::get_business_settings('small_logo'))
@php($company_name = \App\Helpers\Common::get_business_settings('company_name'))

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $company_name ?? 'Translations' }} | @yield('title')</title>

    <link rel="icon" type="image/x-icon" href="{{$small_logo? asset ('public/storage/'. $small_logo) : asset ('public/frontend/images/logosmall.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{$small_logo? asset ('public/storage/'. $small_logo) : asset ('public/frontend/images/logosmall.png') }}" sizes="16x16">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/vendors/css/forms/selects/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/vendors/css/forms/toggle/switchery.min.css') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/fonts/simple-line-icons/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/css/pages/card-statistics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/css/pages/vertical-timeline.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/assets/css/dropify.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/css/plugins/forms/switch.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/assets/css/style.css?v1.0') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <input type="hidden" id="csrfToken" value="{{ csrf_token() }}">

    <!-- BEGIN: Header-->
    @include('layouts.user.header')
    <!-- END: Header-->

    <!-- BEGIN: Sidebar-->
    @include('layouts.user.sidebar')
    <!-- END: Sidebar-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        @yield('content')
    </div>
    <!-- END: Content-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('layouts.backend.footer')


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset ('public/backend/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('public/backend/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('public/backend/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('public/backend/app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('public/backend/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js') }}"></script>
    <script src="{{ asset('public/backend/app-assets/vendors/js/forms/toggle/switchery.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset ('public/backend/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset ('public/backend/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset ('public/backend/assets/js/dropify.min.js')}}"></script>
    <script src="{{ asset ('public/backend/app-assets/js/scripts/forms/switch.js')}}"></script>
    <script src="{{ asset ('public/backend/assets/js/datatable.js?v1.1')}}"></script>
    <script src="{{ asset ('public/backend/assets/js/dropify-init.js?v1.1')}}"></script>
    <script src="{{ asset ('public/backend/assets/js/scripts.js?v1.2')}}"></script>
    <!-- END: Theme JS-->
    <script type="text/javascript">
        $(function () {
            $(".form").submit( function (){
                $(".submit-btn").attr("disabled", true);
                return true;
            });

            $(".select2").select2();
        })
    </script>
    <!-- BEGIN: Page JS-->
    @yield('script')
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
