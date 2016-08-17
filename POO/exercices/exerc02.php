<?php 

ini_set('display_errors', 1);
define('ROOT', __DIR__);

require ROOT.'/vendor/autoload.php';

use app\database\DB;

$connect = new DB;
$connect->select("livre.titre_livre, auteur.nom_auteur")->from("livre")->join("auteur","auteur.num_auteur = livre.num_auteur");

	
	
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice PDO</title>

<link rel="stylesheet" href="app/css/style.css" />
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>



</head>
<body>
	<main>
	<header>

	</header>
	<aside>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nom:</th>
					<th>Prenom:</th>
				</tr>
			</thead>
			<tbody>
			<?php  foreach($connect->lister() as $key => $value): ?>
				<tr>
					<td><?php echo $value->titre_livre; ?></td>
					<td><?php echo $value->nom_auteur; ?></td>
				</tr>
			<?php endforeach;?>
			</tbody>
		</table>
</aside>
</main>

</body>
</html>