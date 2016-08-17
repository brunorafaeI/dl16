<?php 

//--------------- EXERCICE 1 ---------------------

	echo "EXERCICE 1 <br/><hr>";
	for ($i=1; $i <= 10 ; $i++) { 
		echo "$i x 8 = ", $i*8, "<br/>";
	}
	echo "<hr>";



// --------------- EXERCICE 2 ---------------------

echo "EXERCICE 2 <br/><hr>";
for ($j=2; $j <=10 ; $j++) { 
	 echo "<br/>"; 

for ($i=1; $i <= 10 ; $i++) { 
		echo "$j x $i = ", $i*$j, "<br/>";
	}

}
echo "<hr>";

// --------------- EXERCICE 3 ---------------------

echo "EXERCICE 3 <br/><hr>";

// <ul id="menu">
// 	<li><a href="#" title="aller &agrave; la section 1">item1</a></li>
// 	<li><a href="#" title="aller &agrave; la section 2">item2</a></li>
// 	<li><a href="#" title="aller &agrave; la section 3">item3</a></li>
// 	<li><a href="#" title="aller &agrave; la section 4">item4</a></li>
// 	<li><a href="#" title="aller &agrave; la section 5">item5</a></li>
// 	<li><a href="#" title="aller &agrave; la section 6">item6</a></li>
// 	<li><a href="#" title="aller &agrave; la section 7">item7</a></li>
// 	<li><a href="#" title="aller &agrave; la section 8">item8</a></li>
// </ul>

 echo '<ul id="menu">';
 	for ($i=1; $i <= 8; $i++) { 
 		echo '<li><a href=# title="aller &agrave; la section ',$i,'">item',$i,'</a></li>';
 	}

 echo '</ul>';
echo "<hr>";

// --------------- EXERCICE 4 ---------------------

echo "EXERCICE 4 <br/><hr>";

$nom = "DA SILVA";
$prenom = "Bruno";

echo "Bonjour, ", $prenom, " ", $nom;
echo "<hr>";

// --------------- EXERCICE 5 ---------------------

echo "EXERCICE 5 <br/><hr>";

$nom = "BOURBOUSSON";
$prenom = "Elisa";
$sexe = "F";
$marie = "Y";



	

if ($sexe == "F" && $marie == "Y"):
	echo "Bonjour, Madame ", $nom, " ", $prenom;

	elseif ($sexe == "M"):
	echo "Bonjour, Monsieur ", $nom, " ", $prenom;		

else :
	echo "Bonjour, Mademoiselle ", $nom, " ", $prenom;

endif;

echo "<hr>";

// --------------- EXERCICE 6 ---------------------

echo "1EXERCICE 6 <br/><hr>";

for ($i=1; $i <= 100 ; $i++) { 
	echo '<form action="" method="">
		<input type="checkbox" name="objet">Objet ',$i,'
		 </form>';
}

echo "<hr>";


// --------------- EXERCICE 7 ---------------------

echo "EXERCICE 7 <br/><hr>";
 
 echo '<select>';
 for ($i=1; $i <= 10 ; $i++) { 
 	echo '<option>numéro',$i,'</option>';
 }
echo '</select>';

echo "<hr>";

// --------------- EXERCICE 8 ---------------------

echo "EXERCICE 8 <br/><hr>";

$table = " MiniDisc – Minitel – Téléphone à clapet – Game Boy – Ordinateur personnel – Radio par satellite – Souris optique – Téléphone à identification – Appareil photo reflex Digital – Péage électronique – Télévision à lumière organique – Télévision par satellite – SMS – Piles rechargeables – DVD – Commerce d’actions en ligne – Mail – Clé USB – Voiture hybride – Ecran pla – SMA couleur – Bluetooth – GPS – Enregistreur audio à domicile – Home Vidéo – Camcorder – Processeur multi-Core – Téléviseur HD digital – CD réinscriptible – MPEG-4 – Messagerie instantanée – Moteur de
recherche – Lecteur DVD enregisteur – Blu-ray – Appareil photo numérique – Format JPEG – Phares à LED – DVD réinscriptible – Téléphone haut-débit – Baladeur MP3 – Traitement de texte – Blog – Reconnaissance par l'ADN – Réseau social en ligne – Séquençage génétique – Microblogging – Wi-Fi ";

foreach (explode("–", $table) as $key => $value) {
	echo $value , "<br/>";
}
echo "<hr>";

// --------------- EXERCICE 9 ---------------------

echo "EXERCICE 9 <br/><hr>";
echo '<select>';
foreach (explode("–", $table) as $key => $value) {
	echo '<option>',$value,'</option>';
}
echo '</select>';

echo "<hr>";

// --------------- EXERCICE 9.1 ---------------------

echo "EXERCICE 9.1 <br/><hr>";


$tableau = explode("–", $table);
sort($tableau);

echo '<select>';
foreach ($tableau as $key => $value) {
	echo '<option>',$value,'</option>';
}
echo '</select>';


echo "<hr>";

// --------------- EXERCICE 10 ---------------------

echo "EXERCICE 10 <br/><hr>";



echo "<hr>";

// --------------- EXERCICE 11 ---------------------

echo "EXERCICE 11 <br/><hr>";

