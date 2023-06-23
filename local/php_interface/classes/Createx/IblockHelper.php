<?php
namespace Createx;

use Bitrix\Main\Loader;

class IblockHelper
{
    public static function getIblockIdByCode(string $code)
    {
        Loader::includeModule('iblock');
        $arFilter = ['CODE'=>$code];
        $result = \CIBlock::GetList(
            [
                'ID'=>'ASC',
            ],
            $arFilter,
        );
        if ($arIblock = $result->Fetch()){
            return $arIblock['ID'];
        }
        return false;
    }

}