<?
use Bitrix\Main\Loader;

Loader::includeModule('iblock');

$configuration = \Bitrix\Main\Config\Configuration::getInstance();

$arSecIds = array();
$obCache = new CPHPCache();
$arCityList = array();
$cacheLifeTime = 3600;
$cacheID = 'arCityList';
$cachePath = '/yt/'.$cacheID;

if($obCache->InitCache($cacheLifeTime, $cacheID, $cachePath))
{
	$vars = $obCache->GetVars();
	$arCityList = $vars['arCityList'];
}
elseif($obCache->StartDataCache())
{
	$arSort = array(
		'SORT'=>'ASC'
	);
	$arSelect = array(
		'ID',
		'NAME'
	);
	$arFilter = array(
		'IBLOCK_ID' => $configuration->get('cityList'),
		'ACTIVE'    => 'Y',
	);

	$rsElements = \CIBlockElement::GetList(
		$arSort,
		$arFilter,
		false,
		false,
		$arSelect
	);

	while($arCityItem = $rsElements->Fetch())
	{
		$arCityList[$arCityItem['ID']] = $arCityItem;
	}

	$obCache->EndDataCache(array('arCityList' => $arCityList));
}
?>
<div class="city-select">
	<div class="city-select__current"><?=$_COOKIE['cityId'] ? $arCityList[$_COOKIE['cityId']]['NAME'] : $arCityList[$configuration->get('cityDefault')]['NAME']?></div>
	<ul class="city-select__dropdown">
		<?foreach($arCityList as $arCity){?>
			<li class="city-select__dropdown__item">
				<a class="city-select__dropdown__link js_city__link" data-city-id="<?=$arCity['ID']?>" href="javascript:void(0)"><?=$arCity['NAME']?></a>
			</li>
		<?}?>
	</ul>
</div>
