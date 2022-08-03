<!doctype html>
<html lang="en">
  <head>
    <title>GuetChar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700, 900|Playfair+Display:400,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"  />
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    
  </head>



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
   
    
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            
            <img src="images/logo.png" height="80" width="180">
          </div>
        
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                
               <a href="index.php#home-section" class="text-dark nav-link" style="font-size:19px;">Accueil</a>


                <a href="index.php#services-section" class="text-dark nav-link" style="font-size:19px;">Nos services</a>
                <a href="index.php#demandes-section" class="text-dark nav-link" style="font-size:19px;">Vos demandes</a>

               <!--  <li>
                  <a  class="nav-link">Vos demandes</a>
                  <ul class="dropdown">
                    <li><a href="#demandes-section" class="nav-link">Demande d'Etude</a></li>
                    <li><a href="#demandes-section" class="nav-link">Demande de Stage</a></li>
                    <li><a href="#demandes-section" class="nav-link">Demande de Job</a></li>
                    <li><a href="#demandes-section" class="nav-link">Demande de Sejour</a></li>
                   <li class="has-children">
                      <a href="#">sous grand</a>
                      <ul class="dropdown">
                        <li><a href="#">sous petit</a></li>
                        <li><a href="#">sous petit</a></li>
                        <li><a href="#">sous petit</a></li>
                      </ul>
                    </li> 
                  </ul>
                </li>-->
              
                <a href="index.php#contact-section" class="text-dark nav-link" style="font-size:19px;" >Contact</a>
                <a href="index.php#apropos-section" class="text-dark nav-link" style="font-size:19px;">À propos</a>



                <?php if (isset($_SESSION["username"])) { ?>
                  <a href="index.php#apropos-section" class="text-dark nav-link  dropdown-toggle" style="font-size:19px;" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                  


                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <a class="text-dark nav-link" href="index.php?action=index2"><?=$_SESSION["username"]?></a><br>
                    <a href="index.php?action=Logout" class="text-dark nav-link">Deconnextion<i class="fa-solid fa-right-to-bracket"></i></a>'
                    
                    <!-- <button class="dropdown-item" type="button">Another action</button>
                        <button class="dropdown-item" type="button">Something else here</button> -->
                  </div>
                <?php } else { ?>
                  <a href="index.php?action=Login" class="text-dark nav-link" style="font-size:19px;">Se connecter <i class="fa-solid fa-right-to-bracket"></i></a>
                <?php } ?>

                
                
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

    <!-- Menu up -->














<div id ="main"> 
<?= $view ?>
 </div>
















