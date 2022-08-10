<?php
function Send_Mail(){

    $Logger=["nom"=>"","prenom"=>"","email"=>"","message"=>""];
    $min=13;$max=60;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $Logger=$_POST;

        if(empty($Logger["nom"]))               $errors["nom"] = "Le nom ne doit pas etre vide !";
        if(empty($Logger["prenom"]))            $errors["prenom"]    ="Le prenom ne doit pas etre vide !"   ;
		if(empty($Logger["email"]))             $errors["email"] ="L'email ne doit pas etre vide !" ;
        if(empty($Logger["message"]))           $errors["message"] ="Le message ne doit pas etre vide !" ; 

    

        if(!isset($errors)){
            $_SESSION["success"]="votre email a bien ete envoyer !";
            $to="houssam_sugar@hotmail.com";
            $subject="testing main function";
            $message=$Logger["message"];
            $from=$Logger["email"];

            mail($to,$subject,$message);
            header("location:index.php#contact-section");
            
        }

    }
    if(isset($errors)){ $_SESSION["unsuccess"]="votre email n'a pas ete envoyer !";}
    $variables=array("Logger"=>$Logger,"errors"=>$errors ?? []);
    $_SESSION["variables"]=$variables;
    header("location:index.php#contact-section");

    /* $view="Views/vIndex.php";
    $variables=array("Logger"=>$Logger,"errors"=>$errors ?? []);
    //renderWithAjax($view,$variables);
    render($view,$variables); */
}























?>