<?php
ini_set('display_errors', 1);
define('ROOT', __DIR__);

require ROOT.'/vendor/autoload.php';

use app\database\DB;

$connect = new DB;
$connect->select()->from("personnel");
$msgAjoutSucces = 'Enregistrement réalisé avec succès!';

	
	
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>INSERTION D'AUTEUR</title>

<link rel="stylesheet" href="app/css/style.css" />
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="app/css/bootstrap.min.css" >
<script src="app/js/jquery.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#alert2').delay(2300).fadeOut(900);
	});
</script>


</head>
<body>
<main class="container">
	<h1 class="muted">Formulaire</h1>
		<nav class="navbar">
			<div class="navbar-inner">
				<ul class="nav">
					<li class="active"><a href="exerc07.php">Home</a></li>
					<li class="active"><a href="liste.php">Liste</a></li>
				</ul>
			</div>
		</nav>

<hearder>

</hearder>
 <aside>
 		<form action="" method="POST">
		<fieldset class="form-group">
		    <label for="InputNom">Nom:</label>
		    <input type="text" class="form-control" id="InputNom" name="nom" placeholder="Tappez votre nom..." maxlength="25" required>
	  	</fieldset>
		  <fieldset class="form-group">
			    <label for="InputPrenom">Prénom:</label>
			    <input type="text" class="form-control" id="InputPrenom" name="prenom" placeholder="Tappez votre prénom..." maxlength="25" required>
			    <small class="text-muted">Nous n'avons jamais partagé votre info avec personne.</small>
		  </fieldset>
		  <fieldset class="form-group">
			    <label for="InputStatut">Statut:</label><br/>
			    <select name="statut">
			    	<option>Célibataire</option>
			    	<option>Marié(e)</option>
			    	<option selected>Divorcié(e)</option>
			    	<option>Veuve/Veuf</option>
			    	<option>Autre</option>

			    </select>
		  </fieldset>
		  <fieldset class="form-group">
			    <label for="InputDate">Date de naissance:</label>
			    <input type="date" name="date" class="form-control" id="InputDate" >
		  </fieldset>
    
		  <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
		 

	</form>
</aside>
		<?php 
			if($_SERVER['REQUEST_METHOD'] == 'POST'):
				if(isset($_POST['ajouter'])):
					foreach($_POST as $key => $value):
						$$key = $value;
					endforeach;

					

					$table = 'personnel';

					$values = "'$nom', '$prenom', '$statut', '$date'";
					$champs = "NomPerso, PrenomPerso, StatPerso, DatePerso";
							

						if(isset($ajouter)):
							$connect->insert($table, $champs, $values);	



						endif;

						
				endif;


			endif;

		 ?>
</main>
<div id="alert2" class="alert alert-success" role="alert"><h4>
	<?php if(isset($_GET['ajout'])): echo $msgAjoutSucces; 	endif; ?>
	</h4>
</div>
</body>
</html>