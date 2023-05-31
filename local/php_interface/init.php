<?php

function getIblockIdByCode(string $code)
{
    CModule::IncludeModule('iblock');

    $arOrder = [];
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
