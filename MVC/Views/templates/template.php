<!-- nav bar -->
<?php require_once("Views/nav.php") ?>

<div id="main">
  <?= $view ?>
</div>


<!-- Footer down -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-12 " style="margin-top: -7%;">
        <div class="slide-one-item home-slider owl-carousel">
          <img src="public/images/etudiant2.jpeg" class="img-fluid img">
          <img src="public/images/etudiant1.jpeg" class="img-fluid img">
          <img src="public/images/etudiant3.JPG" class="img-fluid img">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="site-section bg-light">
  <div class="container">
    <div class="row mb-1 justify-content-center">
      <div class="col-md-7 text-center">
        <figure><img src="public/images/quisom.png" height="100" width="300" alt="Qui sommes-nous" srcset=""></figure>
        <p class="">Nous sommes un cabinet spécialisé dans le conseil d'orientation, l'assistance et l'accompagnement des élèves et étudiants dans le cadre de la formation professionnelle, désireux de poursuivre leurs études supérieures à l'étranger. Nous sommes en effet, partenaires avec plusieurs écoles et universités privées proposant des diplômes reconnus et/ou accrédités par l'état et valables sur le plan national et international. Notre ambition est de proposer un avenir plein d'opportunités pour tous et de faire en sorte que le rêve de chacun soit une raison suffisante pour avancer.
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
        <h3 class="text-dark font-weight-bold">Nos service</h3> 
        <hr align="center" width="30%"  style="background-color:#FFDD41; padding:0.2%;">
      </div>
    </div>

    <div class="  nonloop-block-13 owl-style owl-style-md owl-carousel">
      <div class="training service">
        <div class="img-fluid">
          <figure class="mb-4"><img src="public/images/orientation.jpeg" height="200" width="300" alt="orientation"></figure>
        </div>
        <h5 class="text-dark font-weight-bold mb-3 mt-3">Orientations</h5>
        <p >Une orientation professionnelle, universitaire et de carrière, en fonction de vos intérêts, de votre parcours scolaire antérieur, et de votre personnalité</p>
      </div>

      <div class="training service">
        <div class="icon">
          <figure><img src="public/images/signupOnline.jpeg" height="200" width="300" alt="orientation"></figure>
        </div>
        <h5 class="text-dark font-weight-bold  mb-3 mt-3">Inscription en ligne</h5>
        <p> L'Etudiant Consulting vous offre la possibilité de vous préinscrire et de vous inscrire en ligne. la procédure en ligne est entièrement gratuite pour tous.</p>
      </div>

      <div class="training service">
        <div class="icon">
          <figure><img src="public/images/bourse.jpeg" height="200" width="300" alt="orientation"></figure>
        </div>
        <h5 class="text-dark font-weight-bold  mb-3 mt-3">Bourse d'étude</h5>
        <p>Profiter d'une bourse d'étude allant de 20% à 100% de réduction. Selon votre demande ou de votre situation sociale.</p>
      </div>


      <div class="training service">
        <div class="icon">
          <figure><img src="public/images/accueil.jpeg" height="200" width="300" alt="orientation"></figure>
        </div>
        <h5 class="text-dark font-weight-bold  mb-3 mt-3">Accueil aéroport</h5>
        <p> Un accueil chaleureux vous attend à l' aéroport. Vous êtes pris en charge par une équipe en fonction de votre réservation (transport personnel ou en commun)</p>
      </div>

      <div class="training service">
        <div class="icon">
          <figure><img src="public/images/accompagnement.jpeg" height="200" width="300" alt="orientation"></figure>
        </div>
        <h5 class="text-dark font-weight-bold mb-3 mt-3">Accompagnement</h5>
        <p> Nous vous proposons également un accompagnement administratif complet dans vos démarches. Pour l'obtention de votre titre de séjour ou documents administratifs divers..</p>
      </div>

    </div>

  </div>
</section>



<!--    Vos demandes -->
<section class="site-section" id="demandes-section">
  <div class="container">
    <div class="row mb-5 justify-content-center" data-aos="fade-up">
      <div class="col-md-7 text-center">
        <h3 class="text-dark font-weight-bold">Vos demandes</h3> 
        <hr align="center" width="35%"  style="background-color:#FFDD41; padding:0.2%;">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-5 shadow-sm" data-aos="fade-up">
        <div class="training">
          <a href="index.php?action=pre_demande_etude" class="nav-link d-block">
            <figure class=""><img src="public/images/etude.png" alt="guetchar" class="img-fluid"></figure>
            <h6 class="text-dark font-weight-bold text-center">Inscription en ligne</h6>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6  mb-5 shadow-sm" data-aos="fade-up">
        <div class="training">
          <a href="" class="nav-link  d-block">
            <figure class="mb-3"><img src="public/images/stage.JPG" alt="guetchar" class="img-fluid w-100"></figure>
            <h6 class="text-dark font-weight-bold text-center">Demande un stage</h6>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6  mb-5 shadow-sm" data-aos="fade-up">
        <div class="training">
          <a href="" class="nav-link d-block">
            <figure class="mb-4"><img src="public/images/sejour.JPG" alt="guetchar" class="img-fluid w-100"></figure>
            <h6 class="text-dark font-weight-bold text-center mb-3">Demande un séjour </h6>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6  mb-5 shadow-sm " data-aos="fade-up">
        <div class="training">
          <a href="" class="nav-link  d-block">
            <figure class="mb-4"><img src="public/images/job.JPG" alt="guetchar" class="img-fluid w-100"></figure>
            <h6 class="text-dark font-weight-bold text-center mb-4">Demande un job </h6>
          </a>
        </div>
      </div>



    </div>
  </div>
