<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>L'Etudiant consulting</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/plugins/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link href="public/plugins/sb-admin-2.min.css" rel="stylesheet">

  <!-- DataTables :  -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


</head>

<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a role="button" title="alvers page d'accueil" class="nav-link" onclick="document.location='index.php'">Accueil</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
        <li class="nav-item">
          <a href="index.php" class="nav-link">

            <p>
              Page user
            </p>
          </a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <!-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> -->

        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->

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
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar  elevation-4">
      <!-- Brand Logo -->
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class=" mt-3 pb-3 mb-3 d-flex">
          <div class="image">

            <img src="public/images/logo.png" alt="AdminLTE Logo" width="230" height="80">
          </div>

        </div>
        <hr class="text-muted">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="public/images/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block text-muted">
              <?php if (isset($_SESSION["email"])) {
                echo "" . strtoupper($_SESSION["CodeP"]) . " " . strtoupper($_SESSION["LastName"]);
              }
              ?>
            </a>
          </div>
        </div>
        <hr class="text-muted">

        <!-- Sidebar Menu -->
        <nav class="mt-1">

          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <!-- Add icons to the links using the .nav-icon class
     with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="index.php?action=AfficherAdminWithAjax&choix=Dashboard" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Tableau de bord
                </p>
              </a>
            </li>
            <hr class="text-muted">
            
           
            <li class="nav-item">
              <a  href="index.php?action=AfficherAdminWithAjax&choix=Demande_Etude" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Demande consulting
                </p>
              </a>
            </li>
            <hr class="text-muted">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Équipe consulting
                </p>
              </a>
            </li>
            <hr class="text-muted">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Gallerie consulting
                </p>
              </a>
            </li>

            <hr class="text-muted">
            <li class="nav-item">
              <a href="index.php?action=fiche_admission" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Form-admission
                </p>
              </a>
            </li>

            <hr class="text-muted">


            <li class="nav-item">
            <button title="Deconnectz-vous ici" class="nav-link" onclick="document.location='index.php?action=logout'"><i class="fa fa-lock" aria-hidden="true"></i>Deconnection</button>
            <!-- <a href="index.php?action=Logout" class="nav-link">   -->
              <!-- <i class="fa fa-lock mr-2" aria-hidden="true"></i>
              <p>
                Log Out
              </p> -->
            </a>
          </li>


            <!-- <li class="nav-item">
              <a href="#deconnection" class="nav-link">
                <i class="fa fa-lock mr-2" aria-hidden="true"></i>
                <p>
                  Se déconnecter
                </p>
              </a>
            </li> -->


          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
      <div class="nav navbar navbar-expand navbar-white navbar-light border-bottom p-0">
        <div class="nav-item dropdown">
          <a class="nav-link bg-danger dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Fermer onglet</a>
          <div class="dropdown-menu mt-0">
            <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all">Fermer tout</a>
            <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all-other">Fermer les autres</a>
          </div>
        </div>
        <a class="nav-link bg-light" href="#" data-widget="iframe-scrollleft"><i class="fas fa-angle-double-left"></i></a>
        <ul class="navbar-nav overflow-hidden" role="tablist"></ul>
        <a class="nav-link bg-light" href="#" data-widget="iframe-scrollright"><i class="fas fa-angle-double-right"></i></a>
        <a class="nav-link bg-light" href="#" data-widget="iframe-fullscreen"><i class="fas fa-expand"></i></a>

      </div>

     
      <div class="tab-content">
      <div class="tab-empty" id=example>
        <h1  style="color: #002A8B;">Bienvenue <?= $_SESSION["LastName"] ?> dans l'Admin</h1>

      </div>
        <div class="tab-loading">
          <div>
            <h2 class="display-7"> <i class="fa fa-sync fa-spin"></i></h2>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <p class="text-center">Copyright &copy; 2022-2023 <a href="#">L'Etudiant consulting</a>.
      Tous les droits sont réservés <b>Version 3.2.0 </b> </p>
      <div class="float-right d-none d-sm-inline-block">
        
    
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="public/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="public/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="public/plugins/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->

</body>
<script src="public/plugins/dist/js/demo.js"></script>
<script src="public/js/test_DT.js"></script>

</html>