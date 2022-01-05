<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= media(); ?>/css/main.css">
	<title><?php echo $data['title']; ?></title>
</head>
<body>
	<?php headerMain(); ?>
	<!-- Slider -->
	<div class="container-slider">
		<div class="slider" id="slider">
			<div class="slider-section">
				<img src="<?= media(); ?>/img/slide1.png" class="slider-img">
			</div>
			<div class="slider-section">
				<img src="<?= media(); ?>/img/slide2.png" class="slider-img">
			</div>
			<div class="slider-section">
				<img src="<?= media(); ?>/img/slide3.png" class="slider-img">
			</div>
			<div class="slider-section">
				<img src="<?= media(); ?>/img/slide4.png" class="slider-img">
			</div>
		</div>
		<div class="slider-btn slider-btn-right" id="btn-right">&#62;</div>
		<div class="slider-btn slider-btn-left" id="btn-left">&#60;</div>
	</div>
	<br>
	Plantilla Index
	<br>
	<script src="<?= media(); ?>/js/main.js"></script>
	<?php footerMain(); ?>
</body>
</html>