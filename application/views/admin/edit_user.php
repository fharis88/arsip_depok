<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
      <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
          <?php $this->load->view("admin/_partials/topbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>

        </div>
        <?php endif; ?>
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">User</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary">Edit User</h5>
              
            </div>
            <div class="card-body">
              <form action="<?php echo site_url('admin/user/update_user') ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nip_lama_edit_user" placeholder="NIP Lama......">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nama_edit_user" placeholder="Nama......">
                  </div>
                  <div>
                    <select class="form-control " name="tipe_edit_user">
                      <option class="d-none" > - </option>
                      <option>Admin</option>
                      <option>Kepala</option>
                      <option>Kepala Subbagian</option>
                      <option>Kepala Seksi</option>
                      <option>Staff</option>
                      <option>KSK</option>
                      <option>Mitra</option>
                      
                    </select>
                  </div>
                  <div>
                    <select class="form-control " name="seksi_edit_user">
                      <option class="d-none">Seksi...</option>
                      <option>TU</option>
                      <option>Seksi Statistik Sosial</option>
                      <option>Seksi Statistik Produksi</option>
                      <option>Seksi Statistik Distribusi</option>
                      <option>Seksi Neraca Wilayah dan Analisis Statistik</option>
                      <option>Seksi Integrasi Pengolahan dan Diseminasi Statistik</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password_edit_user" placeholder="Password......">
                  </div>
                  <div class="form-group">
                    <input type="hidden" class="form-control form-control-user" name="Password_Ulang_edit_user" placeholder="Tuliskan kembali Password......">
                  </div>
                  <input class="btn btn-success" type="submit" name="tambah_edit_user" value="Tambah User" />
                </form>
            </div>
          </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
        <?php $this->load->view("admin/_partials/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
 
  <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("admin/_partials/js.php") ?>

   



</body>

</html>
