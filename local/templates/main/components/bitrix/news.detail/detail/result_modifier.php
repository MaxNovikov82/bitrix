
<?php
if (!empty($arResult['PROPERTIES']['BIND']['VALUE'])) {

    $topics = [];

    foreach ($arResult['PROPERTIES']['BIND']['VALUE'] as $bindValue) {
        $res = CIBlockElement::GetByID($bindValue);
        if ($ar_res = $res->GetNext()) {
            $topics[$ar_res['ID']] = $ar_res['NAME'];
        }
    }
    $arResult['TOPICS'] = $topics;
}
    
?>
