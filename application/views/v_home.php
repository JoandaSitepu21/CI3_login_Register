<?php
              $id_admin=$this->session->userdata('user_id');
              $q=$this->db->query("SELECT * FROM tbl_user WHERE user_id='$id_admin'");
              $c=$q->row_array();
          ?>
<!DOCTYPE html>
<html lang="en">

<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $titles;?></title>
   <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url();?>assets/css/app.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?= base_url();?>assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='<?= base_url();?>assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                  collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <?php if(empty($c['user_photo'])):?>
                      <img class="rounded-circle author-box-picture" src="<?= base_url();?>assets/img/user_blank.png">
                      <?php else:?>
                      <img class="rounded-circle author-box-picture" src="<?= base_url();?>assets/img/<?php echo $c['user_photo'];?>">
                        <?php endif;?> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello <?php echo $this->session->userdata('user_frist_name'); ?></div>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url(); ?>administrator/logout" class="dropdown-item has-icon text-danger"> <i data-feather="log-out"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= base_url();?>home"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> 
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
              <a href="<?= base_url();?>home" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Data lengkap</h4>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <tr>
                    <td width="150">First Name</td>
                    <td width="10">:</td>
                    <td><?php echo $c['user_frist_name'];?></td>
                  </tr>
                  <tr>
                    <td width="150">Last Name</td>
                    <td width="10">:</td>
                    <td><?php echo $c['user_last_name'];?></td>
                  </tr>
                  <tr>
                    <td width="150">Email</td>
                    <td width="10">:</td>
                    <td><?php echo $c['user_email'];?></td>
                  </tr>
                  <tr>
                    <td width="150">Username</td>
                    <td width="10">:</td>
                    <td><?php echo $c['user_username'];?></td>
                  </tr>
                  <tr>
                    <td width="150">Password</td>
                    <td width="10">:</td>
                    <td><?php echo $c['user_password'];?></td>
                  </tr>
                  <tr>
                    <td width="150">Phone Number</td>
                    <td width="10">:</td>
                    <td><?php echo $c['user_phonenumber'];?></td>
                  </tr>
                  <tr>
                    <td width="150">Date birth</td>
                    <td width="10">:</td>
                    <td><?php echo $c['user_datebirth'];?></td>
                  </tr>
                </table>
               <p></p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="#">Kurotama</a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
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