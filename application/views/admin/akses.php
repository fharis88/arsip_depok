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
          <h1 class="h3 mb-2 text-gray-800">User</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel User</h6>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-sm-right" data-toggle="modal" data-target="#tambah_user_Modal"><i class="fas fa-plus-square fa-sm text-white-50"></i> Tambah User</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="aksesTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>Kategori</th>
                      <th>Kegiatan</th>
                      <th>Akses</th>
                      <td>Action</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>340059936</td>
                      <td>Rizky Aldi Kurniawan A.P.Kb.N.</td>
                      <td>TU</td>
                      <td>Gaji</td>
                      <td>Add, View, Download</td>
                      <td>
                          <a href="#" class="btn-sm btn-danger btn-circle">
                            <i class="fa fa-trash"></i>
                          </a>
                        </td>
                    </tr>
                    <tr>
                      <td>340059515</td>
                      <td>Faisal Haris</td>
                      <td>IPDS</td>
                      <td>Wilayah Kerja Statistik</td>
                      <td>Add, View, Download</td>
                      <td>
                          <a href="#" class="btn-sm btn-danger btn-circle">
                            <i class="fa fa-trash"></i>
                          </a>
                        </td>
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
