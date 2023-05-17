<?php
/** @var array $arResult */
//echo '<pre style="background: #fff; border: 1px solid #ff0000; width: 100%; color:#000">';
//print_r($arResult['ITEMS']);
//echo '</pre>';
foreach ($arResult['ITEMS'] as $key => $arItem) {

        $arResult['ITEMS'][$key]['REVIEW_PAGE_URL'] = "/product_review/index.php?ID=" . $arItem['ID'];

}

