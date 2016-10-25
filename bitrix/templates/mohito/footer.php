<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
?>
<!-- footer -->
<footer id="footer" class="dark">
    <div class="container footer">
        <div class="row">
            <div class="col-sm-5 padd">
                <h5>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH"           => SITE_DIR . "include/footer.title_1.php"
                        )
                    ); ?>
                </h5>

                <div class="line-left"></div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW"   => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE"    => "",
                        "PATH"             => SITE_DIR . "include/footer.inc.php"
                    )
                ); ?>
            </div>

            <div class="col-sm-3 padd">
                <h5>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH"           => SITE_DIR . "include/footer.title_2.php"
                        )
                    ); ?>
                </h5>

                <div class="line-left"></div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "contacts_footer",
                    array(
                        "IBLOCK_TYPE"                     => "general_information",
                        "IBLOCK_ID"                       => getIBlockIdByCode("contacts"),
                        "NEWS_COUNT"                      => "1",
                        "SORT_BY1"                        => "",
                        "SORT_ORDER1"                     => "",
                        "SORT_BY2"                        => "",
                        "SORT_ORDER2"                     => "",
                        "FILTER_NAME"                     => "",
                        "FIELD_CODE"                      => array(),
                        "PROPERTY_CODE"                   => array(
                            0 => "ADDRESS",
                            1 => "EMAIL",
                            2 => "PHONE_NUMBER",
                        ),
                        "CHECK_DATES"                     => "Y",
                        "DETAIL_URL"                      => "",
                        "AJAX_MODE"                       => "N",
                        "AJAX_OPTION_JUMP"                => "N",
                        "AJAX_OPTION_STYLE"               => "Y",
                        "AJAX_OPTION_HISTORY"             => "N",
                        "CACHE_TYPE"                      => "A",
                        "CACHE_TIME"                      => "36000000",
                        "CACHE_FILTER"                    => "N",
                        "CACHE_GROUPS"                    => "Y",
                        "PREVIEW_TRUNCATE_LEN"            => "",
                        "ACTIVE_DATE_FORMAT"              => "",
                        "SET_STATUS_404"                  => "N",
                        "SET_TITLE"                       => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN"       => "N",
                        "ADD_SECTIONS_CHAIN"              => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL"        => "N",
                        "PARENT_SECTION"                  => "",
                        "PARENT_SECTION_CODE"             => "",
                        "INCLUDE_SUBSECTIONS"             => "Y",
                        "DISPLAY_DATE"                    => "Y",
                        "DISPLAY_NAME"                    => "Y",
                        "DISPLAY_PICTURE"                 => "Y",
                        "DISPLAY_PREVIEW_TEXT"            => "Y",
                        "PAGER_TEMPLATE"                  => "",
                        "DISPLAY_TOP_PAGER"               => "N",
                        "DISPLAY_BOTTOM_PAGER"            => "N",
                        "PAGER_TITLE"                     => "News",
                        "PAGER_SHOW_ALWAYS"               => "N",
                        "PAGER_DESC_NUMBERING"            => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL"                  => "N",
                        "SET_BROWSER_TITLE"               => "N",
                        "SET_META_KEYWORDS"               => "Y",
                        "SET_META_DESCRIPTION"            => "Y",
                        "AJAX_OPTION_ADDITIONAL"          => ""
                    ),
                    false
                ); ?>
            </div>

            <script>
                $(function () {
                    $('#emailAddressForm').bootstrapValidator({
                        container: '#subscribe_form_msg',
                        feedbackIcons: {
                            valid: 'glyphicon glyphicon-ok',
                            invalid: 'glyphicon glyphicon-remove',
                            validating: 'glyphicon glyphicon-refresh'
                        },
                        fields: {
                            email: {
                                validators: {
                                    emailAddress: {
                                        message: '<?=GetMessage("BIZSOLUTIONS_ENTER_VALID_EMAIL");?>'
                                    },
                                    notEmpty: {
                                        message: '<?=GetMessage("BIZSOLUTIONS_ENTER_EMAIL");?>'
                                    }
                                }
                            }
                        }
                    }).on('success.form.bv', function (e) {
                        e.preventDefault();
                        $.ajax({
                            url: "/include/ajax.handler.php",
                            type: "POST",
                            dataType: "html",
                            data: {PAGE: 'SUBSCRIBE_NEWS', email: $("#subscriber_email").val()},
                            success: function (data) {
                                $('#emailAddressForm .input-group').html(data)
                            }
                        });
                    });
                });
            </script>

            <div class="col-sm-4 padd">
                <h5>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH"           => SITE_DIR . "include/footer.title_3.php"
                        )
                    ); ?>
                </h5>

                <div class="line-left"></div>
                <p>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH"           => SITE_DIR . "include/footer.subscribe.php"
                        )
                    ); ?>
                </p>

                <form id="emailAddressForm" class="form-horizontal">
                    <div class="form-group input-group">
                        <div class="col-xs-12">
                            <div class="row">
                                <input id="subscriber_email" class="form-control" name="email" type="text" placeholder="Email Address"/>
                            </div>
                        </div>
                        <span class="input-group-btn">
                            <button class="btn pi-btn-default" id="subscribe" type="submit"><?= GetMessage("BIZSOLUTIONS_SUBSCRIBE") ?></button>
                        </span>
                    </div>
                    <div id="subscribe_form_msg"></div>
                </form>
                <div class="clearfix">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "social_footer",
                        array(
                            "IBLOCK_TYPE"                     => "main_page",
                            "IBLOCK_ID"                       => getIBlockIdByCode("social_header"),
                            "NEWS_COUNT"                      => "20",
                            "SORT_BY1"                        => "",
                            "SORT_ORDER1"                     => "",
                            "SORT_BY2"                        => "",
                            "SORT_ORDER2"                     => "",
                            "FILTER_NAME"                     => "",
                            "FIELD_CODE"                      => array(
                                0 => "",
                                1 => "",
                            ),
                            "PROPERTY_CODE"                   => array(
                                0 => "",
                                1 => "CSS_CLASS",
                                2 => "LINK",
                                3 => "",
                            ),
                            "CHECK_DATES"                     => "Y",
                            "DETAIL_URL"                      => "",
                            "AJAX_MODE"                       => "N",
                            "AJAX_OPTION_JUMP"                => "N",
                            "AJAX_OPTION_STYLE"               => "Y",
                            "AJAX_OPTION_HISTORY"             => "N",
                            "CACHE_TYPE"                      => "A",
                            "CACHE_TIME"                      => "36000000",
                            "CACHE_FILTER"                    => "N",
                            "CACHE_GROUPS"                    => "Y",
                            "PREVIEW_TRUNCATE_LEN"            => "",
                            "ACTIVE_DATE_FORMAT"              => "",
                            "SET_STATUS_404"                  => "N",
                            "SET_TITLE"                       => "N",
                            "INCLUDE_IBLOCK_INTO_CHAIN"       => "N",
                            "ADD_SECTIONS_CHAIN"              => "N",
                            "HIDE_LINK_WHEN_NO_DETAIL"        => "N",
                            "PARENT_SECTION"                  => "",
                            "PARENT_SECTION_CODE"             => "",
                            "INCLUDE_SUBSECTIONS"             => "Y",
                            "DISPLAY_DATE"                    => "Y",
                            "DISPLAY_NAME"                    => "Y",
                            "DISPLAY_PICTURE"                 => "Y",
                            "DISPLAY_PREVIEW_TEXT"            => "Y",
                            "PAGER_TEMPLATE"                  => "",
                            "DISPLAY_TOP_PAGER"               => "N",
                            "DISPLAY_BOTTOM_PAGER"            => "Y",
                            "PAGER_TITLE"                     => "News",
                            "PAGER_SHOW_ALWAYS"               => "Y",
                            "PAGER_DESC_NUMBERING"            => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL"                  => "Y",
                            "SET_BROWSER_TITLE"               => "N",
                            "SET_META_KEYWORDS"               => "N",
                            "SET_META_DESCRIPTION"            => "N",
                            "AJAX_OPTION_ADDITIONAL"          => ""
                        ),
                        false
                    ); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <p class="pull-left">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH"           => SITE_DIR . "include/footer.copyright.php"
                            )
                        ); ?>
                    </p>
                </div>
                <div class="col-sm-4 col-xs-12 text-center" id="bx-composite-banner"></div>
                <div class="col-sm-4 col-xs-12">
                    
                </div>

            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end copyrights -->
