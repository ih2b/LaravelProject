<!DOCTYPE html>
<html>
<head>
  <title>Laravel Fullcalender Add/Update/Delete Event Example Tutorial - Tutsmake.com</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
 
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="backend/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="backend/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="backend/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="backend/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" />
 
<script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
 
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
	  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
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

    <!-- SEARCH FORM -->
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
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="images/logo1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
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
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

   <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">les formations programmées </h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">

    @foreach($events as $ev)
                  <tr>
                    <div class="external-event bg-success">{{$ev->title }}</div>
                  </tr>
  @endforeach
                    



                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020<a >BIAT</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>


</body>
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
<script>
  $(document).ready(function () {
         
        var SITEURL = "{{url('http://localhost:8080/')}}";
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
 
        var calendar = $('#calendar').fullCalendar({
            editable: true,
            events: SITEURL + "fullcalendar",
            displayEventTime: true,
            editable: true,
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {
                var title = prompt('Event Title:');
 
                if (title) {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
 
                    $.ajax({
                        url: SITEURL + "fullcalendar/create",
                        data:  {title:title, start:start, end:end},
                        type: "POST",
                        success: function (data) {
                            displayMessage("Added Successfully");
                        }
                    });
                    calendar.fullCalendar('renderEvent',
                            {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay
                            },
                    true
                            );
                }
                calendar.fullCalendar('unselect');
            },
             
            eventDrop: function (event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url: SITEURL + 'fullcalendar/update',
                            data:  {title:event.title, start:start, end:end ,id:event.id},
                            type: "POST",
                            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
                            success: function (response) {
                                displayMessage("Updated Successfully");
                            }
                        });
                    },
            eventClick: function (event) {
                var deleteMsg = confirm("Do you really want to delete?");
                if (deleteMsg) {
                    $.ajax({
                        type: "POST",
                        url: SITEURL + 'fullcalendar/delete',
                        data:  {id:event.id},
                        success: function (response) {
                            if(parseInt(response) > 0) {
                                $('#calendar').fullCalendar('removeEvents', event.id);
                                displayMessage("Deleted Successfully");
                            }
                        }
                    });
                }
            }
 
        });
  });
 
  function displayMessage(message) {
    $(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);
  }
</script>


</html>