<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->setFrameMode(true);?>


<div class="row">
    <?$count = 1;?>
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="col-sm-6 col-md-3 padd" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="single_box style6 wow fadeInUp" data-wow-duration="<?=$count?>s" style="height: 400px; overflow: hidden;">
                <div class="icons_introimg image-icon"> <!-- Стало меньше классов -->
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""/> <!-- Вместо <i> <img> -->
                </div>
                <h3><?=$arItem["NAME"]?></h3>
                <p class="introtext"><?=$arItem["DETAIL_TEXT"]?></p>
            </div>
        </div>
        <?$count++;?>
    <?endforeach;?>
</div>