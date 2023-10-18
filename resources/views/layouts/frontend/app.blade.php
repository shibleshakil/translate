<!DOCTYPE html>
<html lang="en">

@php($logo = \App\Helpers\Common::get_business_settings('logo'))
@php($footer_logo = \App\Helpers\Common::get_business_settings('footer_logo'))
@php($small_logo = \App\Helpers\Common::get_business_settings('logo_small'))
@php($company_email = \App\Helpers\Common::get_business_settings('company_email'))
@php($company_name = \App\Helpers\Common::get_business_settings('company_name'))

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $company_name ?? 'Translations' }} | @yield('title')</title>

    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.11/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset ('public/frontend/css/main.css') }}">
    <link rel="icon" type="image/x-icon" href="{{$small_logo ? asset ('public/storage/'. $small_logo) : asset ('public/frontend/images/logosmall.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{$small_logo ? asset ('public/storage/'. $small_logo) : asset ('public/frontend/images/logosmall.png') }}" sizes="16x16">

    @yield('css')

</head>

<body>
    <input type="hidden" id="csrfToken" value="{{ csrf_token() }}">

    @include('layouts.frontend.header')

    <main>
        @yield('content')

    </main>
    <!-- Button trigger modal -->

    @include('layouts.frontend.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.11/js/select2.full.min.js"></script>
    @yield('script')

</body>

</html>