</footer>
<!-- end footer -->

<!-- Modal Box Container -->
<div class="modal fade" id="bsModal" tabindex="-1" role="dialog" aria-labelledby="bsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content register-box rounded-x3"></div>
    </div>
</div>

<!-- jQuery -->

<?
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery-1.11.1.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.easing.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.ui.totop.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.countTo.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.placeholder.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.parallax.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/bootstrap.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/bootstrapValidator.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/owl.carousel.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/isotope.js');
// Layer Slider on Main page
if (CSite::InDir(SITE_DIR . 'index.php')) {
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/layerslider.jquery.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/layerslider.transitions.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/greensock.min.js');
}
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/wow.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/fancybox/jquery.fancybox.js');
// custom scripts
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/main.js');
// developers scripts
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/developers.js');
?>

<? // Layer Slider on Main page
if (CSite::InDir(SITE_DIR . 'index.php')) { ?>
    <script>
        jQuery("#layerslider").layerSlider({
            responsive: false,
            responsiveUnder: 1280,
            layersContainer: 1280,
            skin: '',
            hoverPrevNext: false,
            skinsPath: '<?= SITE_TEMPLATE_PATH?>/components/bitrix/news.list/slider_homepage/img/'
        });

        // Bootstrap remote Modal Box clear content on hide
        $('#bsModal').on('hidden.bs.modal', function (e) {
            $(e.target).removeData('bs.modal');
        });
    </script>
    <style>
        /* Slider bug fix */
        @media (max-width: 480px) {
            #layerslider .ls-bottom-nav-wrapper,
            #layerslider .main_slider_prev,
            #layerslider .main_slider_next,
            #layerslider .main_slider_pic,
            #layerslider .main_slider_text{
                display: none;
            }
            #layerslider .main_slider_title,
            #layerslider .main_slider_subtitle{
                width: 80% !important;
                left: 10% !important;
                text-align: center !important;
            }
            #layerslider .main_slider_title{
                top: 10% !important;
                font-size: 16px !important;
                line-height: normal !important;
            }
            #layerslider .main_slider_subtitle{
                font-size: 11px !important;
                top: 43% !important;
            }
            #layerslider .main_slider_red_button{
                left: 29% !important;
                width: 170px !important;
                top: 80% !important;
                padding: 3px 0 !important;
                font-size: 16px !important;
            }
        }
    </style>
<? } ?>
<script>
    //Animation Wow.js
    new WOW().init();
</script>

</body>
</html>
