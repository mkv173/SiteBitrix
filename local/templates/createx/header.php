<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Createx\IblockHelper;
?>
<html>
<head>

<meta name="robots" content="noindex, follow" />
<?php $APPLICATION->ShowHead()?>
<title><?php $APPLICATION->ShowTitle()?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
</head>



<?php
$APPLICATION->ShowPanel();
?>

<body class="body">
<header>
    <div class="top-bar">
        <div class="container">
            <div class="top-bar__body">
                <p class="top-bar__contacts"><?php $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "COMPONENT_TEMPLATE" => ".default",
                            "PATH" => "/include/top_bar_contacts.php"
                        ),
                        false
                    );?>
                </p>
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top_bar",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "left",
                        "USE_EXT" => "N"
                    )
                );?>
                <div class="top-bar__currency">
                    <select name="currency">
                        <option value="usa">Eng / $</option>
                        <option value="usa">Eng / $</option>
                        <option value="usa">Eng / $</option>
                    </select>
                </div>
                <div class="account">
                    <a href="/auth/" target="_blank"><i class="fa fa-user-o" aria-hidden="true"></i> Log in /
                    </a>
                    <a href="/auth/?register=yes" target="_blank"> Register</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-bar">
            <div class="main-bar__logo">
                <a href="#" target="_blank"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/logo.png" alt="logo"></a>
            </div>
            <?php $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "main_bar",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "top",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N"
                )
            );?>

            <form class="search-form main-bar__search">
                <input class="search-form__input" type="text" placeholder="Search for products...">
                <button class="search-form__button" type="submit"></button>
            </form>
            <div class="main-bar__toolbar children-gradient-divider">
                <div class="main-bar__wishlist">
                    <a href="#" target="_blank">
                        <i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <span>2</span>
                </div>
                <div class="main-bar__wishlist">
                    <a href="#" target="_blank">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    <span>4</span>
                </div>
            </div>
        </div>
    </div>

    <?php $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"news",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => IblockHelper::getIblockIdByCode('sale'),
        "IBLOCK_TYPE" => "green_sale",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "COLOR",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "news"
	),
	false

); ?>

</header>

