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
          <h1 class="h3 mb-2 text-gray-800">Tambah Kategori</h1>
          <div class="row">
            <!-- DataTales Example -->
            <div class="card shadow mb-4 col-md-6">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"></h6>
              </div>
              <div class="card-body">
                <form class="user">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="Kategori" placeholder="Nama Kategori......">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="Keterangan" rows="5" placeholder="Keterangan....."></textarea>
                  </div>
                  <a href="index.html" class="btn btn-primary btn-user btn-block">
                    Simpan Kategori
                  </a>
                  <hr>
                </form>
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

  <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
