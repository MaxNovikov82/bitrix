<?php require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");

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

if(empty($themeCode)){
    $APPLICATION->IncludeComponent(
        "bitrix:news.list", 
        "banner", 
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "AJAX_MODE" => "N",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "N",
            "DETAIL_URL" => "/news/#CODE#/",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "NEWS_COUNT" => "1",
            "IBLOCK_ID" => "2", 
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_ORDER1" => "DESC",
        ),
        false
    );
}


$APPLICATION->IncludeComponent(
    "bitrix:news.list", 
    "news_list", 
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "N",
        "DETAIL_URL" => "/news/#CODE#/",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "NEWS_COUNT" => "4",
        "IBLOCK_ID" => "2",
        "FILTER_NAME" => $themeId > 0 ? "arrFilter" : "",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
    ),
    false
);

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');

?>