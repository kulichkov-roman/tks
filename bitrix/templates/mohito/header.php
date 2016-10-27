<? if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">	
	<meta name="cmsmagazine" content="aca9a382771c488dd3467b392eed4da4" />
	<?
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/bootstrap.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/font-awesome.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/fancybox/jquery.fancybox.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/owl.carousel.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/zetta-menu.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/layerslider.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/animate.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/style.css');
        $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/fonts.css');
        $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/custom-theme.min.css'); // Forced minify
        $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/custom.css'); // Forced minify
        $APPLICATION->SetAdditionalCSS('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800');
        $moduleId = 'bizsolutions.mohito';
		$themeColor = COption::GetOptionString($moduleId, "themeColor", "default");
		$width = COption::GetOptionString($moduleId, "width", "wide");
		$breadcrumbs = COption::GetOptionString($moduleId, "breadcrumbs", "paralax");
		
		$mainBackgroundUri = COption::GetOptionString($moduleId, "mainBackgroundUri");
        if (!$mainBackgroundUri) {
            $mainBackgroundUri = "/bitrix/templates/mohito/img/patterns/pattern-03.png";
        }
		$paralaxImgBreadcrumbsUri = COption::GetOptionString($moduleId, "paralaxImgBreadcrumbsUri");
        if (!$paralaxImgBreadcrumbsUri) {
            $paralaxImgBreadcrumbsUri = "/bitrix/templates/mohito/img/breadcrumb-bg.jpg";
        }
			
		$additionalWidthClass = "";
		if ($width == "boxed") {
			$additionalWidthClass = "class='boxed-layout container'";
		}
		
		$mainBackgroundUriString = "style='background-image: url(".$mainBackgroundUri.")'";
		
		$paralaxImgBreadcrumbsUriString = "";
		$layerTag = "";
		$containerClass = "";
		
		if ($breadcrumbs == "paralax") {
			$paralaxImgBreadcrumbsUriString = "class='breadcrumbs section-parallax parallaxBg' style='background-image: url(".$paralaxImgBreadcrumbsUri."); background-position: 50% 0px;'";
			$layerTag = "<div class='layer'></div>";
			$containerClass = "parallax-content";
		} else if ($breadcrumbs == "light") {
			$paralaxImgBreadcrumbsUriString = "class='breadcrumbs' style='background-image: url(/bitrix/templates/mohito/img/cubes.png); background-position: 0px 0px;'";
		} else if ($breadcrumbs == "colored") {
			$paralaxImgBreadcrumbsUriString = "class='breadcrumbs style1' style='background-image: none; background-position: 0px 0px;'";
		}
		
		CJSCore::Init();
    ?>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">
</head>
		
<body <?=$additionalWidthClass?> <?=$mainBackgroundUriString?>>
	<div id="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>
	
	<!-- top header -->
    <div id="top-header" class="dark">
        <div class="container top-header">
            <div class="row">
                <div class="col-xs-8">
	                <?
	                $APPLICATION->IncludeComponent(
		                "bitrix:main.include", "",
		                Array(
			                "AREA_FILE_SHOW" => "file",
			                "PATH" => "/include/site_templates/city_list.php"
		                )
	                );
	                ?>
                    <!-- Topbar Navigation -->
                    <?
					global $arrContactsFilter;
                    $arrContactsFilter = array(
	                    'PROPERTY_CITY_LINK' => $_COOKIE['cityId']
                    );
                    $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "contacts_header",
                        array(
                            "IBLOCK_TYPE" => "general_information",
                            "IBLOCK_ID" => getIBlockIdByCode("contacts"),
                            "NEWS_COUNT" => "1",
                            "SORT_BY1" => "",
                            "SORT_ORDER1" => "",
                            "SORT_BY2" => "",
                            "SORT_ORDER2" => "",
                            "FILTER_NAME" => "arrContactsFilter",
                            "FIELD_CODE" => array(),
                            "PROPERTY_CODE" => array(
                                0 => "EMAIL",
                                1 => "PHONE_NUMBER",
                            ),
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "AJAX_OPTION_HISTORY" => "N",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "36000000",
                            "CACHE_FILTER" => "Y",
                            "CACHE_GROUPS" => "N",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "ACTIVE_DATE_FORMAT" => "",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "ADD_SECTIONS_CHAIN" => "N",
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
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "PAGER_TITLE" => "Новости",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "SET_BROWSER_TITLE" => "N",
                            "SET_META_KEYWORDS" => "Y",
                            "SET_META_DESCRIPTION" => "Y",
                            "AJAX_OPTION_ADDITIONAL" => ""
                        ),
                        false
                    );?>
                </div>

                <div class="col-xs-4">
                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "social_header", array(
	"IBLOCK_TYPE" => "main_page",
		"IBLOCK_ID" => getIBlockIdByCode("social_header"),
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "",
		"SORT_ORDER1" => "",
		"SORT_BY2" => "",
		"SORT_ORDER2" => "",
		"FILTER_NAME" => "",
		"FIELD_CODE" => "",
		"PROPERTY_CODE" => array(
			0 => "CSS_CLASS",
			1 => "LINK",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
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
		"PAGER_SHOW_ALL" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?>

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:search.form",
                        "header.search",
                        Array(
                            "PAGE"    => "#SITE_DIR#search/index.php",
                        )
                    );?>
                </div>
            
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end top header -->

    <!-- start Navigation -->
    <div id="topNav"<? if ($width == "boxed") { ?> class="boxed-layout container"<? } else { ?> class="full-width"<? } ?> data-offset-top="300" data-stuck="400">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                    <? $APPLICATION->IncludeComponent("bitrix:menu", "horizontal_main", array(
                        "ROOT_MENU_TYPE"        => "top",
                        "MENU_CACHE_TYPE"       => "A",
                        "MENU_CACHE_TIME"       => "3600",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS"   => array(),
                        "MAX_LEVEL"             => "3",
                        "CHILD_MENU_TYPE"       => "include",
                        "USE_EXT"               => "Y",
                        "DELAY"                 => "N",
                        "ALLOW_MULTI_SELECT"    => "N"
                    ),
                        false
                    ); ?>
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- end nav -->
	<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
		"AREA_FILE_SHOW" => "index",
		"AREA_FILE_SUFFIX" => "contacts_map",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => ""
		),
		false
	);?>
	<? if ($APPLICATION->GetCurPage(true) != SITE_DIR.'index.php'): ?>
	<!-- Breadcrumbs ===-->
	<div <?=$paralaxImgBreadcrumbsUriString?>>
        	<?=$layerTag?>
            <div class="container <?=$containerClass?>">
				<h3 class="pull-left"><?$APPLICATION->ShowTitle(false)?></h3>
				<?$APPLICATION->IncludeComponent(
					"bitrix:breadcrumb", 
					"main", 
					array(
						"START_FROM" => "0",
						"PATH" => "",
						"SITE_ID" => "s1"
					),
					false
				);?>
			</div>
		</div>
	</div>
	<? endif;?>
