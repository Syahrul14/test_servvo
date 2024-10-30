<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-text mx-3">Product Care</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('customer.locations') }}">
            <i class="fas fa-fw fa-map-marker-alt"></i>
            <span>Locations</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('customer.request_refill') }}">
            <i class="fas fa-fw fa-sync-alt"></i>
            <span>Request Refill</span>
        </a>
    </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('customer.transaction-list') }}">
                <i class="fas fa-fw fa-list"></i>
                <span>Transaction Status</span>
            </a>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
</ul>
<!-- End of Sidebar -->