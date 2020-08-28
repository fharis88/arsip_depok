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
          <h1 class="h3 mb-2 text-gray-800">Kegiatan</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary">Edit Kegiatan</h5>
              
            </div>
            <div class="card-body">
              <form action="<?php echo site_url('admin/kategori_kegiatan/update_kegiatan') ?>" method="post" enctype="multipart/form-data" >
                  <div class="form-group">
                    <input type="hidden" name="id_edit_kegiatan" value="<?php echo $kegiatan->id_kegiatan ?>" />
                  </div>
                  <div>
                    <select class="form-control " name="Kategori_edit_kegiatan" >
                      <option class="d-none" >Kategori... </option>
                      <?php foreach ($kategori as $kategoriss): ?>
                      <option value="<?php echo $kategoriss->kategori ?>">
                          <?php echo $kategoriss->kategori ?>
                      </option>
                      <?php endforeach; ?>
                    </select>
                  </div>


                  
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="Kegiatan_edit_kegiatan" placeholder="Nama Kategori......" value="<?php echo $kegiatan->kegiatan ?>">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="Keterangan_edit_kegiatan" rows="5" placeholder="Keterangan....." ><?php echo $kegiatan->keterangan ?></textarea>
                  </div>
                  <input class="btn btn-success" type="submit" name="tambah_kategori" value="Edit Kategori" />
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

   <script type="text/javascript">
     $('select[name=Kategori_edit_kegiatan]').val("<?php echo $kegiatan->kategori ?>");
      $('.form-control').form-control('refresh');
   </script>



</body>

</html>
