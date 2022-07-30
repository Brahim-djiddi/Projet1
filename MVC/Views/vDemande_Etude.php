<!DOCTYPE html>
<html>

<head>
    <title>Bootstrap Online Editor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script defer="" referrerpolicy="origin"
        src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyU2lnbiUyMFVwJTIwRm9ybSUyMGJ5JTIwQ29sb3JsaWIlMjIlMkMlMjJ4JTIyJTNBMC4xNTIzNzAwNDIwOTkzNjY1NSUyQyUyMnclMjIlM0ExNDQwJTJDJTIyaCUyMiUzQTkwMCUyQyUyMmolMjIlM0E3MTIlMkMlMjJlJTIyJTNBMTQ0MCUyQyUyMmwlMjIlM0ElMjJodHRwcyUzQSUyRiUyRmNvbG9ybGliLmNvbSUyRmV0YyUyRnJlZ2Zvcm0lMkZjb2xvcmxpYi1yZWdmb3JtLTE0JTJGJTIyJTJDJTIyciUyMiUzQSUyMiUyMiUyQyUyMmslMjIlM0EzMCUyQyUyMm4lMjIlM0ElMjJVVEYtOCUyMiUyQyUyMm8lMjIlM0EtNjAlMkMlMjJxJTIyJTNBJTVCJTVEJTdE"></script>
    <style>
        body {
            background-image: url("https://www.linkpicture.com/q/WhatsApp-Image-2022-07-27-at-9.34.17-PM.jpeg");
            color: #00205f;
            padding-left: 50px;

        }

        .admission {
            border red solid;
        }

        .pic {
            align: center;
            width: 700px;
        }

        .titre {
            background: ;
        }
    </style>

</head>

