<?php
/** @var array $arResult */
//echo '<pre style="background: #fff; border: 1px solid #ff0000; width: 100%; color:#000">';
//print_r($arResult['ITEMS'][1]['PROPERTIES']['COUNTDOWN']['VALUE']);
//echo '</pre>';

$countdownDate = $arResult['ITEMS'][1]['PROPERTIES']['COUNTDOWN']['VALUE'];
//$otherDate = new DateTime('2023-05-05 13:00:00');
$finishDate = new DateTime($countdownDate);
$todayDate = new DateTime('now', new DateTimeZone('Europe/Samara'));
//echo '<pre style="background: #fff; border: 1px solid #ff0000; width: 100%; color:#000">';
//print_r($todayDate);
//echo '</pre>';
$diffDate = $finishDate->diff($todayDate);

//echo '<pre style="background: #fff; border: 1px solid #ff0000; width: 100%; color:#000">';
//print_r($diffDate);
//echo '</pre>';
//echo '<pre style="background: #fff; border: 1px solid #ff0000; width: 100%; color:#000">';
//print_r($finishDate->diff($todayDate)->);
//echo '</pre>';
foreach ($arResult['ITEMS'] as $key => $arItem) {
    if ($arItem['PROPERTIES']['COUNTDOWN']['VALUE']) {
        $arResult['ITEMS'][$key]['COUNTDOWN'] = [
            'DAYS' => $diffDate->d,
            'HOURS' => $diffDate->h,
            'MINS' => $diffDate->i,
            'SEC' => $diffDate->s,
        ];

    }
}

