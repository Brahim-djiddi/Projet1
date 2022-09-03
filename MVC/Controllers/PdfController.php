<?php
use Classes\generatePDF;

function Fiche_admission(){
    if(is_admin($_SESSION["CodeP"])) $_SESSION["allow_demande"] ="yes";
    if(isset($_SESSION["allow_demande"])  ) {
    $CodeP="etudiant";
    $demande=$_GET["demande"] ?? "Demande_Etude";
    //$_SESSION[$demande] = $demande ;
    $_SESSION["Demande"]=$demande;
    $Student=[
       /*  
        '1' =>''  ,'2' =>''  ,'3' =>''  ,'4' =>''  ,'5' =>''  ,'Filière' =>''  ,'Etablissement' =>''  ,  'Boursier' =>''  ,
        'Nonboursier' =>''  ,'Noms' =>''  ,'Prénoms' =>''  ,'Date_et_lieu_de_naissance' => ''  ,'Nationalité' =>''  ,'N_CNI_ou_Passeport' => ''  ,
        'Code_postal' =>''  ,'Ville' =>''  ,'Pays' =>''  ,'Téléphone' =>''  ,'GSM' =>''  ,'Email' =>''  ,'Série_du_baccalauréat' =>''  ,'Noms_2' =>''  ,
        'Prénoms_2' =>''  ,'Profession' =>''  ,'Adresse_2' =>''  ,'Code_postal_2' =>''  ,'Ville_2' =>''  ,'Pays_2' =>''  ,'Téléphone_2' =>''  ,
        'GSM_2' =>''  ,'Email_2' =>''  ,'Père' =>''  ,'Mère' =>''  ,'Tuteur' =>''  ,'Maroc' =>''  ,'Tunisie' =>''  ,'Sénégal' =>''  ,'Afrique_du_Sud' =>''  ,
        'Rwanda' =>''  ,'Turquie' =>''  ,'Dubaï' =>''  ,'France' =>''  ,'Je_mengage_sur_lhonneur_à_me_soumettre_au_rêglement_intérieur_de' =>''  ,
        'Par_virement_bancaire_sur_le_RIB_de_létablissement' =>''  , 'Code_Swift' =>''  , 'Bénéficiaire' =>''  , 'Nom_et_prénom' =>''  , 
        'Téléphone_3' =>''  ,  'Dossier_complété_le' =>''  ,'Inscription_effectuée_par' =>''  ,
 */
    ];
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $data=[
            'Annee_Universitaire' => $_POST["Annee_univer"] ?? '',
            '1' => $_POST["1"] ?? '','2' => $_POST["2"] ?? '','3' => $_POST["3"] ?? '', 
            '4' => $_POST["4"] ?? '', '5' => $_POST["5"] ?? '', 'Filière' => $_POST["filiere"] ?? '',               
            'Etablissement' => ($_POST["etablissement"]) ?? '','Boursier' => $_POST["Boursier"] ?? '',
            'Nonboursier' => $_POST["Nonboursier"] ?? '','Demande_de_stage' => $_POST["stage"] ?? ''
            
            ,'Noms' => $_POST["nomE"] ?? '',                
            'Prénoms' => $_POST["prenomE"] ?? '','Date_et_lieu_de_naissance' => $_POST["dateN"] ?? '',
            'Nationalité' => $_POST["nationalite"] ?? '', 'N_CNI_ou_Passeport' => $_POST["CNI"] ?? '',
            'Adresse' => $_POST["apE"] ?? '', 'Code_postal' => $_POST["cpE"] ?? '', 'Ville' => $_POST["villeE"] ?? '',
            'Pays' => $_POST["paysE"] ?? '', 'Téléphone' => $_POST["numeroE"] ?? '', 'GSM' => $_POST["gsmE"] ?? '',
            'Email' => $_POST["emailE"] ?? '', 'Série_du_baccalauréat' => $_POST["serie"] ?? ''
            
            , 'Noms_2' => $_POST["nomP"] ?? '',
            'Prénoms_2' => $_POST["prenomP"] ?? '', 'Profession' => $_POST["profession"] ?? '', 'Adresse_2' => $_POST["adP"] ?? '',
            'Code_postal_2' => $_POST["cpP"] ?? '', 'Ville_2' => $_POST["villeP"] ?? '', 'Pays_2' => $_POST["paysP"] ?? '',
            'Téléphone_2' => $_POST["numeroP"] ?? '', 'GSM_2' => $_POST["gsmP"] ?? '', 'Email_2' => $_POST["emailP"] ?? '',

            'Père' => $_POST["father"] ?? '', 'Mère' => $_POST["mother"] ?? '', 'Tuteur' => $_POST["tutor"] ?? '','Indépendante' => $_POST["Indépendante"] ?? '',
            'Maroc' => $_POST["Maroc"] ?? '', 'Tunisie' => $_POST["Tunisie"] ?? '', 'Sénégal' => $_POST["Sénégal"] ?? '',
            'Afrique_du_Sud' => $_POST["Afrique_du_Sud"] ?? '', 'Rwanda' => $_POST["Rwanda"] ?? '', 'Turquie' => $_POST["Turquie"] ?? '',
            'Dubaï' => $_POST["Dubaï"] ?? '', 'France' => $_POST["France"] ?? '',

            /* 'Je_mengage_sur_lhonneur_à_me_soumettre_au_rêglement_intérieur_de' => $_POST["honeur"] ?? '',                
            'Par_virement_bancaire_sur_le_RIB_de_létablissement' => $_POST["RIB"] ?? '',  'Code_Swift' => $_POST["Code_Swift"] ?? '', 
            'Bénéficiaire' => $_POST["Benef"] ?? '',  'Nom_et_prénom' => $_POST["Nom_Prenom"] ?? '', 
            'Téléphone_3' => $_POST["phone3"] ?? '',   'Dossier_complété_le' => $_POST["Dossier_complété_le"] ?? '',
            'Inscription_effectuée_par' => $_POST["Inscription_effectuée_par"] ?? '', */
        ];

        if(isset($_POST["annee"])){
            if($_POST["annee"]=="1") $data['1']="X";
            elseif($_POST["annee"]=="2") $data['2']="X";
            elseif($_POST["annee"]=="3") $data['3']="X";
            elseif($_POST["annee"]=="4") $data['4']="X";
            elseif($_POST["annee"]=="5") $data['5']="X"; 
        }

        if(isset($_POST["bourse"])){
            if($_POST["bourse"]=="Oui") $data['Boursier']="X";
            elseif($_POST["bourse"]=="Non") $data['Nonboursier']="X";
            elseif($_POST["bourse"]=="stage") $data['Demande_de_stage']="X";
        }

        if(isset($_POST["role"])){
            if($_POST["role"]=="Pere") $data['Père']="X";
            elseif($_POST["role"]=="Mere") $data['Mère']="X";
            elseif($_POST["role"]=="Tuteur") $data['Tuteur']="X"; 
            elseif($_POST["role"]=="Indépendante") $data['Indépendante']="X"; 
            
        }
        
        if(isset($_POST["destination"])){
            if($_POST["destination"]=="Maroc") $data['Maroc']="X";
            elseif($_POST["destination"]=="Tunisie") $data['Tunisie']="X";
            elseif($_POST["destination"]=="Sénégal") $data['Sénégal']="X";
            elseif($_POST["destination"]=="Afrique_du_Sud") $data['Afrique_du_Sud']="X";
            elseif($_POST["destination"]=="Rwanda") $data['Rwanda']="X"; 
            elseif($_POST["destination"]=="Turquie") $data['Turquie']="X";
            elseif($_POST["destination"]=="Dubaï") $data['Dubaï']="X";
            elseif($_POST["destination"]=="France") $data['France']="X";
            //elseif($_POST["destination"]=="Autre") $data['Autre']="X";
        }
        /* $data['Group_Bourse']="X"; */

        /* if(empty($data["Filière"]))         $errors["Filière"] = "La filière ne peut pas être vide !";
        if(empty($data["Etablissement"]))          $errors["Etablissement"]    ="L'établissement ne peut pas être vide !"   ;
		if(empty($data["Noms"]))              $errors["Noms"] ="Le nom ne peut pas être vide !" ;
        if(empty($data["Prénoms"]))              $errors["Prénoms"] ="Le Prénoms ne peut pas être vide !" ;
        if(empty($data["Date_et_lieu_de_naissance"]))              $errors["Date_et_lieu_de_naissance"] ="Date et lieu de naissance ne peut pas être vide !" ;
        if(empty($data["Nationalité"]))              $errors["Nationalité"] ="Veuillez indiquer votre nationalité !" ;
        if(empty($data["N_CNI_ou_Passeport"]))              $errors["N_CNI_ou_Passeport"] ="Ce champs est obligatoire!" ;
        if(empty($data["Adresse"]))              $errors["Adresse"] ="Ce champs est obligatoire!" ;
        if(empty($data["Code_postal"]))              $errors["Code_postal"] ="Ce champs est obligatoire!" ;
        if(empty($data["Ville"]))              $errors["Ville"] ="Ce champs est obligatoire!" ;
        if(empty($data["Pays"]))              $errors["Pays"] ="Ce champs est obligatoire!" ;
        if(empty($data["Téléphone"]))          $errors["Téléphone"] = "Le Telephone ne peut pas être vide !";
        //if(empty($data["GSM"]))          $errors["GSM"] = "Le Telephone ne peut pas être vide !";
        if(empty($data["Email"]))          $errors["Email"] = "Le Telephone ne peut pas être vide !";
        if(empty($data["Série_du_baccalauréat"]))          $errors["Série_du_baccalauréat"] = "Le Telephone ne peut pas être vide !";
        if(empty($data["Noms_2"]))              $errors["Noms_2"] ="Le nom ne peut pas être vide !" ;
        if(empty($data["Prénoms_2"]))              $errors["Prénoms_2"] ="Le Prénoms ne peut pas être vide !" ;
        if(empty($data["Profession"]))              $errors["Profession"] ="Date et lieu de naissance ne peut pas être vide !" ;
        if(empty($data["Adresse_2"]))              $errors["Adresse_2"] ="Ce champs est obligatoire!" ;
        if(empty($data["Code_postal_2"]))              $errors["Code_postal_2"] ="Ce champs est obligatoire!" ;
        if(empty($data["Ville_2"]))              $errors["Ville_2"] ="Ce champs est obligatoire!" ;
        if(empty($data["Pays_2"]))              $errors["Pays_2"] ="Ce champs est obligatoire!" ;
        if(empty($data["Téléphone_2"]))          $errors["Téléphone_2"] = "Le Telephone ne peut pas être vide !";
        //if(empty($data["GSM_2"]))          $errors["GSM_2"] = "Le Telephone ne peut pas être vide !";
        if(empty($data["Email_2"]))          $errors["Email_2"] = "Le Telephone ne peut pas être vide !"; */
        if(!is_numeric($_POST["cpE"])) $errors["cpE"] = "Le Code Postal doint être numérique  !";
        if(!is_numeric($_POST["cpP"])) $errors["cpP"] = "Le Code Postal doint être numérique  !";
    
         foreach($_POST as $dd => $d){
            if(empty($d)){
                $errors[$dd]="Ce champs est obligatoire!";
            }}
         

        if(!isset($errors)){
            if(Demande_Exists($_SESSION['username'],$demande)){
                $demande_info=get_demande($_SESSION["username"],$demande);
                $_SESSION["Link"]=$demande_info["Link"];
                header('Location:index.php?action=thanks&msg=exist');
            }
            else{
            $_SESSION['pdf_owner'] = $_SESSION['username'];
            $pdf = new generatePDF;
            $response = $pdf->generate($data);
            $chemin="".$response;
            $infos=[
                "owner" => $_SESSION["username"]??"inconnue",
                "type" => $demande,
                "link" => $chemin,
            ];
            add_table_pdf($_POST,$chemin);
            add_pdf($infos);
            $_SESSION["Link"]=$response;
            $_SESSION["Link"]=$response;
            //$_SESSION["Demande"]=$response;
            unset($_SESSION["allow_demande"]);
            header('Location:index.php?action=thanks');
        }
        } 
        }    
    $demande= $_GET["demande"]   ??  "Demande_Etude";    
    $variables=array("Student"=>$Student ?? "","Demande" => $demande,"errors"=>$errors ?? []);
    $vue="Views/vForm_etude.php";
    //unset($_SESSION["allow_demande"]);
    render_other($vue,$variables);
}
}




