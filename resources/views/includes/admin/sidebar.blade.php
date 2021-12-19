<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-text mx-3">
            Vaccine Admin
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('participant.index') }}">
            <i class="fas fa-users"></i>
            <span>Peserta Vaksin</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('vaccine.index') }}">
            <i class="fas fa-medkit"></i>
            <span>Vaksin</span></a>
    </li>

</ul>
<!-- End of Sidebar -->
