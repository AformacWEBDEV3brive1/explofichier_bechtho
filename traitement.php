<!-- Pour plus de compréhention: la clef "path" = "path" -->

<?php
$function = $_POST["appelAjax"]; // Fonction variable qui lance la fonction "fonction" dans l'ajax.
$function();
$id = $_POST["id"];

/* Fonction qui affiche les dossiers */

function fichier() {
    // Déclaration des variables.

    $nbrLigne = 0;
    $curent_path = $_POST["path"];
    $new_path = $_POST["new_path"];
    $dossier_scan = '/home' . $fichiers_dossiers;

    if (isset($_POST["path"])) {
        $new_path = $curent_path;
    }
    //Scan le dossier et le retranscrit en tableau.
    $contenu_dossier = scandir($new_path);
    echo "<div class =\"row\">"; // Ajout d'Html en PHP pour crer la première ligne "row".
    // Boucle de lecture du tableau
    foreach ($contenu_dossier as $fichiers_dossiers) {
        // Création d'une nouvelle ligne "row" toutes les 6 lignes.
        if ($nbrLigne == 6) {
            echo "</div><div class =\"row\">";
            $nbrLigne = 0;
        }
        // Cache les dossiers commençant par ".".
        if ($fichiers_dossiers[0] == ".") {
            continue; // Rentre dans la boucle mais ignore la suite de la fonction jusqu'à ne plus trouvé de dossier commençant par "."
        }
        // Corrige les carractères spéciaux de la première variable par la deuxième variable.
        $espace = array(" ", "(", ")", "'");
        $anti_slash = array("\ ", "\(", "\)", "\'");
        $fichiers_dossiers = str_replace($espace, $anti_slash, $fichiers_dossiers);
        // Différencie la différence entre fichier et dossier avec un boolean.
        // Montre la différence entre fichier et dossier avec un boolean.
        $folder = is_dir($new_path . "/" . $fichiers_dossiers);

        if ($folder == true) {
            $dossier_clicable = "dossier";
            $font_fichier = "<i class=\"fa fa-folder-o fa-5x\" aria-hidden=\"true\"></i>";
            //création de div avec class bootstrap
            echo "<div class=\"text-center " . $dossier_clicable . " col-12 col-md-1 offset-md-1\" id = " . $fichiers_dossiers . " >" // Donne l'id
            . $font_fichier // Donne son icone 
            . " <div> " //création de div avec class bootstrap 
            . "<label>" . $fichiers_dossiers . "</label> "
            . "</div><br>"
            . "</div>";
        } else {
            $font_fichier = "<i class=\"fa fa-file-o fa-5x\" aria-hidden=\"true\"></i>";
            $dossier_clicable = "";
            if (strlen($fichiers_dossiers) > 10) { // Change le nbr de caractères affiché
                $fichiers_dossiers = substr($fichiers_dossiers, 0, 10) . "...";
            }
            echo "<div class=\"text-center " . $dossier_clicable . " col-12 col-md-1 offset-md-1\" id = " . $fichiers_dossiers . " >"
            . $font_fichier
            . " <div> "
            . "<label>" . $fichiers_dossiers . "</label> "
            . "</div><br>"
            . "</div>";
        }
        // incrémentation des compteurs de création de ligne.
        $nbrLigne++;
    }
}

/*Fonction activer grace a la fonction retour() dans javascript.js*/

function click() {
    // Déclaration des variables.

    $nbrLigne = 0;
    $curent_path = $_POST["path"];
    $dossier_scan = '/home';
    // Condition pour déterminer les chemins des dossiers.
    if ($curent_path == null) {
        $curent_path = $dossier_scan . "/" . $id;
        echo $curent_path;
    } else {
        $curent_path = $curent_path . "/" . $id;
        echo $curent_path;
    }
    $contenu_dossier = scandir($curent_path); //Scan le dossier et le retranscrit en tableau.
    echo "<div class =\"row\">"; // Ajout d'Html en PHP pour crer la première ligne "row"
    // Boucle de lecture du tableau
    foreach ($contenu_dossier as $fichiers_dossiers) {
        // Création d'une nouvelle ligne "row" toutes les 6 ligne
        if ($nbrLigne == 6) {
            echo "</div><div class =\"row\">";
            $nbrLigne = 0;
        }
        // Chache les dossier commençant par ".".
        if ($fichiers_dossiers[0] == ".") {
            continue; // Rentre dans la boucle mais ignore la suite de la fonction jusqu'à ne plus trouvé de dossier commençant par "."
        }
        // Corrige les carractères spéciaux de la première variable par la deuxième variable.
        $espace = array(" ", "(", ")", "'");
        $anti_slash = array("\ ", "\(", "\)", "\'");
        $fichiers_dossiers = str_replace($espace, $anti_slash, $fichiers_dossiers);
        // Différencie la différence entre fichier et dossier avec un boolean.
        $file = is_dir($curent_path . $id . "/" . $fichiers_dossiers);
        if ($file == true) {
            $font_fichier = "<i class=\"fa fa-folder-o fa-5x\" aria-hidden=\"true\"></i>";
        } else {
            $font_fichier = "<i class=\"fa fa-file-o fa-5x\" aria-hidden=\"true\"></i>";
        }
        echo "<div class=\"dossier text-center col-12 col-md-1 offset-md-1\" id = " . $fichiers_dossiers . " > " .
        "<div>  $font_fichier </div> " .
        "<label>" . substr($fichiers_dossiers, 0, 17) . "</label> <br> " .
        "</div>";
        //création de div avec class bootstrap     // Donne l'id        // Donne son icone         // Change le nbr de caractères affiché
        // incrémentation des compteurs de création de ligne.
        $nbrLigne++;
    }
}
?>
