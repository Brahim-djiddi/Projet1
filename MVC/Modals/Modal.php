<?php
function OuvrirConnextion(){
    static $cn;
    if(!isset($cn)) $cn= new PDO('mysql:host=localhost:3306;dbname=smi2022','root','');
    return $cn;
}