<?php
use Classes\generatePDF;
require_once('vendor/autoload.php');
require_once("Models/Model.php");
require_once("Controllers/AdminController.php");
function index(){
    $view="Views/vIndex.php";
    $varriables=[];
    render($view,$varriables);
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
    $varriables=array("Logger"=>$Logger,"errors"=>$errors ?? []);
    //renderWithAjax($view,$varriables);
    render($view,$varriables);
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

/*
function Demande_Etude(){
    $Student=[];
    $CodeP=$_GET["CodeP"]??"etudiant";




    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Student=$_POST;
		

        if(!isset($errors)){
            $_SESSION["email"]=$Logger["email"];
            $var=GetUser($_SESSION["email"]);
            $_SESSION["FirstName"]=$var["FirstName"];
            $_SESSION["LastName"]=$var["LastName"];
            header("location:index.php");
        }
    }



    $view="Views/vDemande_Etude.php";
    $varriables=array("Student"=>$Student,"errors"=>$errors ?? []);
    render($view,$variables);
}
*/

function Demande_Etude(){
    $Student=[];
    $CodeP=$_GET["CodeP"]??"etudiant";

    $varriables=array("Student"=>$Student,"errors"=>$errors ?? []);
    $vue="Views/vDemande_Etude.php";
    render_other($vue);
}

function render($vue,array $varriables=array()){
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

function render_other($vue,array $varriables=array()){
    require($vue);
}

function generate(){
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
    $chemin="".$response;
    $infos=[
        "owner" => $_SESSION["email"]??"inconnue",
        "type" => "Demande_Etude",
        "link" => $chemin,
    ];
    add_pdf($infos);
    //var_dump($response);
    header('Location:index.php?action=thanks&name=' . $data['name_field'] . '&link=' . $response);
    //header('Location: thanks.php?name=' . $data['name_field'] . '&link=' . $response);
    }
}

function thanks(){
    $view="Views/thanks.php";
    $varriables=[];
    render($view,$varriables);
}

?>