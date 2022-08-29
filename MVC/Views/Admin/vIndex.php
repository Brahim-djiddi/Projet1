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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
  <!-- DataTables :  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />

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

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar  elevation-4">
      <div class="sidebar">
        <div class=" mt-3 d-flex">
          <div class="image">
            <img src="public/images/logo.png" alt="AdminLTE Logo" class="ml-2" width="200" height="80">
          </div>

        </div>
        <hr class="text-muted">
        <div class="user-panel mt-3 pb-2 d-flex">
          <div class="image">
            <img src="public/logo/profile.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="index.php?action=profil" class="text-muted text-inline">
              <?php if (isset($_SESSION["email"])) :
                echo "Profile, " . strtoupper($_SESSION["LastName"]);
              endif;
              ?>
            </a>
          </div>
        </div>
        <hr class="text-muted">

        <!-- Sidebar Menu -->
        <nav class="mt-1">

          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


            <li class="nav-item">
              <a href="index.php?action=AfficherAdminWithAjax&choix=Dashboard" class="nav-link">
                <i class="fa-solid fa-gauge" style="color:#003089;"></i>
                <p>
                  Tableau de bord
                </p>
              </a>
            </li>
            <hr class="text-muted">


            <li class="nav-item">
              <a href="index.php?action=AfficherAdminWithAjax&choix=Demande&choix2=All" class="nav-link">
                <i class="fa-solid fa-file-lines" style="color:#003089;"></i>
                <p>
                  Demandes consulting
                </p>
              </a>
            </li>
            <hr class="text-muted">

            <li class="nav-item">
              <a  href="index.php?action=AfficherAdminWithAjax&choix=Clients" class="nav-link">
                <i class="fa-solid fa-file-lines" style="color:#003089;"></i>
                <p>
                  Clients consulting
                </p>
              </a>
            </li>



            <hr class="text-muted">
            <li class="nav-item">
              <a href="index.php?action=AfficherAdminWithAjax&choix=equipes" class="nav-link">
                <i class="fa-solid fa-users " style="color:#003089;"></i>
                <p>
                  Équipes consulting
                </p>
              </a>
            </li>
           

            <hr class="text-muted">
            <li class="nav-item">
              <a href="index.php?action=AfficherAdminWithAjax&choix=galleries" class="nav-link">
                <i class="fa-solid fa-image" style="color:#003089;"></i>
                <p>
                  Galleries consulting
                </p>
              </a>
            </li>
            <hr class="text-muted">
            <li class="nav-item">
              <a href="index.php?action=fiche_admission" class="nav-link">
                <i class="fa-solid fa-file-pdf " style="color:#003089;"></i>
                <p>
                  Form-admissions
                </p>
              </a>
            </li>

            


            <hr class="text-muted">


            <li class="nav-item">
              <button title="Deconnectz-vous ici" class="nav-link" onclick="document.location='index.php?action=logout'"><i class="fa fa-lock" aria-hidden="true" style="color:#003089;"></i> Se deconnecter</button>
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


      <div class="tab-content img-fluid" style="background-image: url('public/images/bg-admin.jpg');background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-size: 100% 100%;">

        <h5 class="pt-2 text-white text-center"> Espace Administrateur</h5>
        
        <div class="tab-empty" id=example>
        <img src="public/logo/profile.png" width="55%" height="500px" alt="" srcset="">
          <h2 class="text-white text-center ml-2 font-weight-bold text-uppercase">Bienvenue <?= $_SESSION["LastName"] ?></h2>
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
  </div>




  <!--   <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

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

  <script src="public/plugins/dist/js/demo.js"></script>
  <script src="public/js/test_DT.js"></script>
  <script src="public/js/Aff_Ajax.js"></script>

</body>

</html>