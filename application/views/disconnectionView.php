<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Page connexion</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			a{
				float:right
			}

			body {
				background-color:#FDFAF8;
			}
			h2{
				color: black;
				text-align: center;
			}
			.button {
				display: inline-block;
				padding: 10px 15px;
				font-size: 20px;
				cursor: pointer;
				text-align: center;
				text-decoration: none;
				outline: none;
				color: #fff;
				background-color:#6a151e;
				border: none;
				border-radius: 15px;
				box-shadow: 0 5px #999;
			}

			.button:hover {background-color: #93726d}

			.button:active {
				background-color: #6a151e;
				box-shadow: 0 5px #666;
				transform: translateY(4px);
			}
		</style>
	</head>
	
	<body>
		<h2>Vous êtes déconnecté! A bientôt!</h2>
		
		<a href="<?php echo base_url("home/")?>" class="button" role="button">Retourner à l'accueil</a>
	</body>
</html>

<!-- End of file connectionSuccessView.php 
Location: ./ProjetWeb/application/views/connectionSuccessView.php -->