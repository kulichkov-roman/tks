<?
require($_SERVER["DOCUMENT_ROOT"]. "/bitrix/modules/main/include/prolog_before.php");

header('Content-Type:application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');

if($_REQUEST['setUserId'])
{
    setcookie('cityId', IntVal($_REQUEST['setUserId']), time() + 604800, "/");
    $arResult['status'] = 1;
}
else
{
    $arResult['status'] = 0;
}

print json_encode($arResult);
?>
