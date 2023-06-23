<?php

//require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
//$APPLICATION->SetTitle("Новая страница");
$arBanners = [
    1 => [
        'TITLE' => 'banner1',

    ],
    2 => [
        'TITLE' => 'banner2',

    ]
];
$banner = $arBanners[$_POST['id']];

echo $banner['TITLE'];
echo '<pre style="background: #fff; border: 1px solid #ff0000; width: 100%; color:#000">';
print_r($_POST);
echo '</pre>';
?>

<?php
//require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>