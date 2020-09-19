<?php


 /*$conn=mysqli_connect('localhost','root','','attendance2') or die (mysql_error());*/
/* $conn= new PDO("mysql:host=localhost; dbname=attendance2",'root','');*/

 try{
 	$conn= new PDO("mysql:host=localhost; dbname=attendance2",'root','');
 }catch(PDOException $e){
 	die("Erreur de connexion à la base de donnée: " . $e->getMessage());
 }
 



 ?>
