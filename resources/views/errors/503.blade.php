<!-- - var menuBorder = true-->
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Under Maintenance - Translations</title>

    <link rel="icon" type="image/x-icon" href="{{ asset ('public/frontend/images/logosmall.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset ('public/frontend/images/logosmall.png') }}" sizes="16x16">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/vendors/css/vendors.min.css') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/app-assets/css/pages/under-maintenance.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/backend/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 1-column bg-maintenance-image blank-page blank-page" data-open="click"
    data-menu="vertical-menu" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 box-shadow-3 m-0">
                                <div class="card-body">
                                    <span class="card-title text-center">
                                        <img src="{{ asset ('public/frontend/images/logotop.png') }}"
                                            class="img-fluid mx-auto d-block pt-2" width="250" alt="logo">
                                    </span>
                                </div>
                                <div class="card-body text-center">
                                    <h3>This site is under maintenance</h3>
                                    <p>We're sorry for the inconvenience.
                                        <br> Please check back later.
                                    </p>
                                    <div class="mt-2"><i class="fa fa-cog spinner font-large-2"></i></div>
                                </div>
                                <hr>
                                <p class="socialIcon card-text text-center pt-2 pb-2">
                                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin">
                                        <span class="fa fa-linkedin font-medium-4"></span>
                                    </a>
                                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github">
                                        <span class="fa fa-github font-medium-4"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset ('public/backend/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset ('public/backend/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset ('public/backend/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
