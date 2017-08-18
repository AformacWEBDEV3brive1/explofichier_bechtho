

function fichier() {

    $.ajax({
        url: 'traitement.php',
        type: 'POST',
        data: {"function": "fichier"},
        success: function (result) {

            $(".fichier").html(result);
            
        }

    });

}

fichier();
