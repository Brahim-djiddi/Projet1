<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1 class="footer-heading mb-4" id="apropos-section">À propos</h1>
        <p class="text-justify">L'Etudiant Consulting est une offre de GUETCHAR CONSULTING GROUP SARL, une société enregistrée au RC N° 72785 et dont le siège social est fixé au N°42 6ème ETG BUREAU ACHRAF av ABDELKRIM BENJELLOUN Fès. Notre cabinet est spécialisé dans le conseil d'orientation, l'assistance et l'accompagnement des élèves et étudiants dans le cadre de la formation professionnelle, désireux de poursuivre leurs études supérieures à l'étranger. Nous sommes en effet, partenaires avec plusieurs écoles et universités privées proposant des diplômes reconnus et/ou accrédités par l'état et valables sur le plan national et international.</p>
      </div>


      <div class="col-md-3 ">
        <h1 class="footer-heading mb-4">Liens utile</h1>
        <ul class="list-unstyled">
          <li><a href="index.php#demandes-section" class="smoothscroll">Nos demandes</a></li>
          <li><a href="index.php#services-section" class="smoothscroll">Nos services</a></li>
          <li><a href="index.php#contact-section" class="smoothscroll">Contact</a></li>
        </ul>
      </div>

      <div class="col-md-3">
        <div class="mb-5">
          <h1 class="footer-heading mb-4">Suivez-nous</h1>
          <div class="btn-group-horizontal" role="group" aria-label="Vertical button group">
            <a href="#" class="btn btn-sm btn-light" target="_blank"><i class="fa-brands fa-square-facebook fa-2x" style="color:#0B82EE;"></i></a>
            <a href="#" class="btn btn-sm btn-light" target="_blank"><i class="fa-brands fa-square-twitter fa-2x" style="color:#1EA1F2;"></i></a>
            <a href="#" class="btn btn-sm btn-light" target="_blank"><i class="fa-brands fa-square-instagram fa-2x" style="color:rgb(246,8,142);"></i></a>
            <a href="#" class="btn btn-sm btn-light" target="_blank"><i class="fa-brands fa-linkedin fa-2x" style="color:#0D63BC;"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="row pt-5 text-left">
      <div class="col-md-12">
        <div class="border-top pt-5">
          <p class="copyright"><small>

              Droits d'auteur &copy; L'Étudiant Consulting <script>
                document.write(new Date().getFullYear());
              </script> </small></p>

        </div>
      </div>

    </div>

  </div>
</footer>
</div> <!-- .site-wrap -->

<!-- javaScript -->
<script src="public/js/jquery-3.3.1.min.js"></script>
<script src="public/js/jquery-ui.js"></script>
<script src="public/js/popper.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/jquery.countdown.min.js"></script>
<script src="public/js/jquery.easing.1.3.js"></script>
<script src="public/js/aos.js"></script>
<script src="public/js/jquery.fancybox.min.js"></script>
<script src="public/js/jquery.sticky.js"></script>
<script src="public/js/isotope.pkgd.min.js"></script>
<script src="public/js/typed.js"></script>
<script>
  var typed = new Typed('.typed-words', {
    strings: ["une école ?", "ou une université ?"],
    typeSpeed: 80,
    backSpeed: 80,
    backDelay: 2000,
    startDelay: 500,
    loop: true,
    showCursor: true
  });
</script>

<script src="public/js/main.js"></script>

<script>
  var owl = $('#partenaire');
  owl.owlCarousel({
    items: 5,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 2000,

  });
  $('.play').on('click', function() {
    owl.trigger('play.owl.autoplay', [1000])
  })
  $('.stop').on('click', function() {
    owl.trigger('stop.owl.autoplay')
  })
</script>



</body>

</html>