<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$configuration = \Bitrix\Main\Config\Configuration::getInstance();

$arIds = array();
foreach($arResult['SECTIONS'] as &$arSection)
{
	if(is_array($arSection['PICTURE']))
	{
		$arIds[] = $arSection['PICTURE']['ID'];
	}
}
unset($arSection);


if(sizeof($arIds) > 0)
{
	$strIds = implode(',', $arIds);


	$fl = new CFile;


	$arOrder = array();
	$arFilter = array(
		'MODULE_ID' => 'iblock',
		'@ID' => $strIds
	);


	$arPreviewPicture = array();


	$rsFile = $fl->GetList($arOrder, $arFilter);
	while($arItem = $rsFile->GetNext())
	{
		$arPreviewPicture[$arItem['ID']] = $arItem;
		$urlPreviewPicture = itc\Resizer::get($arItem['ID'], 'w350cr');


		$arPreviewPicture[$arItem['ID']]['SRC'] = $urlPreviewPicture;
	}


	foreach($arResult['SECTIONS'] as &$arSection)
	{
		if(is_array($arSection['PICTURE']))
		{
			$arSection['PICTURE']['SRC'] = $arPreviewPicture[$arSection['PICTURE']['ID']]['SRC'];
		}
		else
		{
			$arSection['PICTURE']['SRC'] = itc\Resizer::get($configuration->get('w350crPlugId'), 'w350cr');
		}
	}
	unset($arSection);
}
else
{
	foreach($arResult['SECTIONS'] as &$arSection)
	{
		$arSection['PICTURE']['SRC'] = itc\Resizer::get($configuration->get('w350crPlugId'), 'w350cr');
	}
	unset($arSection);
}
?>
