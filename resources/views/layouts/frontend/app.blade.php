<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Translations | @yield('title')</title>

    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.11/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset ('public/frontend/css/main.css') }}">
    <link rel="icon" href="{{ asset ('public/frontend/images/logosmall.png') }}">
    <link rel="icon" type="image/png" href="{{ asset ('public/frontend/images/logosmall.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset ('public/frontend/images/logosmall.png') }}" sizes="16x16">

    @yield('css')

</head>

<body>

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
