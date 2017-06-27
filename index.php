<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
<a href="../../../../media/jcbiddau/Biddau_Jc/Afpa/HTML/CV_responsive_v2_ok/index.htm"></a>
-->
<?php session_start();
if( isset($_GET['page']) )
  $page = $_GET['page'];
else
  $page = "accueil";
//echo $page;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://www.google.com/recaptcha/api.js"></script>


        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    </head>
    <body>
        <header>
            <div><img id="photo" src="banniere.png" alt="photo"/></div>
            <div>
                <?php
                    if(!isset($_SESSION['login']))
                    {
                        echo"<form method=\"POST\" action=\"index.php?page=login&log=1\" enctype=\"multipart/form-data\">
                            <br>Login : <input type=\"text\" name=\"login\" />
                            Password : <input type=\"password\" name=\"pwd\" />
                            <input type=\"submit\" value=\"Connection\">
                        </form>
                        <p><a href=\"index.php?page=login&log=0\">S'enregistrer</a></p>";
                    }
                    else
                    {
                        echo "<div>".$_SESSION['login']."</div>
                                <div>
                                    <img src=\"Avatars\\".$_SESSION['login'].".jpeg\">
                                </div>
                                <div>
                                    <a href=\"index.php?page=disconnect\">Logout</a>
                                </div>";
                    }
                ?>
            </div>
        </header>
    <!------------------------------------------------------------------------->
    <!--Début Menu------------------------------------------------------------->
    <!------------------------------------------------------------------------->
        <nav id="main">
            <div>
                <ul id="menu">
                    <li>
                        <a href="#">Menu</a>
                        <ul>
                            <li>
                                <a href="?page=consult&vu=0" title="consult"><span>Consulter<i class="fa fa-briefcase fa-1x" aria-hidden="true"></i></span></a>
                            </li>
                            <li>
                                <a href="?page=search" title="search"><span>Rechercher<i class="fa fa-flask fa-1x" aria-hidden="true"></i></span></a>
                            </li>
                            <li>
                                <a href="?page=add" title="add"><span>Ajouter<i class="fa fa-flask fa-1x" aria-hidden="true"></i></span></a>
                            </li>
                            <?php
                                if(isset($_SESSION['type']))
                                {
                                    $type=$_SESSION['type'];
                                    //echo $type;
                                    if ($type=="admin")
                                    {
                                        echo"
                                        <li>
                                            <a href=\"?page=account\" title=\"add\"><span>Gestion des comptes<i class=\"fa fa-flask fa-1x\" aria-hidden=\"true\"></i></span></a>
                                        </li>";
                                    }
                                }
                            ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <?php include "page.php"; ?>
        <main>
            <div id="mep">
                <?php
                    include $page;
                    //echo "test";
                ?>
            </div>
        </main>
    </body>
</html>
