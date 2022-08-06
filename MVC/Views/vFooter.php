
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="footer-heading mb-4" id="apropos-section">À propos</h2>
          <p class="text-justify">L'Etudiant Consulting est une offre de GUETCHAR CONSULTING GROUP SARL, une société enregistrée au RC N° 72785 et dont le siège social est fixé au N°42 6ème ETG BUREAU ACHRAF av ABDELKRIM BENJELLOUN Fès. Notre cabinet est spécialisé dans le conseil d'orientation, l'assistance et l'accompagnement des élèves et étudiants dans le cadre de la formation professionnelle, désireux de poursuivre leurs études supérieures à l'étranger. Nous sommes en effet, partenaires avec plusieurs écoles et universités privées proposant des diplômes reconnus et/ou accrédités par l'état et valables sur le plan national et international.</p>
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
          strings: ["une école ?","ou une université ?"],
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