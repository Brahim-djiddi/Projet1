<?php
use Classes\generatePDF;
require_once('vendor/autoload.php');
require_once("Models/Model.php");
require_once("Controllers/AdminController.php");
require_once("Controllers/MailController.php");
function index(){
    $view="Views/vIndex.php";
    $profil="profil";
    if(isset($_SESSION["CodeP"])) {  if($_SESSION["CodeP"]=="admin") $profil="index2" ; }
    $variables=["profil"=>$profil];
    render($view,$variables);
}

function template(){
    $view="Views/vEmpty.php";
    $variables=[];
    render($view,$variables);
}

// Actions that doesn't require Authentification (Actions auriented to Public)
function can_pass($action){
    $tab=["SignUp","LoginAdmin","index","SignUpAdmin","Login","template","send_mail",
    // "SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp",
    // "SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp",
];
    foreach($tab as $t){
        if($action == $t) return true;
    }

    return false;
}

function SignUp(){
    //$CodeP=$_GET["CodeP"]??"etudiant";
    $CodeP="etudiant";
    $Logger=["first_name"=>"","last_name"=>"","age"=>"","username"=>"","email"=>"","phone"=>"","password"=>"","confirm_password"=>"","gender"=>"","profession"=>""];
    $min=13;$max=60;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Logger=$_POST;
        if(empty($Logger["first_name"]))         $errors["first_name"] = "Le nom ne doit pas etre vide !";
        if(empty($Logger["last_name"]))          $errors["last_name"]    ="Le prenom ne doit pas etre vide !"   ;
		if(empty($Logger["email"]))              $errors["email"] ="L'email ne doit pas etre vide !" ;
        if(empty($Logger["age"]))                $errors["age"] ="L'age ne doit pas etre vide !" ;
        elseif(!is_Numeric($Logger["age"]))      $errors["age"]="L'age doit etre un nombre";
		elseif($Logger["age"] < $min or $Logger["age"] > $max)
                                                 $errors["age"]="L'age doit etre compris entre ".$min." et ".$max;
        if(empty($Logger["username"]))           $errors["username"] = "Le nom d'utilisateur ne doit pas etre vide !"; 
        if(empty($Logger["phone"]))              $errors["phone"] = "Le numero de telephone ne doit pas etre vide !";
        

		if(empty($Logger["password"]))           $errors["password"]="Veuillez entrer votre mot de passe !";
        if(empty($Logger["confirm_password"]))   $errors["confirm_password"]="Veuillez confirmer votre mot de passe !";
        if(($Logger["password"])!=($Logger["confirm_password"]))  $errors["confirm_password"]="Les mots de passe ne sont pas identique!"; 
        if(User_Exists($Logger["username"],"Username"))     $errors["username"] = "Le nom d'utilisateur existe deja !"; 
        if(User_Exists($Logger["email"],"Email"))           $errors["email"] = "L'adresse email existe deja !"; 

        if(!isset($errors)){
            AddUser($Logger,$CodeP);     
            $var=GetUser($Logger["email"]);
            $_SESSION["FirstName"]=$var["FirstName"];
            $_SESSION["LastName"]=$var["LastName"];
            $_SESSION["username"]=$var["Username"];
            $_SESSION["email"]=$var["Email"];
            $_SESSION["CodeP"]=$var["Role"];
            header("location:index.php");
            
        }
    }
    $view="Views/vSignUp.php";
    $variables=array("Logger"=>$Logger,"errors"=>$errors ?? []);
    //renderWithAjax($view,$variables);
    render_other($view,$variables);
}

function Login(){
    $Logger=["email"=>"","password"=>""];
    $CodeP="etudiant";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Logger=$_POST;
		if(empty($Logger["email"]))         $errors["email"] ="entrer un email ou nom d'utilisateur valide !" ;
		if(empty($Logger["password"]))      $errors["password"]="Veuillez entrer votre mot de passe !";
        if(!(Logger_Exists($Logger,$CodeP)))  $errors["connect"]="Les informations sont incorrectes !";

        if(!isset($errors)){
            $var=GetUser($Logger["email"]);
            $_SESSION["FirstName"]=$var["FirstName"];
            $_SESSION["LastName"]=$var["LastName"];
            $_SESSION["username"]=$var["Username"];
            $_SESSION["email"]=$var["Email"];
            $_SESSION["CodeP"]=$var["Role"];
            header("location:index.php".$_SESSION["action"]??"");
        }
    }
    /////////////////////////////////////////////////////////////////////////////////////////
    $view="Views/vLogin.php";
    $variables=array("errors"=>$errors ?? [],"CodeP"=>$CodeP);
    //require("Views/BaseViews/vLogin.php");
    
    //renderWithAjax($view,$variables);
    render_other($view,$variables);
}

function Logout(){
    //$CodeP=$_GET["CodeP"]??"AUD";

	session_destroy();
	header ("location: index.php");
}

function not_Login($action){
    $data=[
        "Login","LoginAdmin",
    ];
    foreach($data as $d){
        if($d==$action) return false;
    }
    return  true;
}

