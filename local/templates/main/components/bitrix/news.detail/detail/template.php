<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
echo'<pre>';
print_r($arResult);
echo'</pre>';
?>

<div class="long-line"></div>
<div class="content">
    <div class="path">Главная / <p class="grey"><?= $arResult['NAME'] ?></p></div>
    <div class="title"><?= $arResult['NAME'] ?></div>
    <div class="card-date"><?= $arResult['ACTIVE_FROM'] ?></div>
    <div class="content-box">
        <div class="non-image">
            <div class="content-htext"><?= $arResult['PREVIEW_TEXT'] ?></div>
            <div class="content-text"><?= $arResult['DETAIL_TEXT'] ?></div>
            <a class="btn" href="/news"><button class="card-button-detail"><i class="fa-solid fa-arrow-left-long fa-2xl"></i><span class="card-button-text-detail"> НАЗАД К НОВОСТЯМ </span></button></a>
        </div>
      <img class="image" src="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>">
</div>

  <div class="themes">
    <b>Темы:</b>
    <div class="themes-text">
        <?php   
            if (!empty($arResult['TOPICS'])) {
                $topicLinks = []; 
                foreach ($arResult['TOPICS'] as $topicId => $topicName) {
                    $topicLinks[] = '<a href="/news/' . $topicId . '">' . htmlspecialchars($topicName) . '</a>';
                }
                echo implode(', ', $topicLinks);
              }
            ?>
          </div>
      </div>
      <?php
      if (!empty($_GET['THEME_ID'])): ?>
        echo '<a class="btn" href="/news"><button class="card-button-detail-topics"><i class="fa-solid fa-arrow-left-long fa-2xl"></i><span class="card-button-text-detail"> НАЗАД К НОВОСТЯМ </span></button></a>';
     <?php endif ?>
  </div>