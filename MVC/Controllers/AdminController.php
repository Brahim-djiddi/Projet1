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
        if(!(Logger_Exists($Logger,$CodeP)))  $errors["connect"]="Error informations incorrect !";

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

function AfficherAdminWithAjax($choix="null",$choix2="null"){
    $CodeP=$_SESSION["CodeP"]??"etudiant";
    if($choix=="null" && $choix2=="null"){
    $choix=$_REQUEST["choix"]?? "Dashboard";
    $choix2=$_REQUEST["choix2"]?? "_Etude";
    }
  
    $view="Views/Admin/Aff_".$choix.".php";
    
    if($choix=="Demande") {
        if($choix2=="All")$variables=["AFF"=>GetListeDemandes(),"CodeP"=>$CodeP];
        else 
        $variables=["AFF"=>GetListe($choix.$choix2),"CodeP"=>$CodeP];
    }elseif($choix=="equipes"){$variables=["Eq"=>getEquipes($choix),"CodeP"=>$CodeP];} 
    
    else $variables=["AFF"=>GetListe($choix),"CodeP"=>$CodeP];

       renderWithAjax($view,$variables);
}

function is_admin($CodeP){
    $data=[
        "Admin","admin",
    ];
    foreach($data as $d){
        if($d==$CodeP) return true;
    }
    return  false;
}

function supprimer_pdf($id="null",$success="Suppression avec succée !",$do=true){
    if (isset($_GET["id"]) || $id!="null"){

    if($id=='null')$id=$_GET["id"]  ;

    if(pdf_owner($_SESSION["username"],$id)){
        delete("demandes","Link",$id);
        delete("pdf","Link",$id);
        unlink('./PDFS/completed/this_year/'.$id);
        $_SESSION["success"] = $success;
        if($do) AfficherAdminWithAjax($choix="Demande",$choix2="All");
    }
    }

}



function pdf_owner($username="",$id=""){
    if( strtoupper($_SESSION["CodeP"]) =="ADMIN" ) return true;
    else{
    return true;
    }
}
?>