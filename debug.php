<?php
$debug = true;

monDebug('testtttttt');

function monDebug($variable){
    global $debug;
    if($debug == true){
        if(file_exists('/home/nathaniel/Bureau/tmp/debug.log')){
            fopen('/home/nathaniel/Bureau/tmp/debug.log', 'a+');
            fputs('/home/nathaniel/Bureau/tmp/debug.log', $variable);
            fclose('/home/nathaniel/Bureau/tmp/debug.log');
        }
        else{
            fopen('/home/nathaniel/Bureau/tmp/debug.log', 'a+');
            fputs('/home/nathaniel/Bureau/tmp/debug.log', $variable);
        }
    }
    else if($debug == false){
        function monDebug(){
            
        }
    }
}
?>

