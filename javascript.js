   
        onclick = fichier(); //Appelle de la fonction qui fait que ça marche.


function fichier() {
    var url = "/home/ezaltar/"; // Variable qu istock le chemin de départ.
alert("initialisation : "+url );
    $.ajax({
        url: 'traitement.php', // cible de l'ajax.
        type: 'POST', // Méthode de récupération des données PHP.
        data: {"function": "fichier", 'source': url}, // Clé et donné envoyé a la page PHP.
        success: function (result) { //Les donnée renvoyées par PHP.
            $(".fichier").html(result); // Affiche dans la class "fichier" situé dans le HTML.
            $('.postion_actuelle').html(result); // Capture dans la class "postion_actuelle" situé dans le HTML.
            $(".dossier").click(function () { // Fonction pour cliquer.             
                var id = $(this).attr("id");
                alert("click ajax : "+url+id );
                click(id, url);// Récupère l'id des div crééer en PHP.
                
            });
        }
    });
}
function click(id, url) {



    $.ajax({// Requète quand on à cliqué.
        url: 'traitement.php',
        type: 'POST',

        data: {"function": "fichier", "source": url, "id": id},
        success: function (result) {
            
            $(".fichier").html(result);
            // Capture dans la class "postion_actuelle" situé dans le HTML.
            $(".dossier").click(function () {
                var id = $(this).attr("id");
                fichier();
            });
        }
        
    });
    
}