</section>

<section class="site-section" id="about-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="col-md-7 text-center">
        <h3 class="text-dark font-weight-bold">Notre équipe</h3> 
        <hr align="center" width="35%"  style="background-color:#FFDD41; padding:0.2%;">
      </div>
    </div>
    <div class="row">

      <div class="col-lg-3 text-center">
        <img src="public/images/person_2.jpg" alt="" class="rounded-circle img-fluid w-50 mb-4">
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
        <img src="public/images/person_2.jpg" alt="" class="rounded-circle img-fluid w-50 mb-4">
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
        <img src="public/images/person_2.jpg" alt="" class="rounded-circle img-fluid w-50 mb-4">
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
        <img src="public/images/person_2.jpg" alt="" class="rounded-circle img-fluid w-50 mb-4">
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


<!-- Gallerie -->
<section class="site-section" id="gallery-section">
  <div class="container-fluid">
    <div class="row mb-5 justify-content-center">
      <div class="col-md-7 text-center">
        <h3 class="text-dark font-weight-bold">Gallerie des photos</h3> 
        <hr align="center" width="40%"  style="background-color:#FFDD41; padding:0.2%;">
      </div>
    </div>
    <div class="row">
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="public/images/images5.png" data-fancybox="gal"><img src="public/images/images5.png" alt="1" class="img-fluid"></a>
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="public/images/images2.png" data-fancybox="gal"><img src="public/images/images2.png" alt="2" class="img-fluid"></a>
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="public/images/images3.png" data-fancybox="gal"><img src="public/images/images3.png" alt="3" class="img-fluid"></a>
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="public/images/images4.png" data-fancybox="gal"><img src="public/images/images4.png" alt="4" class="img-fluid"></a>
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="public/images/images1.png" data-fancybox="gal"><img src="public/images/images1.png" alt="4" class="img-fluid"></a>
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="public/images/images6.png" data-fancybox="gal"><img src="public/images/images6.png" alt="4" class="img-fluid"></a>
    </div>
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
      <h3 class="text-dark font-weight-bold">Nos partenaires</h3> 
      <hr align="center" width="20%"  style="background-color:#FFDD41; padding:0.2%;">
    </div>
  </div>
  <div class="container ">

    <div class="owl-carousel owl-style " id="partenaire">
      <figure class="h5 m-1"><img src="public/images/isga.png" alt=""></figure>

      <figure class="h5 m-1"><img src="public/images/uemf.png" alt=""></figure>



    </div>
  </div>
  </div>
</section>




<div class="site-section bg-light" id="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">

      <?php if(isset($_SESSION["success"])){
          echo"<div class='alert alert-success' role='alert'>
          <h3>".$_SESSION["success"]."</h3>
        </div>";
          unset($_SESSION["success"]);
        } ?>
        
        <?php if(isset($_SESSION["unsuccess"])){
          echo"<div class='alert alert-warning' role='alert'>
          <h3>".$_SESSION["unsuccess"]."</h3>
        </div>";
          unset($_SESSION["unsuccess"]);
        } ?>      
      
        <h3 class="text-dark font-weight-bold">Contactez-nous</h3> 
      <hr align="center" width="20%"  style="background-color:#FFDD41; padding:0.2%;">
        
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 mb-5">
        <img src="public/images/contact.jpg" class="img-fluid" alt="" srcset="">
      </div>
      <div class="col-lg-6 mb-5">
      <form action="index.php?action=send_mail" method="post">
          <div class="form-group row">
            <div class="col-md-6 mb-3 mb-md-0">
              <input type="text" class="form-control" placeholder="Prénom" name="prenom" required>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Nom" name="nom" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <input type="email" class="form-control" placeholder="Adresse email" name="email" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <textarea name="message" id="" class="form-control" placeholder="Ecrire votre message." cols="30" rows="10" required></textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-5 mr-auto">
              <input type="submit" class="btn btn-block btn-primary text-white  px-1" value="Envoyer">
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row mb-5">
      <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
        <p class="mb-0 font-weight-bold">Adresse</p>
        <p class="mb-4 text-justify">Avenue Abdelkarim Benjelloun N&#186;42 6ème &#233;tage Bureaux Achraf, F&#233;s
      </div>
      <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
        <p class="mb-0 font-weight-bold">Numéro de téléphone</p>
        <p class=""><a href="#">+212660523877 <span class="text-muted">/</span> +212644761513</a></p>

      </div>
      <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
        <p class="mb-0 font-weight-bold">Adresse e-mail</p>
        <p class="mb-0"><a href="#">support@guetchar.com</a></p>
      </div>
    </div>
  </div>
</div>

      <!-- footer -->
<?php require("Views/vFooter.php") ?>