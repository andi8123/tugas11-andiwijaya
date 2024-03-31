<?php

// Define an array of products with their details
$products = array(
    array(
        'name' => 'Produk 1',
        'description' => 'Deskripsi produk 1',
        'image' => 'admin/dist/img/prod-1.jpg',
        'price' => '100',
    ),
    array(
        'name' => 'Produk 2',
        'description' => 'Deskripsi produk 2',
        'image' => 'admin/dist/img/prod-2.jpg',
        'price' => '150',
    ),
    // Add more products as needed
);

?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PRODUK</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="admin/plugins/fontawesome-free/css/all.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css" />
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
              ><i class="fas fa-bars"></i
            ></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="dashboard.php" class="nav-link">Home</a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a
              class="nav-link"
              data-widget="navbar-search"
              href="#"
              role="button"
            >
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
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
                    <button
                      class="btn btn-navbar"
                      type="button"
                      data-widget="navbar-search"
                    >
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              data-widget="control-sidebar"
              data-slide="true"
              href="#"
              role="button"
            >
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
          <img
            src="admin/dist/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
          />
          <span class="brand-text font-weight-light">DASHBOARD</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="admin/dist/img/user2-160x160.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="#" class="d-block">Andi Wijaya</a>
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

               <li class="nav-item">
                <a href="dashboard.php" class="nav-link">
                  <i class="nav-icon far fa-user"></i>
                  <p>DASHBOARD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="produk.php" class="nav-link">
                  <i class="nav-icon fas fa-shopping-cart"></i>
                  <p>produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tag-html.php" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>Tag HTML</p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div
        class="content-wrapper"
        style="
          background-image: url('admin/dist/img/photo1.png');
          background-size: cover;
        "
      >
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 font-weight-bold" style="color: white">
                  List Produk
                </h1>
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">
                    <a href="dashboard.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active" style="color: white">
                    Starter Page
                  </li>
                </ol>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
    <div class="container-fluid">
        <div class="row">
            <?php foreach ($products as $product): ?>
            <div class="col-lg-4">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product['name']; ?></h5>
                                <p class="card-text"><?php echo $product['description']; ?></p>
                                <p class="card-text"><?php echo $product['price']; ?> USD</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo $product['image']; ?>" class="card-img" alt="<?php echo $product['name']; ?>" style="width: 80px; height: auto; margin-top: 10px" />
                        </div>
                        <div>
                            <button class="btn btn-primary" style="margin-left: 220px;">selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


             <!--div class="col-lg-4">
                <div class="card">
                  <div class="row no-gutters">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Produk 2</h5>
                        <p class="card-text">Deskripsi produk 2</p>
                        <p class="card-text">Harga produk</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <img
                        src="admin/dist/img/prod-2.jpg"
                        class="card-img"
                        alt="Produk 2"
                        style="width: 80px; height: auto; margin-top: 10px"
                      />
                    </div>
                    <div>
                      <button class="btn btn-primary" style="margin-left: 220px;">selengkapnya</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div class="row no-gutters">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Produk 3</h5>
                        <p class="card-text">Deskripsi produk 3</p>
                        <p class="card-text">Harga produk</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <img
                        src="admin/dist/img/prod-3.jpg"
                        class="card-img"
                        alt="Produk 3"
                        style="width: 80px; height: auto; margin-top: 10px"
                      />
                    </div>
                    <div>
                      <button class="btn btn-primary" style="margin-left: 220px;">selengkapnya</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div class="row no-gutters">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Produk 4</h5>
                        <p class="card-text">Deskripsi produk 4</p>
                        <p class="card-text">Harga produk</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <img
                        src="admin/dist/img/prod-4.jpg"
                        class="card-img"
                        alt="Produk 4"
                        style="width: 80px; height: auto; margin-top: 10px"
                      />
                    </div>
                    <div>
                      <button class="btn btn-primary" style="margin-left: 220px;">selengkapnya</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div class="row no-gutters">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Produk 5</h5>
                        <p class="card-text">Deskripsi produk 5</p>
                        <p class="card-text">Harga produk</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <img
                        src="admin/dist/img/prod-5.jpg"
                        class="card-img"
                        alt="Produk 5"
                        style="width: 80px; height: auto; margin-top: 10px"
                      />
                    </div>
                    <div>
                      <button class="btn btn-primary" style="margin-left: 220px;">selengkapnya</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div class="row no-gutters">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Produk 6</h5>
                        <p class="card-text">Deskripsi produk 6</p>
                        <p class="card-text">Harga produk</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <img
                        src="admin/dist/img/prod-1.jpg"
                        class="card-img"
                        alt="Produk 4"
                        style="width: 80px; height: auto; margin-top: 10px"
                      />
                    </div>
                    <div>
                      <button class="btn btn-primary" style="margin-left: 220px;">selengkapnya</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div-->

        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
          <h5>Title</h5>
          <p>Sidebar content</p>
        </div>
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <footer class="main-footer sidebar-dark-primary">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">Anything you want</div>
        <!-- Default to the left -->
        <strong
          >Copyright &copy; 2014-2021
          <a href="https://adminlte.io">AdminLTE.io</a>.</strong
        >
        All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/adminlte.min.js"></script>
  </body>
</html>
