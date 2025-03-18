<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $titles;?></title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url();?>assets/css/app.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?= base_url();?>assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='<?= base_url();?>assets/img/icon.png' />
</head>
<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>
              <div class="card-header">
                <div class="brand-logo">
                <img src="<?= base_url();?>assets/img/logo.png" class="brand-logo">
              </div>
              </div>
              <div class="card-body">
                <form action="<?php echo base_url().'administrator/register_akun'?>" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">First Name</label>
                      <input id="frist_name" type="text" class="form-control" name="xfrist_name" placeholder="First Name" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="xlast_name" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="xemail" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="Username">Username</label>
                    <input id="Username" type="text" class="form-control" name="xusername" placeholder="Username">
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                        name="xpassword1">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="xpassword2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Phone Number</label>
                      <input type="text" name="xphonenumber" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group col-6">
                      <label>Date Of Birth</label>
                      <input type="date" name="xdatebirth" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Profile Pic</label>
                    <input type="file" name="filefoto" class="form-control">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree" value="check">
                      <label class="custom-control-label" for="agree">Saya setuju dengan syarat dan ketentuan</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Sudah Punya Akun? Silahkan <a href="<?= base_url();?>administrator">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="<?= base_url();?>assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="<?= base_url();?>assets/js/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?= base_url();?>assets/js/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="<?= base_url();?>assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?= base_url();?>assets/js/custom.js"></script>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>