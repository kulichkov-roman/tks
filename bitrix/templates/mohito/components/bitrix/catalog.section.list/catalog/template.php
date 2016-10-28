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

//echo "<pre>"; var_dump($arResult["SECTIONS"]); echo "</pre>";

?>
<div class="row">
	<?foreach($arResult["SECTIONS"] as $arSection):
		$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
		$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
		?>
		<?if ($arSection["UF_IS_ON_MAIN_PAGE"]):?>
			<div class="col-sm-6 col-md-4 padd" id="<?=$this->GetEditAreaId($arSection['ID']);?>">
				<div class="work">
					<div class="layer"></div>
					<a href="<?=$arSection["SECTION_PAGE_URL"]?>">
						<div class="more"><i class="fa fa-plus"></i></div>
					</a>
					<img src="<?=$arSection["PICTURE"]["SRC"]?>" alt="" />
					<div class="title">
						<a href="<?=$arSection["SECTION_PAGE_URL"] ?>"><h6><?=$arSection["NAME"]?></h6></a>
					</div>
				</div><!-- end work -->
			</div>
		<?endif;?>
	<?endforeach;?>
</div>
