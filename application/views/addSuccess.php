<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Page Add with success</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			body{
				background-color:#FDFAF8;
			}
			h2{
				color: black;
				text-align: center;
			}
			.container {
				text-align: left;
			}
			input[type=button] {
				background-color: #93726d;
				color: #fff;
				text-align: center;
				border: none;
				border-radius: 15px;
				box-shadow: 0 5px #999;
				display: inline-block;
				padding: 10px 15px;
				font-size: 20px;
				cursor: pointer;
			}
			

			.button:hover {background-color: #93726d}

			.button:active {
				background-color: #6a151e;
				box-shadow: 0 5px #666;
				transform: translateY(4px);
			}
			
		</style>
		<script>
			function goBack() {
			  window.history.back()
			}
		</script>
	</head>
	<body>
		
		<div class="container">
			<h2>Votre bibliothèque a été mis à jour!</h2>
			<input class="button" type="button" value="Retour" onclick="goBack()">
		</div>
	</body>
</html>



<!-- End of file compoView.php 
Location: ./ProjetWeb/application/views/compoView.php -->