<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>mesBibliothèques</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>
		<div class="container">
			<h2>Mes bibliothèques</h2>
			
			<h3> Mes compositeurs</h3>
			<img class="img-fluid" src="compositeurs.jpg" alt="compositeurs">
			
			<ul>
			<?php foreach ($myComposers as $myComposer) { ?>
				<li><a id='banane' href="<?php echo base_url("composer/getCompo/"),$myComposer->idCompo; ?>"><?php echo $myComposer->firstNameCompo,'',$myComposer->lastNameCompo;?></a></li>
			<?php } ?>
			</ul>
			
			
			<h3>Mes morceaux</h3>
			<img class="img-fluid" src="morceaux.jpg" alt="disques sur étagères et casque audio à côté">
			
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