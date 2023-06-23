<?php

namespace Createx;

use Bitrix\Main\Loader;

class Reviews
{
    public static function showStar($starsNum, $detailLink, $reviewLink)
    {
        echo '<div class="star-rating"><a href="' . $detailLink . '" target="_blank">';
        echo '<a href="' . $reviewLink . '" target="_blank" class="star-rating__wrap">';
        for ($i = 1; $i <= 5; $i++) {
            if ($starsNum > 0) {
                echo '<label class="star-rating__ico fa fa-star fa-lg" style="color: #F89828"></label>';
                $starsNum--;
            } else {
                echo '<label class="star-rating__ico fa fa-star-o fa-lg"></label>';
            }
        }
        echo '</a>';
        echo '</div>';
    }

    public static function getAverageStars($arProductId)
    {
        Loader::includeModule('highloadblock');
        $hlReviewTable = HighloadBlockHelper::getHlDataClassByName('ProductReview');
        $sqlQuery = $hlReviewTable::query();
        $sqlQuery->setSelect([
            '*',
        ]);
        $sqlQuery->setFilter([
            'UF_PRODUCT' => $arProductId,
            '!UF_STARS' => false,
        ]);
        $result = $sqlQuery->exec();
        $arReviews = $result->fetchAll();
        $arCountStar = [];
        foreach ($arReviews as $review) {
            $productId = $review['UF_PRODUCT'];
            $productStar = $review['UF_STARS'];
            $arCountStar[$productId][] = $productStar;
        }

        $arStars = [];
        foreach ($arCountStar as $productId => $arItem) {
            $arStars[$productId] = round(array_sum($arItem) / count($arItem));
        }
        return $arStars;
    }
}