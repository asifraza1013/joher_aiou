<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="text/html; charset=utf-8" http-equiv=Content-Type>
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <script src="https://cdn.tiny.cloud/1/qaba2wp4lwb52jtoi21cq6gbbow53an9h8mt5cl4h95hr88y/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<link rel="stylesheet" href="{{URL::TO('')}}/backassets//dist/css/dropzone.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL::TO('')}}/backassets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{URL::TO('')}}/backassets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::TO('')}}/backassets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{URL::TO('')}}/dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>



  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{URL::TO('')}}/index" class="brand-link">
      <img src="{{URL::TO('')}}/backassets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">JoherAiou</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL::TO('')}}/backassets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{URL::TO('')}}/dashboard" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{URL::TO('')}}/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a>

          </li>

          <li class="nav-item">
            <a href="{{URL::TO('')}}/book" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Books
                <span class="right badge badge-danger">All</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::TO('')}}/allassignment" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Assignments
                <span class="right badge badge-danger">All</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::TO('')}}/allthesis" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Thesis
                <span class="right badge badge-danger">All</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::TO('')}}/allguess" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Past Papers
                <span class="right badge badge-danger">All</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::TO('')}}/alllinks" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Links
                <span class="right badge badge-danger">All</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Users
                <span class="right badge badge-danger">All</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::TO('')}}/banners" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Banners
                <span class="right badge badge-danger">All</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::TO('')}}/video_lectures" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Video Links
                <span class="right badge badge-danger">All</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::TO('')}}/class" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Classes
                <span class="right badge badge-danger">All</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{URL::TO('')}}/description" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Descriptions
                <span class="right badge badge-danger">All</span>
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{URL::TO('')}}/notification" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Notifications
                <span class="right badge badge-danger">All</span>
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
