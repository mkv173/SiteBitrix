<?php

//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
echo 1;

if (!CModule::IncludeModule('highloadblock')) {
    echo '<pre style="background: #fff; border: 1px solid #ff0000; width: 100%; color:#000">';
    print_r('Модуль не подключился');
    echo '</pre>';
    die();
}
$arHLBlock = Bitrix\Highloadblock\HighloadBlockTable::getById(1)->fetch();
$obEntity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($arHLBlock);
$strEntityDataClass = $obEntity->getDataClass();


$arElementFields = array(
    'UF_USER' => 'Татьяна',
    'UF_TEXT' => 'Хорошая расцветка',
    'UF_STARS' => 5,
    'UF_PRODUCT' => 159,

);

$obResult = $strEntityDataClass::add($arElementFields);
//$ID = $obResult->getID();
//$bSuccess = $obResult->isSuccess();
//echo '<pre style="background: #fff; border: 1px solid #ff0000; width: 100%; color:#000">';
//print_r($obResult->getId());
//echo '</pre>';

