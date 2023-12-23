<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="DayOne - It is one of the Major Dashboard Template which includes - HR, Employee and Job Dashboard. This template has multipurpose HTML template and also deals with Task, Project, Client and Support System Dashboard." name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords" content="admin dashboard, admin panel template, html admin template, dashboard html template, bootstrap 4 dashboard, template admin bootstrap 4, simple admin panel template, simple dashboard html template,  bootstrap admin panel, task dashboard, job dashboard, bootstrap admin panel, dashboards html, panel in html, bootstrap 4 dashboard"/>

    <!-- Title -->
    <title>{{ config('app.name') }}</title>

    <!--Favicon -->
    <link rel="icon" href="{{ asset('assets/images/brand/favicon.ico') }}" type="image/x-icon"/>

    <!-- Bootstrap css -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />

    <!-- Style css -->
    <link href="{{ asset('assets/css-rtl/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css-rtl/dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css-rtl/skin-modes.css') }}" rel="stylesheet" />

    <!-- Animate css -->
    <link href="{{ asset('assets/css-rtl/animated.css') }}" rel="stylesheet" />

    <!--Sidemenu css -->
    <link  href="{{ asset('assets/css-rtl/sidemenu.css') }}" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="{{ asset('assets/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />

    <!---Icons css-->
    <link href="{{ asset('assets/css-rtl/icons.css') }}" rel="stylesheet" />

    <!---Sidebar css-->
    <link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet" />

    <!-- Select2 css -->
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

    <!-- PersianDateTimePicker css -->
    <link rel="stylesheet"
          href="{{ asset('assets\PersianDateTimePicker-bs4/src/jquery.md.bootstrap.datetimepicker.style.css') }}"/>

</head>

<body class="app sidebar-mini">

<!---Global-loader-->
<div id="global-loader" >
    <img src="{{ asset('assets/images/svgs/loader.svg') }}" alt="loader">
</div>

<div class="page">
    <div class="page-main">

        <!--aside open-->
        @include('layouts.admin.aside')
        <!--aside closed-->

        <div class="app-content main-content">
            <div class="side-app">

                <!--app header-->
                @include('layouts.admin.header')
                <!--/app header-->

                @yield('content')

            </div>
        </div><!-- end app-content-->
    </div>

    <!--Footer-->
    @include('layouts.admin.footer')
    <!-- End Footer-->

    <!--Sidebar-right-->
    @include('layouts.admin.sidebar-right')
    <!--/Sidebar-right-->

    <!--Change password Modal -->
    @include('layouts.admin.change-password')
    <!-- End Change password Modal  -->

</div>

<!-- Back to top -->
<a href="#top" id="back-to-top"><span class="feather feather-chevrons-up"></span></a>

<!-- Jquery js-->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap4 js-->
<script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!--Sidemenu js-->
<script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- P-scroll js-->
<script src="{{ asset('assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
<script src="{{ asset('assets/plugins/p-scrollbar/p-scroll1.js') }}"></script>

<!--Sidebar js-->
<script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>

<!-- Select2 js -->
<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>

<!-- PersianDateTimePicker js -->
<script src="{{ asset('assets\PersianDateTimePicker-bs4/src/jquery.md.bootstrap.datetimepicker.js') }}"
        type="text/javascript"></script>

<!-- Custom js-->
<script src="{{ asset('assets/js/custom.js') }}"></script>

@yield('scripts')

</body>
</html>
