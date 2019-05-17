<!DOCTYPE html>
<html>
	<head>
		<title>listCompoView</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<style>
			body{
				background-color:#FDFAF8;
			}
		</style>
	</head>
	
	<body>
		<h2>Compositeurs:  <?php echo $nationality; ?> </h2>
		<?php foreach ($composers as $composer){?>
			<ul>
				<li><a id='banane' href="<?php echo base_url("composer/getCompo/"),$composer->idCompo;?>"><?php echo $composer->lastNameCompo;?></a></li>
			</ul>	
		<?php } ?>
			
		
	</body>
</html>

<!-- End of file listCompoView.php 
Location: ./ProjetWeb/application/views/listCompoView.php -->

