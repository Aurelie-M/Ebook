<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Ebook </title>
	<link rel="stylesheet" type="text/css" href="./css/screen.css">
</head>
<body>

	<!-- barre de nav -->
		<div class="nav">
			<a href="index.php">
				<img src="img/logo.png" alt="Logo" class="logo"/>
			</a>

			<ul>
				<li> <a href="index.php"> <img src="img/home.png" alt="Retour accueil"/> </a> </li>
				<li> <a href="index.php"> <img src="img/connexion.png" alt="Se connecter"/> </a> </li>
				<li> <a href="index.php"> <img src="img/search.png"/> </a> </li>
			</ul>
		</div>
		<!-- content -->
		<div class="content">

			<div class="leftContent">

				<?php include("views/partials/_main_navigation.php"); ?>
				
			</div>

			<div class="rightContent">

				<?php include($datas['view']); ?>
				
			</div>
		</div>

		<!-- footer -->
		<div class="footer">
			<p> Bibliothèque d'Aurelie Mairesse </p>
		</div>	
</body>
</html>