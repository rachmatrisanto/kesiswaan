<nav class="navbar navbar-expand navbar-dark bg-primary static-top">

    <a class="navbar-brand mr-1" href="<?php echo site_url('admin') ?>">
    <img class="img-circle" src="<?php echo base_url()?>assets/image/logo.png" width="40px" height="40px" />
    Negeri 5 Surabaya 
    </a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    

    <ul class="navbar-nav ml-auto ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>User
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a hidden class="dropdown-item" href="<?php echo site_url('admin/user/ganti_password')?>"><i class="fas fa-lock"></i> Ganti Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-door-open"></i> Logout</a>
            </div>
        </li>
    </ul>
    <?php $this->load->view("admin/_partials/modal.php") ?>
</nav>
