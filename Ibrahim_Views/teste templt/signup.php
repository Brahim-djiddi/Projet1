<!doctype html>
<html lang="en">
  <head>
    <title>S'inscription</title>
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

<body>
<div class="site-section " id="connexion-section">
    <div class="container ">
      <div class="row">

        <div class="col-lg-6">
          <img src="images/signup.png" class="img-fluid" height="300" width="500" alt="" srcset="">
        </div>


        <div class="col-lg-6">
          <form class="needs-validation " method="post" action="register.php" novalidate>
 
 <h3 class=" text-left text-justify" style="color:#002A8B; font-family:bold;">Créer votre compte</h3>
                    <div class="form-group">
                       
    
                        <input type="text" name="username2" class="form-control" id="username2" placeholder="Nom" required>
                        <div class="valid-feedback">Valide</div>
                    </div>

                    <div class="form-group">
             
                        <input type="text" name="username2" class="form-control" id="username2" placeholder="Prenom" required>
                        <div class="valid-feedback">Valide</div>
                    </div>




                    <div class="form-group">
             
                        <input type="text" name="username" class="form-control" id="username" placeholder="Nom utilisateur" required>
                        <div class="valid-feedback">Valide</div>
                    </div>

                    <div class="form-group">
   
                        <input type="email" name="email" class="form-control" id="email" placeholder="Adresse e-mail" required>
                        <div class="valid-feedback">Valide</div>
                    </div>


                    <div class="form-group">

                        <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe" required>
                        <div class="valid-feedback">Valide</div>
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="sexe">
                            <option value="Homme">Sexe</option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" value="Profession" name="profession">
                            <option value="Etudiant">Profession</option>
                            <option value="Etudiant">Etudiant(e)</option>
                            <option value="Stagiaire">Stagiaire</option>
                            <option value="Enseignant">Touriste</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </div>


                    <div class=" form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <p for="accepte" id="accepte" name="accepte">Accepter les conditions | <a href="login.php" style="color:#002A8B ;">J'ai un compte</a> </p>
                        <div class="invalid-feedback">Veuillez Cocher ce case</div>

                    </div>
                    <button class="btn btn-warning text-dark mb-5" type="submit" value="Register">S'inscrire <i class="fas fa-sign-in-alt"></i></button>

                </form>
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



        </div>
    </div>

</body>