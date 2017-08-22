
fichier(); // Appelle de la fonction qui fait que ça marche.

function fichier() {

	var url = "/home/christian/"; // Variable qu istock le chemin de départ.

	$.ajax({
		url : 'traitement.php', // cible de l'ajax.
		type : 'POST', // Méthode de récupération des données PHP.
		data : {
			"function" : "fichier",
			'source' : url,
		}, // Clé et donné envoyé a la page PHP.
		
		success : function(result) { // Les donnée renvoyées par PHP.
			$(".fichier").html(result); // Affiche dans la class "fichier" situé
										// dans le HTML.
			$('#postion_actuelle').html(result); // Capture dans la class
													// "postion_actuelle" situé
													// dans le HTML.

			
		}
	});
}

$(document).ready(function(){
	
	var url = $("#position_actuelle").html();
$(".dossier").click(function() { // Fonction pour cliquer.
	var url = $("#position_actuelle").html();
	
	console.log(url);
	
	var id = $(this).attr("id"); // Récupère l'id des div crééer
									// en PHP.
	console.log("ça clique");
	$.ajax({ // Requète quand on à cliqué.
		url : 'traitement.php',
		type : 'POST',
		data : {
			"function" : "click",
			'source' : url,
			"id" : id
		},
		success : function(result) {
			$(".fichier").html(result);
			$('#postion_actuelle').html(result);
		}
	});

	$(".dossier").click(function() { // Fonction pour cliquer.
		var id = $(this).attr("id");
		click(id, url);// Récupère l'id des div crééer en PHP.
		
	});

});
});



