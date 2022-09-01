<?php
require_once('vendor/autoload.php');
require_once("Models/Model.php");
require_once("Controllers/MailController.php");
require_once("Controllers/UserController.php");
require_once("Controllers/PdfController.php");
if(isset($_SESSION["CodeP"]))
{
if(is_admin($_SESSION["CodeP"])) require_once("Controllers/AdminController.php");
}

function index(){
    $view="Views/vIndex.php";
    $profil="profil";
    if(isset($_SESSION["CodeP"])) {  if($_SESSION["CodeP"]=="admin") $profil="index2" ; }
    $_SESSION["profil"]=$profil;
    $variables=['equipes' => getEquipes('equipes'),'gallery' => getEquipes('galleries')];
    render($view,$variables);
}

/* function template(){
    $view="Views/vEmpty.php";
    $variables=[];
    render($view,$variables);
} */





function thanks()
{
    $view="Views/thanks.php";
    $message1 = "Merci !" ;
    $message2 = " votre fiche d'admission est maintenant prêt !" ;
    $send = $_GET["msg"] ?? "" ;
    if($send == "exist") 
    {
        $message1 = "Attention !" ;
        $message2 = " votre fiche d'admission existe deja !" ;
    }
    
    $variables=['message1' => $message1,'message2' => $message2];
    render_other($view,$variables);
}



function pdf_owner($username,$id){
    if(is_admin($_SESSION["CodeP"])) return true;
    else{
        $pdf=Get_pdf($id);
        //$pdf_owner=get_single_demande_value_2_where($id,$pdf["Type"]);
        if(!empty($pdf)){
        if($pdf["Owner"] == $username)return true;
        }
        return false;
    }
}

function Annee_Scolaire()
{
        $mois = date(format: "m");
        $annee_actuelle = date(format: "Y");
        if ($mois >= 7 && $mois <= 12) {
            $annee1 = $annee_actuelle;
            $annee2 = $annee_actuelle + 1;
        } 
        else {
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

?>