<?php

class filmDAO
{
   function BDDconnect()
   {
     try
     {
       $bdd = new PDO('mysql:host=localhost;dbname=film;charset=utf8', 'root', 'Stackable25');
       $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       return $bdd;
     }
     catch(PDOException $e)
     {
         echo('Erreur : '.$e->getMessage());
     }
   }
}
?>
