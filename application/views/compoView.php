<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Page compositeur</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			body{
				background-color:#FDFAF8;
			}
			#listComponent {
				color: black;
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
				float: right;
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
			<h2>
			<?php foreach ($images as $image){?>
			<img class="img-fluid" src="<?php echo base_url("assets/image/"),$image->srcimage;?>" alt="<?php>echo $image->altImage; ?>" style="float:left">
			<?php } ?>
			<?php foreach ($names as $name) {
				echo $name->firstNameCompo, ' ' , $name->lastNameCompo; 
				$idcompo=$name->idCompo;
			}?>
			</h2>
			
			<a href="<?php echo base_url("Composer/addCompoFav/"),$idcompo;?>" class="button" role="button">Ajouter à Mes compositeurs favoris</a>
			
			<?php foreach ($infos as $info) {?>
				<p id='info' >Date de naissance: <?php echo $info->birthDate;?></p> 
				
				<p id='info'>Date de décès: <?php echo $info->deathDate;?></p> 
				
				<p id='info'>Pays: <?php echo $info->nationality;?></p>
				
			<?php }?>
			<p id='info'>Epoque: 
			<?php foreach ($periods as $period) {
				echo $period->nameEra; 
			}?></p>

			<h3>Petite biographie:</h3>
			<?php foreach ($bios as $bio) { ?>
			<p><?php echo $bio->biography; ?></p> 
			<?php } ?>
			<h3>Ses oeuvres</h3>
			 <?php foreach($musics as $music) {?>
				<ul>
					<?php $idmusic=$music->idMusic; ?>
					<li><a id='banane' href="<?php echo $music->linkMusic;?>" target="_blank"><?php echo $music->nameMusic;?></a></li>
					<a href="<?php echo base_url("Composer/addMusicFav/"),$idmusic;?>" class="button" role="button">Ajouter à Mes morceaux favoris</a>
				</ul>								
			<?php } ?>
		</div>
	</body>
</html>



<!-- End of file compoView.php 
Location: ./ProjetWeb/application/views/compoView.php -->