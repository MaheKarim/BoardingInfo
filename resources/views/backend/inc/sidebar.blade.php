<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="{{ route('admin.all_data') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    All Data
                </a>

                <a class="nav-link" href="{{ route('admin.category') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tint"></i></div>
                    Category
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ Auth::user()->name }}
        </div>
    </nav>
</div>
