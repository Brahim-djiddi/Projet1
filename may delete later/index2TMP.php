<?php
try{

session_start();
require_once("Controllers/Controller.php");

//$Module=$_GET["module"]??"Interface";    
//$CodeP=$_GET["CodeP"]??"AUD";
//$role=$_GET["role"]??"Auditor";
$action=(isset($_GET["action"]))?$_GET["action"]:"index2";
$Module="Admin";





if(file_exists("Controllers/".$Module."Controller.php")) {
    require_once ("Controllers/".$Module."Controller.php");
    //if(empty($_SESSION["email"]) && $action!="Signup" && $action!="Registration" && $action!="index") {Login(); exit();}
    if(is_callable($action)){
        $action();
    }
    else{
        throw new Exception("ERROR ON action : (".$action.") UNDEFINED");
    }
    
    
    

    
}
else throw new Exception("Ce module n'est pas pris en charge!...");
}
catch(Exception $e){
    //echo"ERROR";
    
    $view="Views/BaseViews/vError.php";
    $variables=["message"=>$e->getMessage()];
    render($view,$variables);
    
}










?>