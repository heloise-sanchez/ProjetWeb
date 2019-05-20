<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>mesBibliothèques</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			.img-fluid {
				float: right;
			}
			#banane {
				background-color:#f0e6d5;
			}
		</style>
	</head>
	
	<body>
		<div class="container">
			<h2>Mes bibliothèques</h2>
			<img class="img-fluid" src="<?php echo base_url("assets/image/biblio.jpg");?>" alt="disques sur étagères et casque audio à côté">
			
			
			<h3> Mes compositeurs</h3>
			
			
			<ul>
			<?php foreach ($myComposers as $myComposer) { ?>
				<li><a id='banane' href="<?php echo base_url("Composer/getCompo/"),$myComposer->idCompo; ?>"><?php echo $myComposer->firstNameCompo,'',$myComposer->lastNameCompo;?></a></li>
			<?php } ?>
			</ul>
			
			
			<h3>Mes morceaux</h3>
		
			
			<ul>
			<?php foreach ($myMusics as $myMusic) { ?>
				<li><a id='banane' href="<?php echo $myMusic->linkMusic ?>" target="_blank"><?php echo $myMusic->nameMusic;?></a></li>
			<?php } ?>
			</ul>
			
		</div>
	</body>
</html>

<!-- End of file connectionView.php 
Location: ./ProjetWeb/application/views/connectionView.php -->