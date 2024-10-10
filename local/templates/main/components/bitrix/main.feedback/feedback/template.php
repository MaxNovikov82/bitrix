<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
 foreach($arResult["ERROR_MESSAGE"] as $v)
  ShowError($v);
}
if($arResult["OK_MESSAGE"] <> '')
{
 ?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}

if (CModule::IncludeModule("iblock")) {
    $arSelect = Array("ID", "NAME"); 
    $arFilter = Array("IBLOCK_ID" => 3, "ACTIVE" => "Y"); 
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);

    $topics = [];
    while($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
        $topics[$arFields['ID']] = $arFields['NAME']; 
    }
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
 <div class="mf-name">
  <div class="mf-text">
   <?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
  </div>
  <input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
 </div>
 <div class="mf-email">
  <div class="mf-text">
   <?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
  </div>
  <input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
 </div>

 <div class="mf-topics">
        <div class="mf-text">
            <?=GetMessage("MFT_TOPICS")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("TOPICS", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
        </div>
        <select name="user_topics">
            <option value=""><?=GetMessage("MFT_SELECT_TOPIC")?></option>
            <?php foreach ($topics as $id => $name): ?>
                <option value="<?=$id?>"><?=$name?></option>
            <?php endforeach; ?>
			</select>
</div>			

 <div class="mf-message">
  <div class="mf-text">
   <?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
  </div>
  <textarea name="MESSAGE" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>
 </div>

 <?if($arParams["USE_CAPTCHA"] == "Y"):?>
 <div class="mf-captcha">
  <div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
  <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
  <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
  <div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
  <input type="text" name="captcha_word" size="30" maxlength="50" value="">
 </div>
 <?endif;?>
 <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
 <input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
</form>
</div>