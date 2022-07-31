<?php
use Classes\generatePDF;
require_once('vendor/autoload.php');
require_once("Models/Model.php");
require_once("Controllers/AdminController.php");
function index(){
    $view="Views/vIndex.php";
    $variables=[];
    render($view,$variables);
}

// Actions that doesn't require Authentification (Actions auriented to Public)
function can_pass($action){
    $tab=["SignUp","LoginAdmin","index","SignUpAdmin",
    // "SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp",
    // "SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp","SignUp",
];
    foreach($tab as $t){
        if($action == $t) return true;
    }


    return false;
}

function SignUp(){
    $CodeP=$_GET["CodeP"]??"etudiant";
    $Logger=["first_name"=>"","last_name"=>"","age"=>"","username"=>"","email"=>"","phone"=>"","password"=>"","confirm_password"=>"","gender"=>"","profession"=>""];
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Logger=$_POST;
        if(empty($Logger["first_name"]))         $errors["first_name"] = "First Name is Empty !.";
        if(empty($Logger["last_name"]))          $errors["last_name"]    ="Last Name is Empty  !.."   ;
		if(empty($Logger["email"]))              $errors["email"] ="email  is Empty !..." ;
        if(empty($Logger["age"]))                $errors["age"] ="age  is Empty !..." ;
        elseif(!is_Numeric($Logger["age"]))      $errors["age"]="Age must be a number !";
		elseif($Logger["age"] < 13 or $Logger["age"] > 60)
                                                 $errors["age"]="age must be between 13 and 60";
        if(empty($Logger["username"]))             $errors["username"] = "please select a username"; 
        if(empty($Logger["phone"]))          $errors["phone"] = "phone is Empty !.";
        

		if(empty($Logger["password"]))           $errors["password"]="Please entrer a password !";
        if(empty($Logger["confirm_password"]))   $errors["confirm_password"]="Please Confirm Your Password !";
        if(($Logger["password"])!=($Logger["confirm_password"]))  
                                                 $errors["confirm_password"]="Passwords are not Identical !"; 

        if(!isset($errors)){
            AddUser($Logger,$CodeP);     
            header("location:index.php");
        }
    }
    $view="Views/vSignUp.php";
    $variables=array("Logger"=>$Logger,"errors"=>$errors ?? []);
    //renderWithAjax($view,$variables);
    render($view,$variables);
}

function Login(){
    $Logger=["email"=>"","password"=>""];
    $CodeP=$_GET["CodeP"]??"etudiant";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Logger=$_POST;
		if(empty($Logger["email"]))         $errors["email"] ="Insert a valid email or username !" ;
		if(empty($Logger["password"]))      $errors["password"]="Empty password !";
        if(!(User_Exists($Logger,$CodeP)))  $errors["connect"]="Error informations incorrect !";

        if(!isset($errors)){
            $_SESSION["email"]=$Logger["email"];
            $var=GetUser($_SESSION["email"]);
            $_SESSION["FirstName"]=$var["FirstName"];
            $_SESSION["LastName"]=$var["LastName"];
            $_SESSION["CodeP"]=$var["Role"];
            header("location:index.php");
        }
    }
    /////////////////////////////////////////////////////////////////////////////////////////
    $view="Views/vLogin.php";
    $variables=array("errors"=>$errors ?? [],"CodeP"=>$CodeP);
    //require("Views/BaseViews/vLogin.php");
    
    //renderWithAjax($view,$variables);
    render($view,$variables);
}

function Logout(){
    //$CodeP=$_GET["CodeP"]??"AUD";

	session_destroy();
	header ("location: index.php");
}

function Demande_Etude(){
    $Student=[];
    $CodeP=$_SESSION["CodeP"]??"etudiant";
    $_SESSION["Demande"]="Demande_Etude";
    $variables=array("Student"=>$Student,"Demande" => "Demande_Etude","errors"=>$errors ?? []);
    $vue="Views/vDemande_Etude.php";
    render_other($vue,$variables);
}

