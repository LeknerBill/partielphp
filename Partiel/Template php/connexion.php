<?php
  //connexion à la base de données

  try{
    $bdd = new PDO('mysql:host=localhost;dbname=partielgbs3;charset=utf8','root','root');
 }catch(Exception $e){
    die('Erreur :' .$e->getMessage());
 }
 
 ?>