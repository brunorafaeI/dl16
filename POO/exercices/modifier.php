<?php
ini_set('display_errors', 1);
define('ROOT', __DIR__);

require ROOT.'/vendor/autoload.php';

use app\database\DB;


$table = 'personnel';
$connect = new DB;
$connect->select()->from($table)->where('IdPerso',$_GET['id']);

foreach($connect->lister() as $key => $value):
		
endforeach;
		
		
	
	
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>INSERTION D'AUTEUR</title>

<link rel="stylesheet" href="app/css/style.css" />
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="app/css/bootstrap.min.css" >


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
		    <input type="text" class="form-control" id="InputNom" name="nom" value="<?php echo $value->NomPerso; ?>" maxlength="25" required>
	  	</fieldset>
		  <fieldset class="form-group">
			    <label for="InputPrenom">Prénom:</label>
			    <input type="text" class="form-control" id="InputPrenom" name="prenom" value="<?php echo $value->PrenomPerso ?>" maxlength="25" required>
			    <small class="text-muted">Nous n'avons jamais partagé votre info avec personne.</small>
		  </fieldset>
		  <fieldset class="form-group">
			    <label for="InputStatut">Statut:</label><br/>
			    <select name="statut">

			    	<option <?php if ($value->StatPerso=="Célibataire"){ echo "selected";} ?> >Célibataire</option>
			    	<option <?php if($value->StatPerso=="Marié"){ echo "selected";}  ?>>Marié(e)</option>
			    	<option <?php if($value->StatPerso=="Divorcé(e)"){ echo "selected";} ?>>Divorcé(e)</option>
			    	<option <?php if($value->StatPerso=="Veuve/Veuf"){ echo "selected";} ?>>Veuve/Veuf</option>
			    	<option <?php if($value->StatPerso=="Autre"){ echo "selected";} ?>>Autre</option>
			    </select>
		  </fieldset>
		  <fieldset class="form-group">
			    <label for="InputDate">Date de naissance:</label>
			    <input type="date" name="date" value="<?php echo $value->DatePerso ?>" class="form-control" id="InputDate" >
		  </fieldset>
    
		  <button type="submit" class="btn btn-primary" name="modifier" onclick="redirection();">Modifier</button>
		 

	</form>
</aside>
		

<?php 
			if($_SERVER['REQUEST_METHOD'] == 'POST'):
				if(isset($_POST['modifier'])):
					foreach($_POST as $key => $value):
						$$key = $value;
					endforeach;


					
					$champs = "NomPerso='$nom', PrenomPerso='$prenom', StatPerso='$statut', DatePerso='$date'";
							

						if(isset($modifier)):
							$connect->update($table, $champs, $_GET['id']);
						header('Location: liste.php?succes');
						
						

						endif;

						
				endif;


			endif;

		 ?>

</main>
<!-- 

<div class="alert alert-success" role="alert">...</div>
<div class="alert alert-info" role="alert">...</div>
<div class="alert alert-warning" role="alert">...</div>
<div class="alert alert-danger" role="alert">...</div> -->



</body>
</html>