<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>myPOS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css"
    />
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    />
    <link rel="stylesheet" href="<?=base_url()?>fontawesome/css/all.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
      rel="stylesheet"
    />
  </head>
  <body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>

        <!-- SEARCH FORM -->
          <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
              <input
                class="form-control form-control-navbar"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
        <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image">
        <span class="hidden"><?=$this->fungsi->user_login()->username?></span>
        </a>
          <ul class="dropdown-menu">
          <li class="user-header">
          <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle">
          <p><?=$this->fungsi->user_login()->name?>
          <small><?=$this->fungsi->user_login()->address?></small>
          </p>
          </li>
          <li class="user-footer">
          <div class="row">
          <div class="col-6">
          <button type="submit" class="btn btn-primary btn-block"required>Profile</button>
          </div>
          <!-- /.col -->
          <div class="col-6">
            <a href="<?=site_url('auth/logout')?>">
            <button type="submit" class="btn btn-primary btn-block"required>Sign out</button>
            </a>
          </div>
          <!-- /.col -->
        </div>
        </li>
        </ul>
          <!-- Messages Dropdown Menu -->

          <!-- Notifications Dropdown Menu -->
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?=base_url('dashboard')?>" class="brand-link" style="text-align: center ;" >
          <span class="brand-text font-weight-light">my<b>POS</b></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="<?=base_url()?>assets/dist/img/user2-160x160.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="" class="d-block"><?=ucfirst($this->fungsi->user_login()->username)?></a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <!-- <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : ''?> -->

              <li class="nav-header">MAIN NAVIGATION</li>
              <li class="nav-item">
                <a href="<?=site_url('dashboard')?>" <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('supplier')?>" <?=$this->uri->segment(1) == 'supplier' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
                  <i class="nav-icon far fa-solid fa-truck"></i>
                  <p>
                    Supliers
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('customer')?>" <?=$this->uri->segment(1) == 'customer' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
                  <i class="nav-icon far fa-solid fa-user-group"></i>
                  <p>Customers</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="<?=site_url('product')?>" <?=$this->uri->segment(1) == 'product' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
                  <i class="nav-icon far fa-solid fa-box"></i>
                  <p>
                    Products
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?=site_url('category')?>" <?=$this->uri->segment(1) == 'category' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
                      <i class="far fa-circle nav-icon"></i>
                      <p>Categories</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=site_url('unit')?>" <?=$this->uri->segment(1) == '' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
                      <i class="far fa-circle nav-icon"></i>
                      <p>Units</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=site_url('item')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Items</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-solid fa-cart-shopping"></i>
                  <p>
                    Transaction
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?=site_url('sale')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Sales</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=site_url('stock/in')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Stock In</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=site_url('stock/out')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Stock Out</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" <?=$this->uri->segment(1) == 'report' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
                  <i class="nav-icon far fa-solid fa-flag"></i>
                  <p>
                    Reports
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Sales</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Stock</p>
                    </a>
                  </li>
                </ul>
              </li>
              <?php if($this->fungsi->user_login()->level == 1) { ?>
              <li class="nav-header">SETTINGS</li>
              <li class="nav-item">
                <a href="<?=site_url('user')?>" <?=$this->uri->segment(1) == 'user' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"'?>>
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Users
                  </p>
                </a>
              </li>
              <?php } ?>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <?php echo $contents ?>

        <!-- Main content -->

        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">my<b>POS</b></div>
        <strong
          >Copyright 2023
          <a href="">amdsqx</a>.</strong
        >
        Portofolio
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=base_url()?>assets/dist/js/demo.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true,
          "autoWidth": false,
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
  });
    </script>

  </body>
</html>
