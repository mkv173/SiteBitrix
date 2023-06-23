<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
use Createx\HighloadBlockHelper;

class ReviewListComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        $this->checkRequiredModules();
        $this->arResult['ELEMENT_ID'] = $this->arParams['ELEMENT_ID'];
        if (!empty($_POST['User'])) {
            self::addProductReview($this->arResult['ELEMENT_ID']);
        }
        //todo- вызывать метод с проверкой ключа['ELEMENT_ID']
        $this->arResult['REVIEWS'] = $this->getProductReviews($this->arResult['ELEMENT_ID']);
        \CJSCore::Init();
        $this->includeComponentTemplate();
    }

    public function checkRequiredModules()
    {
        if (!CModule::IncludeModule('highloadblock')) {
            echo '<pre style="background: #fff; border: 1px solid #ff0000; width: 100%; color:#000">';
            print_r('Модуль не подключился');
            echo '</pre>';
            die();
        }
    }

    /**
     * Метод для добавления отзыва на товар
     * @param $productId - товар для добавления отзывов
     */

    public static function addProductReview($productId)
    {
        $strEntityDataClass = HighloadBlockHelper::getHlDataClassByName('ProductReview');
        $arElementFields = array(
//            'UF_USER' => $_POST['User'],
//            'UF_TEXT' => $_POST['ReviewText'],
//            'UF_STARS' => $_POST['ProductStar'],
//            'UF_PRODUCT' => $productId,
            'UF_USER' => $_POST['user'],
            'UF_TEXT' => $_POST['text'],
            'UF_STARS' => $_POST['star'],
            'UF_PRODUCT' => $productId,

        );

        $obResult = $strEntityDataClass::add($arElementFields);
    }

    /**
     * метод для получения отзывов на товар
     * @param int $productId - товар для получения отзывов
     * @return array - массив отзывов
     */
    public function getProductReviews(int $productId): array
    {
        $hlReviewTable = HighloadBlockHelper::getHlDataClassByName('ProductReview');
        $sqlQuery = $hlReviewTable::query();
        $sqlQuery->setSelect([
            '*',
        ]);
        $sqlQuery->setFilter([
            'UF_PRODUCT' => $productId
        ]);
        $result = $sqlQuery->exec();
        $arReviews = $result->fetchAll();
        return $arReviews;
    }
}
