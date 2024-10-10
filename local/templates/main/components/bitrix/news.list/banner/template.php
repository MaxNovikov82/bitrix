<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="news-list">
	<? if($arParams["DISPLAY_TOP_PAGER"]): ?>
		<?= $arResult["NAV_STRING"] ?><br />
	<? endif; ?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="banner" >
			<img class="ban-image" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>">
			<div class="ban-text">
				<div class="ban-text-title"><?= $arItem['NAME'] ?></div>
				<div class="ban-text-body"><?= $arItem['PREVIEW_TEXT'] ?></div>
			</div>
		</div>
	<? endforeach; ?>
</div>
