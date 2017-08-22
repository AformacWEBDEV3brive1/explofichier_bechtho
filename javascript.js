

function fichier() {
    var url = "/home/rackmaninov/";
    $.ajax({

        url: 'traitement.php',
        type: 'POST',
        data: {"function": "fichier", 'source': url},
        success: function (result) {
            $(".fichier").html(result);
            $('.postion_actuelle').html(result);
            console.log(result);
            $(".dossier").click(function () {
                var id = $(this).attr("id");
                $.ajax({

                    url: 'traitement.php',
                    type: 'POST',
                    data: {"function": "fichier", 'source': url, "id": id},
                    success: function (result) {
                        $(".fichier").html(result);
                    }
                });
            });
        }
    });
}

/* $.ajax({
 url: 'traitement.php',
 type: 'GET',
 data: {"chemin": },
 success: function (result) {
 
 $(".fichier").html(result);
 
 }
 
 });
 
 }*/

fichier();
/*function getIfoTab() {
 
 $.ajax({
 url: 'traitement.php',
 type: 'POST',
 data: {"function": "getInfoTab"},
 success: function (result) {

 
 }
 */

/*$("div").click(function(){
 $(this).attr("id");
 alert($.attr("id"));
 });
 */
