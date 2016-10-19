<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinks=$APPLICATION->IncludeComponent(
	"bizsolutions:menu.sections", 
	"", 
	array(
		"IS_SEF" => "Y",
		"SEF_BASE_URL" => "/catalog/",
		"SECTION_PAGE_URL" => "#SECTION_CODE#/",
		"DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_ID#",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => getIBlockIdByCode("product_catalog"),
		"SECTION_ID" => "",
		"DEPTH_LEVEL" => "4",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000"
	),
    false
);
// test_dump($aMenuLinks);
// $aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?> 