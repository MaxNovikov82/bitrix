<?php
$arPrepItems = [];
if (!empty($arResult)) {
    foreach ($arResult as $key => $item) {
        if ($item['DEPTH_LEVEL'] === 1) {
            $arPrepItems[] = $item;
        } else {
            if ($arPrepItems[end(array_keys($arPrepItems))]['TEXT'] === "Новости") {
                $arPrepItems[end(array_keys($arPrepItems))]['subitems'][] = $item;
            } elseif ($arPrepItems[end(array_keys($arPrepItems))]['TEXT'] === "О нас") {
                $arPrepItems[end(array_keys($arPrepItems))]['subitems'][] = $item;
            }
        }
    } 
}
$arResult = $arPrepItems;
//изменения




// вывод элементов

