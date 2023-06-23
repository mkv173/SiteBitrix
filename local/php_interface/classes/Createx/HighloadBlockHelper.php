<?php
namespace Createx;
use Bitrix\Highloadblock\HighloadBlockTable;

class HighloadBlockHelper
{
    public static function getHlDataClassByName(string $name)
    {
        $hLBlockQuery = HighloadBlockTable::query();
        $arHLBlock = $hLBlockQuery
            ->setFilter(['NAME'=>$name])
            ->setSelect(['*'])
            ->exec()
            ->fetch();
        $obEntity = HighloadBlockTable::compileEntity($arHLBlock);
        $hlTable = $obEntity->getDataClass();
        return $hlTable;
    }

}
