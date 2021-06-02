<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- Peserta -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-book-open"></i>
            <span>Kelengkapan Data</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/peserta') ?>">
            <i class="far fa-id-badge"></i>
            Peseta Didik</a> 
            <a class="dropdown-item" href="<?php echo site_url('admin/kompli') ?>">
            <i class="fas fa-cog"></i>
            Kompetensi Keahlian</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/rombel') ?>">
            <i class="fas fa-chalkboard-teacher"></i>
            Rombongan Belajar</a>
        </div>
        
    </li>
    <!-- End Peserta -->
    <!-- Persuratan -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdownSurat" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="far fa-paper-plane"></i>
            <span>Layanan Surat</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdownSurat">
            <a class="dropdown-item" href="<?php echo site_url('admin/pengajuan_kip') ?>">
            <i class="fas fa-file-contract"></i>
            Pengajuan Awal KIP</a> 
            <a class="dropdown-item" href="<?php echo site_url('admin/surat_keluar') ?>">
            <i class="fas fa-map-marker-alt"></i>
            Surat Izin Keluar</a> 
        </div>
    <!-- End Persuratan -->
    <!-- Sekolah -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/datasekolah') ?>">
            <i class="far fa-building"></i>
            <span>Data Sekolah</span></a>
    </li>
    <!-- user -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/user') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li>
</ul>
