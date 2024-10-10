<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.cdnfonts.com/css/segoe-ui-4" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="/assets/img/Vector.png">
	<title><?= $code ?></title>
	<script src="https://kit.fontawesome.com/34525fb119.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="/builds/assets_css_tyles_scss.index.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
	<nav class="navbar">
		<div class="logo">
			<img src="/assets/img/Vector.png">
			<p class="navbar-text">ГАЛАКТИЧЕСКИЙ<br>ВЕСТНИК</p>
		</div>
	</nav>

	<?= $content ?>

	<div class="footer" style="position: relative;">
	<div class="line"></div>
			<div class="copyright">
				© 2023 — 2412 «Галактический вестник»
			</div>
		</div>
	</div>
</body>
</html>