<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Hello Again!</h1>
                  </div>
                  <?php echo $this->session->flashdata('msg');?>
                  <form class="user" action="<?php echo site_url('admin/login/auth') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username_login" aria-describedby="emailHelp" placeholder="Enter Username..." required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password_login" placeholder="Password..." required>
                    </div>
                    <input class="btn btn-success" type="submit" name="Login" value="Login" />

                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