<body>
    <center><img src="https://i.imgur.com/O3XVpoG.png" style="align:center; width:700px;"></center>

    <header>
    </header><br>
    <center><strong>
            <p><span class="admission">FICHE D’ADMISSION</span></p>
        </strong></center><br>
    <label class="control-label col-sm-2 requiredField" for="date">
        Année Universitaire
    </label>
    <form name="inscription" method="post" action="index.php?action=generate">
        <div class="col-md-4">
            <input class="form-control" id="date" name="Année Universitaire" placeholder="MM/DD/YYYY" type="text">
        </div>
        </div>
        </div>
        </div>
        <br>
        <ul>

            <div class="form-check-inline">
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="1">1 ère année
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="2">2 ème année
                    </label>
                </div>
                <div class="form-check-inline ">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="3">3 ème année
                    </label>
                    <div class="form-check-inline ">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="4">4 ème année
                        </label>
                    </div>
                    <div class="form-check-inline ">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="5">5 ème année
                        </label>
                    </div>
                </div>
            </div>
        </ul>
        <div class="col-md-6">
            <label for="nationalité" class="form-label">Filière</label>
            <input type="text" name="Filière" class="form-control" id="nationalité">
        </div>
        <div class="col-md-6">
            <label for="nationalité" class="form-label">Etablissement</label>
            <input type="text" class="form-control" id="nationalité" name="Etablissement">
        </div>
        <br><br>
        <br>

        <br> <br>
        <legend>
            <h3>ESPACE RESERVE A L’ETUDIANT(E) OU STAGIAIRE</h3>
        </legend>
        <div class="container">
            <div class="d-flex justify-content-center ">

                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="Noms">
                </div>
                <div class="col-md-6">
                    <label for="nom" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="prenom" name="Prénoms">
                </div>
                <div class="col-md-12">
                    <label for="datetlieu" class="form-label">Date et lieu de naissance</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="12 march Main "
                        name="Date et lieu de naissance">
                </div>
                <div class="col-md-6">
                    <label for="nationalité" class="form-label">Nationalité</label>
                    <input type="text" class="form-control" id="nationalité" name="Nationalité">
                </div>
                <div class="col-md-6">
                    <label for="numerocni" class="form-label">N CNI ou Passport</label>
                    <input type="text" class="form-control" id="cnioupassport" name="N CNI ou Passeport">
                </div>
                <div class="col-md-12">
                    <label for="inputAddress2" class="form-label">Address </label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="1234 Main St"
                        name="address">
                </div>
                <div class="col-md-4">
                    <label for="nationalité" class="form-label">Code postal</label>
                    <input type="text" class="form-control" id="nationalité" name="CodeP">
                </div>
                <div class="col-md-4">
                    <label for="numerocni" class="form-label">Ville</label>
                    <input type="text" class="form-control" id="cnioupassport" name="city">
                </div>
                <div class="col-md-4">
                    <label for="numerocni" class="form-label">Pays</label>
                    <input type="text" class="form-control" id="cnioupassport" name="pays">
                </div>
                <div class="col-md-6">
                    <label for="telephone" class="form-label">Téléphone </label>
                    <input type="tel" class="form-control" id="tel" placeholder="" name="phone">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">GSM</label>
                    <input type="tel" class="form-control" id="inputCity" name="gsm">
                </div>

                <div class="col-md-12">
                    <label for="Email" class="form-label">Email </label>
                    <input type="email" class="form-control" id="email" placeholder="exemple@domain" name="email">
                </div>
                <div class="col-md-12">
                    <label for="serie du bac" class="form-label"> Série du baccalauréat</label>
                    <input type="email" class="form-control" id="serie du bac" placeholder="" name="bac_serie">
                </div>
                </span>

            </div>
        </div>

        </fieldset>



        <legend>
            <h3>ESPACE RESERVE AU PARENT(S) OU TUTEUR(S)</h3>
        </legend>
        <div class="container">
            <div class="d-flex justify-content-center ">

                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="last_name2">
                </div>
                <div class="col-md-6">
                    <label for="nom" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="prenom" name="first_name2">
                </div>
                <div class="col-md-12">
                    <label for="nationalité" class="form-label">Profession</label>
                    <input type="text" class="form-control" id="Profession" name="profession">
                </div>

                <div class="col-md-12">
                    <label for="inputAddress2" class="form-label">Address </label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="1234 Main St"
                        name="address2">
                </div>
                <div class="col-md-4">
                    <label for="nationalité" class="form-label">Code postal</label>
                    <input type="text" class="form-control" id="nationalité" name="CodeP2">
                </div>
                <div class="col-md-4">
                    <label for="numerocni" class="form-label">Ville</label>
                    <input type="text" class="form-control" id="cnioupassport" name="city2">
                </div>
                <div class="col-md-4">
                    <label for="pay" class="form-label">Pays</label>
                    <input type="text" class="form-control" id="cnioupassport" name="pays2">
                </div>
                <div class="col-md-6">
                    <label for="telephone" class="form-label">Téléphone </label>
                    <input type="tel" class="form-control" id="tel" placeholder="" name="phone2">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">GSM</label>
                    <input type="tel" class="form-control" id="inputCity" name="gsm2">
                </div>

                <div class="col-md-12">
                    <label for="Email" class="form-label">Email </label>
                    <input type="email" class="form-control" id="email" placeholder="exemple@domain" name="email2">
                </div>
                <div class="col-md-12">
                    <label for="serie du bac" class="form-label"> Série du baccalauréat</label>
                    <input type="email" class="form-control" id="serie du bac" placeholder="" name="father">
                </div>
                </span>

            </div>
        </div>

        </fieldset>

        <table class="table">
            <thead>
                <th scope="col">Par votre signature, vous acceptez de régler les frais de service de L’Etudiant
                    Consulting
                    s’élevant à 250€ (Euros) pour le traitement de votre dossier, votre accueille à l’aéroport de
                    Casablanca, la réservation de votre chambre ainsi que votre accompagnement tout au long de l’année.
                </th>
                </tr>
            </thead>
        </table>
        <br>
        <hr color="bue"><br>
        <table border="1" width="100%" cellspacing="0" cellpadding="6">
            <caption></caption>
            <thead>
                <tr>
                    <th width="100%"><span class="titre">
                            <h4>DOCUMENT ET PIECES A FOURNIR</h4>
                        </span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="100%">Original + copie conforme de l’attestation de réussite au baccalauréat</td>

                </tr>
                <tr>
                    <td width="100%">2 Photocopies certifiées conformes du diplôme obtenu (Année de réussite)</td>

                </tr>
                <tr>
                    <td width="100%">2 Photocopies certifiées conformes des bulletins de notes des deux dernières années
                        d’études</td>

                </tr>
                <tr>
                    <td width="100%">1 Extrait d’acte de naissance original + copie conforme</td>

                </tr>
                <tr>
                    <td width="100%">1 Photocopie du passeport et de la CNI</td>

                </tr>
                <tr>
                    <td width="100%">4 Photos d’identité</td>

                </tr>
                <tr>
                    <td width="100%">1 Extrait du casier judicaire</td>

                </tr>
                <tr>
                    <td width="100%">Billet d’avion + Autorisation de voyage délivré par l’ambassade du Maroc + carnet
                        de
                        vaccination voyage obligatoire</td>

                </tr>
            </tbody>
        </table>
        <br> <br>
        <table border="1" width="100%" cellspacing="0" cellpadding="6">
            <caption></caption>

            <fieldset>
                <legend>
                    <h3>MONTANT DE LA SCOLARITE</h3>
                </legend>

                <div class="col-md-6">
                    <label for="nom" class="form-label">Montant annuel</label>
                    <input type="text" class="form-control" id="nom" name="montant">
                </div>
                <div class="col-md-6">
                    <label for="nom" class="form-label">Frais d’inscriptions</label>
                    <input type="text" class="form-control" id="nom" name="frais_I">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea2">Observation</label>
                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="2"></textarea>
                </div>
            </fieldset>



            </tr>
            </tbody>
        </table>
        <div class="col-md-12">
            <label for="nom" class="form-label">Je m’engage sur l’honneur à me soumettre au règlement intérieur de
                l</label>
            <input type="text" class="form-control" id="nom" name="honeur">
        </div>
        <p> à assumer toutes les dispositions pouvant être prises à mon égard en cas de non-respect du règlement.
        <p>
            <br>
        <p><strong>N.B:</strong> Les frais de services de L’Etudiant Consulting ne sont pas remboursables en cas
            d’abandon
            de dossier où de changement de procédure. Une fois les 200 Euros versé, ils font intégralement partie de la
            comptabilité de LEC.</p>
        <table border="1" width="100%" cellspacing="0" cellpadding="6">
            <caption></caption>
            <thead>
                <th width="100%">MODE DE PAYEMENT AU PRES DE L’ETABLISSEMENT</th>
            </thead>
            <tbody>
                <tr>
                    <td width="100%">Original + copie conforme de l’attestation de réussite au baccalauréat</td>

                </tr>
                <tr>
                    <td width="100%">
                        <center><span class="titre"><strong>MODE DE PAYEMENT DES FRAIS DE L’ETUDIANT
                                    CONSULTING</strong></span></center>
                    </td>

                </tr>
                <tr rowspan="5">
                    <td width="100%">

                        <p>-Par dépôt ou virement bancaire <strong>UBA</strong> numéro de compte :
                            <strong>0011665983</strong><br> Nom de compte : <strong>DAGRACA YVAN CHRISTOPHER</strong>
                            <br><br>
                            -Vous pouvez choisir de le faire par <strong>MoneyGram</strong>, <strong>Western Union
                            </strong>ou par<strong> Ria transfert</strong>
                            <br>
                            Bénéficiaire : L’Etudiant Consulting Adresse : <strong>88 Rue Al hoceima, Fès 30050,
                                Maroc</strong> Nom et prénom(s) : <strong>DAGRACA Yvan Christopher</strong> Tél
                            :<strong>
                                00212 660-523877 / 00212 627-694932</strong>
                        <p>
                    </td>

                </tr>

            </tbody>
        </table>
        <p><strong>Important :</strong> Il est nécessaire de venir au Maroc avec environ <strong>832 Euros </strong>pour
            la
            Caution de votre chambre <strong>256€</strong> + Caution d’eau et d’électricité <strong>80€</strong> +
            Matelas-drap-oreiller <strong>160€ </strong>+ Argent de poche <strong>160€</strong>
        <div class="signature">
            <div class="tabll">

                <div class="col-md-12">
                    <div class="col-md-6">
                        <table border="1" width="60%" cellspacing="0" cellpadding="6">
                            <caption></caption>
                            <thead>
                                <tr>
                                    <th width="100%"><span class="titre">ESPACE RESERVE AU PARENT OU TUTEUR</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="100%"><br><br>
                                        <center><span class="signature">Date et signature, précédé de la mention lu et
                                                approuvé</span></center><br><br>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-6">
                        <div align="right">
                            <p align="center"> Par votre signature, vous déclarez avoir lu et accepté les Conditions
                                Générales d’admission
                                présentées dans ce document.<br><br>
                            <p align="center">
                                <span class="">Signature à venir de L’Etudiant Consulting</span>
                                <br><br>
                        </div>
                    </div>
                </div>
            </div>

            <table border="1" width="100%" cellspacing="0" cellpadding="6">
                <caption></caption>
                <thead>
                    <tr>
                        <th width="100%">RESERVE A L’ADMINISTRATION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="100%">
                            <div class="col-md-4">
                                <label for="name" class="form-label"> Dossier complete le</label>
                                <input type="date" class="form-control" id="date" name="email"><br>
                            </div>



                    </tr>
            </table>

            <br>
            <div class="col-md-4">
                <label for="name" class="form-label">Inscription effectuée par</label>
                <input type="text" class="form-control" id="name" name="email">
            </div>
            <div class="col-md-4">
                <label for="name" class="form-label">le</label>
                <input type="date" class="form-control" id="date" name="email">
                <button type="submit" class="form-control" >click ici</button>

            </div>
            <br><br><br><br><br><br><br>



            </tr>
            </tbody>

</body>

</html>