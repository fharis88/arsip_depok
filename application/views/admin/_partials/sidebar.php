
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('dashboard') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="logo web" style="width:50px;height:60px;">
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo SITE_NAME ?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>




      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-fw fa-table"></i>
          <span>Data</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manajemen Data</h6>
            <a class="collapse-item" href="<?php echo site_url('upload_data') ?>">Upload</a>
            <a class="collapse-item" href="<?php echo site_url('view_data') ?>">View</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cubes"></i>
          <span>Kategori dan Kegiatan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kategori dan Kegiatan</h6>
            <a class="collapse-item" href="<?php echo site_url('tambah_kategori') ?>">Tambah Kategori</a>
            <a class="collapse-item" href="<?php echo site_url('tambah_kegiatan') ?>">Tambah Kegiatan</a>
            <a class="collapse-item" href="<?php echo site_url('view_kegiatan') ?>">View</a>
          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Extras
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- Nav Item - Charts -->
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('template') ?>">
          <i class="fas fa-fw fa-file-alt"></i>
          <span>Template</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-cubes"></i>
          <span>User</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manajemen User</h6>
            <a class="collapse-item" href="<?php echo site_url('tambah_user') ?>">Tambah User</a>
            <a class="collapse-item" href="<?php echo site_url('view_user') ?>">View</a>
          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
