<?php
    echo "
        <form method=\"POST\" action=\"index.php?page=insertion\" enctype=\"multipart/form-data\">
            <p>Titre du film : <input type=\"text\" name=\"titre\" /></p>
            <p>Auteur : <input type=\"text\" name=\"auteur\" /></p>
            <p>Acteurs : <input type=\"text\" name=\"acteurs\" /></p>
            <p>Synopsis : <textarea name=\"syno\"/></textarea></p>
            <p>Année : <input type=\"text\" name=\"annee\" /></p>
            <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"100000\">
            <input type=\"file\" name=\"image\" />
            <p><input type=\"submit\" value=\"Add\"></p>
        </form>";
 ?>
