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
			
		</style>
	</head>
	<body>
		
		<div class="container">
			<h2>
			<?php foreach ($images as $image){?>
			<img class="img-fluid" src="<?php echo $image->srcImage;?>" alt="<?php>echo $image->altImage; ?>" style="float:left">
			<?php } ?>
			<?php foreach ($names as $name) {
				echo $name->firstNameCompo, ' ' , $name->lastNameCompo; 
				$idcompo=$name->idCompo;
			}?>
			</h2>
			
			<a href="<?php echo base_url("composer/addCompoFav/"),$idcompo;?>" class="btn btn-info" role="button">Ajouter à Mes compositeurs favoris</a>
			
			<?php foreach ($infos as $info) {?>
				<p>Date de naissance:</p>
				<?php echo $info->birthDate;?>
				<p>Date de décès:</p>
				<?php echo $info->deathDate;?>
				<p>Pays:</p>
				<?php echo $info->nationality;?>
			<?php }?>
			<p>Epoque:</p>
			<?php foreach ($periods as $period) {
				echo $period->nameEra; 
			}?>

			<h3>Petite biographie:</h3>
			<?php foreach ($bios as $bio) { ?>
			<p><?php echo $bio->biography; ?></p> 
			<?php } ?>
			<h3>Ses oeuvres</h3>
			 <?php foreach($musics as $music) {?>
				<ul>
					<?php $idmusic=$music->idMusic; ?>
					<li><a id='banane' href="<?php echo $music->linkMusic;?>" target="_blank"><?php echo $music->nameMusic;?></a></li>
					<a href="<?php echo base_url("composer/addMusicFav/"),$idmusic;?>" class="btn btn-info" role="button">Ajouter à Mes morceaux favoris</a>
				</ul>								
			<?php } ?>
		</div>
	</body>
</html>



<!-- End of file compoView.php 
Location: ./ProjetWeb/application/views/compoView.php -->