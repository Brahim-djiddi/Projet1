<?php

use Classes\generatePDF;
require_once('vendor/autoload.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $data=[
        'Année Universitaire' => $_POST["Année Universitaire"] ?? '',    //1
        '1' => $_POST["1"] ?? '',
        '2' => $_POST["2"] ?? '',
        '3' => $_POST["3"] ?? '',
        '4' => $_POST["4"] ?? '',
        '5' => $_POST["5"] ?? '',
        'Filière' => $_POST["Filière"] ?? '',               
        'Etablissement' => $_POST["Etablissement"] ?? '',  
        'Boursier' => $_POST["Boursier"] ?? '',
        'Nonboursier' => $_POST["Nonboursier"] ?? '',       
        'Noms' => $_POST["Noms"] ?? '',                
        'Prénoms' => $_POST["Prénoms"] ?? '',                
        'Date et lieu de naissance' => $_POST["Date et lieu de naissance"] ?? '',
        'Nationalité' => $_POST["Nationalité"] ?? '',
        'N CNI ou Passeport' => $_POST["N CNI ou Passeport"] ?? '',
        'Adresse' => $_POST["address"] ?? '',
        'Code postal' => $_POST["CodeP"] ?? '',
        'Ville' => $_POST["city"] ?? '',
        'Pays' => $_POST["pays"] ?? '',
        'Téléphone' => $_POST["phone"] ?? '',
        'GSM' => $_POST["gsm"] ?? '',
        'Email' => $_POST["email"] ?? '',
        'Série du baccalauréat' => $_POST["bac_serie"] ?? '',
        'Noms_2' => $_POST["last_name2"] ?? '',
        'Prénoms_2' => $_POST["first_name2"] ?? '',
        'Profession' => $_POST["profession"] ?? '',
        'Adresse_2' => $_POST["address2"] ?? '',
        'Code postal_2' => $_POST["CodeP2"] ?? '',
        'Ville_2' => $_POST["city2"] ?? '',
        'Pays_2' => $_POST["pays2"] ?? '',
        'Téléphone_2' => $_POST["phone2"] ?? '',
        'GSM_2' => $_POST["gsm2"] ?? '',
        'Email_2' => $_POST["email2"] ?? '',
        'Père' => $_POST["father"] ?? '',
        'Mère' => $_POST["mother"] ?? '',
        'Tuteur' => $_POST["tutor"] ?? '',
        'Montant annuel' => $_POST["montant"] ?? '',
        'Frais dinscriptions' => $_POST["frais_I"] ?? '',
        'Observation 1' => $_POST["obs1"] ?? '',
        'Je mengage sur lhonneur à me soumettre au rêglement intérieur de' => $_POST["honeur"] ?? '',                
        'Par virement bancaire sur le RIB de létablissement' => $_POST["RIB"] ?? '', 
        'Code Swift' => $_POST["Code_Swift"] ?? '', 
        'Bénéficiaire' => $_POST["Benef"] ?? '', 
        'Nom et prénom' => $_POST["Nom_Prenom"] ?? '', 
        'Téléphone_3' => $_POST["phone3"] ?? '',  
    ];


$pdf = new generatePDF;
$response = $pdf->generate($data);

//var_dump($response);
header('Location: thanks.php?name=' . $data['name_field'] . '&link=' . $response);

}





