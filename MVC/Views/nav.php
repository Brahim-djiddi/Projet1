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
                        <a href="index.php">

                            <img src="public/images/logo.png" height="70" width="160"></a>
                    </div>

                    <div class="col-12 col-md-10 d-none d-xl-block mt-3">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <a href="index.php#home-section" class="text-dark nav-link" style="font-size:19px;">Accueil</a>
                                <a href="index.php#services-section" class="text-dark nav-link" style="font-size:19px;">Nos services</a>
                                <a href="index.php#demandes-section" class="text-dark nav-link" style="font-size:19px;">Vos demandes</a>
                                <a href="index.php#contact-section" class="text-dark nav-link" style="font-size:19px;">Contact</a>
                                <a href="index.php#apropos-section" class="text-dark nav-link mb-4" style="font-size:19px;">À propos</a>
                                <?php if (isset($_SESSION["username"])) : ?>
                                    <span style="cursor:pointer;font-size:19px; margin-left:0%" class="text-dark" id=" dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-circle-user"></i> Mon Profile</span>
                                    <div class="bg-light dropdown-menu mt-2" aria-labelledby="dropdownMenu2">
                                        <a class="text-dark nav-link" href="index.php?action=<?= $_SESSION["profil"] ?>">
                                           <i class="fa-solid fa-circle-user mr-1"></i>
                                           Voir mon profile
                                        </a>
                                        <hr>
                                        <a href="index.php?action=Logout" class="text-dark nav-link">
                                            <i class="fa-solid fa-right-to-bracket mr-1"></i> 
                                            Se déconnecter
                                        </a>
                                    </div>
                                <?php else : ?>
                                    <a href="index.php?action=Login" class="text-dark nav-link" style="font-size:19px;">Se connecter <i class="fa-solid fa-right-to-bracket"></i></a>
                                <?php endif ?>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><i class="fa-solid fa-bars fa-2x"></i></a></div>
                </div>
            </div>

        </header>