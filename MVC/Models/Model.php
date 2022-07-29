<?php
function OuvrirConnextion(){
    static $cn;
    if(!isset($cn)) $cn= new PDO('mysql:host=localhost:3306;dbname=guetchar','root','');
    return $cn;
}

function AddUser($t,$CodeP){
    if($CodeP!="admin"){
        if(!isset($t["gender"])){
            $t["gender"] = "homme";
        }
        $User=[$t["first_name"],$t["last_name"],$t["email"],$t["age"],md5($t["password"]),$CodeP,$t["phone"],$t["username"],$t["gender"],$t["profession"]];
        OuvrirConnextion()->prepare("INSERT INTO user (FirstName,LastName,Email,Age,Pass,Role,Phone,Username,Gender,Profession)
         VALUES (?,?,?,?,?,?,?,?,?,?)")->execute($User);
    }
}

function User_Exists(array $user,$role){
    
    $email=$user["email"];
    
    $Rq= OuvrirConnextion()->prepare("select Pass from user where Email = ? or Username = ? ");	
	$Rq->execute([$email,$email]);
    $passHash=$Rq->fetchcolumn();
    $pass=md5($user["password"]);

    $Rq1= OuvrirConnextion()->prepare("select Role from user where Email = ? or Username = ? ");	
	$Rq1->execute([$email,$email]);
    $Code=$Rq1->fetchcolumn();

	if(($passHash)==($pass) && $Code==$role) return true;
    return false;
    

    
}

function GetUser($email){
    // $email=$user["email"];
    return OuvrirConnextion()->query("SELECT * FROM  user WHERE Email='$email' or Username='$email'")->fetch();
}