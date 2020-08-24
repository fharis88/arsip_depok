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

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Kategori dan Kegiatan</h1>
          <div class="row">
            <!-- DataTales Example -->
            <div class="card shadow mb-4 col-md-6">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Kategori</h6>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-sm-right" data-toggle="modal" data-target="#tambah_kategori_Modal"><i class="fas fa-plus-square fa-sm text-white-50"></i> Tambah Kategori</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="kategoriTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Kategori</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Kategori A</td>
                        <td>Kategori pada seksi A</td>
                      </tr>
                      <tr>
                        <td>Kategori B</td>
                        <td>Kategori pada seksi B</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="card shadow mb-4 col-md-6">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Kegiatan</h6>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-sm-right" data-toggle="modal" data-target="#tambah_kegiatan_Modal"><i class="fas fa-plus-square fa-sm text-white-50"></i> Tambah Kegiatan</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="kegiatanTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Kategori</th>
                        <th>Kegiatan</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Kategori A</td>
                        <td>Kegiatan AA</td>
                        <td>kegiatan AA pada seksi A</td>
                      </tr>
                      <tr>
                        <td>Kategori B</td>
                        <td>Kegiatan BB</td>
                        <td>Kegiatan BB pada seksi B</td>
                      </tr>
                      <tr>
                        <td>Kategori A</td>
                        <td>Kegiatan AB</td>
                        <td>Kegiatan AB pada seksi A</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
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
  <?php $this->load->view("admin/_partials/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
