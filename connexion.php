


<?php


try{
    $strConnection = 'mysql:host=localhost;port=3307;dbname=Gestion_Etudiants';
    $pdo = new PDO ($strConnection,'root','');
}
catch (PDOException $e){
    $msg = 'ERREUR PDO dans' . $e->getMessage();
    die($msg);
}





?>