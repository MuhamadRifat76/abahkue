<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin | Abah Kue</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="/backend/foods/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="/backend/foods/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="/backend/foods/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="/backend/foods/plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/backend/foods/dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="/backend/foods/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="/backend/foods/plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="/backend/foods/plugins/summernote/summernote-bs4.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<!-- Left navbar links -->
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="/backend/foods/#"><i class="fas fa-bars"></i></a>
</li>
</ul>

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
<!-- Messages Dropdown Menu -->
<li class="nav-item dropdown">
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<a href="/backend/foods/#" class="dropdown-item">
<!-- Message Start -->
<div class="media">
<img src="/backend/foods/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
<div class="media-body">
<h3 class="dropdown-item-title">
Brad Diesel
<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">Call me whenever you can...</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>
<!-- Message End -->
</a>
<div class="dropdown-divider"></div>
<a href="/backend/foods/#" class="dropdown-item">
</a>
<div class="dropdown-divider"></div>
<a href="/backend/foods/#" class="dropdown-item">
<!-- Message Start -->
<div class="media">
<img src="/backend/foods/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
Nora Silvester
<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">The subject goes here</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>
<!-- Message End -->
</a>
<div class="dropdown-divider"></div>
<a href="/backend/foods/#" class="dropdown-item dropdown-footer">See All Messages</a>
</div>
</li>
</ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="/backend/foods/index3.html" class="brand-link">
<img src="/backend/foods/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
style="opacity: .8">
<span class="brand-text font-weight-light">Abah Kue</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
<!-- Sidebar user panel (optional) -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="/backend/foods/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="/backend/foods/#" class="d-block">Admin</a>
</div>
</div>

<!-- Sidebar Menu -->
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
<li class="nav-item has-treeview menu-open">
<a href="/backend/foods/#" class="nav-link active">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
Dashboard
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/admin/testimoni" class="nav-link ">
<i class="far fa-circle nav-icon"></i>
<p>Testimoni</p>
</a>
</li>
<li class="nav-item">
<a href="/admin/jeniskue" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Jeniskue</p>
</a>
</li>
<li class="nav-item">
<a href="/admin/galerikegiatan" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Galeri Kegiatan</p>
</a>
</li>
<button type="button" class="btn btn-danger"><a href="/login">Keluar</a></button>
</ul>
</li>
</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
