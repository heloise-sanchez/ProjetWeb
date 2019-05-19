<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
	<head>
		<title>listCompoView</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	
	</head>
	
	<body>
		<div class ="container">
			<h2>Compositeurs:  <?php echo $nationality; ?> </h2>
			<?php foreach ($composers as $composer){?>
				<ul>
					<li><a id='banane' href="<?php echo base_url("composer/getCompo/"),$composer->idCompo;?>"><?php echo $composer->lastNameCompo;?></a></li>
				</ul>	
			<?php } ?>
		</div>
		
	</body>
</html>

<!-- End of file listCompoView.php 
Location: ./ProjetWeb/application/views/listCompoView.php -->

