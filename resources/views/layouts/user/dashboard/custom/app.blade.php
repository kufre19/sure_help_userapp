<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ env('APP_NAME') }} </title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('js/custom/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    {{-- icons --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!-- Include the SweetAlert CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/custom/css/sb-admin-2.min.css') }}" rel="stylesheet">
    @yield('extraCss')

</head>

<body id="page-top">
    {{-- load all alerts --}}
    @include('user.dashboard.alerts.sweet-alert')
    {{-- @include('user.dashboard.alerts.all') --}}


    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('layouts.user.dashboard.custom.sidebar')


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('layouts.user.dashboard.custom.navigations')


                @yield('page_content')

            </div>
            <!-- End of Main Content -->

            @include('layouts.user.dashboard.custom.footer')


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('layouts.user.dashboard.custom.modals')


    @include('layouts.user.dashboard.custom.js_scripts')
    @yield('extraJS')



</body>

</html>
