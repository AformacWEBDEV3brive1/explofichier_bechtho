fichier(); //Appelle de la fonction qui fait que ça marche.

function fichier() {
    // var url = "/home/rackmaninov/"; // Variable qu istock le chemin de départ.
    var url = $('#path').attr("placeholder");

    $.ajax({
        url: 'traitement.php', // cible de l'ajax.
        type: 'POST', // Méthode de récupération des données PHP.
        data: {"function": "fichier", 'source': url}, // Clé et donné envoyé a la page PHP.
        success: function (result) { //Les donnée renvoyées par PHP.
            $(".fichier").html(result); // Affiche dans la class "fichier" situé dans le HTML.
            $('.postion_actuelle').html(result); // Capture dans la class "postion_actuelle" situé dans le HTML.
            $(".dossier").click(function () { // Fonction pour cliquer.             
                var id = $(this).attr("id");
                
                click(id, url);// Récupère l'id des div crééer en PHP.
                
            });
        }
    });
}

function click(id, url) {

    var curent_path = $("#path").attr('placeholder');
    var new_path = curent_path + "/" + id;
    $('#path').attr("placeholder", new_path);
    alert()
    $.ajax({//Requète quand on à cliqué.
        url: 'traitement.php',
        type: 'POST',

        data: {"function": "fichier", "id": id, 'new_path' : new_path},
        success: function (result) {

            $(".fichier").html(result);
            // Capture dans la class "postion_actuelle" situé dans le HTML.
            $(".dossier").click(function () {
                var id = $(this).attr("id");               
            });
            fichier();
        }
        
    });
    
}


