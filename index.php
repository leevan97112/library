<?php

session_start();


//$user='Leevan';
//$password_definited='971123';


if(isset($_POST['submit'])){
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];
 header('location:admin.php');
	
	}else{
		echo 'veuillez remplir tous les champs';
	}



?>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<a href="register.php">S'inscrire</a>
<h1 class="title">Connexion</h1>
<form action="" method="POST">
	<h3>Identifiant :</h3><input type="text" name="username"><br/><br/>
	<h3>Mot de passe :</h3><input type="password" name="password"><br/><br/>
	<input type="submit" name="submit"><br/><br/>
</form>


</body>
