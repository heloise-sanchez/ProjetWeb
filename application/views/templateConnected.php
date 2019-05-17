<html>
	<head>
		<title>TemplateConnected</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			.page-header{
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: white;
				color: Tomato;
				text-align: center;
			}
			
			#list {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color:Tomato;
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
			
			.footer {
				background-color: #F1EDE9;
			}
		</style>
	</head>
	
	<body>
		<!-- Header -->
		<div class="page-header">
			<h1>Ma boîte à musique</h1> 
		</div>
		
		<!-- Menu -->
		<div class="container">
			<ul id="list">
				<li id="listComponent"><a href="#try">Accueil</a></li>
			 
				<li id="listComponent" class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">Compositeurs</a>
					<div class="dropdown-content">
						<a href="#allemagne">Allemagne</a>
						<a href="#autriche">Autriche</a>
						<a href="#us">Etats-Unis</a>
						<a href="#france">France</a>
						<a href="#italie">Italie</a>
						<a href="#uk">Royaume-Uni</a>
						<a href="#russie">Russie</a>
					</div>
				</li>
				<li id="listComponent"><a href="chronology.php">Chronologie</a></li>
				<li id="listComponent"><a href="library.php">Ma bibliothèque</a></li>
				<li id="listComponent"><a href="deconnection.php">Se déconnecter</a></li>
			</ul>
		</div>
		
		
		
		<!--display view -->
		<div>
			<?php echo '$page'; ?>
		</div>
		
		<!-- Footer -->
		<footer class="page-footer font-small pt-4">

			<div class="jumbotron text-center" style="margin-bottom:0">
				<h5 class="text-uppercase">Ma boîte à musique</h5>
				<p>Ce site a été réalisé par Héloïse Sanchez, élève à Polytech Montpellier, dans le cadre d'un projet étudiant.</p>
				
			</div>
		</footer>
	

	</body>
</html>

<!-- End of file templateConnected.php 
Location: ./ProjetWeb/application/views/templateConnected.php -->