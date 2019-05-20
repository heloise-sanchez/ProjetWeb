<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
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
			.container {
				text-align: left;
			}
			
			* {
			box-sizing: border-box;
			}
			.container {
				border-radius: 5px;
				background-color: #f5f5dc ;
				padding: 20px;
			}
			
			.col-25 {
				float: left;
				width: 25%;
				margin-top: 6px;
			}
			
			
			.col-75 {
				float: left;
				width: 75%;
				margin-top: 6px;
			}

			.row:after {
				content: "";
				display: table;
				clear: both;
			}
			
			@media screen and (max-width: 600px) {
				.col-25, .col-75, input[type=submit] {
				width: 100%;
				margin-top: 0;
				}er: none;
				border-radius: 4px;
				cursor: pointer;
				float: right;
			}
			
			
			
			
			input{
				width: 100%;
				padding: 12px;
				border: 1px solid #ccc;
				border-radius: 4px;
				resize: vertical;
			}
			
			label {
				padding: 12px 12px 12px 0;
				display: inline-block;
			}
			
			#submit {
				width: 100%;
				background-color: #6a151e;
				color: white;
				padding: 12px 20px;
				bordone;
				border-radius: 4px;
				cursor: pointer;
				float: right;
			}

			input[type=submit]:hover {
				background-color: #93726d;
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
		<div class="container">
			<h2><?php echo $title; ?></h2>

			<?php echo validation_errors(); ?>

			<?php echo form_open('Inscription/create'); ?>
				
				<div class="form-group">

					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" /><br />
					<?php echo set_value('email'); ?>

					<label for="idUser">Identifiant</label>
					<input type="text" class="form-control" name="idUser" /><br />
					<?php echo set_value('idUser'); ?>
					
					<label for="password">Mot de passe</label>
					<input type="password" class="form-control" name="password" /><br />

					<input id='submit' type="submit" name="submit" value="S'inscrire" />
				</div>

			<?php echo form_close(); ?>
			<a href="<?php echo base_url("Home");?>" class="button" role="button">Retourner à l'accueil</a>
		</div>
	</body>
</html>