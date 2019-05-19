<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			.img-fluid {
				width: 100%;
			}
			
		</style>
	</head>
	
	<body>
		<div class="container">
			<img class="img-fluid" src="<?php echo base_url("assets/image/home2.jpg");?>" alt="violon sur partition">
			<p>Bienvenue! Ce site a été réalisé dans le cadre d'un projet étudiant. Vous pouvez accéder à une liste de compositeurs classés par nationalité via l'onglet 'compositeurs'. Sur la page d'un compositeur, vous pouvez découvrir plusieurs informations le concernant et une liste de ses compositions les plus connues. En cliquant sur le nom d'une musique, vous pouvez écouter cette dernière (via Youtube). N'hésitez pas à vous inscrire et vous connecter afin d'ajouter des compositeurs et des morceaux à vos favoris. Bonne écoute!  </p>
		</div>
	</body>
</html>

<!-- End of file homeView.php 
Location: ./ProjetWeb/application/views/homeView.php -->