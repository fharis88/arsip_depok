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
          <h1 class="h3 mb-2 text-gray-800">Data</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary">Tabel Data</h5>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-sm-right" data-toggle="modal" data-target="#tambah_data_Modal"><i class="fas fa-plus-square fa-sm text-white-50"></i> Tambah Data</a>
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
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Kategori A</td>
                      <td>Kegiatan AA</td>
                      <td>Foto</td>
                      <td>Foto Dokumentasi Kegiatan AA</td>
                      <td>2020/04/25</td>
                      <td>2020/05/04</td>
                    </tr>
                    <tr>
                      <td>Kategori B</td>
                      <td>Kegiatan BB</td>
                      <td>Laporan</td>
                      <td>Laporan Kegiatan BB</td>
                      <td>2020/04/28</td>
                      <td>2020/05/03</td>
                    </tr>
                    <tr>
                      <td>Kategori A</td>
                      <td>Kegiatan AB</td>
                      <td>File</td>
                      <td>Data Kegiatan AB</td>
                      <td>2020/05/20</td>
                      <td>2020/05/27</td>
                    </tr>
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
    <?php $this->load->view("admin/_partials/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
