  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
        <!-- <i class="fas fa-laugh-wink"></i> -->
    </div>
    <div class="sidebar-brand-text mx-3">Master Admin<sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link" href="{{ route('vendors') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Vendors</span></a>
        <a class="nav-link" href="{{ route('customerdata') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Customers</span></a>
        <a class="nav-link" href="{{ route('warrantycards') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Warranty cards</span></a>
</li> 
<!-- Heading -->
<!-- <div class="sidebar-heading">
    Addons
</div> -->

<!-- Nav Item - Pages Collapse Menu -->
<!-- <li class="nav-item active">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
        aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{ route('vendors') }}">Vendors</a>
            <a class="collapse-item" href="{{ route('warrantycards') }}">Warranty cards</a>
            <a class="collapse-item" href="{{ route('customerdata') }}"> Customer</a>
           
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="{{ route('login') }}">Login</a>
            <a class="collapse-item" href="{{ route('register') }}">Register</a>
            <a class="collapse-item" href="{{ route('ForgetPasswordGet') }}">Forgot Password</a>
            <div class="collapse-divider"></div>
          
        </div>
    </div>
</li> -->

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
<li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Logout</span></a>
</li>

</ul>


<!-- End of Sidebar -->