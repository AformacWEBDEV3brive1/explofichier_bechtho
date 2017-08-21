<?php

$function = $_POST["function"]; // Fonction variable ui lance la fonction "fonction" dans l'ajax.
$function();

function fichier() {
    // Déclaration des variables.
    $id = $_POST["id"];
    $curent_path = $_POST["source"];
    $compteur = 0;
    $countId = 0;
    $dossier_scan = '/home/rackmaninov';

    // Condition pour déterminer les chemins des dossiers.
    if ($_POST["id"] == true) {
        $dossier_scan = $curent_path . $id;
    } else {
        $dossier_scan = '/home/rackmaninov';
    }


    $contenu_dossier = scandir($dossier_scan); //Scan le dossier et le retranscrit en tableau.
    echo "<div class =\"row\">"; // Ajout d'Html en PHP pour crer la première ligne "row"
    // Boucle de lecture du tableau
    foreach ($contenu_dossier as $nom) {
        // Création d'une nouvelle ligne "row" toutes les 6 ligne 
        if ($compteur == 6) {
            echo "</div><div class =\"row\">";
            $compteur = 0;
        }
        // Chache les dossier commençant par ".".
        if ($nom[0] == ".") {
            continue; // Rentre dans la boucle mais ignore la suite de la fonction jusqu'à ne plus trouvé de dossier commençant par "."
        }
        // Corrige les carractères spéciaux de la première variable par la deuxième variable.
        $espace = array(" ", "(", ")", "'");
        $anti_slash = array("\ ", "\(", "\)", "\'");
        $nom = str_replace($espace, $anti_slash, $nom);
        
        // Différencie la différence entre fichier et dossier avec un boolean.
        $file = is_dir($curent_path . $id . "/" . $nom);
        if ($file == true) {

            $font_fichier = "<i class=\"fa fa-folder-o fa-5x\" aria-hidden=\"true\"></i>";
        } else {
            $font_fichier = "<i class=\"fa fa-file-o fa-5x\" aria-hidden=\"true\"></i>";
        }
        echo "<div class=\"dossier col-12 col-md-1 offset-md-1\" id = " . $nom . " >  $font_fichier  <label>" . substr($nom, 0, 17) . "</label><br> </div>";
                     //création de div avec class bootstrap     // Donne l'id        // Donne son icone         // Change le nbr de caractères affiché
        // incrémentation des compteurs de création de ligne.
        $compteur++;
        $countId++;
    }
    
    $position_actuelle = $dossier_scan; //Chemin actuel.
}

?>