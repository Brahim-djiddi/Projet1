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

// DO NOT DELETE COMMENT BELLOW !
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
    }
    elseif($choix=="equipes"){$variables=["Eq"=>getEquipes($choix),"CodeP"=>$CodeP];} 
    elseif($choix=="galleries"){$variables=["Eq"=>getEquipes($choix),"CodeP"=>$CodeP];} 
    elseif($choix=="Clients"){$variables=["AFF"=>getTable("user"),"CodeP"=>$CodeP];} 
    //elseif($choix=="gallery_plus"){$variables=["Eq"=>getEquipes("galleries"),"CodeP"=>$CodeP];} 
    
    else $variables=["AFF"=>GetListe($choix),"CodeP"=>$CodeP];

       renderWithAjax($view,$variables);
}

function supprimer_user(){
    if(isset($_GET["Username"])){
        $username=$_GET["Username"];
        delete("user","Username",$username);
        $_SESSION["success"] = "Client bien supprimer" ;
        header("Location: index.php?action=AfficherAdminWithAjax&choix=Clients");
      }
}

function ajouter_equipe(){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $data=$_POST;
        if(empty($data["nom"]))             $errors["nom"] = "Le nom ne doit pas etre vide !";
        if(empty($data["prenom"]))          $errors["prenom"] = "Le prenom ne doit pas etre vide !"   ;
		if(empty($data["titre"]))           $errors["titre"] = "Le titre ne doit pas etre vide !" ;
        if(empty($data["facebook"]))        $errors["facebook"] = "Le facebook ne doit pas etre vide !" ;                               
        if(empty($data["twitter"]))         $errors["twitter"] = "Le twitterne doit pas etre vide !"; 
        if(empty($data["instagram"]))       $errors["instagram"] = "Le numero de instagram ne doit pas etre vide !";
        if(empty($data["linkedin"]))        $errors["linkedin"] = "Le numero de linkedin ne doit pas etre vide !";
        
        if(!isset($errors)){
            CreateEquipes($data);     
            $_SESSION["success"] = "equipe bien ajouter" ;
            header("Location: index.php?action=AfficherAdminWithAjax&choix=equipes");
        }
    }
}

function ajouter_gallery(){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Updatedata=$_POST;
        //if(empty($Updatedata["titre"]))                 $errors["titre"] = "Le titre ne doit pas etre vide !" ;
       // if(empty($Updatedata["description"]))           $Updatedata["description"] = "aucun description";
        //if(empty($Updatedata["photo"]))                 $errors["photo"] = "L'image ne doit pas etre vide !" ;   ;

        if(!isset($errors)){
             CreateGallery($Updatedata);   
             $_SESSION["success"] = "image bien ajouter" ;
             header("Location: index.php?action=AfficherAdminWithAjax&choix=galleries");
             
        }
    }
}

function modifier_equipe(){

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Updatedata=$_POST;
        if(empty($Updatedata["nom"]))         $errors["nom"] = "Le nom ne doit pas etre vide !";
        if(empty($Updatedata["prenom"]))          $errors["prenom"]    ="Le prenom ne doit pas etre vide !"   ;
		if(empty($Updatedata["titre"]))              $errors["titre"] ="Le titre ne doit pas etre vide !" ;
        if(empty($Updatedata["facebook"]))                $errors["facebook"] ="Le facebook ne doit pas etre vide !" ;                               
        if(empty($Updatedata["twitter"]))           $errors["twitter"] = "Le twitterne doit pas etre vide !"; 
        if(empty($Updatedata["instagram"]))              $errors["instagram"] = "Le numero de instagram ne doit pas etre vide !";
        if(empty($Updatedata["linkedin"]))              $errors["linkedin"] = "Le numero de linkedin ne doit pas etre vide !";
   
        if(!isset($errors)){
            if(isset($Updatedata["idEq"])){
            $id=$Updatedata["idEq"];
            $nom_image = get_nom($id,"equipes",$where="idEq","Profile");
            unlink('./public/images/equipe/'.$nom_image);
            SetEquipes($Updatedata, $Updatedata["idEq"]);   
            $_SESSION["success"] = "equipe bien modifier" ;
            header("Location: index.php?action=AfficherAdminWithAjax&choix=equipes");
            }
        }
    }
}

function modifier_gallery(){

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Updatedata=$_POST;
        if(empty($Updatedata["titre"]))                 $errors["titre"] = "Le titre ne doit pas etre vide !" ;
        if(empty($Updatedata["description"]))           $Updatedata["description"] = "aucun description";
        if(!isset($Updatedata["photo"]))                 $Updatedata["photo"] = get_image_id($_POST["id"],"galleries")   ;
		
 
   
        if(!isset($errors)){
            if(isset($Updatedata["id"])){
            $idE=$Updatedata["id"];
            $nom_image = get_nom($idE);
            unlink('./public/images/gallery/'.$nom_image);
            SetGallery($Updatedata, $Updatedata["id"]);   
            $_SESSION["success"] = "image bien modifier" ;
            header("Location: index.php?action=AfficherAdminWithAjax&choix=galleries");
            }
        }
    }
}

function supprimer_equipe(){
    if(isset($_GET["supEq"])){
        $idE=$_GET["supEq"];
        $nom_image = get_nom($idE,"equipes",$where="idEq","Profile");
        unlink('./public/images/equipe/'.$nom_image);
        DeleteEquipes($idE);
        $_SESSION["success"] = "equipe bien supprimer" ;
        header("Location: index.php?action=AfficherAdminWithAjax&choix=equipes");
    }
   
}

function supprimer_gallery(){
    if(isset($_GET["supEq"])){
      $idE=$_GET["supEq"];
      $nom_image = get_nom($idE);
      unlink('./public/images/gallery/'.$nom_image);
      DeleteGallery($idE);
      $_SESSION["success"] = "image bien supprimer" ;
      header("Location: index.php?action=AfficherAdminWithAjax&choix=galleries");
    }
   
}










?>


