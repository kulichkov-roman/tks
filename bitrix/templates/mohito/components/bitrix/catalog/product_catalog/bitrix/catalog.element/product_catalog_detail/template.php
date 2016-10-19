<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?$this->setFrameMode(true);?>
    <?
    $highlightColor = array(
        "sale" => "-orange",
        "best" => "-blue",
        "hit"  => "-red",
    );
    ?>

    <div class="tab-content item-detail">
        <!-- Items Top Block -->
        <div class="col-md-12">
            <div class="row">
                <h4 class="heading heading-v3"><span><?= $arResult["NAME"] ?></span></h4>
                <div class="row">
                    <!-- Item More Photo -->
                    <div class="col-md-6 col-xs-12 margin-bottom-10">
                        <div class="owl-carousel owl-item-1-text detail-owl">
                            <? if (!empty($arResult["DETAIL_PICTURE"])) {
                                $arPhoto = $arResult["DETAIL_PICTURE"];
                                ?>
                                <a class="item fancybox" rel="gallery" href="<?= $arPhoto["SRC"]?>" title="<?= $arPhoto["DESCRIPTION"]?>">
                                    <img src="<?= (!empty($arPhoto["RESIZED"]) ? $arPhoto["RESIZED"]["SRC"] : $arPhoto["SRC"])?>" alt="<?= $arPhoto["DESCRIPTION"]?>" />
                                    <? if (strlen($arPhoto["DESCRIPTION"]) > 0) { ?>
                                        <div class="description">
                                            <div class="layer"></div>
                                            <p><?= $arPhoto["DESCRIPTION"]?></p>
                                        </div>
                                    <? } ?>
                                </a>
                            <?
                                unset($arPhoto);
                            } ?>

                            <? foreach ($arResult["MORE_PHOTO"] as $arPhoto) { ?>
                                <a class="item fancybox" rel="gallery" href="<?= $arPhoto["SRC"]?>" title="<?= $arPhoto["DESCRIPTION"]?>">
                                    <img src="<?= (!empty($arPhoto["RESIZED"]) ? $arPhoto["RESIZED"]["SRC"] : $arPhoto["SRC"])?>" alt="<?= $arPhoto["DESCRIPTION"]?>" />
                                    <? if (strlen($arPhoto["DESCRIPTION"]) > 0) { ?>
                                        <div class="description">
                                            <div class="layer"></div>
                                            <p><?= $arPhoto["DESCRIPTION"]?></p>
                                        </div>
                                    <? } ?>
                                </a>
                            <? } ?>
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-12 margin-bottom-10">
                        <?
                        $arSpecial = $arResult['DISPLAY_PROPERTIES']["SPECIAL_OFFER"];
                        $tableColor = "";
                        if (strlen($arSpecial["VALUE_XML_ID"]) > 0) {
                            $tableColor = $highlightColor[$arSpecial["VALUE_XML_ID"]];
                        }
                        ?>
                        <div class="pricing-v1 pricing-v1<?= $tableColor?>">
                            <?if($arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"] > 0) {?>
                            <div class="pricing-v1-header text-center">
                                <h5>
                                    <i class="fa fa-rouble"></i><?= number_format($arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"], 0, ".", " ") ?>
                                    <? if ($arResult["DISPLAY_PROPERTIES"]["OLD_PRICE"]["VALUE"] > $arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]) { ?>
                                        <i>/</i><i style="text-decoration: line-through;"><?= number_format($arResult["DISPLAY_PROPERTIES"]["OLD_PRICE"]["VALUE"], 0, ".", " ") ?></i>
                                    <? } ?>
                                </h5>
                            </div>
                            <?}?>
                            <ul class="list-unstyled pricing-v1-content">
                                <?
                                $arMainProps = array("BRAND", "ARTICLE", "COLOR");
                                foreach ($arMainProps as $arProp) {
                                    if ($arResult['DISPLAY_PROPERTIES'][$arProp]) { ?>
                                        <li class="main-props clearfix">
                                            <strong><?= $arResult['DISPLAY_PROPERTIES'][$arProp]["NAME"] ?> :</strong>
                                            <?= $arResult['DISPLAY_PROPERTIES'][$arProp]["VALUE"] ?>
                                        </li>
                                    <? } else {
                                        continue;
                                    }
                                } ?>
                            </ul>

                            <div class="pricing-v1-footer text-center">
                                <div class="btn-group btn-group-justified" role="group" aria-label="Element order">
                                    <a href="<?= SITE_DIR ?>include/modals/bsForm.php?type=qForm&subject=<?= $arResult["ID"] ?>"
                                       class="btn pi-btn-grey no-rounded"
                                       data-toggle="modal"
                                       data-target="#bsModal"
                                    >
                                        <i class="fa fa-comment-o"></i>&nbsp;<?= GetMessage("BUTTON_QUESTION") ?>
                                    </a>
                                    <a href="<?= SITE_DIR ?>include/modals/bsForm.php?type=rForm&subject=<?= $arResult["ID"] ?>"
                                       class="btn pi-btn<?= (strlen($tableColor) > 0 ? $tableColor : "-default")?> no-rounded"
                                       data-toggle="modal"
                                       data-target="#bsModal"
                                    >
                                        <i class="fa fa-shopping-cart"></i>&nbsp;<?= GetMessage("BUTTON_ORDER")?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?
        // Specification Tab
        $bHasSpecs = false;
        if (count($arResult['DISPLAY_PROPERTIES']["SPEC_NAME"]["VALUE"]) > 0) {
            $bHasSpecs = true;
        }
        ?>

        <!-- Items Bottom Block -->
        <div class="col-xs-12 item-tabs">
            <div class="row">
                <ul id="myTab" class="nav nav-tabs product-detail">
                    <li class="active"><a href="#tab1" data-toggle="tab"><?= GetMessage("TAB_1_TITLE")?></a></li>
                <? if ($bHasSpecs) { ?>
                    <li class=""><a href="#tab2" data-toggle="tab"><?= GetMessage("TAB_2_TITLE")?></a></li>
                <? } ?>
                    <li class=""><a href="#tab3" data-toggle="tab"><?= GetMessage("TAB_3_TITLE")?></a></li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <!-- Description -->
                    <div class="tab-pane fade active in" id="tab1">
                        <h5><strong><?= $arResult["NAME"] ?></strong></h5>
                        <?= $arResult["DETAIL_TEXT"] ?>
                    </div>

                <? if ($bHasSpecs) { ?>
                    <!-- Specification -->
                    <div class="tab-pane fade" id="tab2">
                        <h5><strong><?= GetMessage("TAB_2_TITLE")?></strong></h5>
                        <table class="table table-striped">
                            <tbody>
                            <? foreach ($arResult['DISPLAY_PROPERTIES']["SPEC_NAME"]["VALUE"] as $key => $name) { ?>
                                <tr>
                                    <td><strong><?= $name ?></strong></td>
                                    <td><?= $arResult['DISPLAY_PROPERTIES']["SPEC_VALUE"]["VALUE"][$key] ?></td>
                                </tr>
                            <? } ?>
                            </tbody>
                        </table>
                    </div>
                <? } ?>

                    <!-- Review -->
                    <div class="tab-pane fade" id="tab3">
                        <h5><strong><?= GetMessage("TAB_3_TITLE")?></strong></h5>
                        <?
                        $reviewIBlockId = getIBlockIdByCode("product_reviews");
                        $arReviewFields = array("NAME", getPropertyIdByCode($reviewIBlockId, "EMAIL"), "PREVIEW_TEXT", getPropertyIdByCode($reviewIBlockId, "TARGET"));

                        global $arReviewFilter;
                        $arReviewFilter = array("PROPERTY_TARGET" => $arResult["ID"]);
                        ?>

                        <!-- Reviews List -->
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "reviews_list",
                            Array(
                                "IBLOCK_TYPE"                     => "feedback",
                                "IBLOCK_ID"                       => $reviewIBlockId,
                                "NEWS_COUNT"                      => "3",
                                "SORT_BY1"                        => "ACTIVE_FROM",
                                "SORT_ORDER1"                     => "DESC",
                                "SORT_BY2"                        => "SORT",
                                "SORT_ORDER2"                     => "ASC",
                                "FILTER_NAME"                     => "arReviewFilter",
                                "FIELD_CODE"                      => array("", ""),
                                "PROPERTY_CODE"                   => array("", ""),
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
                                "ACTIVE_DATE_FORMAT"              => "j F Y",
                                "SET_TITLE"                       => "N",
                                "SET_BROWSER_TITLE"               => "N",
                                "SET_META_KEYWORDS"               => "N",
                                "SET_META_DESCRIPTION"            => "N",
                                "SET_STATUS_404"                  => "N",
                                "INCLUDE_IBLOCK_INTO_CHAIN"       => "N",
                                "ADD_SECTIONS_CHAIN"              => "N",
                                "HIDE_LINK_WHEN_NO_DETAIL"        => "N",
                                "PARENT_SECTION"                  => "",
                                "PARENT_SECTION_CODE"             => "",
                                "INCLUDE_SUBSECTIONS"             => "Y",
                                "PAGER_TEMPLATE"                  => "news_list",
                                "DISPLAY_TOP_PAGER"               => "N",
                                "DISPLAY_BOTTOM_PAGER"            => "N",
                                "PAGER_TITLE"                     => GetMessage("TAB_3_TITLE"),
                                "PAGER_SHOW_ALWAYS"               => "N",
                                "PAGER_DESC_NUMBERING"            => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL"                  => "N",
                            )
                        );?>
                        <!-- /Reviews List -->

                        <!-- Review Form -->
                        <h5><strong><?= GetMessage("WRITE_REVIEW") ?></strong></h5>
                        <?$APPLICATION->IncludeComponent(
                            "bizsolutions:iblock.element.add.form",
                            "review_add",
                            Array(
                                "IBLOCK_TYPE"                   => "feedback",
                                "IBLOCK_ID"                     => $reviewIBlockId,
                                "STATUS_NEW"                    => "N",
                                "LIST_URL"                      => "",
                                "USE_CAPTCHA"                   => "Y",
                                "USER_MESSAGE_EDIT"             => "",
                                "USER_MESSAGE_ADD"              => GetMessage("SUCCESS_MESSAGE"),
                                "DEFAULT_INPUT_SIZE"            => "30",
                                "RESIZE_IMAGES"                 => "N",
                                "PROPERTY_CODES"                => $arReviewFields,
                                "PROPERTY_CODES_REQUIRED"       => $arReviewFields,
                                "GROUPS"                        => array("2"),
                                "STATUS"                        => "INACTIVE",
                                "ELEMENT_ASSOC"                 => "CREATED_BY",
                                "MAX_USER_ENTRIES"              => "100000",
                                "MAX_LEVELS"                    => "100000",
                                "LEVEL_LAST"                    => "Y",
                                "MAX_FILE_SIZE"                 => "0",
                                "PREVIEW_TEXT_USE_HTML_EDITOR"  => "N",
                                "DETAIL_TEXT_USE_HTML_EDITOR"   => "N",
                                "SEF_MODE"                      => "N",
                                "CUSTOM_TITLE_NAME"             => GetMessage("REVIEW_NAME"),
                                "CUSTOM_TITLE_TAGS"             => "",
                                "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
                                "CUSTOM_TITLE_DATE_ACTIVE_TO"   => "",
                                "CUSTOM_TITLE_IBLOCK_SECTION"   => "",
                                "CUSTOM_TITLE_PREVIEW_TEXT"     => GetMessage("REVIEW_TEXT"),
                                "CUSTOM_TITLE_PREVIEW_PICTURE"  => "",
                                "CUSTOM_TITLE_DETAIL_TEXT"      => "",
                                "CUSTOM_TITLE_DETAIL_PICTURE"   => "",
                                "ELEMENT_ID"                    => $arResult["ID"],
                            )
                        );?>
                        <!-- /Review Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
