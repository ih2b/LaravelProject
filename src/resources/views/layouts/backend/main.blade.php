<!DOCTYPE html>
<html>
@include('layouts.backend.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link"> </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="images/logo1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin" class="d-block">Admin</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="/admin" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableaux
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="/fullcalendar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Formation programmée  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Formation" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Formation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/categories" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Catégorie</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Contactmaster" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Message</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="/PropositionMaster" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proposition</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inscriptions" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inscription</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/commentaires" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Commentaires</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="/evaluations" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Question Quiz</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/repevaluationS" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Réponse Quiz</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Insertion
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/formationcreate" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter une formation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/categoriecreate" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter une catégorie</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
   @yield('content')   
  <footer class="main-footer">
    <strong>Copyright &copy; 2020<a >BIAT</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="backend/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="backend/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="backend/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="backend/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="backend/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="backend/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="backend/plugins/moment/moment.min.js"></script>
<script src="backend/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="backend/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="backend/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="backend/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="backend/js/demo.js"></script>
</body>
</html>