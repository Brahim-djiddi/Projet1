<?php
function OuvrirConnextion(){
    static $cn;
    if(!isset($cn)) $cn= new PDO('mysql:host=localhost:3306;dbname=guetchar','root','');
    return $cn;
}

function AddUser($t,$CodeP){
    //if($CodeP!="admin"){
        if(!isset($t["gender"])){
            $t["gender"] = "homme";
        }
        $User=[$t["first_name"],$t["last_name"],$t["email"],$t["age"],md5($t["password"]),$CodeP,$t["phone"],$t["username"],$t["gender"],$t["profession"]];
        OuvrirConnextion()->prepare("INSERT INTO user (FirstName,LastName,Email,Age,Pass,Role,Phone,Username,Gender,Profession)
         VALUES (?,?,?,?,?,?,?,?,?,?)")->execute($User);
   // }
}

function UpdateUser (array $t,$CodeP){
    $User=[$t["first_name"],$t["last_name"],$t["age"],$t["phone"],$_SESSION["username"],$CodeP];
    //var_dump($e);exit;
     OuvrirConnextion()->prepare("update user set FirstName=?,LastName=?,Age=?,Phone=? where Username=? and Role=?")->execute($User);
            $var=GetUser($t["email"]);
            $_SESSION["FirstName"]=$var["FirstName"];
            $_SESSION["LastName"]=$var["LastName"];
            $_SESSION["age"]=$var["Age"];
            //$_SESSION["username"]=$var["Username"];
            //$_SESSION["email"]=$var["Email"];
            //$_SESSION["CodeP"]=$var["Role"];
}

function Logger_Exists(array $user,$role){
    
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

function add_pdf($t){
        $User=[$t["owner"],$t["type"],$t["link"]];
        OuvrirConnextion()->prepare("INSERT INTO demandes (Owner,Type,Link)
         VALUES (?,?,?)")->execute($User);

}

function GetListe($choix){
    if($choix=="Dashboard"){ return GetListeDashboard();}
    //elseif($choix=="Demande_Etude") {return GetListeDemande_Etude("Demande_Etude");}
    elseif($choix=="Client") {return GetListeClient();}
    else{
        return GetListeDemande_Etude($choix);
    }
}

function GetListeDemande_Etude($type="Demande_Etude"){
    //return OuvrirConnextion()->query("SELECT * FROM  demandes where type='$type'")->fetchall();
    $Rq= OuvrirConnextion()->prepare("select * FROM  demandes where type = ? ");	
    $Rq->execute([$type]);
    $Rq1=$Rq->fetchall();
    return $Rq1;
}

function GetListeDemandes(){
    return OuvrirConnextion()->query("select * FROM  demandes")->fetchall();	
}

function GetListeDashboard(){
    return [];
}

function GetListeClient(){
    return OuvrirConnextion()->query("SELECT * FROM  user where role='etudiant'")->fetchall();
}

function User_Exists($var,$varname="Username",$tablename="user"){

    $Rq= OuvrirConnextion()->prepare("select $varname from $tablename where $varname = ?");	
	$Rq->execute([$var]);
    //$result=$Rq;


	if($Rq->rowCount() >= 1) return true;
    else return false;    
    /* return(!empty($Rq)); */

}

function pdf_exists($username){
    $Rq= OuvrirConnextion()->prepare("select * FROM  demandes where Owner = ?");	
    $Rq->execute([$username]);

    if($Rq->rowCount() >= 1) return true;
    else return false;    
}

function GetRowCountOf($col_value="Demande_Etude",$col="type",$table="demandes"){
    /* if(isset($condition)) $w="where ".$condition; */
    $rq = OuvrirConnextion()->query("select * from $table where $col = '$col_value' ");
    $nbr=$rq->rowCount();
    return $nbr;
}

function GetTable($name){
    $Rq= OuvrirConnextion()->prepare("select * FROM  $name ");	
    $Rq1=$Rq->fetchall();
    return $Rq;
}

function Get_Pdf_Link($owner){
    $Rq= OuvrirConnextion()->prepare("select Link FROM  demandes where Owner = ? ");	
    $Rq->execute([$owner]);
    $Rq1=$Rq->fetchcolumn();
    return $Rq1;
}

