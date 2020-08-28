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
              <h5 class="m-0 font-weight-bold text-primary">Edit Dokumen</h5>
              
            </div>
            <div class="card-body">
              <form action="<?php echo site_url('admin/dokumen/update_dokumen') ?>" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                <div class="form-group">
                  <input type="hidden" class="form-control form-control-user" name="Id_edit_data" placeholder="Judul......" value="<?php echo $dokumen->id_data ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="Judul_edit_data" placeholder="Judul......" value="<?php echo $dokumen->judul ?>">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="form-control " name="Kategori_edit_data" id="data_kategori" onchange="getKegiatan()" >
                      <option class="d-none" >Kategori...</option>
                    <?php foreach($kategori as $row):?>
                     <option value="<?php echo $row->kategori;?>"><?php echo $row->kategori;?></option>
                        <?php endforeach;?>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <select class="form-control " name="Kegiatan_edit_data" >
                      <option class="d-none" >Kegiatan...</option>
                    <?php foreach($kegiatan as $row):?>
                     <option class="kegiatan_vis <?php echo $row->kategori;?> " value="<?php echo $row->kegiatan;?>"><?php echo $row->kegiatan;?></option>
                        <?php endforeach;?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="form-control" name="Jenis_edit_data" placeholder="Jenis Data.....">
                      <option class="d-none" >Jenis data...</option>
                      <option>SPJ</option>
                      <option>SK</option>
                      <option>Laporan Kegiatan</option>
                      <option>Data</option>
                      <option>Surat</option>
                      <option>Foto/Video</option>
                      <option>Lainnya</option>
                    </select>
                  </div>
                  <div class="col-sm-6 d-none">
                    <input type="date" class="form-control" name="Tanggal_edit_data" placeholder="Tanggal....." value="<?php echo $dokumen->tanggal ?>">
                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="Keterangan_edit_data" rows="5" placeholder="Keterangan....."><?php echo $dokumen->keterangan ?></textarea>
                </div>
                <div class="form-group">
                  <input type="file" class="form-control-file form-control-user" name="File_edit_data" >
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control-file form-control-user" name="Id_user"  value="340059515">
                </div>
                <input class="btn btn-success" type="submit" name="tambah_dokumen" value="Tambah Dokumen" />
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
  $('select[name=Kategori_edit_data]').val("<?php echo $dokumen->kategori ?>");
  $('select[name=Kegiatan_edit_data]').val("<?php echo $dokumen->kegiatan ?>");
  $('select[name=Jenis_edit_data]').val("<?php echo $dokumen->jenis ?>");
  $('.form-control').form-control('refresh');

  function getKegiatan() {
    var sel = document.getElementById('data_kategori');
    
    var divsAll = document.getElementsByClassName('kegiatan_vis');
    var divsHid = document.getElementsByClassName(sel.value);

    for(var i = 0; i < divsAll.length; i++){
        divsAll[i].style.visibility = "hidden"; // or
    }

    for(var i = 0; i < divsHid.length; i++){
        divsHid[i].style.visibility = "visible"; // or
    }
    //document.getElementsByClassName(sel.value)[0].style.visibility = 'hidden'; 
}

</script>
   



</body>

</html>

