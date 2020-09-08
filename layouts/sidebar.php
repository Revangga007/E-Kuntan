    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASE_URL; ?>/dashboard">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fa fa-calculator" aria-hidden="true"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Ekuntan<sup>Cuzz</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL; ?>/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menu
        </div>

        <!-- Nav Item - Kategori -->
        <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL; ?>/kategori">
                <i class="fa fa-list" aria-hidden="true"></i>
                <span>Kategori</span></a>
        </li>

        <!-- Nav Item - Rekening -->
        <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL; ?>/rekening">
                <i class="fa fa-credit-card" aria-hidden="true"></i>
                <span>Rekening</span></a>
        </li>
        <!-- Nav Item - Transaksi -->
        <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL; ?>/transaksi">
                <i class="fas fa-exchange-alt"></i>
                <span>Transaksi</span></a>
        </li>

        <!-- Nav Item - Pengguna Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_hutang" aria-expanded="true" aria-controls="collapse_hutang">
                <i class="fa fa-retweet" aria-hidden="true"></i>
                <span>Hutang & Piutang</span>
            </a>
            <div id="collapse_hutang" class="collapse" aria-labelledby="heading_hutang" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Submenu</h6>
                    <a class="collapse-item" href="<?= BASE_URL; ?>/hutang">Hutang</a>
                    <a class="collapse-item" href="<?= BASE_URL; ?>/piutang">Piutang</a>
                </div>
            </div>
        </li>
        <!-- Nav Item - Pengguna Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL; ?>/pengguna">
                <i class="fas fa-user"></i>
                <span>Pengguna</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL; ?>/laporan">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Laporan</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>