<!-- Footer down -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 " style="margin-top: -7%;">
          <div class="slide-one-item home-slider owl-carousel">
             <img src="images/etudiant2.jpeg"  class="img-fluid img">
            <img src="images/etudiant1.jpeg"  class="img-fluid img">
             <img src="images/etudiant3.JPG"  class="img-fluid img">
          </div>
        </div>
      </div>
    </div>             
  </section>
  
  
  <section class="site-section bg-light" >
    <div class="container">
      <div class="row mb-1 justify-content-center">
        <div class="col-md-7 text-center">
          <figure><img src="images/quisom.png" height="100" width="300" alt="Qui sommes-nous" srcset=""></figure>


    <p>Nous sommes un cabinet spécialisé dans le conseil d'orientation, l'assistance et l'accompagnement des élèves et étudiants dans le cadre de la formation professionnelle, désireux de poursuivre leurs études supérieures à l'étranger.  Nous sommes en effet, partenaires avec plusieurs écoles et universités privées proposant des diplômes reconnus et/ou accrédités par l'état et valables sur le plan national et international. Notre ambition est de proposer un avenir plein d'opportunités pour tous et de faire en sorte que le rêve de chacun soit une raison suffisante pour avancer.
      L'Etudiant Consulting
      Votre réussite, notre priorité</p>
        </div>
      </div>
       
    </div>
  </section>


  <section class="site-section" id="services-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
          
          <h2 class="text-black">Nos services</h2>

        </div>
      </div>
      
      <div class="  nonloop-block-13 owl-style owl-style-md owl-carousel">
        <div class="training service">
          <div class="img-fluid"><figure class="mb-4"><img src="images/orientation.jpeg" height="200" width="200" alt="orientation"></figure></div>
          <h3 class="text-black mb-3 mt-3">Orientations</h3>
          <p>Une orientation professionnelle, universitaire et de carrière, en fonction de vos intérêts, de votre parcours scolaire antérieur, et de votre personnalité</p>
        </div>
      
        <div class="training service">
          <div class="icon"><figure><img src="images/signupOnline.jpeg" height="200" width="200" alt="orientation"></figure></div>
          <h3 class="text-black mb-3 mt-3">Inscription en ligne</h3>
          <p> L'Etudiant Consulting vous offre la possibilité de vous préinscrire et de vous inscrire en ligne. la procédure en ligne est entièrement gratuite pour tous.</p>
        </div>

        <div class="training service">
          <div class="icon"><figure><img src="images/bourse.jpeg" height="200" width="1000" alt="orientation"></figure></div>
          <h3 class="text-black mb-3 mt-3">Bourse d'étude</h3>
          <p>Profiter d'une bourse d'étude allant de 20% à 100% de réduction. Selon votre demande ou  de votre situation sociale.</p>
        </div>

  
        <div class="training service">
          <div class="icon"><figure><img src="images/accueil.jpeg" height="200" width="300" alt="orientation"></figure></div>
          <h3 class="text-black mb-3 mt-3">Accueil aéroport</h3>
          <p> Un accueil chaleureux vous attend à l' aéroport. Vous êtes pris en charge par une équipe en fonction de votre réservation (transport personnel ou en commun)</p>
        </div>

        <div class="training service">
          <div class="icon"><figure><img src="images/accompagnement.jpeg" height="200" width="200" alt="orientation"></figure></div>
          <h3 class="text-black mb-3 mt-3">Accompagnement</h3>
          <p> Nous vous proposons également un accompagnement administratif complet dans vos démarches. Pour l'obtention de votre titre de séjour ou documents administratifs divers..</p>
        </div>

      </div>

    </div>
  </section>



  <section class="site-section" id="demandes-section">
  <div class="container">
  <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-7 text-center">
          
          <h2 class="text-black">Vos demandes</h2>

        </div>
      </div>
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-5 shadow-sm" data-aos="fade-up">
        <div class="training">
          <a href="index.php?action=Demande_Etude" class="nav-link d-block"><figure class=""><img src="images/etude.png" alt="guetchar" class="img-fluid" ></figure>
          <h5 class="text-black text-center">Demande d'Etude </h5>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6  mb-5 shadow-sm" data-aos="fade-up">
        <div class="training">
          <a href="" class="nav-link  d-block"><figure class="mb-3"><img src="images/stage.JPG" alt="guetchar" class="img-fluid w-100"></figure>
          <h5 class="text-black text-center">Demande de Stage </h5></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6  mb-5 shadow-sm" data-aos="fade-up">
        <div class="training">
          <a href="" class="nav-link d-block"><figure class="mb-4"><img src="images/sejour.JPG" alt="guetchar" class="img-fluid w-100"></figure>
          <h5 class="text-black text-center mb-3">Demande de Sejour </h5></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6  mb-5 shadow-sm " data-aos="fade-up">
        <div class="training">
          <a href="" class="nav-link  d-block"><figure class="mb-4"><img src="images/job.JPG" alt="guetchar" class="img-fluid w-100"></figure>
          <h5 class="text-black text-center mb-3">Demande de Job </h5></a>
        </div>
      </div>

      
      

    
    </div>
  </div>
  </section>

  <section class="site-section" id="about-section">
    <div class="container">
    <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
          
          <h2 class="text-black">Notre équipe</h2>

        </div>
      </div>
      <div class="row">

        <div class="col-lg-3 text-center">
          <img src="images/person_2.jpg" alt="" class="rounded-circle img-fluid w-50 mb-4">
          <h3 class="h4 text-black">Nom et prénom</h3>
          <p>Directeur chargé des études</p>
          <p>
            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </p>
        </div>

        <div class="col-lg-3 text-center">
          <img src="images/person_2.jpg" alt="" class="rounded-circle img-fluid w-50 mb-4">
          <h3 class="h4 text-black">Nom et prénom</h3>
          <p>Directeur chargé des stages</p>
          <p>
            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </p>
        </div>

        <div class="col-lg-3 text-center">
          <img src="images/person_2.jpg" alt="" class="rounded-circle img-fluid w-50 mb-4">
          <h3 class="h4 text-black">Nom et prénom</h3>
          <p>Directeur chargé des séjours</p>
          <p>
            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </p>
        </div>

        <div class="col-lg-3 text-center">
          <img src="images/person_2.jpg" alt="" class="rounded-circle img-fluid w-50 mb-4">
          <h3 class="h4 text-black">Nom et prénom</h3>
          <p>Directeur chargé des jobs</p>
          <p>
            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </p>
        </div>

      </div>
    </div>
  </section>



  <section class="site-section" id="gallery-section">
    <div class="container-fluid">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
          <h2 class="text-black">Gallerie</h2>
          
        </div>
      </div>
      
    <!--   <div class="row">
        
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="images/coach_1_sm.jpg" data-fancybox="gal"><img src="images/coach_1_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>

          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="images/coach_2_sm.jpg" data-fancybox="gal"><img src="images/coach_2_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
        
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="images/coach_3_sm.jpg" data-fancybox="gal"><img src="images/coach_3_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>

          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="images/coach_2_sm.jpg" data-fancybox="gal"><img src="images/coach_2_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
  

      </div> -->
    </div>
  </section>

  
