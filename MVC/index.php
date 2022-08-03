<?php


try{

    
    session_start();

    require_once("Controllers/Controller.php");

   // if(empty($_SESSION["username"])){Login();exit();}

$action=(isset($_GET["action"]))?$_GET["action"]:"index";

//$can_pass=can_pass($action);

//if(empty($_SESSION["email"]) && $action!="Signup" && $action!="Registration" && $action!="index") {Login(); exit();}

if( (empty($_SESSION["email"]))  &&  !can_pass($action)){
    $_SESSION["cannot_pass"] = "il faut vous authenifiez pour continuer !";
    Login(); exit();
}

if(is_callable($action)){
    $action();
}

else{
    throw new Exception("ERROR ON action : (".$action.") UNDEFINED");
}

}
catch(Exception $e){
    $view="Views/vError.php";
    $variables=["message"=>$e->getMessage()];
    render($view,$variables);
}

?>