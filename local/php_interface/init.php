<?php

function getIblockIdByCode(string $code)
{
    CModule::IncludeModule('iblock');
    $arFilter = ['CODE'=>$code];
    $result = CIBlock::GetList(
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
function getHlDataClassByName(string $name)
{
    $hLBlockQuery = Bitrix\Highloadblock\HighloadBlockTable::query();
    $arHLBlock = $hLBlockQuery
        ->setFilter(['NAME'=>$name])
        ->setSelect(['*'])
        ->exec()
        ->fetch();
    $obEntity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($arHLBlock);
    $hlTable = $obEntity->getDataClass();
    return $hlTable;
}
