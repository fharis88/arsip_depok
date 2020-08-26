
  <!-- Edit data Modal-->
  <div class="modal fade" id="edit_data_Modal" tabindex="-1" role="dialog" aria-labelledby="edit_data_ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="edit_data_ModalLabel">Edit Data</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
              <form class="data">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="Judul_data" placeholder="Judul......">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="Kategori_data" placeholder="Kategori......">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="Kegiatan_data" placeholder="Kegiatan.....">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="form-control" name="Jenis_data" placeholder="Jenis Data.....">
                      <option>SPJ</option>
                      <option>SK</option>
                      <option>Laporan Kegiatan</option>
                      <option>Data</option>
                      <option>Surat</option>
                      <option>Foto/Video</option>
                      <option>Lainnya</option>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <input type="date" class="form-control" name="Tanggal_data" placeholder="Tanggal.....">
                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="Keterangan_data" rows="5" placeholder="Keterangan....."></textarea>
                </div>
                <div class="form-group">
                  <input type="file" class="form-control-file form-control-user" name="File_data" placeholder="file">
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href=#>Edit Data</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit template Modal-->
  <div class="modal fade" id="edit_template_Modal" tabindex="-1" role="dialog" aria-labelledby="edit_data_ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="edit_template_ModalLabel">Edit Template</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
              <form class="template">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="Judul_template" placeholder="Judul......">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="Kegiatan_template" placeholder="Kegiatan.....">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="form-control" id="Jenis_template" placeholder="Jenis Data.....">
                      <option>SPJ</option>
                      <option>SK</option>
                      <option>Laporan Kegiatan</option>
                      <option>Data</option>
                      <option>Surat</option>
                      <option>Foto/Video</option>
                      <option>Lainnya</option>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <input type="date" class="form-control" name="Tanggal_template" placeholder="Tanggal.....">
                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="Keterangan_template" rows="5" placeholder="Keterangan....."></textarea>
                </div>
                <div class="form-group">
                  <input type="file" class="form-control-file form-control-user" name="File_template" placeholder="file">
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href=#>Edit Template</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit User Modal-->
  <div class="modal fade" id="edit_user_Modal" tabindex="-1" role="dialog" aria-labelledby="edit_data_ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="edit_user_ModalLabel">Edit User</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
                <form class="user">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nip_lama_user" placeholder="NIP Lama......">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="nama_user" placeholder="Nama......">
                  </div>
                  <div>
                    <select class="form-control " name="tipe_user">
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
                    <select class="form-control " name="seksi_user">
                      <option>-</option>
                      <option>TU</option>
                      <option>Seksi Statistik Sosial</option>
                      <option>Seksi Statistik Produksi</option>
                      <option>Seksi Statistik Distribusi</option>
                      <option>Seksi Neraca Wilayah dan Analisis Statistik</option>
                      <option>Seksi Integrasi Pengolahan dan Diseminasi Statistik</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="Password_user" placeholder="Password......">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="Password_Ulang_user" placeholder="Tuliskan kembali Password......">
                  </div>
                </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href=#>Edit User</a>
        </div>
      </div>
    </div>
  </div>



    <!-- Edit Kategori Modal-->
  <div class="modal fade" id="edit_kategori_Modal" tabindex="-1" role="dialog" aria-labelledby="edit_kategori_ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="edit_kategori_ModalLabel">Edit Kategori</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
                <form action="<?php echo site_url('admin/kategori_kegiatan/edit_kategori') ?>" method="post" enctype="multipart/form-data" >
                  <div class="form-group">
                    <input type="" name="id_kategori" />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="Kategori_kategori" placeholder="Nama Kategori......">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="Keterangan_kategori" rows="5" placeholder="Keterangan....."></textarea>
                  </div>
                  <input class="btn btn-success" type="submit" name="edit_kategori" value="Edit Kategori" />
                </form>
        </div>
      </div>
    </div>
  </div>



      <!-- Edit Kegiatan Modal-->
  <div class="modal fade" id="edit_kegiatan_Modal" tabindex="-1" role="dialog" aria-labelledby="edit_kegiatan_ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="edit_kegiatan_ModalLabel">Edit Kegiatan</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
                <form action="<?php echo site_url('admin/kategori_kegiatan/edit_kegiatan') ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="hidden" name="id_kegiatan" value="" />
                  </div>
                  <div>
                    <select class="form-control " name="Kategori_kegiatan">
                    <?php foreach($kategori as $row):?>
                     <option value="<?php echo $row->kategori;?>"><?php echo $row->kategori;?></option>
                        <?php endforeach;?>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control " name="Kegiatan_kegiatan" placeholder="Nama Kegiatan......">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="Keterangan_kegiatan" rows="5" placeholder="Keterangan....."></textarea>
                  </div>
                  <input class="btn btn-success" type="submit" name="edit_kategori" value="Edit kegiatan" />
                </form>
        </div>
      </div>
    </div>
  </div>