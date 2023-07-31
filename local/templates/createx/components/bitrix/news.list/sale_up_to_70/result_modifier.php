<?php

/** @var array $arResult */

\Bitrix\Main\Loader::includeModule('highloadblock');

$arProductId = [];
foreach ($arResult['ITEMS'] as $key => $arItem) {
    $arProductId[] = $arItem['ID'];
    $arResult['ITEMS'][$key]['REVIEW_PAGE_URL'] = "/product_review/index.php?ID=" . $arItem['ID'];
}
$arResult['STARS'] = \Createx\Reviews::getAverageStars($arProductId);

$arResult['LIKES'] = \Createx\Likes::getAverageLikes($arProductId);
