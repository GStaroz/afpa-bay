<?php
    session_destroy();
    //echo "<br/>Vous êtes à présent déconnecté.<br/>";
    header("location:index.php?page=accueil");
?>