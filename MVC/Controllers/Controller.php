<?php
include("Modals/Modal.php");
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

?>