<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Createx\HighloadBlockHelper;

\Bitrix\Main\Loader::includeModule('highloadblock');
$currentTime = new \Bitrix\Main\Type\DateTime();
?>
    <div class="review-item">
        <h2><?= $_POST['user'] ?></h2>
        <p>Рейтинг <?= $_POST['stars'] ?></p>
        <p><?= $currentTime->format('d.m.Y H:i:s') ?></p>
        <p><?= $_POST['text'] ?></p>
    </div>
<?php
//ReviewListComponent::addProductReview($_POST['product_id']);
$strEntityDataClass = HighloadBlockHelper::getHlDataClassByName('ProductReview');
$arElementFields = array(
    'UF_USER' => $_POST['user'],
    'UF_TEXT' => $_POST['text'],
    'UF_STARS' => $_POST['stars'],
    'UF_PRODUCT' => $_POST['product_id'],
);
//echo '<pre style="background: #fff; border: 1px solid #ff0000; width: 100%; color:#000">';
//print_r($arElementFields);
//echo '</pre>';
$obResult = $strEntityDataClass::add($arElementFields);
require_once($_SERVER["DOCUMENT_ROOT"] . BX_ROOT . "/modules/main/include/epilog_after.php");