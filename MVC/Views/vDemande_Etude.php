<!DOCTYPE html>
<html>
<?php if(!empty($_POST["annee"])){ $_POST["annee"];}else{ "Choisir l'année";}?>
<head>
    <title>Bootstrap Online Editor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700, 900|Playfair+Display:400,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>


    <style>
        body {
            background-image: url("https://www.linkpicture.com/q/WhatsApp-Image-2022-07-27-at-9.34.17-PM.jpeg");
            color: #00205f;
        }

        /* form-control */
        .form-control {
            box-shadow: none !important;
            outline: none !important;
            border: 1px solid #cecece;
            height: 38px;
        }

        label {
            font-weight: bold;
        }

        p {
            color: #002A8B;
            font-family: Helvetica, Arial, sans-serif;
        }

        .section-info {
            background-color: #FBE5D7;
        }

        .border {
            border-radius: 2px;
        }



        label.obligatoire:after {
            content: "*";
            color: red;
        }
    </style>
</head>



<body>
    <!-- image logo -->
    <div class="container">
        <form class="needs-validation" action="" method="post" id="form-validation" novalidate>
            <!-- header, logo -->
            <section class="header site-section">
                <?php

                function Annee_Scolaire()
                {
                    $mois = date(format: "m");
                    $annee_actuelle = date(format: "Y");
                    if ($mois >= 7 && $mois <= 12) {
                        $annee1 = $annee_actuelle;
                        $annee2 = $annee_actuelle + 1;
                    } else {
                        $annee1 = $annee_actuelle - 1;
                        $annee2 = $annee_actuelle;
                    }
                    $annee_scolaire_actuelle = $annee1 . "/" . $annee2;
                    return $annee_scolaire_actuelle;
                }

                ?>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <figure class="text-center"><img src="images/logo.png" class="img-fluid" height="150" width="600"></figure>
                        <h5 class="text-center" style="color: #002A8B">Cabinet de conseil, d’orientation et d’accompagnement professionnel<br> pour vos études ou stages à l’étranger</h5>
                        <h4 class="  text-center mt-4"><span class="border border-danger p-2">FICHE D’ADMISSION</span></h4>
                        <h6 class="text-center mt-3">Année Universitaire: <?= Annee_Scolaire(); ?></h6>
                        <input type="hidden" name="Annee_univer" id="Annee_univer" value="<?=Annee_Scolaire();?>">
                    </div>
                </div>
            </section>

            <!-- Annee,etablissement,filiere,bourse -->

        <section class="header site-section">
            <div class="container">

                <div class="border border-dark p-2 mt-4">
                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-3">
                            <label class="obligatoire" for="annee">Niveau d'etude:</label>
                            <select class="form-control form-select" name="annee" id="annee" required>
                                <option selected value=" ">Choisir l'année</option>
                                <option value="1">1ère année</option>
                                <option value="2">2ème année</option>
                                <option value="3">3ème année</option>
                                <option value="4">4ème année</option>
                                <option value="5">5ème année</option>
                            </select>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <label class="obligatoire" for="filiere">Filiére:</label>
                            <select class="form-control form-select" name="filiere" id="filiere" required>

                                <option selected value=" ">Choisir la filière</option>

                                <optgroup label="Filières scientifiques">
                                    <option value="Sciences pour l’ingénieur">Sciences pour l’ingénieur</option>
                                    <option value="physique chimie">physique chimie</option>
                                    <option value="Biologie">Biologie</option>
                                    <option value="Agro-Alimentaire">Agro-Alimentaire</option>
                                    <option value="Maths">Maths</option>
                                    <option value="Informatique">Informatique</option>
                                    <option value="Médecine">Médecine</option>
                                </optgroup>
                                <optgroup label="Filières littéraires">
                                    <option value="Littérature">Littérature</option>
                                    <option value="Langues">Langues</option>
                                    <option value="Informations">Informations</option>
                                    <option value="Communication">Communication</option>
                                    <option value="Art">Art</option>
                                    
                                </optgroup>
                                <optgroup label="Filières sciences humaines et sociales">
                                    <option value="Sociologie">Sociologie</option>
                                    <option value="Psychologie">Psychologie</option>
                                    <option value="Histoire">Histoire</option>
                                    <option value="Géographie">Géographie</option>
                                </optgroup>

                                <optgroup label="Filières économie et gestion ">
                                    <option value="Économie">Économie</option>
                                    <option value="Banque Finance Assurance">Banque Finance Assurance</option>
                                    <option value="Comptabilité">Comptabilité</option>
                                    <option value="Management">Management</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Commerce International">Commerce International</option>
                                </optgroup>

                                <optgroup label="Filières droit ">
                                    <option value="Droit">Droit</option>
                                    <option value="Science Politiques">Science Politiques</option>
                                    <option value="Relations Internationales">Relations Internationales</option>
                                </optgroup>


                                <optgroup label="">
                                    <option value="Autre">Autre</option>
                                 
                                </optgroup>
                               
                            
                            </select>

                        </div>

                        <div class="col-lg-4 mt-3">
                            <label class="obligatoire" for="etablissement">Etablissement:</label>
                            <select class="form-control form-select" name="etablissement" id="etablissement" required>
                                <option selected value=" ">Choisir l'etablissement</option>
                                <option value="Université public">Université public</option>
                                <option value="Université privée">Université privée</option>
                                <option value="École public">École public</option>
                                <option value="École privée">École privée</option>
                                <option value="Autre">Autre</option>
                               
                              
                            </select>

                        </div>

                    </div>

                    <!--  row filiere/etablissement -->

                    <div class="row mt-2">
                        <div class="col-lg-4 mt-3 mb-3">
                            <label class="obligatoire" for="bourse">Bourse:</label>
                            <select class="form-control form-select" name="bourse" id="bourse" required>
                                <option selected value=" ">Vous-êtes boursier ?</option>
                                <option value="Oui">oui-boursier</option>
                                <option value="Non">non-boursier</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    <section class="site-section">
        <div class="container">
            <div class="row mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!--       ESPACE RESERVE A L’ETUDIANT(E) OU STAGIAIRE -->
                    <div class="border border-dark mt-3">
                        <div class="border-bottom border-dark py-1 " style="background-color:#DAE3F4">
                            <h6 class="text-center"> ESPACE RESERVE A L’ETUDIANT(E) OU STAGIAIRE</h6>
                        </div>
                        <!--    row nom,prenom,date de naissance -->
                        <div class="row p-2">
                            <div class="col-lg-4 mt-3">
                                <label class="obligatoire" for="nomE">Nom(s):</label>
                                <input type="text" class="form-control" name="nomE" id="nomE" placeholder="Saisir votre nom" required>
                            </div>

                            <div class="col-lg-4 mt-3">
                                <label class="obligatoire" for="prenomE">Prénom(s):</label>
                                <input type="text" class="form-control" name="prenomE" id="prenomE" placeholder="Saisir votre prénom" required>
                            </div>

                            <div class="col-lg-4 mt-3">
                                <label class="obligatoire" for="dateN">Date de naissance:</label>
                                <input type="date" class="form-control input-prefix" name="dateN" id="dateN"  required>
                               
                            </div>
                        </div>
                        <!-- row Nationalité,N° CNI ou Passeport,Adresse postale -->
                        <div class="row  p-2">
                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="nationalite">Nationalité:</label>
                                <input type="text" class="form-control" name="nationalite" id="nationalite" placeholder="Entrer votre nationalité " required>
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="CNI">N° CNI ou Passeport:</label>
                                <input type="text" class="form-control" name="CNI" id="CNI" placeholder="N° sur votre carte Nationale(CNI) ou Passeport" required>
                            </div>
                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="paysE">Pays:</label>
                                <input type="text" class="form-control" name="paysE" id="paysE" placeholder="Entrer votre pays" required>
                            </div>

                        </div>



                        <!-- row pays,Ville,Numero telephone -->
                        <div class="row p-2">
                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="villeE">Ville:</label>
                                <input type="text" class="form-control" name="villeE" id="villeE" placeholder="Et la ville que où vous êtes" required>
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label for="cpE">Code postal:</label>
                                <input type="number" class="form-control" name="cpE" id="cpE" placeholder="Exemple: 37000  " >
                            </div>



                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="apE">Adresse postale:</label>
                                <input type="text" class="form-control" name="apE" id="apE" placeholder="Exemple: N° rue xxx code postal ville " >
                            </div>

                        </div>

                        <div class="row  p-2">

                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="numeroE">Numéro téléphone:</label>
                                <input type="text" class="form-control" name="numeroE" id="numeroE" placeholder="Saisir votre numéro de téléphone" >
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label for="gsmE">GSM:</label>
                                <input type="text" class="form-control" name="gsmE" id="gsmE" placeholder="Entrer un GSM">
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="emailE">Adresse E-mail:</label>
                                <input type="email" class="form-control" name="emailE" id="emailE" placeholder="Saisir votre adresse E-mail" required>
                            </div>


                        </div>
                        <div class="row p-2">
                            <div class="col-lg-4 mt-1">
                                <label class="obligatoire" for="serie">Série du baccalauréat: </label>
                                <input type="text" class="form-control" name="serie" id="serie" placeholder="Votre série du baccalauréat " required>
                            </div>
                        </div>

                    </div>
                    <!--  ESPACE RESERVE AU PARENT(S) OU TUTEUR(S) -->
                    <div class="border border-dark mt-3">
                        <div class="border-bottom border-dark py-1 " style="background-color:#DAE3F4">
                            <h6 class="text-center"> ESPACE RESERVE AU PARENT(S) OU TUTEUR(ES)</h6>
                        </div>

                        <!--    row nom,prenom,date de naissance -->
                        <div class="row p-2">
                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="nomP">Nom(s):</label>
                                <input type="text" class="form-control" name="nomP" id="nomP" placeholder="Nom(s) du parent ou tuteur(e)" required>
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="prenomP">Prénom(s):</label>
                                <input type="text" class="form-control" name="prenomP" id="prenomP" placeholder="Prénom(s) du parent ou tuteur(e)" required>
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="profession">Profession:</label>
                                <select class="form-control form-select" name="profession" id="profession" required>
                                    <option selected value=" ">Entrer la professsion du parent</option>
                                    <option value="Fonctionnaire">Fonctionnaire</option>
                                    <option value="Commerçant(e">Commerçant(e)</option>
                                    <option value="Professeur(e)">Professeur(e)</option>
                                    <option value="Cultivateur">Cultivateur</option>
                                    <option value="Ménageur(euse)">Ménageur(euse)</option>
                                    <option value="Militaire">Militaire</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>
                        </div>
                        <!-- row Nationalité,N° CNI ou Passeport,Adresse postale -->
                        <div class="row p-2">

                            <div class="col-lg-4 mt-1">
                                <label class="obligatoire" for="adP">Adresse postale:</label>
                                <input type="text" class="form-control" name="adP" id="adP" placeholder="Exemple: N° rue xxx code postal ville " required>
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label for="cpP">Code postal:</label>
                                <input type="text" class="form-control" name="cpP" id="cpP" placeholder="Exemple: 37000" value=" " required>
                            </div>
                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="emailP">Adresse E-mail:</label>
                                <input type="email" class="form-control" name="emailP" id="emailP" placeholder="S'il n'as pas saisir Adresse e-mail étudiant(e)" required>
                            </div>
                        </div>



                        <!-- row pays,Ville,Numero telephone -->
                        <div class="row p-2">
                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="paysP">Pays:</label>
                                <input type="text" class="form-control" name="paysP" id="paysP" placeholder="Entrer un pays" required>
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="villeP">Ville:</label>
                                <input type="text" class="form-control" name="villeP" id="villeP" placeholder="Et la ville" required>
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="numeroP">Numéro téléphone:</label>
                                <input type="text" class="form-control" name="numeroP" id="numeroP" placeholder="Numéro de téléphone du parent ou tuteur(e)" required>
                            </div>
                        </div>
                        <!-- row GSM,E-mail,Série du baccalauréat -->
                        <div class="row p-2">

                            <div class="col-lg-4 mt-2">
                                <label for="gsmP">GSM:</label>
                                <input type="text" class="form-control" name="gsmP" id="gsmP" placeholder="Entrer un GSM du parent" required>
                            </div>



                            <div class="col-lg-4 mt-2 mb-3">
                                <label class="obligatoire" for="role">Rôle du parent:</label>
                                <select class="form-control form-select" name="role" id="role" aria-label="Default select example" required>

                                    <option value="Pere">Père</option>
                                    <option value="Mere"> Mère</option>
                                    <option value="Tuteur">Tuteur(rice)</option>
                                </select>
                            </div>
                        </div>

                    </div>


                    <!--   information sur formulaire -->
                    <div class="section-info border border-dark mt-3">
                        <p class="p-2 text-line">
                            Par votre signature, vous acceptez de régler les frais de service de <strong>L’Etudiant Consulting </strong> s’élevant à <strong>250€ (Euros)</strong> pour <ins>traitement de votre dossier</ins> , <ins>accueil à l’aéroport</ins> ,<ins>la réservation de votre chambre</ins> ainsi <ins>votre accompagnement</ins> que tout au long de l’année.
                        </p>

                    </div>
                    <div>
                        <p class="mb-3 text-danger text-center"> N°42 6ème etg bureaux Achraf av Abdelkrim Benjelloun Fès, / Fb.me/LEtudiant.Consulting / @Letudiant.consulting_officiel / <br> +212 660 523 877 / +212 627 694 932 / letudiantconsulting@gmail.com</p>
                    </div>

                    <!--  DESTINATION SOUHAITEE -->
                    <div class="border border-dark mb-5 ">
                        <div class="border-bottom border-dark py-1 " style="background-color:#DAE3F4">
                            <h6 class="text-center"> DESTINATION SOUHAITEE</h6>
                        </div>

                        <div class="row">

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 p-4">
                                <label class="obligatoire" for="destination">Destination:</label>
                                <select class="form-control form-select"  name="destination" id="destination" required>
                                    <option selected value=" ">Choisir la destination souhaitée</option>
                                    <option value="Maroc">Maroc</option>
                                    <option value="Tunisie" >Tunisie</option>
                                    <option value="Sénégal" >Sénégal</option>
                                    <option value="Afrique_du_Sud">Afrique du Sud</option>
                                    <option value="Rwanda" >Rwanda</option>
                                    <option value="Turquie" >Turquie</option>
                                    <option value="Dubaï" >Dubaï</option>
                                    <option value="France">France</option>
                                    <option vaalue="Autre">Autre</option>
                                </select>
                            </div>

                        </div>


                    </div>

    </section>

    <section class="site-section">
        <div class="container">
            <div class="row">


                <div class="col-lg-12">
                    <p><ins class="text-danger">NB:</ins> Tous les champs qui contient un (<label class="obligatoire"></label>) sont obligatoires à remplir.</p>
                    <div class="form-check">

                        <p class="form-check-label text-gray-500" for="gridCheck">
    
                            <div>
                                    <input class="form-check-input " type="checkbox" name="jaccepte" id="jaccepte" required>
                      
                                    <div class="invalid-feedback">Accepter les conditions</div>
                                </div>
                            <div class="valid-feedback">cocher cette case</div>
                            Veuillez cocher cette case afin de confirmer que vous avez lu et accepter les
                            conditions d'utilisation et des règles visées ci-dessus. Assurez vous également
                            les informations fournies sur cette page sont bien correctes enfin vous pouvez imprimer votre fiche d'admission en format pdf. En cliquant sur le bouton <b>« Je valide »</b>. votre demande sera traitée.</p>


                    </div> <input class="btn btn-success btn-md" type="submit" value="Je valide">
                </div>

            </div>
        </div>
    </section>
    </form>
    </div>

    <footer>
        <div class="mb-5">

        </div>
    </footer>
    <script>
    (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
      </script>

</body>

</html>


