<!doctype html>
<html lang="en">
  <head>
    <title>Connexion</title>
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

<body style="margin-top:70px ;">
  <div class="site-section " id="connexion-section">
    <div class="container ">
      <div class="row">

        <div class="col-lg-6">
          <img src="images/login.png" class="img-fluid" height="300" width="500" alt="" srcset="">
        </div>


        <div class="col-lg-6">
          <form class="needs-validation " method="post" action="register.php" novalidate>
         
              <h3 class=" text-left text-justify" style="color:#002A8B; font-family:bold;">Se connecter à votre compte</h3>
         

            <div class="form-group mb-4">
             
              <input class="form-control" type="text" name="username" placeholder="Email" id="username" required>
            </div>

            <div class="form-group">
             
              <input class="form-control" type="password" name="password" placeholder="Mot de passe" id="password" required>
              <div class="valid-feedback">Valide</div>
            </div>


            <div class="form-group" style="margin-bottom:70px ;">
              <div class="form-check mb-3">
                <input class="form-check-input mb-1" type="checkbox" id="gridCheck">
                <div class="valid-feedback">Valide</div>
                <p class="form-check-label " for="gridCheck"> Maintenir ma connection | <a href="signup.php" style="color:#002A8B ;"> Créer compte ?</a></p>
              </div>
            <a href="index.php" class="btn btn-warning text-dark">Se connecter <i class="fas fa-sign-in-alt"></i></a>
            </div>

          </form>
        </div>

      </div>

    </div>
  </div>
  </div>



  <script>
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {

                        var forms = document.getElementsByClassName('needs-validation');

                        var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();
            </script>

</body>

</html>