<?php 
	
	function getDatabaseConnexion() {
		try {
		    $user = "phpmyadmin";
			$pass = "root";
			$pdo = new PDO('mysql:host=localhost;dbname=tuto_php', $user, $pass);
			 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
			
		} catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}
	}

	
	// récupere tous les users
	function getAllUsers() {
		$con = getDatabaseConnexion();
		$requete = 'SELECT * from utilisateurs';
		$rows = $con->query($requete);
		return $rows;
	}

	// creer un user
	function createUser($nom, $prenom, $age, $adresse) {
		try {
			$con = getDatabaseConnexion();
			$sql = "INSERT INTO utilisateurs (nom, prenom, age, adresse) 
					VALUES ('$nom', '$prenom', '$age' ,'$adresse')";
	    	$con->exec($sql);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	//recupere un user
	function readUser($id) {
		$con = getDatabaseConnexion();
		$requete = "SELECT * from utilisateurs where id = '$id' ";
		$stmt = $con->query($requete);
		$row = $stmt->fetchAll();
		if (!empty($row)) {
			return $row[0];
		}
		
	}

	//met à jour le user
	function updateUser($id, $nom, $prenom, $age, $adresse) {
		try {
			$con = getDatabaseConnexion();
			$requete = "UPDATE utilisateurs set 
						nom = '$nom',
						prenom = '$prenom',
						age = '$age',
						adresse = '$adresse' 
						where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	// suprime un user
	function deleteUser($id) {
		try {
			$con = getDatabaseConnexion();
			$requete = "DELETE from utilisateurs where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	function getNewUser() {
		$user['id'] = "";
		$user['nom'] = "";
		$user['prenom'] = "";
		$user['age'] = "";
		$user['adresse'] = "";
		
	}
	


 ?>