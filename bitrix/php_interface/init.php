<?
function pre($var, $die = false, $all = false)
{
    global $USER;

    if (($USER->GetID() == 1) || ($all == true)) {
        ?>
        <pre><? print_r($var) ?></pre>
    <?
    }
    if ($die) {
        die;
    }
}

function test_dump($var)
{
    global $USER;
    if (($USER->GetID() == 1)) {
        ?>
        <font style="text-align: left; font-size: 10px">
            <pre><? var_dump($var) ?></pre>
        </font><br>
    <?
    }

}

function getIBlockIdByCode($code, $sid = SITE_ID)
{
    $result = false;
    if (CModule::IncludeModule("iblock")) {
        $res = CIBlock::GetList(Array(), Array("CODE" => $code . "_" . $sid), true);
        if ($ar_res = $res->Fetch()) {
            $result = $ar_res["ID"];
        }
    }

    return $result;
}

function getPropertyIdByCode($iblock, $code)
{
    $result = false;
    if (CModule::IncludeModule("iblock")) {
        $res = CIBlockProperty::GetList(Array(), Array("IBLOCK_ID" => $iblock, "CODE" => $code));
        if ($ar_res = $res->Fetch()) {
            $result = $ar_res["ID"];
        }
    }

    return $result;
}


?>