function Pre_Demande_Etude(){
    //$Student=[];
    //$CodeP=$_SESSION["CodeP"]??"etudiant";
    //$_SESSION["Demande"]="Demande_Etude";
    //$variables=array("Student"=>$Student,"Demande" => "Demande_Etude","errors"=>$errors ?? []);
    if(User_Exists($_SESSION["username"],"Owner","demandes")){

        $link=Get_Pdf_Link($_SESSION["username"]);
        $_SESSION["Demande_Etude"]=$link;
        header('Location:index.php?action=mypdf');
    }
    else{
    $variables=[];
    $vue="Views/vPre_Demande_Etude.php";
    render($vue,$variables,"_predemande");
    }
}



function Fiche_admission($demande="Demande_Etude"){
    $_SESSION["Demande"]="Demande_Etude";
    $CodeP="etudiant";

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


    // mysql_real_escape_string()
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $data=[
            'Annee_Universitaire' => $_POST["Annee_univer"] ?? '',
            '1' => $_POST["1"] ?? '','2' => $_POST["2"] ?? '','3' => $_POST["3"] ?? '', 
            '4' => $_POST["4"] ?? '', '5' => $_POST["5"] ?? '', 'Filière' => $_POST["filiere"] ?? '',               
            'Etablissement' => ($_POST["etablissement"]) ?? '','Boursier' => $_POST["Boursier"] ?? '',
            'Nonboursier' => $_POST["Nonboursier"] ?? ''
            
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

            'Père' => $_POST["father"] ?? '', 'Mère' => $_POST["mother"] ?? '', 'Tuteur' => $_POST["tutor"] ?? '',
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
        }

        if(isset($_POST["role"])){
            if($_POST["role"]=="Pere") $data['Père']="X";
            elseif($_POST["role"]=="Mere") $data['Mère']="X";
            elseif($_POST["role"]=="Tuteur") $data['Tuteur']="X"; 
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
    
        /* foreach($data as $d){
            if(empty($d)){
                $errors[$d]="Ce champs est obligatoire!";
            }
         */

        if(!isset($errors)){
            if(User_Exists($_SESSION["username"],"Owner","demandes")){

                $link=Get_Pdf_Link($_SESSION["username"]);
                $_SESSION["Demande_Etude"]=$link;
                
                header('Location:index.php?action=mypdf&link=');
            }
            else{
            $pdf = new generatePDF;
            $response = $pdf->generate($data);
            $chemin="".$response;
            $infos=[
                "owner" => $_SESSION["username"]??"inconnue",
                "type" => $demande,
                "link" => $chemin,
            ];
            add_pdf($infos);
            $_SESSION["Demande_Etude"]=$response;
            header('Location:index.php?action=thanks');
        }
        } 
        
        }
        
        
    $variables=array("Student"=>$Student,"Demande" => "Demande_Etude","errors"=>$errors ?? []);
    $vue="Views/vForm_etude.php";
    render_other($vue,$variables);
}



/* function generate($demande="Demande_Etude"){

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $data=[
            'Annee_Universitaire' => $_POST["Annee_univer"] ?? '',    //1
            // '1' => $_POST["1"] ?? '',
            // '2' => $_POST["2"] ?? '',
            // '3' => $_POST["3"] ?? '',
            // '4' => $_POST["4"] ?? '',
            // '5' => $_POST["5"] ?? '',
            'Filière' => $_POST["Filière"] ?? '',               
            'Etablissement' => $_POST["Etablissement"] ?? '',  
            'Boursier' => $_POST["Boursier"] ?? '',
            'Nonboursier' => $_POST["Nonboursier"] ?? '',       
            'Noms' => $_POST["Noms"] ?? '',                
            'Prénoms' => $_POST["Prénoms"] ?? '',                
            'Date_et_lieu_de_naissance' => $_POST["Date et lieu de naissance"] ?? '',
            'Nationalité' => $_POST["Nationalité"] ?? '',
            'N_CNI_ou_Passeport' => $_POST["N CNI ou Passeport"] ?? '',
            'Adresse' => $_POST["address"] ?? '',
            'Code_postal' => $_POST["CodeP"] ?? '',
            'Ville' => $_POST["city"] ?? '',
            'Pays' => $_POST["pays"] ?? '',
            'Téléphone' => $_POST["phone"] ?? '',
            'GSM' => $_POST["gsm"] ?? '',
            'Email' => $_POST["email"] ?? '',
            'Série_du_baccalauréat' => $_POST["bac_serie"] ?? '',
            'Noms_2' => $_POST["last_name2"] ?? '',
            'Prénoms_2' => $_POST["first_name2"] ?? '',
            'Profession' => $_POST["profession"] ?? '',
            'Adresse_2' => $_POST["address2"] ?? '',
            'Code_postal_2' => $_POST["CodeP2"] ?? '',
            'Ville_2' => $_POST["city2"] ?? '',
            'Pays_2' => $_POST["pays2"] ?? '',
            'Téléphone_2' => $_POST["phone2"] ?? '',
            'GSM_2' => $_POST["gsm2"] ?? '',
            'Email_2' => $_POST["email2"] ?? '',
            'Père' => $_POST["father"] ?? '',
            'Mère' => $_POST["mother"] ?? '',
            'Tuteur' => $_POST["tutor"] ?? '',
            //'Montant_annuel' => $_POST["montant"] ?? '',
            //'Frais_dinscriptions' => $_POST["frais_I"] ?? '',
            //'Observation 1' => $_POST["obs1"] ?? '',
            'Maroc' => $_POST["Maroc"] ?? '',
            'Tunisie' => $_POST["Tunisie"] ?? '',
            'Sénégal' => $_POST["Sénégal"] ?? '',
            'Afrique_du_Sud' => $_POST["Afrique_du_Sud"] ?? '',
            'Rwanda' => $_POST["Rwanda"] ?? '',
            'Turquie' => $_POST["Turquie"] ?? '',
            'Dubaï' => $_POST["Dubaï"] ?? '',
            'France' => $_POST["France"] ?? '',
            'Je_mengage_sur_lhonneur_à_me_soumettre_au_rêglement_intérieur_de' => $_POST["honeur"] ?? '',                
            'Par_virement_bancaire_sur_le_RIB_de_létablissement' => $_POST["RIB"] ?? '', 
            'Code_Swift' => $_POST["Code_Swift"] ?? '', 
            'Bénéficiaire' => $_POST["Benef"] ?? '', 
            'Nom_et_prénom' => $_POST["Nom_Prenom"] ?? '', 
            'Téléphone_3' => $_POST["phone3"] ?? '',  
            'Dossier_complété_le' => $_POST["Dossier_complété_le"] ?? '',
            'Inscription_effectuée_par' => $_POST["Inscription_effectuée_par"] ?? '',
        ];
        
    $pdf = new generatePDF;
    $response = $pdf->generate($data);
    $chemin="".$response;
    $infos=[
        "owner" => $_SESSION["email"]??"inconnue",
        "type" => $demande,
        "link" => $chemin,
    ];
    add_pdf($infos);
    //var_dump($response);
    header('Location:index.php?action=thanks&name=' . $data['Noms'] . '&link=' . $response);
    //header('Location: thanks.php?name=' . $data['name_field'] . '&link=' . $response);
    }
} */

