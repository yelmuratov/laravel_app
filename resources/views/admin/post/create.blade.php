<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create New Post</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
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
            <h1>Create New Post</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Form to create new post -->
            <div class="card">
              <div class="card-body">
                <form action="/createPost" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
                  </div>
                  <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter post content" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="likes">Likes</label>
                    <input type="number" class="form-control" id="likes" name="likes" placeholder="Enter number of likes" value="0">
                  </div>
                  <div class="form-group">
                    <label for="dislikes">Dislikes</label>
                    <input type="number" class="form-control" id="dislikes" name="dislikes" placeholder="Enter number of dislikes" value="0">
                  </div>
                  <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control" id="category_id" name="category_id" required>
                      <option value="">Select a category</option>
                      <!-- Assuming categories are passed to the view -->
                      @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Save Post</button>
                  <a href="/admin/posts" class="btn btn-secondary">Back to Posts</a>
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
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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
