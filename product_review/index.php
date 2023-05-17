<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");


$APPLICATION->IncludeComponent(
    "createx:review.list",
    " ",
    Array(
            'ELEMENT_ID' =>$_REQUEST["ID"],

    )
);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");