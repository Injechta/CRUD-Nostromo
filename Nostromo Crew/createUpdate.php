<?php
	include 'mesFunctionsSQL.php';
	include 'mesFunctionsTable.php';
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$id = $_GET["id"];
		$nom = $_GET["nom"];
		$prenom = $_GET["prenom"];
		$age = $_GET["age"];
		$adresse = $_GET["adresse"];
		
	}
	

	if ($action == "CREATE") {
		createUser($nom, $prenom, $age, $adresse);

		echo "Membre d'équipage ajouté <br>";
		echo "<a href='index.php'>Membres d'équipage du Nostromo</a>";
		
	}
	
	if ($action == "UPDATE") {
		updateUser($id, $nom, $prenom, $age, $adresse);
		echo "Membre d'équipage mis à jour <br>";
		echo "<a href='index.php'>Membres d'équipage du Nostromo</a>";
	}
	if ($action == "DELETE") {
		deleteUser($id);
		echo "Membre d'équipage effacé <br>";
		echo "<a href='index.php'>Membres d'équipage du Nostromo</a>";
	}
	

	
?>