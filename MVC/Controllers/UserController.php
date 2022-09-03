<?php

// Actions that doesn't require Authentification (Actions auriented to Public)
function can_pass($action){
    $tab = [
            "SIGNUP","LOGINADMIN","INDEX","SIGNUPADMIN","LOGIN","TEMPLATE","SEND_MAIL",
            ];
    foreach($tab as $t){
        if(strtoupper($action) == strtoupper($t)) return true;
    }

    return false;
}

function SignUp(){
    $Logger=["first_name"=>"","last_name"=>"","age"=>"","username"=>"","email"=>"","phone"=>"","password"=>"","confirm_password"=>"","gender"=>"","profession"=>""];
    $min=16;$max=100;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Logger=$_POST;
        if(empty($Logger["first_name"]))         $errors["first_name"] = "Le nom ne doit pas etre vide !";
        if(empty($Logger["last_name"]))          $errors["last_name"]    ="Le prenom ne doit pas etre vide !"   ;
		if(empty($Logger["email"]))              $errors["email"] ="L'email ne doit pas etre vide !" ;
        if(empty($Logger["age"]))                $errors["age"] ="L'age ne doit pas etre vide !" ;
        elseif(!is_Numeric($Logger["age"]))      $errors["age"]="L'age doit etre un nombre";
		elseif($Logger["age"] < $min or $Logger["age"] > $max)
                                                 $errors["age"]="L'age doit etre compris entre ".$min." et ".$max;
        if(empty($Logger["username"]))           $errors["username"] = "Le nom d'utilisateur ne doit pas etre vide !"; 
        if(empty($Logger["phone"]))              $errors["phone"] = "Le numero de telephone ne doit pas etre vide !";
        

		if(empty($Logger["password"]))           $errors["password"]="Veuillez entrer votre mot de passe !";
        if(empty($Logger["confirm_password"]))   $errors["confirm_password"]="Veuillez confirmer votre mot de passe !";
        if(($Logger["password"])!=($Logger["confirm_password"]))  $errors["confirm_password"]="Les mots de passe ne sont pas identique!"; 
        if(User_Exists($Logger["username"],"Username"))     $errors["username"] = "Le nom d'utilisateur existe deja !"; 
        if(User_Exists($Logger["email"],"Email"))           $errors["email"] = "L'adresse email existe deja !"; 

        if(!isset($errors)){
            $CodeP=$Logger["profession"] ?? "etudiant";
            AddUser($Logger,$CodeP);     
            $var=GetUser($Logger["email"]);
            $_SESSION["FirstName"]=$var["FirstName"];
            $_SESSION["LastName"]=$var["LastName"];
            $_SESSION["username"]=$var["Username"];
            $_SESSION["email"]=$var["Email"];
            $_SESSION["CodeP"]=$var["Role"];
            header("location:index.php");
            
        }
    }
    $view="Views/vSignUp.php";
    $variables=array("Logger"=>$Logger,"errors"=>$errors ?? []);
    render_other($view,$variables);
}

function Login($CodeP="Etudiant",$header="empty"){
    $SES = $_SESSION["action"] ?? "" ;;
    if($header == "empty") $header = "location:index.php".$SES;
    $Logger=["email"=>"","password"=>""];
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Logger=$_POST;
		if(empty($Logger["email"]))         $errors["email"] ="entrer un email ou nom d'utilisateur valide !" ;
		if(empty($Logger["password"]))      $errors["password"]="Veuillez entrer votre mot de passe !";
        if(!(Logger_Exists($Logger,$CodeP)))  $errors["connect"]="Les informations sont incorrectes !";

        if(!isset($errors)){
            $var=GetUser($Logger["email"]);
            $_SESSION["FirstName"]=$var["FirstName"];
            $_SESSION["LastName"]=$var["LastName"];
            $_SESSION["username"]=$var["Username"];
            $_SESSION["email"]=$var["Email"];
            $_SESSION["CodeP"]=$var["Role"];
            header($header);
        }
    }
    $view="Views/vLogin.php";
    $variables=array("errors"=>$errors ?? [],"CodeP"=>$CodeP);
    render_other($view,$variables);
}

