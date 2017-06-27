<?php

    $create=$_GET['log'];
    //echo $create;
    if($create==0)
    {

        echo"
            <form id='demo-form' method=\"POST\" action=\"index.php?page=insertion\" enctype=\"multipart/form-data\">
                <p> Veuillez saisir vos logins et password afin de créer votre compte. </p>
                <p>Login : <input type=\"text\" name=\"login\" /></p>
                <p>Password : <input type=\"password\" name=\"pwd\" /></p>
                <div class=\"g-recaptcha\" data-sitekey=\"6Lc2BScUAAAAAPzMzrP8h8kBbWpYzUW1l2bAq0cO\"></div>
                <p><input type=\"submit\" value=\"Envoyer\"></p>
            </form>";

    }
    else
    {
      if($create==1)
      {

            include ('filmDAO.php');
            $bdd = FilmsDAO::BDDconnect();

            //Sécurisation des données saisies
            $login = htmlspecialchars($_POST['login']);
            $password = htmlspecialchars($_POST['pwd']);

            //On vérifie que le login existe dans la table
            $verif_login = $bdd->query('SELECT COUNT(*) FROM login WHERE login = "'.$login.'" ');
            if($verif_login->fetchColumn() == 0)
            { //Login inexistant
                echo "Login inexistant";
            }
            else
            { //Login existant
                $_SESSION['login'] = $_POST['login'];

                //echo "ca marche";
                //Séléction du password pour le login saisi
                $reponse_login = $bdd->query('SELECT password FROM login WHERE login = "'.$login.'" LIMIT 1');
                $donnees = $reponse_login->fetch();
                $rqt_type_user = $bdd->query('SELECT * FROM login WHERE login = "'.$login.'" LIMIT 1');
                $donnees = $rqt_type_user->fetch();
                $_SESSION['type']=$donnees['type'];
                $_SESSION['iduser']=$donnees['clef'];

                //Je vérifie que le mot de passe correspond
                //Si le mot de passe est hashé dans la bdd, il faut appliquer ce hashage à $password dans la vérification ci-dessous
                $salt = "CrazyassLongSALTThatMakesYourUsersPasswordVeryLong123!!312567__asdSdas";
                $password = hash('sha256', $salt.$password);
                if ($password == $donnees['password'])
                {
                    // La suite de mon code qui y sera après que je n'ai plus d'erreur et pour l'instant c'est :
                    header("location:index.php");
                }

                $reponse_login->closeCursor(); // Termine le traitement de la requête
            }
        }

    }
?>
