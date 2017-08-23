var nom_utilisateur = prompt("Veuillez taper votre nom d'utilisateur :");
nom_util();
fichier(); // Appelle de la fonction qui fait que ça marche.

function nom_util() {
	
	
	var newpath = $('#path').attr("placeholder") + "/" + nom_utilisateur;
	$('#path').attr("placeholder", newpath);

}

function fichier() {
	var url = $('#path').attr("placeholder");

	$.ajax({
		url : 'traitement.php', // cible de l'ajax.
		type : 'POST', // Méthode de récupération des données PHP.
		data : {
			"function" : "fichier",
			'source' : url
		}, // Clé et donné envoyé a
		// la page PHP.
		success : function(result) { // Les donnée renvoyées par PHP.
			$(".fichier").html(result); // Affiche dans la class "fichier" situé
			// dans le HTML.
			$(".dossier").click(function() { // Fonction pour cliquer.
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

	$.ajax({// Requète quand on à cliqué.
		url : 'traitement.php',
		type : 'POST',

		data : {
			"function" : "fichier",
			"id" : id,
			'new_path' : new_path
		},
		success : function(result) {

			$(".fichier").html(result);
			$(".dossier").click(function() {
				var id = $(this).attr("id");

			});
			fichier();
		}
	});
	
}

function retour() {

	var url = $('#path').attr("placeholder");

	if (url == "/home" +"/"+ nom_utilisateur) {
		alert("retour impossible");
	}else{

		var fin_url = url.substr(-1, 1);

		while (fin_url != "/") {
			url = url.substring(0, url.length - 1);
			fin_url = url.substr(-1, 1);
		}
		url = url.substring(0, url.length - 1);

		$.ajax({// Requète quand on à cliqué.
			url : 'traitement.php',
			type : 'POST',

			data : {
				"function" : "click",
				'new_path' : url
			},
			success : function(result) {

				$(".fichier").html(result);
				$("#path").attr("placeholder", url);
				fichier();
			}

		});
	}
}