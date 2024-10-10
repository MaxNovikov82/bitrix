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
$themeCode = isset($_GET['THEME_CODE']) ? $_GET['THEME_CODE'] : ""; 
$themeId = 0; 

if ($themeCode) {
    $resTheme = CIBlockElement::GetList(
        array(),
        array(
            "IBLOCK_ID" => 3, 
            "CODE" => $themeCode,
            "ACTIVE" => "Y"
        ),
        false,
        false,
        array("ID", "NAME") 
    );

    if ($arTheme = $resTheme->GetNext()) {
        $themeId = $arTheme["ID"]; 
        $GLOBALS['arrFilter'] = [
            'PROPERTY_BIND' => $themeId  
        ];
    }
}
?>

<div class="news-list">
    <div class="news">
    <div class="news-title">
    <? if(!(empty($themeCode))){ 
        echo '<h2 class="news-title" >Новости на тему: '.$arTheme['NAME'].'</h2>';
    } else {
        echo '<h2 class="news-title" >Новости </h2>';
    }    
    ?>
</div>
        <div class="blocks">
            <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                <div class="card">
                    <div class="card-date">
                        <p class="card-date-text"><?= $arItem['ACTIVE_FROM'] ?></p>
                    </div>
                    <div class="card-title"><?= $arItem['NAME'] ?></div>
                    <div class="card-text"><?= $arItem['PREVIEW_TEXT'] ?></div>
                    <a class="btn" href="/news/detail/<?= $arItem['ID'] ?>"><button class="card-button"><span class="card-button-text"> ПОДРОБНЕЕ </span> <i class="fa-solid fa-arrow-right-long fa-2xl"></i></button></a>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="paginator">
        <?php
            $pagesCount = $arResult['NAV_RESULT']->NavPageCount;
            $page = $arResult['NAV_RESULT']->NavPageNomer;
        ?>
        <?php for ($i = 1; $i <= $pagesCount; $i++): ?>
            <a class="circle <?= ($page == $i) ? 'chosen' : '' ?>" href="/news/page/<?= $i ?>">
                <?= $i ?>
            </a>
        <?php endfor; ?>
        </div>
    </div>
</div>