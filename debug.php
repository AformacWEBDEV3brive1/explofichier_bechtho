<?php
$debug = true;

/*function ecrire_log($errtxt){
         $fp = fopen('/home/nathaniel/Bureau/tmp/debug.log','a+'); // ouvrir le fichier ou le créer
         fseek($fp,SEEK_END); // poser le point de lecture à la fin du fichier
         $nouverr=$errtxt."\r\n"; // ajouter un retour à la ligne au fichier
         fputs($fp,$nouverr); // ecrire ce texte
         fclose($fp); //fermer le fichier
 }
  
ecrire_log("test");*/


function monDebug($variable){
    global $debug;
    if($debug == true){
        if(file_exists('/home/nathaniel/Bureau/tmp/debug.log')){
            $fo = fopen('/home/nathaniel/Bureau/tmp/debug.log', 'a+');
            $testerror = $variable.debug_backtrace()[1]['function']."\r\n";
            fputs($fo,$testerror);
            fclose($fo);
        }
        else{
            $fo = fopen('/home/nathaniel/Bureau/tmp/debug.log', 'a+');
            $testerror = $variable.debug_backtrace()[1]['function']."\r\n";
            fputs($fo,$testerror);
            fclose($fo);
        }
    }
    else if($debug == false){
    }
}
?>