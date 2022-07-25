<?php
try{
    session_start();

    require_once("Controllers/Controller.php");

   // if(empty($_SESSION["username"])){Login();exit();}

$action=(isset($_GET["action"]))?$_GET["action"]:"index";

if(is_callable($action)){
    $action();
}

else{
    throw new Exception("ERROR ON action : (".$action.") UNDEFINED");
}

}
catch(Exception $e){
    $view="Views/vError.php";
    $varriables=["message"=>$e->getMessage()];
    render($view,$varriables);
}

?>