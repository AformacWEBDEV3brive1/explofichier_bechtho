

function fichier() {

    $.ajax({
        url: 'traitement.php',
        type: 'POST',
        data: {"function": "fichier", "source": "source" + "id"},
        success: function (result) {
             $(".fichier").html(result);
            $(".dossier").click(function () {
                var id = $(this).attr("id");
                alert(id); // gets the id of a clicked link that has a class of menu
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
 
 $(".getInfoTab").html(result);
 
 }
 
 });
 
 }
 */

/*$("div").click(function(){
 $(this).attr("id");
 alert($.attr("id"));
 });
 */
