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
    if(     (is_admin($role) && !is_admin($Code))   ||      (!is_admin($role) && is_admin($Code))  ) return false ;
	if(($passHash)==($pass)) return true;
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
    $Rq= OuvrirConnextion()->query("select * FROM  $name ");	
    $Rq1=$Rq->fetchall();
    return $Rq1;
}


function Get_Pdf_Link($owner){
    $Rq= OuvrirConnextion()->prepare("select Link FROM  demandes where Owner = ? ");	
    $Rq->execute([$owner]);
    $Rq1=$Rq->fetchcolumn();
    return $Rq1;
}

function get_demande($owner,$demande="Demande_Etude"){
    $Rq= OuvrirConnextion()->prepare("select * FROM  demandes where Owner = ? and Type = ? ");	
    $Rq->execute([$owner,$demande]);
    $Rq1=$Rq->fetch();
    return $Rq1;
}

//Get equipes
function DeleteEquipes($id){
    return OuvrirConnextion()->query("Delete from equipes where idEq='$id'");	
}
function DeleteGallery($id){
    return OuvrirConnextion()->query("Delete from galleries where id='$id'");	
}

function getEquipes($choix){
    return OuvrirConnextion()->query("select * FROM  $choix ")->fetchall();	
}

//Set equipes
function SetEquipes (array $eq, $id){
    $photo_name = time() . "_" . $_FILES['photo']['name'];
    $Liste=[$eq["nom"], $eq["prenom"],$eq["titre"], $eq["facebook"],$eq["twitter"],$eq["instagram"],$eq["linkedin"], $photo_name]; ;
    OuvrirConnextion()->prepare("update equipes set Nom=?,Prenom=?,Titre=?, Facebook=?, Twitter=?, Instagram=?, Linkedin=?, Profile=? where idEq=$id")->execute($Liste);
    move_uploaded_file($_FILES['photo']['tmp_name'], "public/images/equipe/".$photo_name);
}

//Create equipes
function CreateEquipes(array $eq){
    $photo_name = time() . "_" . $_FILES['photo']['name'];
    $Liste=[ $eq["nom"], $eq["prenom"],$eq["titre"], $eq["facebook"],$eq["twitter"],$eq["instagram"],$eq["linkedin"], $photo_name ];
    OuvrirConnextion()->prepare("INSERT INTO equipes (Nom,Prenom,Titre,Facebook,Twitter,Instagram,Linkedin,Profile) VALUES (?,?,?,?,?,?,?,?)")->execute($Liste);
    move_uploaded_file($_FILES['photo']['tmp_name'], "public/images/equipe/".$photo_name);
}

function CreateGallery(array $eq){
    $photo_name = time() . "_" . $_FILES['photo']['name'];
    $Liste=[$eq["titre"], $eq["description"], $photo_name]; ;
    move_uploaded_file($_FILES['photo']['tmp_name'], "public/images/gallery/".$photo_name); 
    OuvrirConnextion()->prepare("insert into Galleries (titre,description,image) values(?,?,?) ")->execute($Liste);

}

function SetGallery (array $eq, $id){
    $photo_name = time() . "_" . $_FILES['photo']['name'];
    $Liste=[$eq["titre"], $eq["description"], $photo_name];
    if(isset($eq["modifier"])){
       return OuvrirConnextion()->prepare("update galleries set titre=?,description=? where id=$id")->execute([$eq["titre"], $eq["description"]]);
    }
    else{
    
    OuvrirConnextion()->prepare("update galleries set titre=?,description=?,image=? where id=$id")->execute($Liste);
    move_uploaded_file($_FILES['photo']['tmp_name'], "public/images/gallery/".$photo_name); 
    }
}

function delete($table,$column,$value){
    
    $tab = [$value];
    //OuvrirConnextion()->exec("DELETE from demandes WHERE link='$link'");
    $Rq=OuvrirConnextion()->prepare("DELETE  from $table  WHERE $column = ? ");
    return $Rq->execute($tab);
    
}

function add_table_pdf($tab="",$link=""){
    if(!empty($tab) && !empty($link)){
        $t=[
            $link,$tab['annee'],$tab['filiere'],$tab['etablissement'],$tab['bourse'],$tab['nomE'],$tab['prenomE'],$tab['dateN'],
            $tab['nationalite'],$tab['CNI'],$tab['paysE'],$tab['villeE'],$tab['cpE'],$tab['apE'],$tab['numeroE'],$tab['gsmE'],
            $tab['emailE'],$tab['serie'],$tab['nomP'],$tab['prenomP'],$tab['profession'],$tab['adP'],$tab['cpP'],$tab['emailP'],
            $tab['paysP'],$tab['villeP'],$tab['numeroP'],$tab['gsmP'],$tab['role'],$tab['destination'],
        ];
        OuvrirConnextion()->prepare("INSERT INTO pdf 
        (Link,annee,filiere,etablissement,bourse,nomE,prenomE,dateN,nationalite,CNI,paysE,villeE,cpE,apE,numeroE,gsmE,
        emailE,serie,nomP,prenomP,profession,adP,cpP,emailP,paysP,villeP,numeroP,gsmP,role,destination)
         VALUES (?,?,?,?,?,?,?,?,?,?,   ?,?,?,?,?,?,?,?,?,?,    ?,?,?,?,?,?,?,?,?,?)")->execute($t);
    }
    
/* function get_single_demande_value_2_where($value1="",$value2="Demande_Etude",$table="demandes",$column="Owner",$where1="Link",$where2="Type"){
    $Rq=OuvrirConnextion()->prepare("select $column  from $table  WHERE $where1 = ?  and $where2 = ?");
    $Rq->execute([$value1,$value2]);
    $Rq1=$Rq->fetchcolumn();
    return $Rq1;
}  */

   

        
    
}
function get_pdf($link) 
{
    $Rq= OuvrirConnextion()->prepare("select * FROM  demandes where Link = ? ");	
    $Rq->execute([$link]);
    return $Rq->fetch();
    
}

function get_un_pdf($col,$value){
    $Rq= OuvrirConnextion()->prepare("select * FROM  demandes where $col = ? ");	
    $Rq->execute([$value]);
    return $Rq->fetchall();
}

function Demande_Exists($owner,$demande){
    $Rq= OuvrirConnextion()->prepare("select * from demandes where Owner = ? and Type = ?");	
	$Rq->execute([$owner,$demande]);
    //$result=$Rq;
	if($Rq->rowCount() >= 1) return true;
    else return false; 
}

function get_image_id($id,$table ="galleries",$column="image"){
    $Rq= OuvrirConnextion()->prepare("select $column from $table where id = ? ");	
	$Rq->execute([$id]);
    $Rq1=$Rq->fetchcolumn();
    return $Rq1;
}



function get_nom($id,$table="galleries",$where="id",$col="image"){
    $Rq = OuvrirConnextion()->prepare("select $col from $table  where $where = ? ");
    $Rq->execute([$id]);
    $Rq1=$Rq->fetchcolumn();
    return $Rq1;
}