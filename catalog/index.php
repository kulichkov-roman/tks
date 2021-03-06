<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Каталог");
$APPLICATION->SetTitle("Каталог");
?>

    <section class="content">
        <div class="shop-items">
            <div class="container">
                <div class="row tabs">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "product_catalog_menu",
                        Array(
                            "ROOT_MENU_TYPE"        => "include",
                            "MENU_CACHE_TYPE"       => "A",
                            "MENU_CACHE_TIME"       => "3600",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS"   => "",
                            "MAX_LEVEL"             => "3",
                            "CHILD_MENU_TYPE"       => "left",
                            "USE_EXT"               => "Y",
                            "DELAY"                 => "N",
                            "ALLOW_MULTI_SELECT"    => "N",
                        ),
                        false
                    );?>

                    <div class="col-md-9 col-sm-9">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:catalog",
                            "product_catalog",
                            array(
                                "IBLOCK_TYPE"                      => "catalog",
                                "IBLOCK_ID"                        => getIBlockIdByCode("product_catalog"),
                                "SECTION_ID_VARIABLE"              => "SECTION_ID",
                                "SEF_MODE"                         => "Y",
                                "AJAX_MODE"                        => "N",
                                "AJAX_OPTION_JUMP"                 => "N",
                                "AJAX_OPTION_STYLE"                => "Y",
                                "AJAX_OPTION_HISTORY"              => "N",
                                "CACHE_TYPE"                       => "A",
                                "CACHE_TIME"                       => "36000000",
                                "CACHE_FILTER"                     => "N",
                                "CACHE_GROUPS"                     => "Y",
                                "SET_STATUS_404"                   => "N",
                                "SET_TITLE"                        => "Y",
                                "ADD_SECTIONS_CHAIN"               => "Y",
                                "ADD_ELEMENT_CHAIN"                => "Y",
                                "USE_ELEMENT_COUNTER"              => "Y",
                                "USE_FILTER"                       => "N",
                                "USE_COMPARE"                      => "N",
                                "PRICE_CODE"                       => array(),
                                "USE_PRICE_COUNT"                  => "N",
                                "SHOW_PRICE_COUNT"                 => "1",
                                "PRICE_VAT_INCLUDE"                => "Y",
                                "PRICE_VAT_SHOW_VALUE"             => "N",
                                "BASKET_URL"                       => "/personal/basket.php",
                                "ACTION_VARIABLE"                  => "action",
                                "PRODUCT_ID_VARIABLE"              => "id",
                                "USE_PRODUCT_QUANTITY"             => "N",
                                "ADD_PROPERTIES_TO_BASKET"         => "Y",
                                "PRODUCT_PROPS_VARIABLE"           => "prop",
                                "PARTIAL_PRODUCT_PROPERTIES"       => "N",
                                "PRODUCT_PROPERTIES"               => array(),
                                "SHOW_TOP_ELEMENTS"                => "Y",
                                "TOP_ELEMENT_COUNT"                => "9",
                                "TOP_LINE_ELEMENT_COUNT"           => "3",
                                "TOP_ELEMENT_SORT_FIELD"           => "sort",
                                "TOP_ELEMENT_SORT_ORDER"           => "asc",
                                "TOP_ELEMENT_SORT_FIELD2"          => "id",
                                "TOP_ELEMENT_SORT_ORDER2"          => "desc",
                                "TOP_PROPERTY_CODE"                => array(
                                    0 => "",
                                    1 => "",
                                ),
                                "TOP_VIEW_MODE"                    => "SECTION",
                                "SECTION_COUNT_ELEMENTS"           => "N",
                                "SECTION_TOP_DEPTH"                => "1",
                                "SECTIONS_VIEW_MODE"               => "TILE",
                                "SECTIONS_SHOW_PARENT_NAME"        => "Y",
                                "PAGE_ELEMENT_COUNT"               => "6",
                                "LINE_ELEMENT_COUNT"               => "3",
                                "ELEMENT_SORT_FIELD"               => "sort",
                                "ELEMENT_SORT_ORDER"               => "asc",
                                "ELEMENT_SORT_FIELD2"              => "id",
                                "ELEMENT_SORT_ORDER2"              => "desc",
                                "LIST_PROPERTY_CODE"               => array(
                                    0 => "",
                                    1 => "SPEC_VALUE",
                                    2 => "SPEC_NAME",
                                    3 => "OLD_PRICE",
                                    4 => "SPECIAL_OFFER",
                                    5 => "PRICE",
                                    6 => "",
                                ),
                                "INCLUDE_SUBSECTIONS"              => "N",
                                "LIST_META_KEYWORDS"               => "-",
                                "LIST_META_DESCRIPTION"            => "-",
                                "LIST_BROWSER_TITLE"               => "NAME",
                                "DETAIL_PROPERTY_CODE"             => array(
                                    0  => "",
                                    1  => "ARTICLE",
                                    2  => "BRAND",
                                    3  => "SPEC_VALUE",
                                    4  => "SPEC_NAME",
                                    5  => "OLD_PRICE",
                                    6  => "SPECIAL_OFFER",
                                    7  => "COLOR",
                                    8  => "PRICE",
                                    9  => "MORE_PHOTO",
                                    10 => "",
                                ),
                                "DETAIL_META_KEYWORDS"             => "-",
                                "DETAIL_META_DESCRIPTION"          => "-",
                                "DETAIL_BROWSER_TITLE"             => "NAME",
                                "DETAIL_DISPLAY_NAME"              => "Y",
                                "DETAIL_DETAIL_PICTURE_MODE"       => "IMG",
                                "DETAIL_ADD_DETAIL_TO_SLIDER"      => "N",
                                "DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
                                "LINK_IBLOCK_TYPE"                 => "",
                                "LINK_IBLOCK_ID"                   => "",
                                "LINK_PROPERTY_SID"                => "",
                                "LINK_ELEMENTS_URL"                => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
                                "USE_STORE"                        => "N",
                                "PAGER_TEMPLATE"                   => "news_list",
                                "DISPLAY_TOP_PAGER"                => "N",
                                "DISPLAY_BOTTOM_PAGER"             => "Y",
                                "PAGER_TITLE"                      => "Товары",
                                "PAGER_SHOW_ALWAYS"                => "N",
                                "PAGER_DESC_NUMBERING"             => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME"  => "36000",
                                "PAGER_SHOW_ALL"                   => "Y",
                                "TEMPLATE_THEME"                   => "blue",
                                "ADD_PICT_PROP"                    => "-",
                                "LABEL_PROP"                       => "-",
                                "MESS_BTN_BUY"                     => "Купить",
                                "MESS_BTN_ADD_TO_BASKET"           => "В корзину",
                                "MESS_BTN_COMPARE"                 => "Сравнение",
                                "MESS_BTN_DETAIL"                  => "Подробнее",
                                "MESS_NOT_AVAILABLE"               => "Нет в наличии",
                                "DETAIL_USE_VOTE_RATING"           => "N",
                                "DETAIL_USE_COMMENTS"              => "N",
                                "DETAIL_BRAND_USE"                 => "N",
                                "AJAX_OPTION_ADDITIONAL"           => "",
                                "FILTER_VIEW_MODE"                 => "VERTICAL",
                                "PRODUCT_QUANTITY_VARIABLE"        => "quantity",
                                "SEF_FOLDER"                       => "/catalog/",
                                "SECTIONS_HIDE_SECTION_NAME"       => "N",
                                "SEF_URL_TEMPLATES"                => array(
                                    "sections" => "",
                                    "section"  => "#SECTION_CODE#/",
                                    "element"  => "#SECTION_CODE#/#ELEMENT_CODE#/",
                                    "compare"  => "compare.php?action=#ACTION_CODE#",
                                ),
                                "VARIABLE_ALIASES"                 => array(
                                    "compare" => array(
                                        "ACTION_CODE" => "action",
                                    ),
                                )
                            ),
                            false
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>