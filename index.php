<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">

<title>Explorateur de fichier</title>
<!-- libaries css-->
<link type="text/css" rel="stylesheet" href="libraries/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css" />
<link rel="stylesheet" href="libraries/font-awesome-4.7.0/css/font-awesome.css" />

<!-- libaries css-->
<link type="text/css" rel="stylesheet"
	href="libraries/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css" />



<!-- libraries js -->
<script type="text/javascript" src="libraries/jQuery/jquery-3.2.1.js"></script>
<script type="text/javascript" src="libraries/tether/dist/js/tether.js"></script>
<script type="text/javascript" src="libraries/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.js"></script>
<!-- <script type="text/javascript" src="javascript.js"></script>-->

<!-- custom css  -->

<link type="text/css" rel="stylesheet" href="style.css" />

<!-- custom js  -->



</head>
<body>

	<!-- navbar -->
	<div class="entete">
		<div class="container">
			<div class="row">

				<button type="submit" id="retour" onclick="retour()"
					class="btn btn-secondary col-4">Retour</button>

				<input class="form-control  col-8" id="path" type="text"
					placeholder="/home">
			</div>
		</div>

	</div>


	<!-- Dossiers/Fichiers -->

	<div class="container contenu padding">
		<p class="fichier"></p>


	</div>
<script type="text/javascript" src="javascript.js"></script>

</body>
</html>
