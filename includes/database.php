<?php
require_once 'config.php';


$dns="mysql:host=".DB_HOST."; dbname=".DB_NAME;


try{
$dbc= new PDO($dns, DB_USER, DB_PASS);


}

 catch (PDOException $e){
     echo $e->getMessage();
     
 }
?>
