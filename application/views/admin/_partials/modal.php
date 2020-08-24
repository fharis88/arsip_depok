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
          <a class="btn btn-primary" href="<?php echo site_url('login') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Tambah data Modal-->
  <div class="modal fade" id="tambah_data_Modal" tabindex="-1" role="dialog" aria-labelledby="tambah_data_ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambah_data_ModalLabel">Tambah Data</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
              <form class="data">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="Judul" placeholder="Judul......">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="Kategori" placeholder="Kategori......">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="Kegiatan" placeholder="Kegiatan.....">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="form-control" id="Jenis" placeholder="Jenis Data.....">
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
                    <input type="date" class="form-control" id="Tanggal" placeholder="Tanggal.....">
                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="Keterangan" rows="5" placeholder="Keterangan....."></textarea>
                </div>
                <div class="form-group">
                  <input type="file" class="form-control-file form-control-user" id="File" placeholder="file">
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href=#>Tambah Data</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Tambah template Modal-->
  <div class="modal fade" id="tambah_template_Modal" tabindex="-1" role="dialog" aria-labelledby="tambah_data_ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambah_template_ModalLabel">Tambah Template</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
              <form class="template">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="Judul" placeholder="Judul......">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="Kegiatan" placeholder="Kegiatan.....">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="form-control" id="Jenis" placeholder="Jenis Data.....">
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
                    <input type="date" class="form-control" id="Tanggal" placeholder="Tanggal.....">
                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="Keterangan" rows="5" placeholder="Keterangan....."></textarea>
                </div>
                <div class="form-group">
                  <input type="file" class="form-control-file form-control-user" id="File" placeholder="file">
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href=#>Tambah Template</a>
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
                <form class="user">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nip_lama" placeholder="NIP Lama......">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nama" placeholder="Nama......">
                  </div>
                  <div>
                    <select class="form-control " id="tipe">
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
                    <select class="form-control " id="seksi">
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
                    <input type="password" class="form-control form-control-user" id="Password" placeholder="Password......">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="Password_Ulang" placeholder="Tuliskan kembali Password......">
                  </div>
                </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href=#>Tambah User</a>
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
                <form class="kategori">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="Kategori" placeholder="Nama Kategori......">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="Keterangan" rows="5" placeholder="Keterangan....."></textarea>
                  </div>
                </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href=#>Tambah Kategori</a>
        </div>
      </div>
    </div>
  </div>

      <!-- Tambah Keterangan Modal-->
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
                <form class="user">
                  <div>
                    <select class="form-control " id="Kategori">
                      <option>Kategori A</option>
                      <option>Kategori B</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control " id="Kegiatan" placeholder="Nama Kegiatan......">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="Keterangan" rows="5" placeholder="Keterangan....."></textarea>
                  </div>
                </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href=#>Tambah Kegiatan</a>
        </div>
      </div>
    </div>
  </div>