  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-surehelp sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/dashboard')}}">
        <div class="sidebar-brand-icon ">
            {{-- <i class="fas fa-laugh-wink"></i>
             --}}

             <img src="{{ asset('assets/web/images/logo.png') }}" width="30%" alt="">
             
        </div>
        {{-- <div class="sidebar-brand-text mx-3"> {{ env('APP_NAME') }}</div> --}}
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('/dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Navigations
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Requests</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Request section:</h6>
                <a class="collapse-item" href="{{url("/dashboard/request/new")}}">New</a>
                <a class="collapse-item" href="{{url("/dashboard")}}">My Requests</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Inbox</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Inbox section:</h6>
                <a class="collapse-item" href="{{url('/dashboard/inbox/messages')}}">Check Inbox</a>
                
            </div>
        </div>
    </li>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
            aria-expanded="true" aria-controls="collapseFour">
            <i class="fas fa-fw fa-store"></i>
            <span>Free Store</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Free Store section:</h6>
                <a class="collapse-item" href="{{url('/store')}}">Free Store</a>
                <a class="collapse-item" href="{{url('dashboard/store/wish-list')}}">My Wish List</a>
                {{-- <a class="collapse-item" href="#">Rejected</a> --}}
            </div>
        </div>
    </li>

    

  

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"><i class="arrow-left"></i></button>
    </div>

</ul>
<!-- End of Sidebar -->