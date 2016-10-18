<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "Главная");
$APPLICATION->SetTitle("Главная");
?>

	<!-- layerSlider -->
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "slider_homepage",
        array(
            "IBLOCK_TYPE" => "main_page",
            "IBLOCK_ID" => getIBlockIdByCode("main_slider"),
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "",
            "SORT_ORDER1" => "",
            "SORT_BY2" => "",
            "SORT_ORDER2" => "",
            "FILTER_NAME" => "",
            "FIELD_CODE" => array(
                0 => "DETAIL_PICTURE",
                1 => "",
            ),
            "PROPERTY_CODE" => array(
                0 => "SLIDE_TITLE",
                1 => "SLIDE_SUBTITLE",
                2 => "BUTTON_LINK",
                3 => "SLIDE_TEXT",
                4 => "BUTTON_TEXT",
                5 => "BACKGROUND",
            ),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "Y",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "Y",
            "PAGER_TEMPLATE" => "",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "Y",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_OPTION_ADDITIONAL" => "",
            "SET_BROWSER_TITLE" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_META_DESCRIPTION" => "Y"
        ),
        false
    );?>
    <!-- end layerSlider -->

    <!-- service -->
    <section class="content section-grey">
        <div class="container">
            <div class="row">
                <h4 class="text-center">
                    <? $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '',
                        array(
                            'AREA_FILE_SHOW'   => 'sect',
                            'AREA_FILE_SUFFIX' => 'services',
                        )
                    ); ?>
                </h4>
                <div class="line"></div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "services_main_page",
                    array(
                        "IBLOCK_TYPE" => "-",
                        "IBLOCK_ID" => getIBlockIdByCode("our_services"),
                        "NEWS_COUNT" => "4",
                        "SORT_BY1" => "",
                        "SORT_ORDER1" => "",
                        "SORT_BY2" => "",
                        "SORT_ORDER2" => "",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "PROPERTY_CODE" => array(
                            0 => "ICON_CODE",
                            1 => "LINK",
                            2 => "ICON_COLOR",
                            3 => "",
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "Y",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "PAGER_TEMPLATE" => "",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "Y",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "Y",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y"
                    ),
                    false
                );?>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- end service -->

	<!-- why-we-are-the-best -->
 	<?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "why_we_are_the_best",
        array(
            "IBLOCK_TYPE" => "main_page",
            "IBLOCK_ID" => getIBlockIdByCode("why_we_are_the_best"),
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "",
            "SORT_ORDER1" => "",
            "SORT_BY2" => "",
            "SORT_ORDER2" => "",
            "FILTER_NAME" => "",
            "FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "PROPERTY_CODE" => array(
                0 => "HEADERS_ICON_LIST",
                1 => "HIGHLIGHT_HEADER",
                2 => "ICONS_CODE",
                3 => "BUTTON_TEXT",
                4 => "ICONS_TEXT",
                5 => "SLIDER_IMGS",
                6 => "",
            ),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "Y",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "Y",
            "PAGER_TEMPLATE" => "",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "Y",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_OPTION_ADDITIONAL" => "",
            "SET_BROWSER_TITLE" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_META_DESCRIPTION" => "Y"
        ),
        false
    );?>
    <!-- end why-we-are-the-best -->

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/get_in_touch.php"
        )
    );?>

    <!-- portfolio -->
    <section class="content section-grey">
        <div class="container portfolio">
            <h4 class="text-center">
                <? $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '',
                    array(
                        'AREA_FILE_SHOW'   => 'sect',
                        'AREA_FILE_SUFFIX' => 'portfolio_1',
                    )
                ); ?>
            </h4>
            <div class="line"></div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "portfolio_main_page",
                array(
                    "IBLOCK_TYPE" => "general_information",
                    "IBLOCK_ID" => getIBlockIdByCode("portfolio"),
                    "NEWS_COUNT" => "50",
                    "SORT_BY1" => "",
                    "SORT_ORDER1" => "",
                    "SORT_BY2" => "",
                    "SORT_ORDER2" => "",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "DETAILS_LIST",
                        2 => "IS_ON_MAIN_PAGE",
                        3 => "SECTION",
                        4 => "PROJECT_LINK",
                        5 => "TECHNOLOGIES_LIST",
                        6 => "",
                    ),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "/portfolio/#ELEMENT_CODE#/",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "Y",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "PAGER_TEMPLATE" => "",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "Y",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "N",
                    "DISPLAY_PICTURE" => "N",
                    "DISPLAY_PREVIEW_TEXT" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_META_DESCRIPTION" => "Y"
                ),
                false
            );?>
            <div class="row">
                <div class="col-sm-12 col-md-12 padd">
                    <? $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '',
                        array(
                            'AREA_FILE_SHOW'   => 'sect',
                            'AREA_FILE_SUFFIX' => 'portfolio_2',
                        )
                    ); ?>
                </div>
            </div>
        </div><!-- end container -->
    </section>
    <!-- end portfolio -->

	<!-- happy clients -->
    <section id="happy-clients" class="content section-parallax" style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/img/team-smiling.jpg); ">
        <div class="layer"></div>
        <div class="container text-center">
            <div class="row parallax-content">
                <h4>
                    <? $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '',
                        array(
                            'AREA_FILE_SHOW'   => 'sect',
                            'AREA_FILE_SUFFIX' => 'clients',
                        )
                    ); ?>
                </h4>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "happy_clients",
                    array(
                        "IBLOCK_TYPE" => "about_us",
                        "IBLOCK_ID" => getIBlockIdByCode("clients"),
                        "NEWS_COUNT" => "6",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => array(
                            0 => "DETAIL_PICTURE",
                        ),
                        "PROPERTY_CODE" => array(
                            0 => "ITEM_LINK",
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "/",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "Y",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "PAGER_TEMPLATE" => "",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "Y",
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "N",
                        "DISPLAY_PICTURE" => "N",
                        "DISPLAY_PREVIEW_TEXT" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y"
                    ),
                    false
                );?>
            </div><!-- end row -->
        </div><!--end container -->
    </section>
    <!-- end happy clients -->

	<!-- about-us-section -->
    <section class="content">
    	<div class="container">
            <div class="row">
                <h4 class="text-center">
                    <? $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '',
                        array(
                            'AREA_FILE_SHOW'   => 'sect',
                            'AREA_FILE_SUFFIX' => 'team',
                        )
                    ); ?>
                </h4>
                <div class="line"></div>
                <div class="col-sm-12">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "our_team_main_page",
                        array(
                            "IBLOCK_TYPE" => "about_us",
                            "IBLOCK_ID" => getIBlockIdByCode("our_team"),
                            "NEWS_COUNT" => "4",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_ORDER1" => "DESC",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER2" => "ASC",
                            "FILTER_NAME" => "",
                            "FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "STAFF_POSITION",
                                2 => "STAFF_SOCIAL",
                                3 => "",
                            ),
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "/",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "AJAX_OPTION_HISTORY" => "N",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "36000000",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "ACTIVE_DATE_FORMAT" => "",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "Y",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "PAGER_TEMPLATE" => "",
                            "DISPLAY_TOP_PAGER" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "PAGER_TITLE" => "Новости",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "Y",
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "N",
                            "DISPLAY_PICTURE" => "N",
                            "DISPLAY_PREVIEW_TEXT" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "SET_BROWSER_TITLE" => "Y",
                            "SET_META_KEYWORDS" => "Y",
                            "SET_META_DESCRIPTION" => "Y"
                        ),
                        false
                    );?>
                </div>

                <div class="col-sm-12 padd">
                    <div class="col-sm-6 col-md-4 padd">
                        <h5 class="heading heading-v3">
                            <span>
                                <? $APPLICATION->IncludeComponent(
                                    'bitrix:main.include',
                                    '',
                                    array(
                                        'AREA_FILE_SHOW'   => 'sect',
                                        'AREA_FILE_SUFFIX' => 'about_1',
                                    )
                                ); ?>
                            </span>
                        </h5>
                        <!-- collapse -->
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "few_words_about_us",
                            array(
                                "IBLOCK_TYPE" => "main_page",
                                "IBLOCK_ID" => getIBlockIdByCode("few_words_about"),
                                "NEWS_COUNT" => "50",
                                "SORT_BY1" => "ACTIVE_FROM",
                                "SORT_ORDER1" => "DESC",
                                "SORT_BY2" => "SORT",
                                "SORT_ORDER2" => "ASC",
                                "FILTER_NAME" => "",
                                "FIELD_CODE" => array(),
                                "PROPERTY_CODE" => array(
                                    0 => "STAFF_POSITION",
                                    1 => "SOCIAL_LINK",
                                ),
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "/",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "AJAX_OPTION_HISTORY" => "N",
                                "CACHE_TYPE" => "A",
                                "CACHE_TIME" => "36000000",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "ACTIVE_DATE_FORMAT" => "",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "Y",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "PARENT_SECTION" => "",
                                "PARENT_SECTION_CODE" => "",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "PAGER_TEMPLATE" => "",
                                "DISPLAY_TOP_PAGER" => "N",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "PAGER_TITLE" => "Новости",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "Y",
                                "DISPLAY_DATE" => "N",
                                "DISPLAY_NAME" => "N",
                                "DISPLAY_PICTURE" => "N",
                                "DISPLAY_PREVIEW_TEXT" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "SET_BROWSER_TITLE" => "Y",
                                "SET_META_KEYWORDS" => "Y",
                                "SET_META_DESCRIPTION" => "Y"
                            ),
                            false
                        );?>
                    </div>

                    <div class="col-md-4 padd">
                        <h5 class="heading heading-v3">
                            <span>
                                <? $APPLICATION->IncludeComponent(
                                    'bitrix:main.include',
                                    '',
                                    array(
                                        'AREA_FILE_SHOW'   => 'sect',
                                        'AREA_FILE_SUFFIX' => 'about_2',
                                    )
                                ); ?>
                            </span>
                        </h5>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "our_highlights",
                            array(
                                "IBLOCK_TYPE" => "main_page",
                                "IBLOCK_ID" => getIBlockIdByCode("our_highlights"),
                                "NEWS_COUNT" => "1",
                                "SORT_BY1" => "ACTIVE_FROM",
                                "SORT_ORDER1" => "DESC",
                                "SORT_BY2" => "SORT",
                                "SORT_ORDER2" => "ASC",
                                "FILTER_NAME" => "",
                                "FIELD_CODE" => array(),
                                "PROPERTY_CODE" => array(
                                    0 => "HIGHLIGHTS",
                                ),
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "/",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "AJAX_OPTION_HISTORY" => "N",
                                "CACHE_TYPE" => "A",
                                "CACHE_TIME" => "36000000",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "ACTIVE_DATE_FORMAT" => "",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "Y",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "PARENT_SECTION" => "",
                                "PARENT_SECTION_CODE" => "",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "PAGER_TEMPLATE" => "",
                                "DISPLAY_TOP_PAGER" => "N",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "PAGER_TITLE" => "Новости",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "Y",
                                "DISPLAY_DATE" => "N",
                                "DISPLAY_NAME" => "N",
                                "DISPLAY_PICTURE" => "N",
                                "DISPLAY_PREVIEW_TEXT" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "SET_BROWSER_TITLE" => "Y",
                                "SET_META_KEYWORDS" => "Y",
                                "SET_META_DESCRIPTION" => "Y"
                            ),
                            false
                        );?>
                    </div>

                    <div class="col-sm-12 col-md-4 padd">
                        <h5 class="heading heading-v3">
                            <span>
                                <? $APPLICATION->IncludeComponent(
                                    'bitrix:main.include',
                                    '',
                                    array(
                                        'AREA_FILE_SHOW'   => 'sect',
                                        'AREA_FILE_SUFFIX' => 'about_3',
                                    )
                                ); ?>
                            </span>
                        </h5>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "our_skills_main",
                            array(
                                "IBLOCK_TYPE" => "about_us",
                                "IBLOCK_ID" => getIBlockIdByCode("we_good_at"),
                                "NEWS_COUNT" => "50",
                                "SORT_BY1" => "ACTIVE_FROM",
                                "SORT_ORDER1" => "DESC",
                                "SORT_BY2" => "SORT",
                                "SORT_ORDER2" => "ASC",
                                "FILTER_NAME" => "",
                                "FIELD_CODE" => array(),
                                "PROPERTY_CODE" => array(
                                    0 => "PERCENT",
                                ),
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "/",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "AJAX_OPTION_HISTORY" => "N",
                                "CACHE_TYPE" => "A",
                                "CACHE_TIME" => "36000000",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "ACTIVE_DATE_FORMAT" => "",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "Y",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "PARENT_SECTION" => "",
                                "PARENT_SECTION_CODE" => "",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "PAGER_TEMPLATE" => "",
                                "DISPLAY_TOP_PAGER" => "N",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "PAGER_TITLE" => "Новости",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "Y",
                                "DISPLAY_DATE" => "N",
                                "DISPLAY_NAME" => "N",
                                "DISPLAY_PICTURE" => "N",
                                "DISPLAY_PREVIEW_TEXT" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "SET_BROWSER_TITLE" => "Y",
                                "SET_META_KEYWORDS" => "Y",
                                "SET_META_DESCRIPTION" => "Y"
                            ),
                            false
                        );?>
                    </div><!-- end col-sm-4 -->
                </div>
            </div>
        </div>
    </section>

    <!-- in digits -->
    <?$APPLICATION->IncludeComponent(
		  "bitrix:news.list",
		  "in_digits_index_page",
		  Array(
		      "IBLOCK_TYPE" => "about_us",
		      "IBLOCK_ID" => getIBlockIdByCode("digits"),
		      "NEWS_COUNT" => "4",
		      "SORT_BY1" => "ACTIVE_FROM",
		      "SORT_ORDER1" => "DESC",
		      "SORT_BY2" => "SORT",
		      "SORT_ORDER2" => "ASC",
		      "FILTER_NAME" => "",
		      "FIELD_CODE" => array(0=>"",1=>"",),
		      "PROPERTY_CODE" => array(0=>"ITEM_ICON",1=>"ITEM_AMOUNT",),
		      "CHECK_DATES" => "Y",
		      "DETAIL_URL" => "",
		      "AJAX_MODE" => "N",
		      "AJAX_OPTION_JUMP" => "N",
		      "AJAX_OPTION_STYLE" => "Y",
		      "AJAX_OPTION_HISTORY" => "N",
		      "CACHE_TYPE" => "A",
		      "CACHE_TIME" => "36000000",
		      "CACHE_FILTER" => "N",
		      "CACHE_GROUPS" => "Y",
		      "PREVIEW_TRUNCATE_LEN" => "",
		      "ACTIVE_DATE_FORMAT" => "d.m.Y",
		      "SET_TITLE" => "N",
		      "SET_BROWSER_TITLE" => "N",
		      "SET_META_KEYWORDS" => "N",
		      "SET_META_DESCRIPTION" => "N",
		      "SET_STATUS_404" => "N",
		      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		      "ADD_SECTIONS_CHAIN" => "N",
		      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
		      "PARENT_SECTION" => "",
		      "PARENT_SECTION_CODE" => "",
		      "INCLUDE_SUBSECTIONS" => "Y",
		      "PAGER_TEMPLATE" => ".default",
		      "DISPLAY_TOP_PAGER" => "N",
		      "DISPLAY_BOTTOM_PAGER" => "N",
		      "PAGER_TITLE" => "Новости",
		      "PAGER_SHOW_ALWAYS" => "N",
		      "PAGER_DESC_NUMBERING" => "N",
		      "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		      "PAGER_SHOW_ALL" => "N",
		      "DISPLAY_DATE" => "N",
		      "DISPLAY_NAME" => "Y",
		      "DISPLAY_PICTURE" => "N",
		      "DISPLAY_PREVIEW_TEXT" => "N",
		      "AJAX_OPTION_ADDITIONAL" => ""
		  )
		);?>
    <!-- in digits -->

    <!-- clients about us + news -->
    <section id="about-basic" class="content">
        <div class="container">
            <div class="row">
                <!-- clients comments -->
                <div class="col-sm-6 padd">
                    <div class="margin-top-25">
                        <h5 class="heading heading-v3">
                            <span>
                                <? $APPLICATION->IncludeComponent(
                                    'bitrix:main.include',
                                    '',
                                    array(
                                        'AREA_FILE_SHOW'   => 'sect',
                                        'AREA_FILE_SUFFIX' => 'comments',
                                    )
                                ); ?>
                            </span>
                        </h5>
                        <?$APPLICATION->IncludeComponent("bitrix:news.list", "client_comments_main", array(
                            "IBLOCK_TYPE" => "about_us",
                            "IBLOCK_ID" => getIBlockIdByCode("client_comments"),
                            "NEWS_COUNT" => "100",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_ORDER1" => "DESC",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER2" => "ASC",
                            "FILTER_NAME" => "",
                            "FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "CLIENT_POSITION",
                                2 => "",
                            ),
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "AJAX_OPTION_HISTORY" => "N",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "36000000",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "PREVIEW_TRUNCATE_LEN" => "180",
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "PAGER_TEMPLATE" => ".default",
                            "DISPLAY_TOP_PAGER" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "PAGER_TITLE" => "Новости",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "N",
                            "DISPLAY_PREVIEW_TEXT" => "N",
                            "AJAX_OPTION_ADDITIONAL" => ""
                        ),
                            false
                        );?>
                    </div>
                </div>
                <!-- end clients comments -->

                <!-- news slider -->
                <div class="col-sm-6 padd">
                    <div class="margin-top-25">
                        <h5 class="heading heading-v3">
                            <span>
                                <? $APPLICATION->IncludeComponent(
                                    'bitrix:main.include',
                                    '',
                                    array(
                                        'AREA_FILE_SHOW'   => 'sect',
                                        'AREA_FILE_SUFFIX' => 'news',
                                    )
                                ); ?>
                            </span>
                        </h5>
                        <?$APPLICATION->IncludeComponent("bitrix:news.list", "news_slider", array(
                            "IBLOCK_TYPE" => "general_information",
                            "IBLOCK_ID" => getIBlockIdByCode("news"),
                            "NEWS_COUNT" => "5",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_ORDER1" => "DESC",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER2" => "ASC",
                            "FILTER_NAME" => "",
                            "FIELD_CODE" => array(
                                0 => "",
                                1 => "DETAIL_PICTURE",
                                2 => "",
                            ),
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "AUTHOR",
                                2 => "TAGS",
                                3 => "",
                            ),
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "/news/#ELEMENT_ID#/",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "AJAX_OPTION_HISTORY" => "N",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "36000000",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "PREVIEW_TRUNCATE_LEN" => "100",
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "PAGER_TEMPLATE" => "",
                            "DISPLAY_TOP_PAGER" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "PAGER_TITLE" => "",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "AJAX_OPTION_ADDITIONAL" => ""
                        ),
                            false
                        );?>
                    </div>
                </div>
                <!-- end news slider -->
            </div>
        </div>
    </section>
    <!-- end clients about us + news -->

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 padd">
                    <h4 class="text-center">
                        <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
	"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "prices"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
); ?>
                    </h4>
                    <div class="line"></div>
                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "prices_homepage", array(
	"IBLOCK_TYPE" => "main_page",
		"IBLOCK_ID" => getIBlockIdByCode("pricing_table"),
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "",
		"SORT_ORDER1" => "",
		"SORT_BY2" => "",
		"SORT_ORDER2" => "",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "BUTTON_LINK",
			2 => "OLD_PRICE",
			3 => "BUTTON_TEXT",
			4 => "COLOR",
			5 => "BUTTON_COLOR",
			6 => "PRICE",
			7 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => "",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>
                </div><!-- end col-sm-12 -->
            </div>
        </div>
    </section>

    <!-- partners -->
    <?$APPLICATION->IncludeComponent(
		  "bitrix:news.list",
		  "partners_index_page",
		  Array(
		      "IBLOCK_TYPE" => "about_us",
		      "IBLOCK_ID" => getIBlockIdByCode("partners_logo"),
		      "NEWS_COUNT" => "200",
		      "SORT_BY1" => "ACTIVE_FROM",
		      "SORT_ORDER1" => "DESC",
		      "SORT_BY2" => "SORT",
		      "SORT_ORDER2" => "ASC",
		      "FILTER_NAME" => "",
		      "FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"",),
		      "PROPERTY_CODE" => array(0=>"ITEM_LINK",1=>"",),
		      "CHECK_DATES" => "Y",
		      "DETAIL_URL" => "",
		      "AJAX_MODE" => "N",
		      "AJAX_OPTION_JUMP" => "N",
		      "AJAX_OPTION_STYLE" => "Y",
		      "AJAX_OPTION_HISTORY" => "N",
		      "CACHE_TYPE" => "A",
		      "CACHE_TIME" => "36000000",
		      "CACHE_FILTER" => "N",
		      "CACHE_GROUPS" => "Y",
		      "PREVIEW_TRUNCATE_LEN" => "",
		      "ACTIVE_DATE_FORMAT" => "d.m.Y",
		      "SET_TITLE" => "N",
		      "SET_BROWSER_TITLE" => "N",
		      "SET_META_KEYWORDS" => "N",
		      "SET_META_DESCRIPTION" => "N",
		      "SET_STATUS_404" => "N",
		      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		      "ADD_SECTIONS_CHAIN" => "N",
		      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
		      "PARENT_SECTION" => "",
		      "PARENT_SECTION_CODE" => "",
		      "INCLUDE_SUBSECTIONS" => "Y",
		      "PAGER_TEMPLATE" => ".default",
		      "DISPLAY_TOP_PAGER" => "N",
		      "DISPLAY_BOTTOM_PAGER" => "N",
		      "PAGER_TITLE" => "Новости",
		      "PAGER_SHOW_ALWAYS" => "N",
		      "PAGER_DESC_NUMBERING" => "N",
		      "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		      "PAGER_SHOW_ALL" => "N",
		      "DISPLAY_DATE" => "N",
		      "DISPLAY_NAME" => "Y",
		      "DISPLAY_PICTURE" => "N",
		      "DISPLAY_PREVIEW_TEXT" => "N",
		      "AJAX_OPTION_ADDITIONAL" => ""
		  )
		);?>
    <!-- end partners -->
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>