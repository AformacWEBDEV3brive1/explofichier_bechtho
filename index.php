<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">

        <title> Explorateur de fichier</title>
        <!-- libaries css-->
        <link type="text/css" rel="stylesheet" href="libraries/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="libraries/font-awesome-4.7.0/css/font-awesome.css"/>
		
		
		
        <title></title>
           <!-- libaries css-->
            <link type="text/css" rel="stylesheet" href="libraries/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css" />


        <!-- libraries js -->        
        <script type="text/javascript" src="libraries/jQuery/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="libraries/tether/dist/js/tether.js"></script>
        <script type="text/javascript" src="libraries/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.js"></script>
        <script type="text/javascript" src="javascript.js"></script>

        <!-- custom css  -->

        <link type="text/css" rel="stylesheet" href="style.css" />



            <link type="text/css" rel="stylesheet" href="style.css" />
        
        <!-- custom js  -->
            
           

    </head>
    <body>
        <div class="entete">


            <div class="container">
                <div class="row">
                    
                    <button type="button" class="btn btn-secondary"> <-- </button>
                    <button type="button" class="btn btn-secondary"> --> </button>
                    <button type="submit" class="btn btn-secondary"> / </button>
                    <!-- Ajouter <nav></nav> pour avoir un effet classe si jamais -->
                        <a class="navbar-brand"></a>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" placeholder="Rechercher">
                            <button class="btn btn-outline-default my-2 my-sm-0" type="submit">OK</button>
                        </form>
                   <!-- Ajouter</nav> pour avoir un effet classe si jamais -->
                   <form>
                   <input class="form-control mr-sm-2" type="text" placeholder="Nom du dossier">
                   </form>
                   
                   
                   
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
        </div>
    </body>
</html>
