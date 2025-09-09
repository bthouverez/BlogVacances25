<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Connexion</title>
</head>
<body>

<?php if($errorMessage != '') { ?>
	<p style="text-color: red; font-weight: bold"><?= $errorMessage ?></p>
<?php } ?>

<form action="index.php" method="post">
	<input placeholder="username" name="username" type="text">
	<input type="password" name="password" placeholder="Mot de passe">

	<!-- <input type="submit" name="btnConnect" value="Se connecter"> -->
	<button name="btnConnect">Se connecter</button>
</form>



</body>
</html>