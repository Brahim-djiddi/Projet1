<?php require("vMenu.php")?>

<body>
<div class="site-section " id="connexion-section">
    <div class="container ">
      <div class="row">

        <div class="col-lg-6">
          <img src="public/images/signup.png" class="img-fluid" height="300" width="500" alt="" srcset="">
        </div>


        <div class="col-lg-6">
          <form class="needs-validation " method="post" action="" novalidate>
 
 <h3 class=" text-left text-justify" style="color:#002A8B; font-family:bold;">Créer votre compte</h3>

                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control" id="username2" placeholder="Nom" value="<?=$variables["Logger"]["first_name"]?>" required/>
                        <span class="Err" id="ErrCode"> <?=$variables["errors"]["first_name"] ?? ""?> </span>
                        <div class="valid-feedback">Valide</div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="last_name" class="form-control" id="username2" placeholder="Prenom" value="<?=$variables["Logger"]["last_name"]?>" required/>
                        <span class="Err" id="ErrCode"> <?=$variables["errors"]["last_name"] ?? ""?> </span>
                        <div class="valid-feedback">Valide</div>
                    </div>



                    <div class="form-group">
                        <input type="text" name="age" class="form-control" id="username2" placeholder="Age" value="<?=$variables["Logger"]["age"]?>" required/>
                        <span class="Err" id="ErrCode"> <?=$variables["errors"]["age"] ?? ""?> </span>
                        <div class="valid-feedback">Valide</div>
                    </div>



                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" id="username2" placeholder="Numero de téléphone" value="<?=$variables["Logger"]["phone"]?>" required/>
                        <span class="Err" id="ErrCode"> <?=$variables["errors"]["phone"] ?? ""?> </span>
                        <div class="valid-feedback">Valide</div>
                    </div>




                    <div class="form-group">
                        <input type="text" name="username" class="form-control" id="username2" placeholder="Nom d'utilisateur" value="<?=$variables["Logger"]["username"]?>" required/>
                        <span class="Err" id="ErrCode"> <?=$variables["errors"]["username"] ?? ""?> </span>
                        <div class="valid-feedback">Valide</div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="email" class="form-control" id="username2" placeholder="Adresse E-mail" value="<?=$variables["Logger"]["email"]?>" required/>
                        <span class="Err" id="ErrCode"> <?=$variables["errors"]["email"] ?? ""?> </span>
                        <div class="valid-feedback">Valide</div>
                    </div>


                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="username2" placeholder="Mot de passe" value="<?=$variables["Logger"]["password"]?>" required/>
                        <span class="Err" id="ErrCode"> <?=$variables["errors"]["password"] ?? ""?> </span>
                        <div class="valid-feedback">Valide</div>
                    </div>

                    <div class="form-group">
                        <input type="password" name="confirm_password" class="form-control" id="username2" placeholder="Confirmer votre mot de passe" value="<?=$variables["Logger"]["confirm_password"]?>" required/>
                        <span class="Err" id="ErrCode"> <?=$variables["errors"]["confirm_password"] ?? ""?> </span>
                        <div class="valid-feedback">Valide</div>
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="gender">
                            <option value="Homme">Sexe</option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>
                        <span class="Err" id="ErrCode"> <?=$variables["errors"]["gender"] ?? ""?> </span>
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" value="Profession" name="profession">
                            <option value="Etudiant">Profession</option>
                            <option value="Etudiant">Etudiant(e)</option>
                            <option value="Stagiaire">Stagiaire</option>
                            <option value="Touriste">Touriste</option>
                            <option value="Autre">Autre</option>
                        </select>
                        <span class="Err" id="ErrCode"> <?=$variables["errors"]["profession"] ?? ""?> </span>
                    </div>


                    <div class=" form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <p for="accepte" id="accepte" name="accepte">Accepter les conditions | <a href="index.php?action=Login" style="color:#002A8B ;">J'ai un compte</a> </p>
                        <div class="invalid-feedback">Veuillez Cocher ce case</div>

                    </div>
                    <button class="btn btn-warning text-dark mb-5" type="submit" value="Register">S'inscrire <i class="fas fa-sign-in-alt"></i></button>

                </form>
            </div>
<!--
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
            -->


        </div>
    </div>

</body>