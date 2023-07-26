<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Createx\HighloadBlockHelper;

\Bitrix\Main\Loader::includeModule('highloadblock');

$strEntityDataClass = HighloadBlockHelper::getHlDataClassByName('ProductLike');
$productLikes = \Createx\Likes::getAverageLikes($_POST['productId']);
if ($productLikes) {
    echo false;
    $strEntityDataClass::delete($productLikes[$_POST['productId']]);
} else {
    echo true;
    $arElementFields = array(
        'UF_USER' => $_POST['userId'],
        'UF_PRODUCT' => $_POST['productId'],
    );

    $obResult = $strEntityDataClass::add($arElementFields);
}


require_once($_SERVER["DOCUMENT_ROOT"] . BX_ROOT . "/modules/main/include/epilog_after.php");