echo '
	<form action="" method="POST">
	<input type="radio" name="M" value="Monsieur" />Monsieur
	<input type="radio" name="M" value="Madame" />Madame
	<input type="radio" name="M" value="Mademoiselle" />Mademoiselle<br/>
	<label for="nom">Nom: </label><input type="text" name="nom" placeholder="nom..." required />
	<label for="prenom">Prenom: </label><input type="text" name="prenom" placeholder="prénom..." required /><br/>	
	

	<input type="submit" name="envoyer" value="Envoyer" /> 


	</form>';

	if(isset($_POST['envoyer'])) :

			foreach ($_POST as $key => $value) {
				$$key = $value;
			}
								
			echo "Bonjour, ",$M," ", $nom, " ", $prenom;				



endif;

echo "<hr>";

// --------------- EXERCICE 12 ---------------------

echo "EXERCICE 12 <br/><hr>";

echo '
	<form action="" method="POST">
	<input type="radio" name="M" value="Monsieur" />Monsieur
	<input type="radio" name="M" value="Madame" />Madame
	<input type="radio" name="M" value="Mademoiselle" />Mademoiselle<br/>
	<label for="nom">Nom: </label><input type="text" name="nom" placeholder="nom..." required />
	<label for="prenom">Prenom: </label><input type="text" name="prenom" placeholder="prénom..." required /><br/>
	<label for="prenom">Date Naissance: </label><input type="date" name="datenais" />	
	Animal préféré:
	<select name="animal">
	<option></option>	
	<option>Chats</option>
	<option>Chiens</option>
	<option>Chevales</option>
	<option>Poissons</option>
	<option>Oiseaux</option>
	</select>
	<br/>

	<input type="submit" name="envoyer" value="Envoyer" /> 


	</form>';

	if(isset($_POST['envoyer'])) :

			foreach ($_POST as $key => $value) {
				$$key = $value;
			}
			

			
			echo "Bonjour, ",$M," ", $nom, " ", $prenom, " votre animal préféré est: ", $animal;
			



endif;


echo "<hr>";


// --------------- EXERCICE 13 ---------------------

echo "EXERCICE 13 <br/><hr>";

echo '
	<form action="" method="POST">
	<input type="radio" name="M" value="Monsieur" />Monsieur
	<input type="radio" name="M" value="Madame" />Madame
	<input type="radio" name="M" value="Mademoiselle" />Mademoiselle<br/>
	<label for="nom">Nom: </label><input type="text" name="nom" placeholder="nom..." required />
	<label for="prenom">Prenom: </label><input type="text" name="prenom" placeholder="prénom..." required /><br/>
	<label for="prenom">Date Naissance: </label><input type="date" name="datenais" />	
	Animal préféré:
	<select name="animal">
	<option></option>	
	<option>Chats</option>
	<option>Chiens</option>
	<option>Chevales</option>
	<option>Poissons</option>
	<option>Oiseaux</option>
	</select>
	<br/>

	<input type="submit" name="envoyer" value="Envoyer" /> 


	</form>';

	if(isset($_POST['envoyer'])) :

			foreach ($_POST as $key => $value) {
				$$key = $value;
			}
			
$annee = explode("-", $datenais);
$age = date("Y") - $annee[0];
			
			echo "Bonjour, ",$M," ", $nom, " ", $prenom, " votre agê est ",$age, " et votre animal préféré est: ", $animal;
			



endif;


echo "<hr>";

// --------------- EXERCICE 14 ---------------------

echo "EXERCICE 14 <br/><hr>";

?>
	<form action="" method="POST">
	<input type="radio" name="M" value="Monsieur" />Monsieur
	<input type="radio" name="M" value="Madame" />Madame
	<input type="radio" name="M" value="Mademoiselle" />Mademoiselle<br/>
	<label for="nom">Nom: </label><input type="text" name="nom" placeholder="nom..." required />
	<label for="prenom">Prenom: </label><input type="text" name="prenom" placeholder="prénom..." required /><br/>
	<label for="prenom">Date Naissance: </label><input type="date" name="datenais" />	
	Animal préféré:
	<select name="animal">
	<option></option>	
	<option>Chats</option>
	<option>Chiens</option>
	<option>Chevales</option>
	<option>Poissons</option>
	<option>Oiseaux</option>
	</select>
	<br/> <?php
	echo '<select name="list1">';
foreach (explode("–", $table) as $key => $value) {
	echo '<option>',$value,'</option>';
}
echo '</select> ';

echo '<select name="list2"> ';
foreach (explode("–", $table) as $key => $value) {
	echo '<option>',$value,'</option>';
}
echo '</select> ';


echo '<select name="list3"> ';
foreach (explode("–", $table) as $key => $value) {
	echo '<option>',$value,'</option>';
}
echo '</select><br/>'; ?>

	<input type="submit" name="envoyer" value="Envoyer" /> 


	</form>
<?php

	if(isset($_POST['envoyer'])) :

			foreach ($_POST as $key => $value) {
				$$key = $value;
			}
			
$annee = explode("-", $datenais);
$age = date("Y") - $annee[0];
			
			echo "Bonjour, ",$M," ", $nom, " ", $prenom, " votre agê est ",$age, " et votre animal préféré est: ", $animal;
			



endif;





echo "<hr>";