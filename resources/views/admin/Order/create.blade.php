<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create New Order</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Tables Section -->
          <li class="nav-item">
            <a href="/admin/categories" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/product" class="nav-link">
              <i class="nav-icon fas fa-box-open"></i>
              <p>Products</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/orders" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/comments" class="nav-link">
              <i class="nav-icon fas fa-comment-dots"></i>
              <p>Comments</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/likes" class="nav-link">
              <i class="nav-icon fas fa-thumbs-up"></i>
              <p>Likes</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/data" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/posts" class="nav-link">
              <i class="nav-icon fas fa-pencil-alt"></i>
              <p>Posts</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create New Order</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <!-- Create Order Form -->
                <form action="/createOrder" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="productId">Product ID</label>
                    <input type="number" class="form-control" id="productId" name="product_id" placeholder="Enter product ID" required>
                  </div>
                  <div class="form-group">
                    <label for="userId">User ID</label>
                    <input type="number" class="form-control" id="userId" name="user_id" placeholder="Enter user ID" required>
                  </div>
                  <div class="form-group">
                    <label for="count">Count</label>
                    <input type="number" class="form-control" id="count" name="count" placeholder="Enter count" required>
                  </div>
                  <div class="form-group">
                    <label for="totalPrice">Total Price</label>
                    <input type="number" step="0.01" class="form-control" id="totalPrice" name="total_price" placeholder="Enter total price" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Save Order</button>
                  <a href="/admin/orders" class="btn btn-secondary">Back to Orders</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>
</div>

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>
</html>
