<?php
$time = $_POST["function"];
$time();


function fichier(){
    
    $dossier = '/var/www';
$contenu_dossier = scandir($dossier);
$compteur =0;
$countId = 0;
echo "<div class =\"row\">";
foreach($contenu_dossier as $value){
    if($compteur == 6 ){
        echo "</div><div class =\"row\">";
        
        $compteur = 0;
    }
    
     echo  "<div class=\"dossier col-12 col-md-1 offset-md-1\" id = " . $value. " ><label>" . $value . "</label><br> </div>";
     $compteur++; 
     $countId++;
    
}

}



function getInfoTab(){
    
}
?>