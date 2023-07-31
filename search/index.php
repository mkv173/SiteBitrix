<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");?>



<?$APPLICATION->IncludeComponent(
	"bitrix:search.page",
	"icons",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"COMPONENT_TEMPLATE" => "icons",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"FILTER_NAME" => "",
		"NAME_TEMPLATE" => "",
		"NO_WORD_LOGIC" => "N",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGE_RESULT_COUNT" => "50",
		"PATH_TO_USER_PROFILE" => "",
		"RATING_TYPE" => "",
		"RESTART" => "N",
		"SHOW_LOGIN" => "Y",
		"SHOW_RATING" => "",
		"SHOW_WHEN" => "Y",
		"SHOW_WHERE" => "Y",
		"STRUCTURE_FILTER" => "structure",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "N",
		"USE_TITLE_RANK" => "N",
		"arrFILTER" => array(),
		"arrWHERE" => array(0=>"iblock_banners",1=>"iblock_products",2=>"iblock_green_sale",)
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>