<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Guetchar | Table de borde</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <!------ Include the above in your HEAD tag ---------->
  <style>
  .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
</style>
</head>
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
        <a href="index.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search 

      <li class="nav-item">
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
      </li>  -->    
      
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <a href="#" class="d-block">
          <img src="public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          Mr.Nivan</a>
        </div>
          
         </div>


    </ul>
  </nav>

  <!-- /.navbar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <img src="public/pictures/securevote-logo1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Guetchar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!--
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Jillian & Houssam</a>
        </div>
          
         </div>
        -->

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info" onclick ='HoussamAffiche("GET","index.php","action=AfficherAdminWithAjax&choix=Dashboard","ShowAll")'>
          <a role="button" href="#" class="d-block"><i class="fas fa-fw fa-user mx-1"></i>Table de borde</a>
        </div>
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info" onclick ='HoussamAffiche("GET","index.php","action=AfficherAdminWithAjax&choix=Client","ShowAll")'>
          <a href="#" class="d-block"><i class="fa fa-users" aria-hidden="true"></i> Clients</a>
        </div>
      </div>
<!--
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info"> 
          <a href="#" class="d-block"><i class="fa fa-envelope" aria-hidden="true"></i> Demandes</a>
        </div>     
      </div>
-->
      
      

      
        <div class="dropdown show">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-envelope" aria-hidden="true"></i> Demandes
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" onclick ='HoussamAffiche("GET","index.php","action=AfficherAdminWithAjax&choix=Demande_Etude","ShowAll")'>Demande d'Etude</a>
            <a class="dropdown-item" href="#">Demande de Stage</a>
            <a class="dropdown-item" href="#">Demande de Travail</a>
            <a class="dropdown-item" href="#">Demande de Sejour</a>
          </div>
        </div>

        <!-- Faire une ligne descpace              -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><i class="fa fa-eye" aria-hidden="true"></i> Article</a> 
        </div>
      </div>

      
      
        <div class="dropdown show">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-adjust" aria-hidden="true"></i> Gestion du Page
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Grand Titre</a>
            <a class="dropdown-item" href="#">Petit Titre</a>
            <a class="dropdown-item" href="#">Carossel</a>
            <a class="dropdown-item" href="#">Carte Personnele</a>
            <a class="dropdown-item" href="#">Description</a>
          </div>
        </div>
      
        <!-- Faire une ligne descpace              -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        </div>

      <!--
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Community auction payments</a>
        </div>
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">ENS proxy</a>
        </div>
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Payment backend</a>
        </div>
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Data Backend</a>
        </div>
      </div>
-->

                <div class="info">
                    <button type="button" class="btn btn-dark"> <a href="index.php?action=Logout" class="d-block">
                    <i class="fa fa-lock" aria-hidden="true"></i> LogOut</a></button>
                </div>
    
      </nav>

     
    </div>

   
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    





    <div id="ShowAll"></div>




</div>

<!-- Button trigger modal -->


<!-- jQuery -->
<script src="public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SecureVote App -->
<script src="public/dist/js/adminlte.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

</body>

<script src="Public/JS/AJAX.js"></script>
<script src="Public/JS/HoussamAjax.js"></script>
</html>
