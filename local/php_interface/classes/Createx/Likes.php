<?php

namespace Createx;

use Bitrix\Main\Loader;

class Likes
{

    public static function getAverageLikes($arProductId)
    {
        Loader::includeModule('highloadblock');
        $hlLikeTable = HighloadBlockHelper::getHlDataClassByName('ProductLike');
        $sqlQuery = $hlLikeTable::query();
        $sqlQuery->setSelect([
            'UF_PRODUCT',
            'UF_USER',
            'ID',
        ]);
        global $USER;
        $sqlQuery->setFilter([
            'UF_PRODUCT' => $arProductId,
            'UF_USER' => $USER->GetID(),
        ]);
        $result = $sqlQuery->exec();
        $arLikes = $result->fetchAll();
        $arProductLikes = [];
        foreach ($arLikes as $like) {
            $productId = $like['UF_PRODUCT'];
            $arProductLikes[$productId] = $like['ID'];
        }
        return $arProductLikes;
    }

}