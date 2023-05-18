<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>{{env("APP_NAME")}}</title>
  <!-- MDB icon -->
  {{-- <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" /> --}}
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  {{-- <link rel="stylesheet" href="{{asset('custom/login_reg/css/bootstrap-login-form.min.css')}}" /> --}}
  @include('layouts.mdb-css-inclusion')
</head>

<body>
  <!-- Start your project here-->
  @include('layouts.store.navigation')

  <style>
    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }
    .h-custom {
      height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }
  </style>
 
 @yield('main-content')

  <!-- MDB -->
  {{-- <script type="text/javascript" src="{{asset('custom/login_reg/js/mdb.min.js')}}"></script> --}}
  @include('layouts.mdb-js-inclusion')

  <!-- Custom scripts -->
  <script type="text/javascript"></script>
  @yield('js-script')
</body>

</html>