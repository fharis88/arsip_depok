
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




      <!-- Nav Item - Data -->
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('dokumen') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('kategori_kegiatan') ?>">
          <i class="fas fa-fw fa-cubes"></i>
          <span>Kategori dan Kegiatan</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Extras
      </div>

      <!-- Nav Item - Template -->
      <li class="d-none nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('template') ?>">
          <i class="fas fa-fw fa-file-alt"></i>
          <span>Template</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class=" <?php if ($this->session->userdata('tipe_user')=="Admin"||$this->session->userdata('tipe_user')=="Kepala Seksi"||$this->session->userdata('tipe_user')=="Kepala") {
                            # code...
                          }else
                            echo 'd-none'
                          ?> nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('user') ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>User</span></a>
      </li>

      <!-- Nav Item - Aksesibilitas -->
      <li class="d-none nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('akses') ?>">
          <i class="fas fa-fw fa-map-signs"></i>
          <span>Akses</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
