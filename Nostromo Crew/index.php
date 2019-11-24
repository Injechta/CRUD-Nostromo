<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Crud:Équipage du Nostromo</title>
    </head>

    <body>
    
	<?php
		include 'mesFunctionsSQL.php';
		include 'mesFunctionsTable.php';

		$headers = getHeaderTable();
		$users = getAllUsers();
		afficherTableau($users, $headers);
	?>

	<a href=formulaireUtilisateur.php?id=0 >Ajouter un membre d'équipage au Nostromo</a> 
    </body>
</html>