function thanks(){
    $view="Views/thanks.php";
    $variables=[];
    render_other($view,$variables);
}

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


function render($vue,array $variables=array(),$n=""){
    ob_start();
    require($vue);
    $view=ob_get_clean();
    //$n=strval($n);
    require("Views/templates/template".$n.".php");
}

function rendersidebar($vue , array $variables=array(),$template="Views/BaseViews/template.php") {

	if(file_exists($vue)) {
		ob_start();
		require($vue);
		$sidebar= ob_get_clean();
		require($template);
	}
	else throw New Exception("La vue $vue n'existe pas");
}

function renderWithAjax($vue , array $variables=array()) {
	if(file_exists($vue)) {
		require($vue);
	}
	
	else throw New Exception("La vue $vue n'existe pas");
}

function render_other($vue,array $variables=array()){
    require($vue);
}

function mypdf(){
    $view="Views/mypdf.php";
    $variables=[];
    render_other($view,$variables);
}

function Profil(){
    $view="Views/vProfil.php";
    $variables=["user" => GetUser($_SESSION["email"])];
    $template="_profil";
    render($view,$variables,$template);
}

function EditProfil(){
    $min=13;$max=60;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Logger=$_POST;
        if(empty($Logger["first_name"]))         $errors["first_name"] = "Le nom ne doit pas etre vide !";
        if(empty($Logger["last_name"]))          $errors["last_name"]    ="Le prenom ne doit pas etre vide !"   ;
		if(empty($Logger["email"]))              $errors["email"] ="L'email ne doit pas etre vide !" ;
        if(empty($Logger["age"]))                $errors["age"] ="L'age ne doit pas etre vide !" ;
        elseif(!is_Numeric($Logger["age"]))      $errors["age"]="L'age doit etre un nombre";
		elseif($Logger["age"] < $min or $Logger["age"] > $max)
                                                 $errors["age"]="L'age doit etre compris entre ".$min." et ".$max;
        if(empty($Logger["username"]))           $errors["username"] = "Le nom d'utilisateur ne doit pas etre vide !"; 
        if(empty($Logger["phone"]))              $errors["phone"] = "Le numero de telephone ne doit pas etre vide !";
        

		
        if(User_Exists($Logger["username"],"Username") && $Logger["username"] !=$_SESSION["username"] )     
                                                $errors["username"] = "Le nom d'utilisateur '".$Logger["username"]."' existe deja !"; 
        
        if(User_Exists($Logger["email"],"Email") && $Logger["email"] !=$_SESSION["email"] )     
                                                $errors["username"] = "L'adresse email '".$Logger["email"]."' existe deja !";


        if(!isset($errors)){
            UpdateUser($Logger,$_SESSION["CodeP"]);     
            
            header("location:index.php?action=profil");
            
        }
    }


    $view="Views/vEditProfil.php";
    $variables=["user" => GetUser($_SESSION["email"]),"errors" => $errors ?? []];
    $template="_profil";
    render($view,$variables,$template);
}