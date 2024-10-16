<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Online Movie Ticket Booking <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{route('category')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Category</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{route('movie.list')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Movie</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('booking.list')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Booking</span></a>
    </li>

   
    

    <li class="nav-item active">
        <a class="nav-link" href="{{route('logout')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Log Out</span></a>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->

</ul>