function LoginAdmin(){
    $CodeP = "Admin";
    $header = "location:index.php?action=index2";
    Login($CodeP,$header);
}

function Logout(){
	session_destroy();
	header ("location: index.php");
}

function not_Login($action){
    $data=[
        "Login","LoginAdmin",
    ];
    foreach($data as $d){
        if(strtoupper($d) == strtoupper($action)) return false;
    }
    return  true;
}



function is_admin($CodeP){
    $data=[
        "Admin","admin","ADMIN"
    ];
    foreach($data as $d){
        
        if(strtoupper($d)==strtoupper($CodeP)) return true;
    }
    return  false;
}

function Pre_Demande(){
    $demande = $_GET["demande"] ?? "Demande_Etude";
    if($demande == 'Demande_Etude') $formulaire = 'Formulaire de demande inscription en ligne' ;
    if($demande == 'Demande_Stage') $formulaire = 'Formulaire de demande de stage' ;

    if(Demande_Exists($_SESSION['username'],$demande)){
        $demande_info=get_demande($_SESSION["username"],$demande);
        $_SESSION["Link"]=$demande_info["Link"];
        header('Location:index.php?action=thanks&msg=exist');
    }
    else{
        $_SESSION["allow_demande"] = "yes";
        $variables=["demande" => $demande ,"formulaire" => $formulaire ];
        $vue="Views/vPre_Demande.php";
        render($vue,$variables,"_predemande");
    }
}



function Profil(){
    $view="Views/vProfil.php";
    $user = GetUser($_SESSION["email"]);
    $pdf = get_un_pdf("Owner",$user["Username"]);
    $variables=["user" => $user,'pdf' => $pdf];
    $template="_profil";
    render($view,$variables,$template);
}

function EditProfil(){
    $min=13;$max=60;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Logger=$_POST;
        if(empty($Logger["first_name"]))         $errors["first_name"] = "Le nom ne doit pas etre vide !";
        if(empty($Logger["last_name"]))          $errors["last_name"]    ="Le prenom ne doit pas etre vide !"   ;
		
        if(empty($Logger["age"]))                $errors["age"] ="L'age ne doit pas etre vide !" ;
        elseif(!is_Numeric($Logger["age"]))      $errors["age"]="L'age doit etre un nombre";
		elseif($Logger["age"] < $min or $Logger["age"] > $max)
                                                 $errors["age"]="L'age doit etre compris entre ".$min." et ".$max;
        if(empty($Logger["phone"]))              $errors["phone"] = "Le numero de telephone ne doit pas etre vide !";



        /* if(empty($Logger["email"]))              $errors["email"] ="L'email ne doit pas etre vide !" ;
        if(empty($Logger["username"]))           $errors["username"] = "Le nom d'utilisateur ne doit pas etre vide !"; 
        if(User_Exists($Logger["username"],"Username") && $Logger["username"] !=$_SESSION["username"] )     
                                                $errors["username"] = "Le nom d'utilisateur '".$Logger["username"]."' existe deja !"; 
        if(User_Exists($Logger["email"],"Email") && $Logger["email"] !=$_SESSION["email"] )     
                                                $errors["username"] = "L'adresse email '".$Logger["email"]."' existe deja !"; */

        if(!isset($errors)){
            UpdateUser($Logger,$_SESSION["CodeP"]);     
            $_SESSION["success"] = "profil bien modifier" ;
            header("location:index.php?action=profil");    
        }
    }

    $view="Views/vEditProfil.php";
    $variables=["user" => GetUser($_SESSION["email"]),"errors" => $errors ?? []];
    $template="_profil";
    render($view,$variables,$template);   
}







?>