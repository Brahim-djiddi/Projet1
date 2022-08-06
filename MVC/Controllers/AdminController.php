<?php
function index2(){
    if($_SESSION["CodeP"]=="admin"){
        $view="Views/Admin/vIndex.php";
        $variables=[];
        render_other($view,$variables);
    }
    else{
        $view="Views/vIndex.php";
        $variables=[];
        render($view,$variables);
    }
}


function LoginAdmin(){
    $Logger=["email"=>"","password"=>""];
    $CodeP="admin";
    //$CodeP=$_GET["CodeP"]??"etudiant";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Logger=$_POST;
		if(empty($Logger["email"]))         $errors["email"] ="Insert a valid email or username !" ;
		if(empty($Logger["password"]))      $errors["password"]="Empty password !";
        if(!(User_Exists($Logger,$CodeP)))  $errors["connect"]="Error informations incorrect !";

        if(!isset($errors)){
            $var=GetUser($Logger["email"]);
            $_SESSION["FirstName"]=$var["FirstName"];
            $_SESSION["LastName"]=$var["LastName"];
            $_SESSION["username"]=$var["Username"];
            $_SESSION["email"]=$var["Email"];
            $_SESSION["CodeP"]=$var["Role"];
            header("location:index.php?action=index2");
        }
    }
    /////////////////////////////////////////////////////////////////////////////////////////
    $view="Views/vLogin.php";
    $variables=array("errors"=>$errors ?? [],"CodeP"=>$CodeP);
    //require("Views/BaseViews/vLogin.php");
    
    //renderWithAjax($view,$variables);
    render_other($view,$variables);
}

/* function SignupAdmin(){
    //$CodeP=$_GET["CodeP"]??"etudiant";
    $CodeP="admin";
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
            header("location:index.php?action=index2");
        }
    }
    $view="Views/vSignup.php";
    $variables=array("Logger"=>$Logger,"errors"=>$errors ?? []);
    //renderWithAjax($view,$variables);
    render($view,$variables);
} */

function AfficherAdminWithAjax(){
    //$CodeP=$_GET["CodeP"]??"AUD";
    $CodeP=$_SESSION["CodeP"]??"etudiant";
    $choix=$_REQUEST["choix"]?? "Dashboard";
    $view="Views/Admin/Aff_".$choix.".php";
    //$variables=["AFF"=>GetListe($choix),"CodeP"=>$CodeP];
    $variables=["AFF"=>GetListe($choix),"CodeP"=>$CodeP];
    //if(file_exists($view)) 
    renderWithAjax($view,$variables);
}







?>