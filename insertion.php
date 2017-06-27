<?php
    if (isset($_POST['titre']))
    {
        $_SESSION['titre'] = $_POST['titre'];
        $_SESSION['auteur'] = $_POST['auteur'];
        $_SESSION['acteurs'] = $_POST['acteurs'];
        $_SESSION['syno'] = $_POST['syno'];
        $_SESSION['annee'] = $_POST['annee'];
        //var_dump ($_POST);
        //echo $_SESSION['titre'];
        $titre = $_SESSION['titre'];
        $auteur = $_SESSION['auteur'];
        $acteurs = $_SESSION['acteurs'];
        $syno = $_SESSION['syno'];
        $annee = $_SESSION['annee'];
        if(isset($_FILES['image']))
        {
            $dossier = 'images/';
            $fichier = basename($_FILES['image']['name']);
            $taille_maxi = 100000;
            $taille = filesize($_FILES['image']['tmp_name']);
            $extensions = array('.png', '.gif', '.jpg', '.jpeg');
            $extension = strrchr($_FILES['image']['name'], '.');
            //Début des vérifications de sécurité...
            if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
            {
                 $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
            }
            if($taille>$taille_maxi)
            {
                 $erreur = 'Le fichier est trop gros...';
            }
            if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
            {
                 //On formate le nom du fichier ici...
                 $fichier = strtr($fichier,
                      'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
                      'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                 $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
                 if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
                 {
                      echo 'Upload effectué avec succès !';
                 }
                 else //Sinon (la fonction renvoie FALSE).
                 {
                      echo 'Echec de l\'upload !';
                 }
            }
            else
            {
                 echo $erreur;
            }
            $image=$dossier.$fichier;
            //echo  $image;
        }
        $_POST['titre']="";
    }
    if (isset($titre))
    {
        //echo $titre;
            include ('filmDAO.php');
            $bdd = FilmsDAO::BDDconnect();
             $req = $bdd->prepare("INSERT INTO film(titre, auteur, acteurs, synopsis, annee, image)
            VALUES(:titre,:auteur,:acteurs,:syno,:annee,:image)");
             $req->bindValue(':titre', $titre, PDO::PARAM_STR);
             $req->bindValue(':auteur', $auteur, PDO::PARAM_STR);
             $req->bindValue(':acteurs', $acteurs, PDO::PARAM_STR);
             $req->bindValue(':syno', $syno, PDO::PARAM_STR);
             $req->bindValue(':annee', (int)$annee, PDO::PARAM_INT);
             $req->bindValue(':image', $image, PDO::PARAM_STR);
             $req->execute();
             echo " Le film a bien été ajouté en base de donnée.";
        //mysql_close($bdd);
        // On ajoute une entrée dans la table
    }
    ////////////////////////////////////////////////////////////////////////////
    // Insertion création nouveau compte
    ////////////////////////////////////////////////////////////////////////////

        $captcha;
        $aContext = array(
          'http' => array(
          'proxy' => 'tcp://10.127.254.1:80',
          'request_fulluri' => true,
          ),
          );
          $cxContext = stream_context_create($aContext);

          if(isset($_POST['g-recaptcha-response'])){
            $captcha=$_POST['g-recaptcha-response'];
          }
          if(!$captcha){
            echo '<h2>Please check the the captcha form.</h2>';
            exit;
          }
        $secretKey = "6Lc2BScUAAAAAIe6t6sSJBA4EQtXs-PTiAZO8xYw";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip, false, $cxContext);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        } else {
          if (isset($_POST['login']))
          {
            $login=$_POST['login'];
            $pwd=$_POST['pwd'];

            $salt = "CrazyassLongSALTThatMakesYourUsersPasswordVeryLong123!!312567__asdSdas";
            $password = hash('sha256', $salt.$pwd);

              include ('filmDAO.php');
              $bdd = FilmsDAO::BDDconnect();
               $req = $bdd->prepare("INSERT INTO login(login, password, type)
              VALUES(:login,:password, :type)");
               $req->bindValue(':login', $login, PDO::PARAM_STR);
               $req->bindValue(':password', $password, PDO::PARAM_STR);
               $req->bindValue(':type', 'user', PDO::PARAM_STR);
               $req->execute();
               echo " Le compte a bien été créé.";
          }
          else
          {
              header("location:index.php");
          }

        }



?>
