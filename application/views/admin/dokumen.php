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
          <h1 class="h3 mb-2 text-gray-800">Dokumen</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary">Tabel Dokumen</h5>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-sm-right" data-toggle="modal" data-target="#tambah_dokumen_Modal"><i class="fas fa-plus-square fa-sm text-white-50"></i> Tambah Data</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kategori</th>
                      <th>Kegiatan</th>
                      <th>Jenis</th>
                      <th>Judul</th>
                      <th>Tanggal</th>
                      <th>Tanggal Upload</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($dokumen as $dokumens): ?>
                      <tr>
                        <td>
                          <?php echo $dokumens->kategori ?>
                        </td>
                        <td>
                          <?php echo $dokumens->kegiatan ?>
                        </td>
                        <td>
                          <?php echo $dokumens->jenis ?>
                        </td>
                        <td>
                          <?php echo $dokumens->judul ?>
                        </td>
                        <td>
                          <?php echo $dokumens->tanggal ?>
                        </td>
                        <td>
                          <?php echo $dokumens->waktu_upload ?>
                        </td>
                        <td>
                          <a 
                       href="<?php echo site_url('admin/dokumen/delete_dokumen/'.$dokumens->id_data) ?>" class="btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
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
  <?php $this->load->view("admin/_partials/tambah_modal.php") ?>
  <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
