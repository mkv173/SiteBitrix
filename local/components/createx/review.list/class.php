<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Createx\HighloadBlockHelper;
use Bitrix\Main\Engine\Contract\Controllerable;

class ReviewListComponent extends CBitrixComponent implements Controllerable
{
    public function deleteAction()
    {
        \Bitrix\Main\Loader::includeModule('highloadblock');
        $strEntityDataClass = HighloadBlockHelper::getHlDataClassByName('ProductReview');

        $strEntityDataClass::delete($_POST['reviewId']);
    }

    public function addAction()
    {
        \Bitrix\Main\Loader::includeModule('highloadblock');
        $currentTime = new \Bitrix\Main\Type\DateTime();
        $strEntityDataClass = HighloadBlockHelper::getHlDataClassByName('ProductReview');
        $arElementFields = array(
            'UF_USER' => $_POST['user'],
            'UF_TEXT' => $_POST['text'],
            'UF_STARS' => $_POST['stars'],
            'UF_PRODUCT' => $_POST['product_id'],
        );

        $obResult = $strEntityDataClass::add($arElementFields);
        $obResult->getId();
        return "<div class=\"review-item\">
            <h2> {$_POST['user']} </h2>
            <p>Рейтинг  {$_POST['stars']} </p>
            <p> {$currentTime->format('d.m.Y H:i:s')} </p>
            <p> {$_POST['text']} </p>
            <button>X</button>
        </div>";
    }

    public function configureActions()
    {
        // TODO: Implement configureActions() method.
    }

    public function executeComponent()
    {
        $this->checkRequiredModules();
        $this->arResult['ELEMENT_ID'] = $this->arParams['ELEMENT_ID'];
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
