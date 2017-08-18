<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">

        <title> Explorateur de fichier</title>
        <!-- libaries css-->
        <link type="text/css" rel="stylesheet" href="libraries/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="libraries/font-awesome-4.7.0/css/font-awesome.css"/>
                
           <!-- libaries css-->
            <link type="text/css" rel="stylesheet" href="libraries/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css" />


        <!-- libraries js -->        
        <script type="text/javascript" src="libraries/jQuery/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="libraries/tether/dist/js/tether.js"></script>
        <script type="text/javascript" src="libraries/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.js"></script>
        <script type="text/javascript" src="javascript.js"></script>

        <!-- custom css  -->

        <link type="text/css" rel="stylesheet" href="style.css" />

        <!-- custom js  -->



    </head>
    <body>
        <div class="entete">


            <div class="container navbar1">
                <div class="row">

                    <button type="button" class="btn btn-secondary col-2"> <-- </button>
                    <button type="button" class="btn btn-secondary col-2"> --> </button>
                    <button type="submit" class="btn btn-secondary col-1"> / </button>                  
                    <input class="form-control col-5" type="text" placeholder="Rechercher">
                    <button class="btn btn-outline-default col-1" type="submit">OK</button>

                </div>

                <div class="row">

                    <input class="form-control  col-6 offset-3  " type="text" placeholder="Nom du dossier">

                </div>       
            </div>
            
            <div class="container navbar2">
                <div class="row">
                    <button type="button" class="btn btn-secondary col-2"> <-- </button>
                    <button type="button" class="btn btn-secondary col-2"> --> </button>
                    <button type="submit" class="btn btn-secondary col-1"> / </button>
                    <input class="form-control  col-3 " type="text" placeholder="Nom du dossier">
                    <input class="form-control col-3" type="text" placeholder="Rechercher">
                    <button class="btn btn-outline-default col-1" type="submit">OK</button>                 
                </div>       
            </div>

        </div>





        <div class="contenu container">
			<div class="row">
            <div class="col-12 col-md-1 offset-md-1">
            	<i class="fa fa-folder-o fa-5x" aria-hidden="true"></i>
            	<label>dossier A</label>
            </div>
            <div class="col-12 col-md-1 offset-md-1">
            	<i class="fa fa-folder-o fa-5x" aria-hidden="true"></i>
            	<label>dossier B</label>
            </div>
            <div class="col-12 col-md-1 offset-md-1">
            	<i class="fa fa-folder-o fa-5x" aria-hidden="true"></i>
            	<label>dossier C</label>
            </div>
            <div class="col-12 col-md-1 offset-md-1">
            	<i class="fa fa-folder-o fa-5x" aria-hidden="true"></i>
            	<label>dossier D</label>
            </div>
            <div class="col-12 col-md-1 offset-md-1">
            	<i class="fa fa-folder-o fa-5x" aria-hidden="true"></i>
            	<label>dossier E</label>
            </div>
            <div class="col-12 col-md-1 offset-md-1">
            	<i class="fa fa-folder-o fa-5x" aria-hidden="true"></i>
            	<label>dossier F</label>
            </div>
          </div> 
          <div class="row">
            <div class="col-12 col-md-1 offset-md-1">
            	<i class="fa fa-folder-o fa-5x" aria-hidden="true"></i>
            	<label>dossier G</label>
            </div>
            <div class="col-12 col-md-1 offset-md-1">
            	<i class="fa fa-folder-o fa-5x" aria-hidden="true"></i>
            	<label>dossier H</label>
            </div>
            <div class="col-12 col-md-1 offset-md-1">
            	<i class="fa fa-folder-o fa-5x" aria-hidden="true"></i>
            	<label>dossier I</label>
            </div>
            <div class="col-12 col-md-1 offset-md-1">
            	<i class="fa fa-folder-o fa-5x" aria-hidden="true"></i>
            	<label>dossier J</label>
            </div>
            <div class="col-12 col-md-1 offset-md-1">
            	<i class="fa fa-folder-o fa-5x" aria-hidden="true"></i>
            	<label>dossier K</label>
            </div>
            <div class="col-12 col-md-1 offset-md-1">
            	<i class="fa fa-folder-o fa-5x" aria-hidden="true"></i>
            	<label>dossier L</label>
            </div>
          </div> 
        
        <div class="row">
            <div class="col-12 col-md-1 offset-md-1">
            	<i class="fa fa-file-o fa-5x" aria-hidden="true"></i>
            	<label>fichier A</label>
            </div>
            <div class="col-12 col-md-1 offset-md-1">
            	<i class="fa fa-file-o fa-5x" aria-hidden="true"></i>
            	<label>fichier B</label>
            </div>
            <div class="col-12 col-md-1 offset-md-1">
            	<i class="fa fa-file-o fa-5x" aria-hidden="true"></i>
            	<label>fichier C</label>
            </div>
            <div class="col-12 col-md-1 offset-md-1">
            	<i class="fa fa-file-o fa-5x" aria-hidden="true"></i>
            	<label>fichier D</label>
            </div>
           </div>


        </div>
        <div class="contenu">
            <p class="fichier"></p>
            <p class="getInfoTab"></p>
            
            
            
            
            <script type="text/javascript" src="javascript.js"></script>
        </div>
    </body>
</html>
