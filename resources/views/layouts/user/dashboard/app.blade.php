<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME') }} Dashboard</title>
    @include('layouts.user.dashboard.styling')
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse"
                    data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="{{ url('dashboard') }}">
                    <img src="{{ asset('surehelp_logo.png') }}" style="width: 50px; height: 50px;" alt="homepage" />
                </a>

                <div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                {{-- <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown4"><i
                            class="fa fa-envelope fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown3"><i
                            class="fa fa-tasks fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown2"><i
                            class="fa fa-bell fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li> --}}
                <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i
                            class="fa fa-user fa-fw"></i> <b>{{Auth::user()->fullname}}</b> <i
                            class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a>
            </li>
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>



        <!--/. NAV TOP  -->
        @include('layouts.user.dashboard.sidebar_navigation')
        <!-- /. NAV SIDE  -->

        @yield('main-content')
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    @include('layouts.user.dashboard.js_scripts')


</body>

</html>
