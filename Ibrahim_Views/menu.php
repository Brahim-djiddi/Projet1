<?php include 'model/clientManager.php' ?>
<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <meta name="description" content=""/>
    <meta name="author" content="" />
    <title>Accueil | Client</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,500,500i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <!-- css bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- css fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- css datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css">
   <?php include_once 'css/style.php'?>
</head>

<body>

    <header class="header" >
        <div class="header-inner">
            <div class="container">
                 <nav class="navbar navbar-expand-lg navbar-light bg-white  shadow-sm fixed-top" id="main-navbar">
        <div class="container">
       
            <a class=" navbar-brand" href="index.php"> <strong class="h4"> <b>BLACKSHAP</b> </strong></a>
            
            <i class="navbar-toggler px-2 fa-solid fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"></i>
            
            <div class="offcanvas offcanvas-start-lg " tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header d-flex d-lg-none">
                    <h6 class="small offcanvas-title text-dark" id="offcanvasExampleLabel"><b>BLACKSHAP</b></h6>
                 
                </div>
                
                <div class="offcanvas-body p-lg-0">
                    <ul class="navbar-nav ms-auto d-flex flex-row">
                        <!-- profile -->
                
                               <?php if (!empty($_SESSION['profile'])) { ?>

                            <div class="dropdown "> 
                            <a type="button" class="dropdown-item-nav nav-link  hidden-arrow d-flex align-items-center" href="panier.php">
                                 Panier   [<?php if($_SESSION['nbr']!=0){?>
                                <span class=" badge rounded bg-danger" style="font-size:8px"> <?= $_SESSION['nbr']?></span>
                                <?php }?></span>]
                            </a>
                            </div>
                           
                            <div class="topbar-divider d-none d-sm-block "></div>
                            <div class="dropdown ">
                                <a class="dropdown-item-nav nav-link  hidden-arrow d-flex align-items-center dropdown-toggle" role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class=" mb-0"><i class="fas fa-user-check"></i> Bonjour, <?= $_SESSION['usernameC']  ?></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                                    <li class="py-1"> <a href="_profile.php" data-toggle="tab" class="dropdown-item-nav nav-item nav-link has-icon nav-link-faded"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Mon compte</a></li>

                                    <li class="nav-item">
                  <a href="commande.php" data-toggle="tab" class="dropdown-item-nav nav-item nav-link has-icon nav-link-faded"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg> Notifications</a>
                </li>
                                    <li class="py-1">  <a href="_securite.php" data-toggle="tab" class="dropdown-item-nav nav-item nav-link has-icon nav-link-faded"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg> Securité</a> </li>


                                    <li class="nav-item">
                  <a href="#billing" data-toggle="tab" class="dropdown-item-nav nav-item nav-link has-icon nav-link-faded"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg> Payement</a>
                </li>
				<li class="nav-item">
                  <a href="#account" data-toggle="tab" class="dropdown-item-nav nav-item nav-link has-icon nav-link-faded"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Paramètres</a>
                </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                  
				<li class="nav-item">
        <a class="dropdown-item-nav px-3" data-bs-toggle="modal" data-bs-target="#ProfileModal" role="button"><i class="fas fa-arrow-right-from-bracket "></i> Deconnexion</a>
                </li>
                                   
                                </ul>
                            </div>
                            
                            </ul>
                      </div>    

                        <?php } else { ?>
                     <div class="offcanvas-body p-lg-0">
                       <ul class="navbar-nav ms-auto d-flex flex-row">

                             <div class="dropdown "> 
                            <a type="button" class="dropdown-item-nav nav-link  hidden-arrow d-flex align-items-center" href="panier.php">
                                 Panier   [<?php if($_SESSION['nbr']!=0){?>
                                <span class=" badge rounded bg-danger" style="font-size:8px"> <?= $_SESSION['nbr']?></span>
                                <?php }?></span>]
                            </a>
                            </div>
                    
                            <div class="topbar-divider d-none d-sm-block "></div>

                            <div class="dropdown ">
                                
                                <a class="dropdown-item-nav nav-link  hidden-arrow d-flex align-items-center" role="button"href="login.php" >
                                <span class=" text-gray-00 mb-0 "> <i class="fa-regular fa-user"></i> Se connecter</span>
                                </a>

                            </div>
                            
                        <?php } ?>
                     
                    </ul>
                </div>
                
            </div>
        </div><?php include 'Modal_Deconnection.php'?>
       </nav>
            </div>
        </div>
    </header>
    </div>


    
