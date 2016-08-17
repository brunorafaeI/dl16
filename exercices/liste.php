<?php
ini_set('display_errors', 1);
define('ROOT', __DIR__);

require ROOT.'/vendor/autoload.php';

use app\database\DB;

$table = 'personnel';


$connect = new DB;
$connect->select()->from($table);

$msgModSucces = 'Les données a été modifiées avec succès!';
$msgDelSucces = 'Suppretion a été réalisé avec succès!';

	
	
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>INSERTION D'AUTEUR</title>

<link rel="stylesheet" href="app/css/style.css" />
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="app/css/bootstrap.min.css" >
<!-- Latest compiled and minified JavaScript -->
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
				<ul class="nav ">
					<li><a  href="exerc07.php">Home</a></li>
					<li class="active"><a href="liste.php">Liste</a></li>
				</ul>
			</div>
		</nav>
	
<hearder>

</hearder>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h2>Liste de données</h2></div>
  

  <!-- Table -->
  <table class="table">
 <thead>
 	<tr>
 		<th>#</th>
 		<th>Nom:</th>
 		<th>Prénom:</th>
 		<th>Statut:</th>
 		<th>Date:</th>
 	</tr>
 </thead>
 <tbody>
 	
 	<?php 


 	foreach ($connect->lister() as $key => $value): 
 		echo '<tr>';
 		echo '<td>'.$value->IdPerso.'</td>';
 		echo '<td>'.$value->NomPerso.'</td>';
 		echo '<td>'.$value->PrenomPerso.'</td>';
 		echo '<td>'.$value->StatPerso.'</td>';
 		echo '<td>'.$value->DatePerso.'</td>';
 		echo '<td><a href="modifier.php?id='.$value->IdPerso.'"">Modifier</a></td>';
 		echo '<td><a onclick="return confirm(\'Voullez-vous vraiment supprimer cet élément?\')" href="liste.php?suppr&id='.$value->IdPerso.'"">Supprimer</a></td>';
 		echo '</tr>';
 	endforeach;

 		if(isset($_GET['suppr'])):
 			
 			$connect->delete($table,$_GET['id']);
 			
 		endif;

 	 ?>		
 		

 	
 </tbody>
    
  </table>
</div>

<div id="alert2" class="alert alert-success" role="alert">
	<?php
	if(isset($_GET['succes'])):
		echo $msgModSucces;
	elseif(isset($_GET['del'])):
		echo $msgDelSucces;
	endif;

	?>
</div>


</main>
</body>
</html>