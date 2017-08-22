<?php

$time = $_POST["function"];
$time();

function fichier() {
    $id = $_POST["id"];
    $url = $_POST["source"];
    $compteur = 0;
    $countId = 0;
    $dossier = '/home/rackmaninov';


    if ($_POST["id"] == true) {

        //$dossier = $dossier . $dossier[id];
        $dossier = $url . $id;
    } else {
        $dossier = '/home/rackmaninov';
    }


    $contenu_dossier = scandir($dossier);
    echo "<div class =\"row\">";
    foreach ($contenu_dossier as $nom) {
        if ($compteur == 6) {
            echo "</div><div class =\"row\">";
            $compteur = 0;
        }

        if ($nom[0] == ".") {
            continue;
        }
        $espace = array(" ", "(", ")", "'");
        $anti_slash = array("\ ", "\(", "\)", "\'");
        $nom = str_replace($espace, $anti_slash, $nom);
        $file = is_dir($url . $id . "/" . $nom);

        if ($file == true) {

            $font_fichier = "<i class=\"fa fa-folder-o fa-5x\" aria-hidden=\"true\"></i>";
        } else {
            $font_fichier = "<i class=\"fa fa-file-o fa-5x\" aria-hidden=\"true\"></i>";
        }
        echo "<div class=\"dossier col-12 col-md-1 offset-md-1\" id = " . $nom . " >  $font_fichier  <label>" . substr($nom, 0, 20) . "</label><br> </div>";
        $compteur++;
        $countId++;
    }

    $position_actuelle = $dossier;
}

?>
