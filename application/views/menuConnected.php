<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>TemplateConnected</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			#list {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color:#6a151e;
			}

			#listComponent {
				float: left;
			}

			li a, .dropbtn {
				display: inline-block;
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}

			li a:hover, .dropdown:hover .dropbtn {
				background-color: #fd9393;
			}

			li.dropdown {
				display: inline-block;
			}

			.dropdown-content {
				display: none;
				position: absolute;
				background-color: #f9f9f9;
				min-width: 160px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				z-index: 1;
			}

			.dropdown-content a {
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
				text-align: left;
			}

			.dropdown-content a:hover {background-color: #f1f1f1;}

			.dropdown:hover .dropdown-content {
			  display: block;
			}
			#banane {
				color: black;
				background-color: #FDFAF8;
			}
		</style>

	<body>
		<div class="container">
				<ul id="list">
					<li id="listComponent"><a href="<?php echo base_url("Home");?>">Accueil</a></li>
				 
					<li id="listComponent" class="dropdown">
						<a href="javascript:void(0)" class="dropbtn">Compositeurs</a>
						<div class="dropdown-content">
							<a href="<?php echo base_url("ListComposer/getCompo/Allemagne");?>">Allemagne</a>
							<a href="<?php echo base_url("ListComposer/getCompo/Autriche");?>">Autriche</a>
							<a href="<?php echo base_url("ListComposer/getCompo/Etats-Unis");?>">Etats-Unis</a>
							<a href="<?php echo base_url("ListComposer/getCompo/France");?>">France</a>
							<a href="<?php echo base_url("ListComposer/getCompo/Italie");?>">Italie</a>
							<a href="<?php echo base_url("ListComposer/getCompo/Pologne");?>">Pologne</a>
							<a href="<?php echo base_url("ListComposer/getCompo/RepubliqueTcheque");?>">République Tchèque</a>
							<a href="<?php echo base_url("ListComposer/getCompo/Royaume-Uni");?>">Royaume-Uni</a>
							<a href="<?php echo base_url("ListComposer/getCompo/Russie");?>">Russie</a>
							<a href="<?php echo base_url("ListComposer/getCompo/Suede");?>">Suède</a>														
						</div>
					</li>
					<li id="listComponent"><a href="<?php echo base_url("Libraries");?>">Mes bibliothèques</a></li>
					<li id="listComponent"><a href="<?php echo base_url("Disconnection");?>">Se déconnecter</a></li>
				</ul>
		</div>
	</body>
</html>

<!-- End of file menu.php 
Location: ./ProjetWeb/application/views/menu.php -->