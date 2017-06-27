<?php

    $var=$_GET['var'];
    //echo $var;
    include ('filmDAO.php');
    $bdd = FilmsDAO::BDDconnect();
    $sql = "DELETE FROM film WHERE clef= :clef";
    $req = $bdd->prepare($sql);
    $req->bindParam(':clef', $var, PDO::PARAM_INT);
    $req->execute();
    header("location:index.php");
?>
