<!DOCTYPE html>
<html>
<head>
     
    <title>Formulaire d'admission</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700, 900|Playfair+Display:400,900" rel="stylesheet">
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
<?php $s=$variables["Student"][0] ??[]; //$variables["Student"][0]?>
 
    <div class="container">
        <form class="needs-validation" action="" method="post" id="form-validation" novalidate>
            <!-- header, logo -->
            <section class="header site-section">
            
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <figure class="text-center"><img src="./public/images/logo.png" class="img-fluid" height="150" width="600"></figure>
                        <h5 class="text-center" style="color: #002A8B">Cabinet de conseil, d’orientation et d’accompagnement professionnel<br> pour vos études ou stages à l’étranger</h5>
                        <h4 class="  text-center mt-4"><span class="border border-danger p-2">FICHE D’ADMISSION</span></h4>
                        <h6 class="text-center mt-3">Année Universitaire: <?= Annee_Scolaire(); ?></h6>
                        <input type="hidden" name="Annee_univer" id="Annee_univer" value="<?=Annee_Scolaire();?>">
                    </div>
                </div>
            </section>

            <!-- Annee,etablissement,filiere,bourse -->

        <section class="header site-section">
     

                <div class="border border-dark p-2 mt-4">
                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-3">
                            <label class="obligatoire" for="annee">Niveau d'etude:</label>
                            <select class="form-control form-select" name="annee" id="annee"  required>
                                <option selected value="">Choisir l'année</option>
                                <option value="1" <?php $s["annee"]=$s["annee"]??"" ;if($s["annee"]=="1") echo"selected" ?> >1ère année</option>
                                <option value="2" <?php if($s["annee"]=="2") echo"selected" ?> >2ème année</option>
                                <option value="3" <?php if($s["annee"]=="3") echo"selected" ?> >3ème année</option>
                                <option value="4" <?php if($s["annee"]=="4") echo"selected" ?> >4ème année</option>
                                <option value="5" <?php if($s["annee"]=="5") echo"selected" ?> >5ème année</option>
                            </select>
                            <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["annee"] ?? ""?> </span>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <label class="obligatoire" for="filiere">Filiére:</label>
                            <select class="form-control form-select" name="filiere" id="filiere" required>

                                <option selected value=" ">Choisir la filière</option>

                                <optgroup label="Filières scientifiques">
                                    <option value="Sciences pour l’ingénieur" 
                                    <?php $s["filiere"]=$s["filiere"]??"";if($s["filiere"]=="Sciences pour l’ingénieur") echo"selected" ?>>Sciences pour l’ingénieur</option>
                                    <option value="physique chimie"
                                    <?php if($s["filiere"]=="physique chimie") echo"selected" ?>>physique chimie</option>
                                    <option value="Biologie"
                                    <?php if($s["filiere"]=="Biologie") echo"selected" ?>>Biologie</option>
                                    <option value="Agro-Alimentaire"
                                    <?php if($s["filiere"]=="Agro-Alimentaire") echo"selected" ?>>Agro-Alimentaire</option>
                                    <option value="Maths"
                                    <?php if($s["filiere"]=="Maths") echo"selected" ?>>Maths</option>
                                    <option value="Informatique"
                                    <?php if($s["filiere"]=="Informatique") echo"selected" ?>>Informatique</option>
                                    <option value="Médecine"
                                    <?php if($s["filiere"]=="Médecine") echo"selected" ?>>Médecine</option>
                                </optgroup>
                                <optgroup label="Filières littéraires">
                                    <option value="Littérature"
                                    <?php if($s["filiere"]=="Littérature") echo"selected" ?>>Littérature</option>
                                    <option value="Langues"
                                    <?php if($s["filiere"]=="Langues") echo"selected" ?>>Langues</option>
                                    <option value="Informations"
                                    <?php if($s["filiere"]=="Informations") echo"selected" ?>>Informations</option>
                                    <option value="Communication"
                                    <?php if($s["filiere"]=="Communication") echo"selected" ?>>Communication</option>
                                    <option value="Art"
                                    <?php if($s["filiere"]=="Art") echo"selected" ?>>Art</option>
                                    
                                </optgroup>
                                <optgroup label="Filières sciences humaines et sociales">
                                    <option value="Sociologie"
                                    <?php if($s["filiere"]=="Sociologie") echo"selected" ?>>Sociologie</option>
                                    <option value="Psychologie"
                                    <?php if($s["filiere"]=="Psychologie") echo"selected" ?>>Psychologie</option>
                                    <option value="Histoire"
                                    <?php if($s["filiere"]=="Histoire") echo"selected" ?>>Histoire</option>
                                    <option value="Géographie"
                                    <?php if($s["filiere"]=="Géographie") echo"selected" ?>>Géographie</option>
                                </optgroup>

                                <optgroup label="Filières économie et gestion ">
                                    <option value="Économie"
                                    <?php if($s["filiere"]=="Économie") echo"selected" ?>>Économie</option>
                                    <option value="Banque Finance Assurance"
                                    <?php if($s["filiere"]=="Banque Finance Assurance") echo"selected" ?>>Banque Finance Assurance</option>
                                    <option value="Comptabilité"
                                    <?php if($s["filiere"]=="Comptabilité") echo"selected" ?>>Comptabilité</option>
                                    <option value="Management"
                                    <?php if($s["filiere"]=="Management") echo"selected" ?>>Management</option>
                                    <option value="Marketing"
                                    <?php if($s["filiere"]=="Marketing") echo"selected" ?>>Marketing</option>
                                    <option value="Commerce International"
                                    <?php if($s["filiere"]=="Commerce International") echo"selected" ?>>Commerce International</option>
                                </optgroup>

                                <optgroup label="Filières droit ">
                                    <option value="Droit"
                                    <?php if($s["filiere"]=="Droit") echo"selected" ?>>Droit</option>
                                    <option value="Science Politiques"
                                    <?php if($s["filiere"]=="Science Politiques") echo"selected" ?>>Science Politiques</option>
                                    <option value="Relations Internationales"
                                    <?php if($s["filiere"]=="Relations Internationales") echo"selected" ?>>Relations Internationales</option>
                                </optgroup>


                                <optgroup label="">
                                    <option value="Autre"
                                    <?php if($s["filiere"]=="Autre") echo"selected" ?>>Autre</option>
                                 
                                </optgroup>
                               
                            
                            </select>
                            <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["filiere"] ?? ""?> </span>

                        </div>

                        <div class="col-lg-4 mt-3">
                            <label class="obligatoire" for="etablissement">Etablissement:</label>
                            <select class="form-control form-select" name="etablissement" id="etablissement"  required>
                                <option selected value=" ">Choisir l'etablissement</option>
                                <option value="Université public"
                                <?php $s["etablissement"]=$s["etablissement"]??"" ;if($s["etablissement"]=="Université public") echo"selected" ?>>Université public</option>
                                <option value="Université privée"
                                <?php if($s["etablissement"]=="Université privée") echo"selected" ?>>Université privée</option>
                                <option value="École public"
                                <?php if($s["etablissement"]=="École public") echo"selected" ?>>École public</option>
                                <option value="École privée"
                                <?php if($s["etablissement"]=="École privée") echo"selected" ?>>École privée</option>
                                <option value="Autre"
                                <?php if($s["etablissement"]=="Autre") echo"selected" ?>>Autre</option>    

                            </select>
                            <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["etablissement"] ?? ""?> </span>

                        </div>

                    </div>

                    <!--  row filiere/etablissement -->

                    <div class="row mt-2">
                        <div class="col-lg-4 mt-3 mb-3">
                            <label class="obligatoire" for="bourse">Bourse:</label>
                            <select class="form-control form-select" name="bourse" id="bourse" required>
                                <option selected value=" ">Vous-êtes boursier ?</option>
                                <option value="Oui"
                                <?php $s["bourse"]=$s["bourse"]??"";if($s["bourse"]=="Oui") echo"selected" ?>>oui-boursier</option>
                                <option value="Non"
                                <?php if($s["bourse"]=="Non") echo"selected" ?>>non-boursier</option>
                                <option value="stage"
                                <?php $s["bourse"] = $s["bourse"] ?? "" ; $_GET["demande"] = $_GET["demande"] ?? "" ;
                                 if($s["bourse"]=="stage" || $_GET["demande"]=="Demande_Stage") echo"selected" ?>>Demande de stage</option>
                            </select>
                            <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["bourse"] ?? ""?> </span>
                        </div>
                    </div>
                </div>
           
        </section>



    <section class="site-section">
       
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
                                <label class="obligatoire" for="nomE" >Nom(s):</label>
                                <input type="text" class="form-control" name="nomE" id="nomE" placeholder="Saisir votre nom" value = '<?= $s["nomE"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["nomE"] ?? ""?> </span>
                            </div>

                            <div class="col-lg-4 mt-3">
                                <label class="obligatoire" for="prenomE">Prénom(s):</label>
                                <input type="text" class="form-control" name="prenomE" id="prenomE" placeholder="Saisir votre prénom"
                                value = '<?= $s["prenomE"] ?? "" ?>'  required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["prenomE"] ?? ""?> </span>
                            </div>

                            <div class="col-lg-4 mt-3">
                                <label class="obligatoire" for="dateN">Date de naissance:</label>
                                <input type="date" class="form-control input-prefix" name="dateN" id="dateN" 
                                value = '<?= $s["dateN"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["dateN"] ?? ""?> </span>
                               
                            </div>
                        </div>
                        <!-- row Nationalité,N° CNI ou Passeport,Adresse postale -->
                        <div class="row  p-2">
                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="nationalite">Nationalité:</label>
                                <input type="text" class="form-control" name="nationalite" id="nationalite" placeholder="Entrer votre nationalité "
                                value = '<?= $s["nationalite"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["nationalite"] ?? ""?> </span>
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="CNI">N° CNI ou Passeport:</label>
                                <input type="text" class="form-control" name="CNI" id="CNI" placeholder="N° sur votre carte Nationale(CNI) ou Passeport"
                                value = '<?= $s["CNI"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["CNI"] ?? ""?> </span>
                            </div>
                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="paysE">Pays:</label>
                                <input type="text" class="form-control" name="paysE" id="paysE" placeholder="Entrer votre pays"
                                value = '<?= $s["paysE"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["paysE"] ?? ""?> </span>
                            </div>

                        </div>



                        <!-- row pays,Ville,Numero telephone -->
                        <div class="row p-2">
                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="villeE">Ville:</label>
                                <input type="text" class="form-control" name="villeE" id="villeE" placeholder="Et la ville que où vous êtes"
                                value = '<?= $s["villeE"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["villeE"] ?? ""?> </span>
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label for="cpE">Code postal:</label>
                                <input type="number" class="form-control" name="cpE" id="cpE" placeholder="Exemple: 37000  "
                                value = '<?= $s["cpE"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["cpE"] ?? ""?> </span>
                            </div>



                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="apE">Adresse postale:</label>
                                <input type="text" class="form-control" name="apE" id="apE" placeholder="Exemple: N° rue xxx code postal ville "
                                value = '<?= $s["apE"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["apE"] ?? ""?> </span>
                            </div>

                        </div>

                        <div class="row  p-2">

                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="numeroE">Numéro téléphone:</label>
                                <input type="text" class="form-control" name="numeroE" id="numeroE" placeholder="Saisir votre numéro de téléphone"
                                value = '<?= $s["numeroE"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["numeroE"] ?? ""?> </span>
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label for="gsmE">GSM:</label>
                                <input type="text" class="form-control" name="gsmE" id="gsmE" placeholder="Entrer un GSM"
                                value = '<?= $s["gsmE"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["gsmE"] ?? ""?> </span>
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="emailE">Adresse E-mail:</label>
                                <input type="email" class="form-control" name="emailE" id="emailE" placeholder="Saisir votre adresse E-mail"
                                value = '<?= $s["emailE"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["emailE"] ?? ""?> </span>
                            </div>


                        </div>
                        <div class="row p-2">
                            <div class="col-lg-4 mt-1">
                                <label class="obligatoire" for="serie">Série du baccalauréat: </label>
                                <input type="text" class="form-control" name="serie" id="serie" placeholder="Votre série du baccalauréat "
                                value = '<?= $s["serie"] ?? "" ?>' required>
                            </div>
                        </div>
                        <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["serie"] ?? ""?> </span>

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
                                <input type="text" class="form-control" name="nomP" id="nomP" placeholder="Nom(s) du parent ou tuteur(e)"
                                value = '<?= $s["nomP"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["nomP"] ?? ""?> </span>
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="prenomP">Prénom(s):</label>
                                <input type="text" class="form-control" name="prenomP" id="prenomP" placeholder="Prénom(s) du parent ou tuteur(e)"
                                value = '<?= $s["prenomP"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["prenomP"] ?? ""?> </span>
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="profession">Profession:</label>
                                <select class="form-control form-select" name="profession" id="profession" required>
                                    <option selected value=" ">Entrer la professsion du parent</option>
                                    <option value="Fonctionnaire"
                                    <?php $s["profession"]=$s["profession"]??"";if($s["profession"]=="Fonctionnaire") echo"selected" ?>>Fonctionnaire</option>
                                    <option value="Commerçant(e)"
                                    <?php if($s["profession"]=="Commerçant(e)") echo"selected" ?>>Commerçant(e)</option>
                                    <option value="Professeur(e)"
                                    <?php if($s["profession"]=="Professeur(e)") echo"selected" ?>>Professeur(e)</option>
                                    <option value="Cultivateur"
                                    <?php if($s["profession"]=="Cultivateur") echo"selected" ?>>Cultivateur</option>
                                    <option value="Ménageur(euse)"
                                    <?php if($s["profession"]=="Ménageur(euse)") echo"selected" ?>>Ménageur(euse)</option>
                                    <option value="Militaire"
                                    <?php if($s["profession"]=="Militaire") echo"selected" ?>>Militaire</option>
                                    <option value="Autre"
                                    <?php if($s["profession"]=="Autre") echo"selected" ?>>Autre</option>
                                </select>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["profession"] ?? ""?> </span>
                            </div>
                        </div>
                        <!-- row Nationalité,N° CNI ou Passeport,Adresse postale -->
                        <div class="row p-2">

                            <div class="col-lg-4 mt-1">
                                <label class="obligatoire" for="adP">Adresse postale:</label>
                                <input type="text" class="form-control" name="adP" id="adP" placeholder="Exemple: N° rue xxx code postal ville "
                                value = '<?= $s["adP"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["adP"] ?? ""?> </span>
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label for="cpP">Code postal:</label>
                                <input type="number" class="form-control" name="cpP" id="cpP" placeholder="Exemple: 37000" 
                                value = '<?= $s["cpP"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["cpP"] ?? ""?> </span>
                            </div>
                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="emailP">Adresse E-mail:</label>
                                <input type="email" class="form-control" name="emailP" id="emailP" placeholder="S'il n'as pas saisir Adresse e-mail étudiant(e)"
                                value = '<?= $s["emailP"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["emailP"] ?? ""?> </span>
                            </div>
                        </div>



                        <!-- row pays,Ville,Numero telephone -->
                        <div class="row p-2">
                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="paysP">Pays:</label>
                                <input type="text" class="form-control" name="paysP" id="paysP" placeholder="Entrer un pays"
                                value = '<?= $s["paysP"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["paysP"] ?? ""?> </span>
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="villeP">Ville:</label>
                                <input type="text" class="form-control" name="villeP" id="villeP" placeholder="Et la ville"
                                value = '<?= $s["villeP"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["villeP"] ?? ""?> </span>
                            </div>

                            <div class="col-lg-4 mt-2">
                                <label class="obligatoire" for="numeroP">Numéro téléphone:</label>
                                <input type="text" class="form-control" name="numeroP" id="numeroP" placeholder="Numéro de téléphone du parent ou tuteur(e)"
                                value = '<?= $s["numeroP"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["numeroP"] ?? ""?> </span>
                            </div>
                        </div>
                        <!-- row GSM,E-mail,Série du baccalauréat -->
                        <div class="row p-2">

                            <div class="col-lg-4 mt-2">
                                <label for="gsmP">GSM:</label>
                                <input type="text" class="form-control" name="gsmP" id="gsmP" placeholder="Entrer un GSM du parent"
                                value = '<?= $s["gsmP"] ?? "" ?>' required>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["gsmP"] ?? ""?> </span>
                            </div>



                            <div class="col-lg-4 mt-2 mb-3">
                                <label class="obligatoire" for="role">Rôle du parent:</label>
                                <select class="form-control form-select" name="role" id="role" aria-label="Default select example" required>

                                    <option value="Pere"
                                    <?php $s["role"]=$s["role"]??"";if($s["role"]=="Pere") echo"selected" ?>>Père</option>
                                    <option value="Mere"
                                    <?php if($s["role"]=="Mere") echo"selected" ?>> Mère</option>
                                    <option value="Tuteur"
                                    <?php if($s["role"]=="Tuteur") echo"selected" ?>>Tuteur(rice)</option>
                                    <option value="Indépendante"
                                    <?php if($s["role"]=="Indépendante") echo"selected" ?>>Indépendant(e)</option>
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
                                    <option  value="choisir">Choisir la destination souhaitée</option>
                                    <option value="Maroc"
                                    <?php $s["destination"]=$s["destination"]??"";if($s["destination"]=="Maroc") echo"selected" ?>>Maroc</option>
                                    <option value="Tunisie" 
                                    <?php if($s["destination"]=="Tunisie") echo"selected" ?>>Tunisie</option>
                                    <option value="Sénégal" 
                                    <?php if($s["destination"]=="Sénégal") echo"selected" ?>>Sénégal</option>
                                    <option value="Afrique_du_Sud"
                                    <?php if($s["destination"]=="Afrique_du_Sud") echo"selected" ?>>Afrique du Sud</option>
                                    <option value="Rwanda" 
                                    <?php if($s["destination"]=="Rwanda") echo"selected" ?>>Rwanda</option>
                                    <option value="Turquie" 
                                    <?php if($s["destination"]=="Turquie") echo"selected" ?>>Turquie</option>
                                    <option value="Dubaï" 
                                    <?php if($s["destination"]=="Dubaï") echo"selected" ?>>Dubaï</option>
                                    <option value="France"
                                    <?php if($s["destination"]=="France") echo"selected" ?>>France</option>
                                    <option vaalue="Autre"
                                    <?php if($s["destination"]=="Autre") echo"selected" ?>>Autre</option>
                                </select>
                                <span class="Err text-danger" id="ErrCode"> <?=$variables["errors"]["destination"] ?? ""?> </span>
                            </div>

                        </div>


                    </div>

    </section>

    <section class="site-section">
     
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
                            <div id="overlayer"></div>
  


                    </div> <input class="btn btn-success btn-md" type="submit" value="Je valide">

                    <!-- preload
                        <div id="overlayer"></div>
                            <div class="loader">
                                <div class="spinner-border text-primary" role="status">
                                <span class="sr-only">Chargement...</span>
                                </div>
                            </div> -->

        
                </div>

            </div>
       
    </section>
    <?php// var_dump($variables["errors"]) ?>
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


