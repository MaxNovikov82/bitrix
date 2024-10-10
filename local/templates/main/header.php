<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.cdnfonts.com/css/segoe-ui-4" rel="stylesheet">
		<link rel="icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/assets/img/Vector.png">
		<title><?$APPLICATION->ShowTitle();?></title>
		<script src="https://kit.fontawesome.com/34525fb119.js" crossorigin="anonymous"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/builds/assets_css_tyles_scss.index.css">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 	
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
	<div class="container">
		<nav class="navbar">
			<a href='/' >
				<div class="logo">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/assets/img/Vector.png">
					<p class="navbar-text">ГАЛАКТИЧЕСКИЙ<br>ВЕСТНИК</p>
				</div>
			</a>
		<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "Y",
		"CHILD_MENU_TYPE" => "subtop",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "top_menu"
	),
	false
);?>						
		</nav>
</body>