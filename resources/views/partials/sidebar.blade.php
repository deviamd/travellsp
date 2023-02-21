<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                @can('admin')
                <a class="nav-link" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="/user">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    User
                </a>
                <a class="nav-link" href="/travel_package">
                    <div class="sb-nav-link-icon"><i class="fas fa-suitcase-rolling"></i></div>
                    Travel_packages
                </a>
                <a class="nav-link" href="/transaksi">
                    <div class="sb-nav-link-icon"><i class="fas fa-money-bill-wave"></i></div>
                    Transaksi
                </a>

                @elsecan('user')
                <a class="nav-link" href="/transaksiuser">
                    <div class="sb-nav-link-icon"><i class="fas fa-money-bill-wave"></i></div>
                    Transaksi
                </a>
                {{-- <a class="nav-link" href="/transaksi_user_detail">
                    <div class="sb-nav-link-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    Transaksi Details
                </a> --}}
                @endcan

            </div>
        </div>
    </nav>
</div>