function modifier_pdf($do=true){
    if (isset($_GET["id"])){

    $id=$_GET["id"];
    $mypdf = get_pdf($id);
    $owner = $mypdf["Owner"];
    $demande = $mypdf["Type"] ?? "Demande_Etude" ;

    if(pdf_owner($_SESSION["username"],$id)){
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $data=[
                'Annee_Universitaire' => $_POST["Annee_univer"] ?? '',
                '1' => $_POST["1"] ?? '','2' => $_POST["2"] ?? '','3' => $_POST["3"] ?? '', 
                '4' => $_POST["4"] ?? '', '5' => $_POST["5"] ?? '', 'Filière' => $_POST["filiere"] ?? '',               
                'Etablissement' => ($_POST["etablissement"]) ?? '','Boursier' => $_POST["Boursier"] ?? '',
                'Nonboursier' => $_POST["Nonboursier"] ?? '','Demande_de_stage' => $_POST["stage"] ?? ''
                
                ,'Noms' => $_POST["nomE"] ?? '',                
                'Prénoms' => $_POST["prenomE"] ?? '','Date_et_lieu_de_naissance' => $_POST["dateN"] ?? '',
                'Nationalité' => $_POST["nationalite"] ?? '', 'N_CNI_ou_Passeport' => $_POST["CNI"] ?? '',
                'Adresse' => $_POST["apE"] ?? '', 'Code_postal' => $_POST["cpE"] ?? '', 'Ville' => $_POST["villeE"] ?? '',
                'Pays' => $_POST["paysE"] ?? '', 'Téléphone' => $_POST["numeroE"] ?? '', 'GSM' => $_POST["gsmE"] ?? '',
                'Email' => $_POST["emailE"] ?? '', 'Série_du_baccalauréat' => $_POST["serie"] ?? ''
                
                , 'Noms_2' => $_POST["nomP"] ?? '',
                'Prénoms_2' => $_POST["prenomP"] ?? '', 'Profession' => $_POST["profession"] ?? '', 'Adresse_2' => $_POST["adP"] ?? '',
                'Code_postal_2' => $_POST["cpP"] ?? '', 'Ville_2' => $_POST["villeP"] ?? '', 'Pays_2' => $_POST["paysP"] ?? '',
                'Téléphone_2' => $_POST["numeroP"] ?? '', 'GSM_2' => $_POST["gsmP"] ?? '', 'Email_2' => $_POST["emailP"] ?? '',
    
                'Père' => $_POST["father"] ?? '', 'Mère' => $_POST["mother"] ?? '', 'Tuteur' => $_POST["tutor"] ?? '','Indépendante' => $_POST["Indépendante"] ?? '',
                'Maroc' => $_POST["Maroc"] ?? '', 'Tunisie' => $_POST["Tunisie"] ?? '', 'Sénégal' => $_POST["Sénégal"] ?? '',
                'Afrique_du_Sud' => $_POST["Afrique_du_Sud"] ?? '', 'Rwanda' => $_POST["Rwanda"] ?? '', 'Turquie' => $_POST["Turquie"] ?? '',
                'Dubaï' => $_POST["Dubaï"] ?? '', 'France' => $_POST["France"] ?? '',
            ];
    
            if(isset($_POST["annee"])){
                if($_POST["annee"]=="1") $data['1']="X";
                elseif($_POST["annee"]=="2") $data['2']="X";
                elseif($_POST["annee"]=="3") $data['3']="X";
                elseif($_POST["annee"]=="4") $data['4']="X";
                elseif($_POST["annee"]=="5") $data['5']="X"; 
            }
    
            if(isset($_POST["bourse"])){
                if($_POST["bourse"]=="Oui") $data['Boursier']="X";
                elseif($_POST["bourse"]=="Non") $data['Nonboursier']="X";
                elseif($_POST["bourse"]=="stage") $data['Demande_de_stage']="X";
            }
    
            if(isset($_POST["role"])){
                if($_POST["role"]=="Pere") $data['Père']="X";
                elseif($_POST["role"]=="Mere") $data['Mère']="X";
                elseif($_POST["role"]=="Tuteur") $data['Tuteur']="X"; 
                elseif($_POST["role"]=="Indépendante") $data['Indépendante']="X"; 
                
            }
            
            if(isset($_POST["destination"])){
                if($_POST["destination"]=="Maroc") $data['Maroc']="X";
                elseif($_POST["destination"]=="Tunisie") $data['Tunisie']="X";
                elseif($_POST["destination"]=="Sénégal") $data['Sénégal']="X";
                elseif($_POST["destination"]=="Afrique_du_Sud") $data['Afrique_du_Sud']="X";
                elseif($_POST["destination"]=="Rwanda") $data['Rwanda']="X"; 
                elseif($_POST["destination"]=="Turquie") $data['Turquie']="X";
                elseif($_POST["destination"]=="Dubaï") $data['Dubaï']="X";
                elseif($_POST["destination"]=="France") $data['France']="X";
                //elseif($_POST["destination"]=="Autre") $data['Autre']="X";
            }
         
            if(!isset($errors)){
                $_SESSION['pdf_owner'] = $owner;
                $pdf = new generatePDF;
                $response = $pdf->generate($data);
                $chemin="".$response;
                $infos=[
                    "owner" => $owner ?? "inconnue",
                    "type" => $demande,
                    "link" => $chemin,
                ];
                
                add_table_pdf($_POST,$chemin);
                add_pdf($infos);
                $_SESSION["Link"]=$response;
                //header('Location:index.php?action=thanks');
                supprimer_pdf($id,"modification avec succée !",true);
                exit();
            
            } 
            }
        
        $Student = GetTable("pdf");
        $variables=array("Student" => $Student ??"","Demande" => $demande,"errors"=>$errors ?? []);
        $vue="Views/vForm_etude.php";
        render_other($vue,$variables);
        
    }
    }

}      

























?>