<!-- 
  <section class="site-section" id="testimonials-section" data-aos="fade">
    <div class="container">
      
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-6 text-center mb-5">
          <h2 class="text-black mb-2">Services satisfaits</h2>
        </div>
      </div>
      <div  data-aos="fade-up" data-aos-delay="200">
        <div class="owl-carousel owl-style owl-carousel-one no-owl-nav">
          <div>
            <div class="block-testimony-1 text-center">
              
              <blockquote class="mb-4">
                <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands.&rdquo;</p>
              </blockquote>

              <figure>
                <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black">Ricky Fisher</h3>
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">

              

              <blockquote class="mb-4">
                <p>&ldquo;Even the all-p because there were thousands of bad Commas &rdquo;</p>
              </blockquote>

              <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 mb-4 text-black">Ken Davis</h3>

              
            </div>
          </div>


        </div>
      </div>
    </div>
  </section> -->
  
  <section class="site-section" data-aos="fade-up">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="text-black">Nos partenaires</h2>
      </div>
    </div>
    <div class="container ">
    
      <div class="owl-carousel owl-style " id="partenaire">
      <figure class="h5 m-1"><img src="images/isga.png"  alt=""></figure>
      
      <figure class="h5 m-1"><img src="images/uemf.png"   alt=""></figure>
   
    

      </div>
 </div>
    </div>
  </section>
 


  
  <div class="site-section bg-light" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mb-5">
          <h2 class="text-black">Contactez-nous</h2>
        </div>
      </div>
     
      <div class="row">
        <div class="col-lg-6 mb-5">
          <img src="images/contact.jpg"  class="img-fluid" alt="" srcset="">
        </div>
        <div class="col-lg-6 mb-5">
          <form action="#" method="post">
            <div class="form-group row">
              <div class="col-md-6 mb-3 mb-md-0">
                <input type="text" class="form-control" placeholder="Prénom">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Nom">
              </div>
            </div>
            
            <div class="form-group row">
              <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Adresse email">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <textarea name="" id="" class="form-control" placeholder="Ecrire votre message." cols="30" rows="10"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-5 mr-auto">
                <input type="submit" class="btn btn-block btn-primary text-white  px-1" value="J'envoye mon message">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row mb-5">
        <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
          <p class="mb-0 font-weight-bold">Adresse</p>
          <p class="mb-4 text-">Avenue Abdelkarim Benjelloun N&#186;42<br> 6ème &#233;tage Bureaux Achraf, F&#233;s
        </div>
        <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
          <p class="mb-0 font-weight-bold">Numero de telephone</p>
          <p class=""><a href="#">+212660523877 <span class="text-muted">/</span> +212644761513</a></p>
    
        </div>
        <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
          <p class="mb-0 font-weight-bold">Adresse email</p>
          <p class="mb-0"><a href="#">support@guetchar.com</a></p>
        </div>
      </div>
    </div>
  </div>


  
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="footer-heading mb-4" id="apropos-section">À propos</h2>
          <p>L'Etudiant Consulting est une offre de GUETCHAR CONSULTING GROUP SARL, une société enregistrée au RC N° 72785 et dont le siège social est fixé au N°42 6ème ETG BUREAU ACHRAF av ABDELKRIM BENJELLOUN Fès. Notre cabinet est spécialisé dans le conseil d'orientation, l'assistance et l'accompagnement des élèves et étudiants dans le cadre de la formation professionnelle, désireux de poursuivre leurs études supérieures à l'étranger. Nous sommes en effet, partenaires avec plusieurs écoles et universités privées proposant des diplômes reconnus et/ou accrédités par l'état et valables sur le plan national et international.</p>
        </div>
      
      
        <div class="col-md-3 ">
          <h2 class="footer-heading mb-4">Liens utile</h2>
          <ul class="list-unstyled">
            <li><a href="#demandes-section" class="smoothscroll">Demandes</a></li>
            <li><a href="#services-section" class="smoothscroll">Nos services</a></li>
            <li><a href="#services-section" class="smoothscroll">Contact</a></li>
            <li><a href="#contact-section" class="smoothscroll">Formations</a></li>
            <li><a href="#testimonials-section" class="smoothscroll">Guides</a></li>
          </ul>
        </div>

        <div class="col-md-3">
          <div class="mb-5">
            <h2 class="footer-heading mb-4">Suivez nous</h2>
            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </div>
        </div>

      </div>

      <div class="row pt-5 text-left">
        <div class="col-md-12">
          <div class="border-top pt-5">
            <p class="copyright"><small>
           
          Droits d'auteur &copy; <script>document.write(new Date().getFullYear());
          </script> </small></p>
      
          </div>
        </div>
        
      </div>

    </div>
  </footer>


</div> <!-- .site-wrap -->










 <script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/isotope.pkgd.min.js"></script>

<script src="js/typed.js"></script>
          <script>
          var typed = new Typed('.typed-words', {
          strings: ["une école ?","ou une université ?"],
          typeSpeed: 80,
          backSpeed: 80,
          backDelay: 2000,
          startDelay: 500,
          loop: true,
          showCursor: true
          });
          </script>

<script src="js/main.js"></script>

<script>
var owl = $('#partenaire');
owl.owlCarousel({
  items:5,
  loop:true,
  margin:10,
  autoplay:true,
  autoplayTimeout:2000,

});
$('.play').on('click',function(){
  owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
  owl.trigger('stop.owl.autoplay')
})
</script>



</body>
</html>