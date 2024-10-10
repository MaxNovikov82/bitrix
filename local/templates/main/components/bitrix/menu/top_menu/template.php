<?
//  echo '<pre>';
//  print_r($arResult);
//  echo '</pre>';
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<? if (!empty($arResult)): ?>
<ul class="left-menu">
<? foreach($arResult as $arItem): ?>
    <? if ($arItem['SELECTED']): ?>
        <li class="has-submenu">
            <a href="<?= $arItem["LINK"]?>" class="selected">
                <?= $arItem["TEXT"] ?> <?if (!empty($arItem['subitems'])): ?> <span class="arrow">&#9660;</span><?endif;?>
            </a>
            <?if (!empty($arItem['subitems'])):?>
                <ul class="submenu">
                    <?foreach ($arItem['subitems'] as $subItem):?>
                        <li><a href="<?= $subItem['LINK']?>"><?=$subItem['TEXT'] ?></a></li>
                    <?endforeach;?>
                </ul>
            <?endif;?>
        </li>
    <?else:?>
        <li class="<?= !empty($arItem['subitems']) ? 'has-submenu' : '' ?>">
            <a href="<?=$arItem["LINK"]?>">
                <?= $arItem["TEXT"]?> <?if (!empty($arItem['subitems'])): ?> <span class="arrow">&#9660;</span><?endif;?>
            </a>
            <?if (!empty($arItem['subitems'])):?>
                <ul class="submenu">
                    <?foreach ($arItem['subitems'] as $subItem):?>
                        <li><a href="<?=$subItem['LINK']?>"><?=$subItem['TEXT']?></a></li>
                    <?endforeach;?>
                </ul>
            <?endif;?>
        </li>
    <?endif?>
<?endforeach?>
</ul>
<?endif?>