<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?= site_url('dashboard') ?>">RentGo</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= site_url('dashboard') ?>">RG</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="<?= $title === 'Dashboard' ? 'active' : '' ?>">
                <a href="<?= site_url('dashboard') ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Master</li>
            <li class="nav-item dropdown <?= $title === 'Data Mobil' || $title === 'Data Tipe' || $title === 'Data Customer' ? 'active' : ''; ?>">
                <a href="#" class="nav-link has-dropdown <?= $title === 'Data Mobil' || $title === 'Data Tipe' || $title === 'Data Customer' ? 'active' : ''; ?>" data-toggle="dropdown"><i class="fas fa-table"></i> <span>Data Master</span></a>
                <ul class="dropdown-menu">
                    <li class="<?= $title === 'Data Mobil' ? 'active' : '' ?>"><a class="nav-link" href="<?= site_url('mobil') ?>">Data Mobil</a></li>
                    <li class="<?= $title === 'Data Tipe' ? 'active' : '' ?>"><a class="nav-link" href="<?= site_url('tipe') ?>">Data Tipe</a></li>
                    <li class="<?= $title === 'Data Customer' ? 'active' : '' ?>"><a class="nav-link" href="<?= site_url('customer') ?>">Data Customer</a></li>
                </ul>
            </li>
            <li class="<?= $title === 'Transaksi' ? 'active' : '' ?>"><a class="nav-link" href="<?= site_url('transaksi') ?>"><i class="fas fa-shuffle"></i> <span>Transaksi</span></a></li>
            <li class="<?= $title === 'Laporan' ? 'active' : '' ?>"><a class="nav-link" href="<?= site_url('laporan') ?>"><i class="fas fa-newspaper"></i> <span>Laporan</span></a></li>
            <li class="menu-header">Ekstra</li>
            <li><a class="nav-link text-danger" href="<?= site_url('auth/logout') ?>"><i class="fas fa-right-from-bracket"></i> <span>Logout</span></a></li>
        </ul>
    </aside>
</div>