<?php

        include ('filmDAO.php');
        $bdd = FilmsDAO::BDDconnect();
        $bdd = $bdd->prepare("SELECT * FROM login");
        $bdd->execute();

        while ($donnees = $bdd->fetch())
        {
            $dossier="Avatars";
               echo "
            <div id=\"principal\">
                <div id=\"bloc1\">
                    ".$donnees['login']."
                </div>
                <div id=\"bloc2\">
                    <div id=\"bloc3\">
                        <img src=\"Avatars\\".$_SESSION['login'].".jpeg\"><br><a href=index.php?page=suppr&var=".$donnees['clef'].">Supprimer</a>
                    </div>
                    <div id=\"bloc4\">
                        <div id=\"bloc5\">

                        </div>
                        <div id=\"bloc6\">
                            <div class=\"bloc7\">
                                ".$donnees['type']."
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
        }

?>
