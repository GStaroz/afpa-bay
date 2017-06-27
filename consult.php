<?php
include ('filmDAO.php');
$count=0;
    if (isset($_POST['search']))
    {
        $rslt=strtolower($_POST['search']);
    }
    //echo $rslt;
    if(isset($_SESSION['iduser']))
    {
      $id_user=$_SESSION['iduser'];
    }
    else {
      $id_user="";
    }
    if(isset($_GET['vu']))
    {
      if(isset($_GET['id_film']))
      {
        $idfilm=$_GET['id_film'];
      }
      $vu=$_GET['vu'];
      //echo $vu." ".$id_user;
      if($vu=="1")
      {

        $bdd = FilmsDAO::BDDconnect();
        $req = $bdd->prepare("INSERT INTO films_vu(id_user, id_film) VALUES(:id_user,:id_film)");
        $req->bindValue(':id_user', $id_user);
        $req->bindValue(':id_film', $idfilm);
        $req->execute();
        header("location:index.php?page=consult&vu=0");
      }
    }

        $bdd = FilmsDAO::BDDconnect();
        if (isset($rslt))
        {
            $reponse = $bdd->prepare("SELECT * FROM film WHERE LOWER(titre) LIKE :rslt OR LOWER(auteur) LIKE :rslt OR LOWER(acteurs) LIKE :rslt OR LOWER(synopsis) LIKE :rslt ");
            $reponse->bindValue(':rslt', '%'.$rslt.'%');
            $reponse->execute();
        }
        else
        {

            $reponse = $bdd->query('SELECT * from film');
        }
        while ($donnees = $reponse->fetch())
        {
               echo '
            <div id="principal">
                <div id="bloc1">
                    '.$donnees['titre'].'
                </div>
                <div id="bloc2">
                    <div id="bloc3">
                        <img src=\''.$donnees['image'].'\'></img><br>
                        <a href=index.php?page=suppr&var='.$donnees['clef'].'>Supprimer</a>';

                          $bdd = FilmsDAO::BDDconnect();
                          $reponse1 = $bdd->prepare("SELECT * FROM films_vu WHERE id_user=:iduser AND id_film=:idfilm");
                          $reponse1->bindValue(':idfilm', $donnees['clef']);
                          $reponse1->bindValue(':iduser', $id_user);
                          $reponse1->execute();
                          if($reponse1->fetch())
                          {
                              echo "Déjà vu";
                          }
                          else
                          {
                            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=index.php?page=consult&vu=1&id_film='.$donnees['clef'].'>A voir</a> ';
                          }
                          $count==0;


                    echo '</div>
                    <div id="bloc4">
                        <div id="bloc5">
                            '.$donnees['synopsis'].'
                        </div>
                        <div id="bloc6">
                            <div class="bloc7">
                                '.$donnees['auteur'].'
                            </div>
                            <div class="bloc7">
                                '.$donnees['acteurs'].'
                            </div>
                            <div class="bloc7">
                                '.$donnees['annee'].'
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        }

    //mysql_close($bdd);
 ?>