function Demande_Etude2(){
    $_SESSION["Demande"]="Demande_Etude";
    $CodeP=$_SESSION["CodeP"]??"etudiant";

    $Student=[
        '1' =>''  ,'2' =>''  ,'3' =>''  ,'4' =>''  ,'5' =>''  ,'Filière' =>''  ,'Etablissement' =>''  ,  'Boursier' =>''  ,
        'Nonboursier' =>''  ,'Noms' =>''  ,'Prénoms' =>''  ,'Date_et_lieu_de_naissance' => ''  ,'Nationalité' =>''  ,'N_CNI_ou_Passeport' => ''  ,
        'Code_postal' =>''  ,'Ville' =>''  ,'Pays' =>''  ,'Téléphone' =>''  ,'GSM' =>''  ,'Email' =>''  ,'Série_du_baccalauréat' =>''  ,'Noms_2' =>''  ,
        'Prénoms_2' =>''  ,'Profession' =>''  ,'Adresse_2' =>''  ,'Code_postal_2' =>''  ,'Ville_2' =>''  ,'Pays_2' =>''  ,'Téléphone_2' =>''  ,
        'GSM_2' =>''  ,'Email_2' =>''  ,'Père' =>''  ,'Mère' =>''  ,'Tuteur' =>''  ,'Maroc' =>''  ,'Tunisie' =>''  ,'Sénégal' =>''  ,'Afrique_du_Sud' =>''  ,
        'Rwanda' =>''  ,'Turquie' =>''  ,'Dubaï' =>''  ,'France' =>''  ,'Je_mengage_sur_lhonneur_à_me_soumettre_au_rêglement_intérieur_de' =>''  ,
        'Par_virement_bancaire_sur_le_RIB_de_létablissement' =>''  , 'Code_Swift' =>''  , 'Bénéficiaire' =>''  , 'Nom_et_prénom' =>''  , 
        'Téléphone_3' =>''  ,  'Dossier_complété_le' =>''  ,'Inscription_effectuée_par' =>''  ,
    ];


    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $data=[
            '1' => $_POST["1"] ?? '','2' => $_POST["2"] ?? '','3' => $_POST["3"] ?? '', 
            '4' => $_POST["4"] ?? '', '5' => $_POST["5"] ?? '', 'Filière' => $_POST["Filière"] ?? '',               
            'Etablissement' => $_POST["Etablissement"] ?? '','Boursier' => $_POST["Boursier"] ?? '',
            'Nonboursier' => $_POST["Nonboursier"] ?? '','Noms' => $_POST["Noms"] ?? '',                
            'Prénoms' => $_POST["Prénoms"] ?? '','Date_et_lieu_de_naissance' => $_POST["Date et lieu de naissance"] ?? '',
            'Nationalité' => $_POST["Nationalité"] ?? '', 'N_CNI_ou_Passeport' => $_POST["N CNI ou Passeport"] ?? '',
            'Adresse' => $_POST["address"] ?? '', 'Code_postal' => $_POST["CodeP"] ?? '', 'Ville' => $_POST["city"] ?? '',
            'Pays' => $_POST["pays"] ?? '', 'Téléphone' => $_POST["phone"] ?? '', 'GSM' => $_POST["gsm"] ?? '',
            'Email' => $_POST["email"] ?? '', 'Série_du_baccalauréat' => $_POST["bac_serie"] ?? '', 'Noms_2' => $_POST["last_name2"] ?? '',
            'Prénoms_2' => $_POST["first_name2"] ?? '', 'Profession' => $_POST["profession"] ?? '', 'Adresse_2' => $_POST["address2"] ?? '',
            'Code_postal_2' => $_POST["CodeP2"] ?? '', 'Ville_2' => $_POST["city2"] ?? '', 'Pays_2' => $_POST["pays2"] ?? '',
            'Téléphone_2' => $_POST["phone2"] ?? '', 'GSM_2' => $_POST["gsm2"] ?? '', 'Email_2' => $_POST["email2"] ?? '',
            'Père' => $_POST["father"] ?? '', 'Mère' => $_POST["mother"] ?? '', 'Tuteur' => $_POST["tutor"] ?? '',
            'Maroc' => $_POST["Maroc"] ?? '', 'Tunisie' => $_POST["Tunisie"] ?? '', 'Sénégal' => $_POST["Sénégal"] ?? '',
            'Afrique_du_Sud' => $_POST["Afrique_du_Sud"] ?? '', 'Rwanda' => $_POST["Rwanda"] ?? '', 'Turquie' => $_POST["Turquie"] ?? '',
            'Dubaï' => $_POST["Dubaï"] ?? '', 'France' => $_POST["France"] ?? '',
            'Je_mengage_sur_lhonneur_à_me_soumettre_au_rêglement_intérieur_de' => $_POST["honeur"] ?? '',                
            'Par_virement_bancaire_sur_le_RIB_de_létablissement' => $_POST["RIB"] ?? '',  'Code_Swift' => $_POST["Code_Swift"] ?? '', 
            'Bénéficiaire' => $_POST["Benef"] ?? '',  'Nom_et_prénom' => $_POST["Nom_Prenom"] ?? '', 
            'Téléphone_3' => $_POST["phone3"] ?? '',   'Dossier_complété_le' => $_POST["Dossier_complété_le"] ?? '',
            'Inscription_effectuée_par' => $_POST["Inscription_effectuée_par"] ?? '',
        ];

        if(empty($data["Filière"]))         $errors["Filière"] = "La filière ne peut pas être vide !";
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
        if(empty($data["Email_2"]))          $errors["Email_2"] = "Le Telephone ne peut pas être vide !";
    
        /* foreach($data as $d){
            if(empty($d)){
                $errors[$d]="Ce champs est obligatoire!";
            }
         */

        if(!isset($errors)){
            $pdf = new generatePDF;
            $response = $pdf->generate($data);
            $chemin="".$response;
            $infos=[
                "owner" => $_SESSION["email"]??"inconnue",
                "type" => $demande,
                "link" => $chemin,
            ];
            add_pdf($infos);
            header('Location:index.php?action=thanks&name=' . $data['Noms'] . '&link=' . $response);
        } 
        
        }
        
        
    
    
    




    
    $variables=array("Student"=>$Student,"Demande" => "Demande_Etude","errors"=>$errors ?? []);
    $vue="Views/vDemande_Etude.php";
    render_other($vue,$variables);
}

function render($vue,array $variables=array()){
    ob_start();
    require($vue);
    $view=ob_get_clean();
    require("Views/template.php");
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

function generate($demande="Demande_Etude"){

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $data=[
            'Année_Universitaire' => $_POST["Année_Universitaire"] ?? '',    //1
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
        if(isset($_POST["annee"])){
            
        }


    
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
}

function thanks(){
    $view="Views/thanks.php";
    $variables=[];
    render($view,$variables);
}

?>