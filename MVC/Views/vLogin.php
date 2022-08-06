<?php require("vMenu.php")?>

<body style="margin-top:70px ;">

  <div class="site-section " id="connexion-section">
    <div class="container ">
      <div class="row">

        <div class="col-lg-6">
          <img src="public/images/login.png" class="img-fluid" height="300" width="500" alt="" srcset="">
        </div>


        <div class="col-lg-6">
          <form class="needs-validation" method="POST" novalidate>
              <?php if (isset($_SESSION["cannot_pass"])) {
                echo"<div class='alert alert-danger' role='alert'>".$_SESSION["cannot_pass"]."</div>";
                unset($_SESSION["cannot_pass"]);}
                if(not_Login($_GET["action"])){
                $_SESSION["action"]="?action=".$_GET["action"]??"";}
                ?>
              <h3 class=" text-left text-justify" style="color:#002A8B; font-family:bold;">Se connecter à votre compte</h3>
         
              <span class="Err" id="ErrCode"> <?=$variables["errors"]["connect"] ?? ""?> </span>
            <div class="form-group mb-4">
              <span class="Err" id="ErrCode"> <?=$variables["email"]["connect"] ?? ""?> </span>
              <input class="form-control" type="text" name="email" placeholder="Email ou nom utilisateur" id="username" required>
            </div>

            <div class="form-group">
            <span class="Err" id="ErrCode"> <?=$variables["password"]["connect"] ?? ""?> </span>
              <input class="form-control" type="password" name="password" placeholder="Mot de passe" id="password" required>
              <div class="valid-feedback">Valide</div>
            </div>


            <div class="form-group" style="margin-bottom:70px ;">
              <div class="form-check mb-3">
                <input class="form-check-input mb-1" type="checkbox" id="gridCheck">
      
                <p class="form-check-label " for="gridCheck"> Maintenir ma connection | <a href="index.php?action=SignUp" style="color:#002A8B ;"> Créer compte ?</a></p>
              </div>
              <button class="btn btn-warning text-dark mb-5" type="submit" value="Register">Se connecter <i class="fas fa-sign-in-alt"></i></button>

            <!-- <a href="index.php" class="btn btn-warning text-dark">Se connecter <i class="fas fa-sign-in-alt"></i></a> -->
            
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