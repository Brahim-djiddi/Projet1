<?php
include("Models/Model.php");
function index(){
    $view="Views/vIndex.php";
    $varriables=[];
    render($view,$varriables);
}

function render($vue,array $varriables=array()){
    ob_start();
    require($vue);
    $view=ob_get_clean();
    require("Views/template.php");
}

function Registration(){
    $CodeP=$_GET["CodeP"]??"etudiant";
    $Logger=["first_name"=>"","last_name"=>"","age"=>"","username"=>"","email"=>"","phone"=>"","password"=>"","confirm_password"=>"","gender"=>""];
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Logger=$_POST;
        if(empty($Logger["first_name"]))         $errors["first_name"] = "First Name is Empty !.";
        if(empty($Logger["last_name"]))          $errors["last_name"]    ="Last Name is Empty  !.."   ;
		if(empty($Logger["email"]))              $errors["email"] ="email  is Empty !..." ;
        if(empty($Logger["age"]))                $errors["age"] ="Birthday  is Empty !..." ;
        elseif(!is_Numeric($Logger["age"]))      $errors["age"]="Age must be a number !!!!!";
		elseif($Logger["age"] < 13 or $Logger["age"] > 60)
                                                 $errors["age"]="age must be between 13 and 60";
        if(empty($Logger["username"]))             $errors["username"] = "please select a username"; 
        if(empty($Logger["phone"]))          $errors["phone"] = "phone is Empty !.";

		if(empty($Logger["password"]))           $errors["password"]="Please entrer a password !....";
        if(empty($Logger["confirm_password"]))   $errors["confirm_password"]="Please Confirm Your Password !.....";
        if(($Logger["password"])!=($Logger["confirm_password"]))  
                                                 $errors["confirm_password"]="Passwords are not Identical !....."; 

        if(!isset($errors)){
            AddUser($Logger,$CodeP);     
            header("location:index.php");
        }
    }
    $view="Views/Vregistration.php";
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
    $CodeP=$_GET["CodeP"]??"AUD";

	session_destroy();
	header ("location: index.php");
}

?>