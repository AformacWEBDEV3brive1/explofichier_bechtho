<?php
$time = $_POST["function"];
$time();


function fichier(){
    $dossier = '/var/www';
$contenu_dossier = scandir($dossier);
print_r($contenu_dossier);
}

?>