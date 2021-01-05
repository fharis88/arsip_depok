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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Arsip</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php echo $summary[0]->count ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-archive fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Penyimpanan</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo number_format($summary[0]->sum/1024,2,'.','') ?> MB</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 
                            <?php echo number_format(1-$summary[0]->sum/100000000,2,'.','') ?>%" aria-valuenow="<?php echo number_format(1-$summary[0]->sum/100000000,2,'.','') ?>" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-hdd fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            

            <!-- Pie Chart -->
            
            
            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Jumlah Kategori</h6>
                </div>
                <?php foreach ($kategori as $kategoris): ?>
                <div class="card-body">
                  <h4 class="small font-weight-bold">
                    <?php echo $kategoris->kategori ?>
                   <span class="float-right">
                    <?php echo $kategoris->count ?>
                   </span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 
                    <?php echo 100*$kategoris->count/max(array_column($kategori, 'count')) ?>%" aria-valuenow="<?php echo $kategoris->count ?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                <?php endforeach; ?>
                </div>
              </div>

              <!-- Color System -->
              
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
 <?php $this->load->view("admin/_partials/footer.php") ?>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
           
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partials/tambah_modal.php") ?>

  <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
