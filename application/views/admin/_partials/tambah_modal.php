  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo site_url('admin/login/logout') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

      <!-- Tambah Kegiatan Modal-->
   <div class="modal fade" id="tambah_kegiatan_Modal" tabindex="-1" role="dialog" aria-labelledby="tambah_kegiatan_ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambah_kegiatan_ModalLabel">Tambah Kegiatan</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
                <form action="<?php echo site_url('admin/kategori_kegiatan/add_kegiatan') ?>" method="post" enctype="multipart/form-data" >
                  <div>
                    <select class="form-control " name="Kategori_kegiatan" required>
                      <option class="d-none" >Kategori... </option>
                      <?php foreach ($kategori as $kategoriss): ?>
                      <option value="<?php echo $kategoriss->kategori ?>">
                          <?php echo $kategoriss->kategori ?>
                      </option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control " name="Kegiatan_kegiatan" placeholder="Nama Kegiatan......" required>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="Keterangan_kegiatan" rows="5" placeholder="Keterangan....." required></textarea>
                  </div>
                  <input class="btn btn-success" type="submit" name="tambah_kegiatan" value="Save" />
                </form>
        </div>
        
      </div>
    </div>
  </div>

    <!-- Tambah Kategori Modal-->
  <div class="modal fade" id="tambah_kategori_Modal" tabindex="-1" role="dialog" aria-labelledby="tambah_kategori_ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambah_kategori_ModalLabel">Tambah Kategori</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
                <form action="<?php echo site_url('admin/kategori_kegiatan/add_kategori') ?>" method="post" enctype="multipart/form-data" >
                  <div class="form-group">
                    <input type="hidden" name="id_kategori" value="" />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="Kategori_kategori" placeholder="Nama Kategori......" required>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="Keterangan_kategori" rows="5" placeholder="Keterangan....." required></textarea>
                  </div>
                  <input class="btn btn-success" type="submit" name="tambah_kategori" value="Save" />
                </form>
        </div>
      </div>
    </div>
  </div>

    <!-- Tambah User Modal-->
  <div class="modal fade" id="tambah_user_Modal" tabindex="-1" role="dialog" aria-labelledby="tambah_data_ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambah_user_ModalLabel">Tambah User</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
                <form action="<?php echo site_url('admin/user/add_user') ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nip_lama_user" placeholder="NIP Lama......" required maxlength="9" minlength="9">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nama_user" placeholder="Nama......" required>
                  </div>
                  <div>
                    <select class="form-control " name="tipe_user" required>
                      <option class="d-none" > - </option>
                      <option>Admin</option>
                      <option>Kepala</option>
                      <option>Kepala Seksi</option>
                      <option>Staff</option>
                      <option>KSK</option>
                      <option>Mitra</option>
                      
                    </select>
                  </div>
                  <div>
                    <select class="form-control " name="seksi_user" required>
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
                    <input type="password" class="form-control form-control-user" name="password_user" placeholder="Password......" required>
                  </div>
                  <div class="form-group">
                    <input type="hidden" class="form-control form-control-user" name="Password_Ulang_user" placeholder="Tuliskan kembali Password......" required>
                  </div>
                  <input class="btn btn-success" type="submit" name="tambah_user" value="Save" />
                </form>
        </div>
      </div>
    </div>
  </div>


    <!-- Tambah data Modal-->
  <div class="modal fade" id="tambah_dokumen_Modal" tabindex="-1" role="dialog" aria-labelledby="tambah_dokumen_ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambah_dokumen_ModalLabel">Tambah Dokumen</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
              <form action="<?php echo site_url('admin/dokumen/add_dokumen') ?>" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="Judul_data" placeholder="Judul......" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="form-control " name="Kategori_data" id="data_kategori" onchange="getKegiatan()" required>
                      <option class="d-none" >Kategori...</option>
                    <?php foreach($kategori as $row):?>
                     <option value="<?php echo $row->kategori;?>"><?php echo $row->kategori;?></option>
                        <?php endforeach;?>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <select class="form-control " name="Kegiatan_data" required>
                      <option class="d-none" >Kegiatan...</option>
                    <?php foreach($kegiatan as $row):?>
                     <option class="kegiatan_vis <?php echo $row->kategori;?> " value="<?php echo $row->kegiatan;?>"><?php echo $row->kegiatan;?></option>
                        <?php endforeach;?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="form-control" name="Jenis_data" placeholder="Jenis Data....." required>
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
                  <div class="col-sm-6 ">
                    <input type="date" class="form-control" name="Tanggal_data" placeholder="Tanggal....." required>
                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="Keterangan_data" rows="5" placeholder="Keterangan....." required></textarea>
                </div>
                <div class="form-group">
                  <input type="file" class="form-control-file form-control-user" name="File_data[]" multiple required>
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control-file form-control-user" name="Id_user"  value="<?php echo $this->session->userdata('nip_lama') ?>">
                </div>
                <input class="btn btn-success" type="submit" name="tambah_dokumen" value="Save" />
              </form>
        </div>
        
      </div>
    </div>
  </div>