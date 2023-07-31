<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Loader;
use Createx\HighloadBlockHelper;
use Bitrix\Main\Engine\Contract\Controllerable;

class FavoritesButtonComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        global $USER;
        $this->arResult = $this->getUserlikes($USER->GetID());
        $this->arResult['LIKES'] = count($this->getUserlikes($USER->GetID()));
        $this->includeComponentTemplate();


    }

    public function getUserlikes($userId)
    {
        Loader::includeModule('highloadblock');
        $hlLikeTable = HighloadBlockHelper::getHlDataClassByName('ProductLike');
        $sqlQuery = $hlLikeTable::query();
        $sqlQuery->setSelect([
            'UF_PRODUCT',
            'UF_USER',
            'ID',
        ]);
        return $sqlQuery->setFilter([
            'UF_USER' => $userId,
        ])
            ->exec()
            ->fetchAll();

    }
}