<?php require("Views/vMenu.php") ?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section">
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Chargement...</span>
        </div>
    </div>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-xl-2">

                        <img src="public/images/logo.png" height="80" width="180">
                    </div>

                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <a href="index.php#home-section" class="text-dark nav-link" style="font-size:19px;">Accueil</a>
                                <a href="index.php#services-section" class="text-dark nav-link" style="font-size:19px;">Nos services</a>
                                <a href="index.php#demandes-section" class="text-dark nav-link" style="font-size:19px;">Vos demandes</a>
                                <a href="index.php#contact-section" class="text-dark nav-link" style="font-size:19px;">Contact</a>
                                <a href="index.php#apropos-section" class="text-dark nav-link" style="font-size:19px;">À propos</a>


                                <?php if (isset($_SESSION["username"])) { ?>
                  <a href="index.php#apropos-section" class="text-dark nav-link  dropdown-toggle" style="font-size:19px;" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                  


                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <a class="text-dark nav-link" href="index.php?action=<?=$variables["profil"]?>"><?=$_SESSION["username"]?></a><br>
                    <a href="index.php?action=Logout" class="text-dark nav-link">Deconnextion<i class="fa-solid fa-right-to-bracket"></i></a>'
                    
                    <!-- <button class="dropdown-item" type="button">Another action</button>
                        <button class="dropdown-item" type="button">Something else here</button> -->
                  </div>
                <?php } else { ?>
                  <a href="index.php?action=Login" class="text-dark nav-link" style="font-size:19px;">Se connecter <i class="fa-solid fa-right-to-bracket"></i></a>
                <?php } ?>


                                <!--  <ul class="dropdown">
                    <li><a href="#demandes-section" class="nav-link">Demande d'Etude</a></li>
                   
                   <li class="has-children">
                      <a href="#">sous grand</a>
                      <ul class="dropdown">
                        <li><a href="#">sous petit</a></li>
                        <li><a href="#">sous petit</a></li>
                        <li><a href="#">sous petit</a></li>
                      </ul>
                    </li> 
                  </ul> -->




                                <!--   <ul class="dropdown">
                    <li><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#Madal_signup">Créer un compte</a></li>
                    <li><a href="login.php" class="nav-link" >Se connecter</a></li>
                  </ul>  -->



                              








                            </ul>
                        </nav>
                    </div>

                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

                </div>
            </div>

        </header>